<?php

    function classexample_register_menus() {
        register_nav_menus(array(
            "main-menu" => "Main Menu",
            "footer-menu" => "Footer Menu",
            "right-menu" => "Right Menu"
        ));
    }

    add_action("init", "classexample_register_menus");


?>