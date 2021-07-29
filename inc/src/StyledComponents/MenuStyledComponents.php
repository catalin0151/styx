<?php

namespace Styx\StyledComponents;


class MenuStyledComponents extends StyledComponentsBase
{
    const  CONTAINER = 'container';
    const  MENU_ITEM = 'menuItem';
    const MENU_ITEM_ACTIVE = 'menuItemActive';
    const  SUBMENU_CONTAINER = 'submenuContainer';
    const  SUBMENU_ITEM = 'submenuItem';

    public function elements() {
        return [
            [
                'id' => self::CONTAINER,
                'selector' => ''
            ],
            [
                'id' => self::MENU_ITEM,
                'selector' => '> ul > li'
            ],
            [
                'id' => self::MENU_ITEM_ACTIVE,
                'selector' => '> ul li.current-menu-item'
            ],
            [
                'id' => self::SUBMENU_CONTAINER,
                'selector' => ' > ul > li ul'
            ],
            [
                'id' => self::SUBMENU_ITEM,
                'selector' => '> ul > li ul li'
            ]
        ];
    }

}