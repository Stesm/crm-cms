<?php
namespace Framework\Modules\MySql;
use Framework\Core\ORM\Mapping;
use PDO;
use PDOException;
use Framework\Modules\DB\Connection;

class MySql{

    private $pdo;
    public $lastId;

    function __construct(){

        try{
            $this->pdo = Connection::MySql();

        } catch (PDOException $e){
            return null;
        }
    }

    function getNestedSet(){
        return new NestedSets($this->pdo);
    }

    function insert($table, $values = array()){

        $i = 0;
        $length = count($values) - 1;
        $keys = ''; $val = '';

        foreach($values as $k => $v){
            if($i < $length){
                $keys = $keys.' '.'`'.$k.'`'.', ';
                $val = $val.' '.'\''.$v.'\',';
            } else {
                $keys = $keys.' '.'`'.$k.'`';
                $val = $val.' '.'\''.$v.'\'';
            }
            $i++;
        }

        $query = "INSERT INTO `$table` ( $keys ) VALUES ( $val )";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        $this->lastId = $this->pdo->lastInsertId();
    }

    function update($table, $fields = array(), $id){
        if(!$this->pdo) return null;

        $i = 0;
        $length = count($fields) - 1;
        $keys = ''; $val = '';

        foreach($fields as $k => $v){
            if($i < $length){
                $keys = $keys.' '.'`'.$k.'`'.' = '.'\''.$v.'\''.', ';
//                $val = $val.' '.'\''.$v.'\',';
            } else {
                $keys = $keys.' '.$k.' = '.'\''.$v.'\'';
            }
            $i++;
        }

        $query = "UPDATE `$table` SET $keys WHERE `id` = $id ";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
    }

    function findBy($tableName, $where = array()){

        if(!$this->pdo) return null;

        if(!is_array($where) || empty($tableName)) return 'Invalid input data format.';

        $isTableExist = "SHOW TABLES LIKE '$tableName'";
        $stmt = $this->pdo->prepare($isTableExist);
        $stmt->execute();
        $exist = $stmt->fetchAll();

        if(!$exist) return "Table '$tableName' does not exist!";

        $and = '';

        foreach($where as $field => $value){

            if(substr_count($field, ':') > 0){
                $expression = explode(':', $field);
                $field = trim($expression[0]);
                $expression = trim($expression[1]);
            } else {
                $expression = ' = ';
            }

            $and = $and.' AND '."`$field`".' '.$expression.' '."'$value'";
        }

        $query = "SELECT * FROM `$tableName` WHERE 1 = 1 $and";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data[] = $row;
        }

        if(empty($data)) return null;

        return $data;
    }

    function findOneBy($tableName, $where = array()){

        if(!$this->pdo) return null;

        if(!is_array($where) || empty($tableName)) return 'Invalid input data format.';

        $isTableExist = "SHOW TABLES LIKE '$tableName'";
        $stmt = $this->pdo->prepare($isTableExist);
        $stmt->execute();
        $exist = $stmt->fetchAll();

        if(!$exist) return "Table '$tableName' does not exist!";

        $and = '';

        foreach($where as $field => $value){

            if(substr_count($field, ':') > 0){
                $expression = explode(':', $field);
                $field = trim($expression[0]);
                $expression = trim($expression[1]);
            } else {
                $expression = ' = ';
            }

            $and = $and.' AND '."`$field`".' '.$expression.' '."'$value'";
        }

        $query = "SELECT * FROM `$tableName` WHERE 1 = 1 $and";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data[] = $row;
        }

        if(empty($data)) return null;

        return $data[0];
    }

    function findLike($table, $criteria = array()){

        if(!$this->pdo) return null;

        if(!is_array($criteria) || empty($table)) return 'null';

        $isTableExist = "SHOW TABLES LIKE '$table'";
        $stmt = $this->pdo->prepare($isTableExist);
        $stmt->execute();
        $exist = $stmt->fetchAll();

        if(!$exist) return "Table '$table' does not exist!";

        $and = '';

        foreach($criteria as $field => $value)
        {
            $and = $and.' AND '."`$field`".' LIKE '."'%$value%'";
        }

        $query = "SELECT * FROM `$table` WHERE 1 = 1 $and";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data[] = $row;
        }

        if(empty($data)) return 'null';

        return $data;
    }

    function findAll($table, $orderBy = 'id'){

        $isTableExist = "SHOW TABLES LIKE '$table'";
        $stmt = $this->pdo->prepare($isTableExist);
        $stmt->execute();
        $exist = $stmt->fetchAll();

        if(!$exist) return "Table '$table' does not exist!";

        $query = "SELECT * FROM `$table` ORDER BY `$orderBy`";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $data[] = $row;
        }

        if(empty($data)) return 'null';

        return $data;
    }

    function save($entity){

        if(!$this->pdo) return null;

        $class = new \ReflectionClass($entity);
        $table = str_replace('Entity', '', Mapping::getTableName($entity));
        $vars = get_object_vars($entity);

        $i = 0;
        $length = count($vars) - 1;
        $keys = ''; $val = '';

        foreach($vars as $k => $v){
            if($i < $length){
                $keys = $keys.' '.$k.', ';
                $val = $val.' '.'\''.$v.'\',';
            } else {
                $keys = $keys.' '.$k;
                $val = $val.' '.'\''.$v.'\'';
            }
            $i++;
        }

        $query = "INSERT INTO `$table` ( $keys ) VALUES ( $val )";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        $this->lastId = $this->pdo->lastInsertId();
    }

    function remove($table, $criteria = array())
    {
        if(!$this->pdo) return null;

        $i = 0;
        $length = count($criteria) - 1;
        $keys = ''; $val = '';

        foreach($criteria as $k => $v){
            if($i < $length){
                $keys = $keys.' '.$k.', ';
                $val = $val.' '.'\''.$v.'\',';
            } else {
                $keys = $keys.' '.$k;
                $val = $val.' '.'\''.$v.'\'';
            }
            $i++;
        }

        $query = "DELETE FROM `$table` WHERE $keys = $val ";

        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
    }

    function call($name, $params = array()){

        if(!$this->pdo) return null;

        if(empty($params)){

            $query = "CALL `$name`()";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute();

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $data[] = $row;
            }
            if(empty($data)) return null;

            return $data;

        } else {

            $query = "CALL `$name`(";

            $i = 1;
            $length = count($params);

            foreach($params as $p){
                if($i < $length){
                    $query = $query.'?,';
                } else {
                    $query = $query.'?)';
                }
            }

            $stmt = $this->pdo->prepare($query);

            foreach($params as $value){
                $stmt->bindParam($i++, $value, PDO::PARAM_STR, 4000);
            }

            $stmt->execute();

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                $data[] = $row;
            }

            if(empty($data)) return 'null';
            return $data;
        }
    }

    function createTable($table, $fields)
    {
        $query = "
            CREATE TABLE IF NOT EXISTS `$table` (
                `id` INT AUTO_INCREMENT,
            ";

        foreach($fields as $field)
        {
            switch ($field['type'])
            {
                case 1 : {
                    $append = '`'.$field['alias'].'`'.' VARCHAR(255) NULL DEFAULT NULL,';
                    $query = $query.$append;
                    break;
                }
                case 2 : {
                    $append = '`'.$field['alias'].'`'.' TEXT(10000) NULL DEFAULT NULL,';
                    $query = $query.$append;
                    break;
                }
                case 9 : {
                    $append = '`'.$field['alias'].'`'.' DATETIME NOT NULL,';
                    $query = $query.$append;
                    break;
                }
                case 10 : {
                    $append = '`'.$field['alias'].'`'.' DATETIME NOT NULL,';
                    $query = $query.$append;
                    break;
                }
                default : {
                    $append = '`'.$field['alias'].'`'.' TEXT(5000) NULL DEFAULT NULL,';
                    $query = $query.$append;
                    break;
                }
            }
        }

        $query = $query.' PRIMARY KEY (`id`));';
        $stmt = $this->pdo->prepare($query);
        return $stmt->execute();
    }
    
    function query($query)
    {
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return true;
    }
}