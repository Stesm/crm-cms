$(document).ready(function()
{
    app.map = {

        "p_1_1" : {

            icon : "fa fa-sitemap",
            url : "/admin/category/",
            color : "cyan",
            actions : {

                category_new : {
                    on : {
                        mouseup : function(e)
                        {
                            app.render("/admin/category/new/" + parseInt($(e.target).attr('id')));
                        }
                    }
                },

                category_save :
                {
                    on : {

                        mouseup : function(e)
                        {
                            let data = {
                                name : $('input[name="name"]').val(),
                                alias : $('input[name="alias"]').val(),
                                image : $('input[name="image"]').val(),
                                description : $('textarea[name="description"]').val()
                            };

                            app.redirectToIndex("/admin/category/save/" + parseInt($(e.target).attr('id')), data)
                        }
                    }
                },

                category_setup : {

                    on : {
                        mouseup : function(e)
                        {
                            app.render("/admin/category/setup/" + parseInt($(e.target).attr('id')))
                        }
                    }
                },

                category_show : {



                },
                category_template : {



                },
                category_remove : {

                    on : {
                        mouseup : function(e)
                        {
                            if(confirm('Удалить?'))
                            {
                                app.redirectToIndex("/admin/category/delete/" + parseInt($(e.target).attr('id')))
                            }
                        }
                    }
                }
            }
        },
        "p_1_2" : {
            icon : "fa fa-file-image",
                url : "/admin/category/empty/",
                color : "",
                actions : {}
        },
        "p_1_3" : {
            icon : "fa fa-envelope",
                url : "/admin/category/",
                color : "",
                screens : {
                0 : {},
                1 : {}
            },
            screen : 0

        },
        "p_1_4" : {
            icon : "fa fa-cubes",
                url : "/admin/category/",
                color : "purple",
                screens : {
                0 : {},
                1 : {},
                2 : {}
            },
            screen : 0
        },
        "p_1_5" : {
            icon : "fa fa-user",
                url : "/admin/category/",
                color : "",
                screens : {
                0 : {},
                1 : {},
                2 : {}
            },
            screen : 0
        },
        "p_2_1" : {
            icon : "fa fa-align-center",
                url : "/admin/category/",
                color : "",
                screens : {
                0 : {},
                1 : {},
                2 : {}
            },
            screen : 0
        },
        "p_2_2" : {
            icon : "fa fa-clone",
                url : "/admin/category/",
                color : "",
                screens : {
                0 : {},
                1 : {},
                2 : {}
            },
            screen : 0
        },
        "p_2_3" : {
            icon : "fa fa-sitemap",
                url : "/admin/category/",
                color : "",
                screens : {
                0 : {},
                1 : {},
                2 : {}
            },
            screen : 0
        },
        "p_2_4" : {
            icon : "fa fa-comment",
                url : "/admin/category/",
                color : "",
                screens : {
                0 : {},
                1 : {},
                2 : {}
            },
            screen : 0
        },
        "p_2_5" : {
            icon : "fa fa-camera-retro",
                url : "/admin/category/",
                color : "blue",
                screens : {
                0 : {},
                1 : {},
                2 : {}
            },
            screen : 0
        },
        "p_3_1" : {
            icon : "fas fa-book",
                url : "/admin/category/",
                color : "",
                screens : {
                0 : {},
                1 : {},
                2 : {}
            },
            screen : 0
        },
        "p_3_2" : {
            icon : "fa fa-gift",
                url : "/admin/category/",
                color : "green",
                screens : {
                0 : {},
                1 : {},
                2 : {}
            },
            screen : 0
        },
        "p_3_3" : {
            icon : "fa fa-calculator",
                url : "/admin/category/",
                color : "",
                screens : {
                0 : {},
                1 : {},
                2 : {}
            },
            screen : 0
        },
        "p_3_4" : {
            icon : "fa fa-shopping-cart",
                url : "/admin/category/",
                color : "orange",
                screens : {
                0 : {},
                1 : {},
                2 : {}
            },
            screen : 0
        },
        "p_3_5" : {
            icon : "ffa fa-upload",
                url : "/admin/category/",
                color : "",
                screens : {
                0 : {},
                1 : {},
                2 : {}
            },
            screen : 0
        },
        "p_4_1" : {
            icon : "fa fa-bug",
                url : "/admin/category/",
                color : "",
                screens : {
                0 : {},
                1 : {},
                2 : {}
            },
            screen : 0
        },
        "p_4_2" : {
            icon : "fa fa-bell",
                url : "/admin/category/",
                color : "",
                screens : {
                0 : {},
                1 : {},
                2 : {}
            },
            screen : 0
        },
        "p_4_3" : {
            icon : "fab fa-apple",
                url : "/admin/category/",
                color : "pink",
                screens : {
                0 : {},
                1 : {},
                2 : {}
            },
            screen : 0
        },
        "p_4_4" : {
            icon : "fa fa-calendar",
                url : "/admin/category/",
                color : "",
                screens : {
                0 : {},
                1 : {},
                2 : {}
            },
            screen : 0
        },
        "p_4_5" : {
            icon : "fas fa-battery-half",
                url : "/admin/category3/",
                color : "",
                screens : {
                0 : {},
                1 : {},
                2 : {}
            },
            screen : 0
        }
    }






});