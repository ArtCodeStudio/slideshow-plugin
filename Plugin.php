<?php

namespace JumpLink\Slideshow;

use System\Classes\PluginBase;
use Backend;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'Slideshow',
            'description' => 'Manage Slick carousels with additional content.',
            'author' => 'Moritz Raguschat [JumpLink Network]',
            'icon' => 'icon-picture-o',
            'homepage' => 'http://jumplink.eu'
        ];
    }

    /**
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'jumplink.slideshow.access_slideshow' => [
                'tab'   => 'jumplink.slideshow::lang.permissions.tab',
                'label' => 'jumplink.slideshow::lang.permissions.manage',
            ],
        ];
    }

    public function registerNavigation()
    {
        return [
            'slideshow' => [
                'label' => 'jumplink.slideshow::lang.navigation.label',
                'url' => Backend::url('jumplink/slideshow/slideshows'),
                'icon' => 'icon-picture-o',
                'permissions' => ['jumplink.slideshow.access_slideshow'],
                'order' => 500,
                'sideMenu' => [
                    'slideshows' => [
                        'permissions' => ['jumplink.slideshow.access_slideshow'],
                        'label' => 'jumplink.slideshow::lang.navigation.sideMenu.slideshows',
                        'icon' => 'icon-picture-o',
                        'url' => Backend::url('jumplink/slideshow/slideshows'),
                    ]
                ]
            ]
        ];
    }

    public function registerComponents()
    {
        return [
            'JumpLink\Slideshow\Components\Slideshow' => 'slideshow'
        ];
    }
}
