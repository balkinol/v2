<?php
class Navigation {
    private $menuItems;

    function __construct() {

	}

    function renderMenu($navLocation = null) {
        $locations = get_nav_menu_locations();
        $menuWrapper = '';
        if (
            $navLocation != null
            && isset($locations[$navLocation])
        ) {
            $menu = get_term($locations[$navLocation], 'nav_menu');
            $this->menuItems =  wp_get_nav_menu_items($menu->term_id);
            $navigationDom = ''; 
            $navigationDom = $this->renderSubMenu(0);
            $menuWrapper = $navigationDom;
        } else {
            $menuWrapper = '';
        }

        return $menuWrapper;
    }

    function renderSubMenu($parentId) {
        $subMenuDom = '';
        foreach ($this->menuItems as $subMenu) {
            if ($subMenu->menu_item_parent == $parentId) {
                $isPerent = $this->checkIfParentMenu(
                    $this->menuItems, 
                    'menu_item_parent', 
                    $subMenu->ID
                );
                if ($isPerent === true) {
                    $subMenuDom .= $this->renderDomSubMenu(
                        $subMenu->title, 
                        $this->renderSubMenu($subMenu->ID)
                    );
                } else {
                    $subMenuDom .= '<a href="' . $subMenu->url . '" 
                            class="block mt-4 
                            md:inline-block 
                            md:mt-0 
                            text-white
                            hover:text-red-500 mr-4"
                        >'
                        . $subMenu->title 
                        . '</a>';
                }
            }
        }
        return $subMenuDom;
    }

    function checkIfParentMenu($object, $key, $val) {
        foreach ($object as $item) {
            if (isset($item->$key) && $item->$key == $val) {
                return true;
            }
        }        
        return false;
    }

    function renderDomSubMenu($title, $subMenuDom) {
        return '<a href="#!" 
                class="dropdown-toggle" 
                data-toggle="dropdown" 
                role="button" 
                aria-haspopup="true" 
                aria-expanded="false">' 
                . $title 
                . ' <span class="caret"></span>'
            . '</a>'
            . '<ul class="dropdown-menu">' 
                . $subMenuDom 
            . '</ul>';
    }

}
