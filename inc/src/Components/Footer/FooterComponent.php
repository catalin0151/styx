<?php

namespace Styx\Components\Footer;

use Styx\Components\ComponentBase;
use Styx\ComponentsRepository;
use Styx\Defaults;
use Styx\StyledComponents\NavigationStyledComponents;
use Styx\StyledComponents\TitleStyledComponents;

class FooterComponent extends ComponentBase
{

    public static $prefix = 'footer.';
    protected static $rootClass = 'styx-footer';
    protected static $template = 'footer/footer';

    public function getStyledComponents() {
        return new NavigationStyledComponents();
    }

    public function getStyleSettings() {
        $section = $this->getSectionId();
        return [
        ];
    }


    public function getPropsSettings() {
        $section = $this->getSectionId();
        return [
            [
                'settings' => $this->settingPath('content'),
                'type' => 'textarea',
                'label' => __('Content', 'styx'),
                'section' => $section,
                'priority' => 1,
                'default' => Defaults::get($this->settingPath('content')),
            ],
        ];
    }

    public function rightPencil() {
        return true;
    }

    public function renderFooter() {
        echo  esc_html($this->getData('content'));
    }
//    public function getSectionId() {
//        return 'footer';
//    }
    public function getSections() {
        return [
            [
                'id' => $this->getSectionId(),
                'title' => __('Content', 'styx'),
                'panel' => 'footer',
                'priority' => 1,
            ]
        ];
    }
}

