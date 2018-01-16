<div class="template">
    <div class="breadcrumbs">
        <a href="/admin/">Домой</a>
        <span>Поля</span>
    </div>
    <h1 class="page"><?=$data['form']['name']?></span></h1>

    <form action="/admin/form/submit/<?=$data['form']['alias']?>" method="post" enctype="multipart/form-data">
        <div class="actions">
            <a class="btn" href="/admin/form/">Назад</a>
        </div>
        <div class="categories">
            <div class="">
                <?foreach($data['fields'] as $i){?>
                    <div class="form">
                        <?if($i['type'] == 1){?>
                            <label for=""><?=$i['canonical']?></label>
                            <input type="text" name="<?=$i['name']?>">
                        <?}?>
                    </div>

                    <div class="form">
                        <?if($i['type'] == 2){?>
                            <label for=""><?=$i['canonical']?></label>
                            <textarea name="<?=$i['name']?>" id="" cols="30" rows="100"></textarea>
                        <?}?>
                    </div>
                    <?if($i['type'] == 3){?>
                        <label for=""><?=$i['canonical']?></label>
                        <input type="file" name="<?=$i['name']?>">
                    <?}?>
                    <div class="form">
                        <?if($i['type'] == 4){?>
                            <label for=""><?=$i['canonical']?></label>
                            <input type="checkbox" name="<?=$i['name']?>">
                        <?}?>
                    </div>
                    <div class="form">
                        <?if($i['type'] == 5){?>
                            <label for=""><?=$i['canonical']?></label>
                            <input type="radio" name="<?=$i['name']?>">
                        <?}?>
                    </div>
                    <div class="form">
                        <?if($i['type'] == 6){?>
                            <label for=""><?=$i['canonical']?></label>
                            <input type="hidden" name="<?=$i['name']?>">
                        <?}?>
                    </div>
                    <div class="form">
                        <?if($i['type'] == 7){?>
                            <label for=""><?=$i['canonical']?></label>
                            <input type="password" name="<?=$i['name']?>">
                        <?}?>
                    </div>
                    <div class="form">
                        <?if($i['type'] == 8){?>
                            <label for=""><?=$i['canonical']?></label>
                            <select name="<?=$i['name']?>" id="">
                                <?$opt = explode(';', $I['params'])?>
                                <?foreach($opt as $o){?>
                                    <option value="<?=$o?>"><?=$o?></option>
                                <?}?>
                            </select>
                        <?}?>
                    </div>
                    <div class="form">
                        <?if($i['type'] == 9){?>
                            <label for=""><?=$i['canonical']?></label>
                            <input type="date" name="<?=$i['name']?>">
                        <?}?>
                    </div>
                    <div class="form">
                        <?if($i['type'] == 10){?>
                            <label for=""><?=$i['canonical']?></label>
                            <input type="datetime-local" name="<?=$i['name']?>">
                        <?}?>
                    </div>
                <?}?>
                <div class="form">
<!--                    <button class="btn" type="submit">Протестировать</button>-->
                </div>
            </div>
        </div>
    </form>
</div>