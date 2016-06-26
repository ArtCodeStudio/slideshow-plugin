<?php

namespace JumpLink\Slideshow\Components;

use Lang;

use Cms\Classes\ComponentBase;

use JumpLink\Slideshow\Models\Slideshow as SlideshowModel;

class Slideshow extends ComponentBase
{
    public $slideshow;

    public function componentDetails()
    {
        return [
            'name'        => 'jumplink.slideshow::lang.components.slideshow.name',
            'description' => 'jumplink.slideshow::lang.components.slideshow.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'slideshow' => [
                'title'         => 'jumplink.slideshow::lang.components.slideshow.properties.id.title',
                'description'   => 'jumplink.slideshow::lang.components.slideshow.properties.id.description',
                'placeholder'   => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.id.placeholder'),
                'type'          => 'dropdown'
            ],
            'numberOfSlide' => [
                'title'             => 'jumplink.slideshow::lang.components.slideshow.properties.number_of_slide.title',
                'description'       => 'jumplink.slideshow::lang.components.slideshow.properties.number_of_slide.description',
                'placeholder'       => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.number_of_slide.placeholder'),
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'default'           => '5',
            ]
        ];
    }

    public function getSlideshowOptions()
    {
        return SlideshowModel::lists('name', 'id');
    }

    public function onRun()
    {
        $slideshowId = (int) $this->property('slideshow');
        $numberOfSlide = (int) $this->property('numberOfSlide');

        $slideshowQueryBuilder = SlideshowModel::where('id', '=', $slideshowId)
            ->with(['slides' => function ($query) use ($numberOfSlide) {
                $query->published();

                if ($numberOfSlide > 0) {
                    $query->take($numberOfSlide);
                }
            }])
        ;

        $this->slideshow = $slideshowQueryBuilder->firstOrFail();

        $this->addCss('assets/vendor/slick-carousel/slick/slick.css');
        $this->addCss('assets/vendor/slick-carousel/slick/slick-theme.css');
        $this->addJs('assets/vendor/jquery/dist/jquery.min.js');
        $this->addJs('assets/vendor/jquery-migrate/jquery-migrate.min.js');
        $this->addJs('assets/vendor/slick-carousel/slick/slick.min.js');
    }
}
