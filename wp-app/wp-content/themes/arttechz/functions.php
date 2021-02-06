<?php
require "container/Navigation.php";
if (function_exists('register_nav_menus')) { 
    register_nav_menus(array('primary'=>'Header Navigation'));
}

function renderMenu($location) {
    $nav = new Navigation();
    echo $nav->renderMenu($location);
}
