<?php

namespace Styx\Components\FrontHeader;

use Styx\Components\ComponentBase;
use Styx\ComponentsRepository;
use Styx\Defaults;
use Styx\StyledComponents\MenuStyledComponents;

class MenuComponent extends ComponentBase
{

    public static $prefix = 'front-header.menu.';
    protected static $rootClass = 'menu-test-container';
    protected static $template = 'header/menu';

    public function getStyledComponents() {
        return new MenuStyledComponents();
    }

    public function getStyleSettings() {
        $section = $this->getSectionId();
        return [
            [
                'settings' => $this->settingPath('separator' . $this->separatorIndex++),
                'type' => 'title',
                'label' => __('Menu Style', 'styx'),
                'section' => $section,
                'priority' => 1
            ],

            [
                'settings' => $this->settingPath('menuItem.color'),
                'path' => 'color',
                'styledComponent' => MenuStyledComponents::MENU_ITEM,
                'type' => 'color',
                'label' => __('Color', 'styx'),
                'section' => $section,
                //   'active_callback' => $this->getActiveCallback(),
                'default' => Defaults::get($this->settingPath('menuItem.color')),
                'priority' => 2
            ],
            [
                'settings' => $this->settingPath('menuItem.states.hover.color'),
                'path' => 'color',
                'state' => 'hover',
                'styledComponent' => MenuStyledComponents::MENU_ITEM,
                'type' => 'color',
                'label' => __('Hover Color', 'styx'),
                'section' => $section,
                //   'active_callback' => $this->getActiveCallback(),
                'default' => Defaults::get($this->settingPath('menuItem.states.hover.color')),
                'priority' => 3
            ],
            [
                'settings' => $this->settingPath('menuItemActive.color'),
                'path' => 'color',
                'styledComponent' => MenuStyledComponents::MENU_ITEM_ACTIVE,
                'type' => 'color',
                'label' => __('Active Color', 'styx'),
                'section' => $section,
                //   'active_callback' => $this->getActiveCallback(),
                'default' => Defaults::get($this->settingPath('menuItemActive.color')),
                'priority' => 4
            ],
            [
                'settings' => $this->settingPath('separator' . $this->separatorIndex++),
                'type' => 'title',
                'label' => __('Submenu Style', 'styx'),
                'section' => $section,
                'priority' => 5
            ],
            [
                'settings' => $this->settingPath('submenuItem.color'),
                'path' => 'color',
                'styledComponent' => MenuStyledComponents::SUBMENU_ITEM,
                'type' => 'color',
                'label' => __('Submenu Color', 'styx'),
                'section' => $section,
                //   'active_callback' => $this->getActiveCallback(),
                'default' => Defaults::get($this->settingPath('submenuItem.color')),
                'priority' => 6
            ],
            [
                'settings' => $this->settingPath('submenuItem.states.hover.color'),
                'path' => 'color',
                'state' => 'hover',
                'styledComponent' => MenuStyledComponents::SUBMENU_ITEM,
                'type' => 'color',
                'label' => __('Hover Color', 'styx'),
                'section' => $section,
                //   'active_callback' => $this->getActiveCallback(),
                'default' => Defaults::get($this->settingPath('submenuItem.states.hover.color')),
                'priority' => 7
            ],
            [
                'settings' => $this->settingPath('submenuContainer.background.color'),
                'path' => 'background.color',
                'styledComponent' => MenuStyledComponents::SUBMENU_CONTAINER,
                'type' => 'color',
                'label' => __('Submenu Container Color', 'styx'),
                'section' => $section,
                //   'active_callback' => $this->getActiveCallback(),
                'default' => Defaults::get($this->settingPath('submenuContainer.background.color')),
                'priority' => 7
            ],
        ];
    }


    public function getPropsSettings() {
        $section = $this->getSectionId();
        return [


        ];
    }

    public function getSections() {
        return [
            [
                'id' => $this->getSectionId(),
                'title' => __('Menu', 'styx'),
                'panel' => 'navigation',
                'priority' => 1,
            ]
        ];
    }
}
