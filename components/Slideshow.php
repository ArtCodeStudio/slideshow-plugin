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
            ],
            'injectCSS' => [
                'title'             => 'jumplink.slideshow::lang.components.slideshow.properties.inject_css.title',
                'description'       => 'jumplink.slideshow::lang.components.slideshow.properties.inject_css.description',
                'placeholder'       => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.inject_css.placeholder'),
                'type'              => 'checkbox',
                'default'           => true,
            ],

            'captionPosition' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.captionPosition.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.captionPosition.description',
                'type' => 'dropdown',
                'options' => ['top left', 'top center', 'top right',
                            'middle left', 'middle center', 'middle right',
                            'bottom left', 'bottom center', 'bottom right'],
                'default' => 'middle center',
            ],

            'autoplayVideos' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.autoplayVideos.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.autoplayVideos.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.autoplayVideos.placeholder'),
                'type' => 'checkbox',
                'default' => true,
            ],
            
            'accessibility' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.accessibility.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.accessibility.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.accessibility.placeholder'),
                'type' => 'checkbox',
                'default' => true,
            ],
                       
            'adaptiveHeight' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.adaptiveHeight.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.adaptiveHeight.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.adaptiveHeight.placeholder'),
                'type' => 'checkbox',
                'default' => false,
            ],

            'autoplay' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.autoplay.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.autoplay.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.autoplay.placeholder'),
                'type' => 'checkbox',
                'default' => false,
            ],

            'autoplaySpeed' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.autoplaySpeed.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.autoplaySpeed.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.autoplaySpeed.placeholder'),
                'type' => 'string', // milliseconds
                'validationPattern' => '^[0-9]+$',
                'default' => '3000',
            ],

            'arrows' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.arrows.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.arrows.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.arrows.placeholder'),
                'type' => 'checkbox',
                'default' => true,
            ],
                                    
            'asNavFor' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.asNavFor.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.asNavFor.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.asNavFor.placeholder'),
                'type' => 'string',
                'default' => '',
            ],

            'appendArrows' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.appendArrows.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.appendArrows.description',
                'placeholder' => '$(element)',
                'type' => 'string',
                'default' => '',
            ],
                       
            'appendDots' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.appendDots.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.appendDots.description',
                'placeholder' => '$(element)',
                'type' => 'string',
                'default' => '',
            ],
                                   
            'prevArrow' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.prevArrow.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.prevArrow.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.prevArrow.placeholder'),
                'type' => 'string', // (html|jQuery selector) | object (DOM node|jQuery object)',
                'default' => '<button type="button" class="slick-prev">Previous</button>;',
            ],
                                   
            'nextArrow' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.nextArrow.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.nextArrow.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.nextArrow.placeholder'),
                'type' => 'string', // (html|jQuery selector) | object (DOM node|jQuery object)',
                'default' => '<button type="button" class="slick-next">Next</button>;',
            ],

            'centerMode' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.centerMode.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.centerMode.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.centerMode.placeholder'),
                'type' => 'checkbox',
                'default' => false,
            ],

            'centerPadding' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.centerPadding.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.centerPadding.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.centerPadding.placeholder'),
                'type' => 'string',
                'default' => '50px',
            ],

            'cssEase' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.cssEase.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.cssEase.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.cssEase.placeholder'),
                'type' => 'string',
                'default' => 'ease',
            ],

            'customPaging' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.customPaging.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.customPaging.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.customPaging.placeholder'),
                'type' => 'string', // function
                'default' => '',
            ],

            'dots' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.dots.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.dots.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.dots.placeholder'),
                'type' => 'checkbox',
                'default' => false,
            ],
                       
            'dotsClass' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.dotsClass.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.dotsClass.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.dotsClass.placeholder'),
                'type' => 'string',
                'default' => 'slick-dots',
            ],

            'draggable' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.draggable.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.draggable.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.draggable.placeholder'),
                'type' => 'checkbox',
                'default' => true,
            ],

            'fade' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.fade.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.fade.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.fade.placeholder'),
                'type' => 'checkbox',
                'default' => false,
            ],
                                    
            'focusOnSelect' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.focusOnSelect.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.focusOnSelect.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.focusOnSelect.placeholder'),
                'type' => 'checkbox',
                'default' => false,
            ],

            'easing' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.easing.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.easing.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.easing.placeholder'),
                'type' => 'string',
                'default' => 'linear',
            ],
                       
            'edgeFriction' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.edgeFriction.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.edgeFriction.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.edgeFriction.placeholder'),
                'type' => 'string',
                'validationPattern' => '^[0-9]+\.[0-9]+$',
                'default' => '0.15',
            ],

            'infinite' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.infinite.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.infinite.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.infinite.placeholder'),
                'type' => 'checkbox',
                'default' => true,
            ],
                       
            'initialSlide' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.initialSlide.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.initialSlide.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.initialSlide.placeholder'),
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
                'default' => '0',
            ],

            'lazyLoad' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.lazyLoad.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.lazyLoad.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.lazyLoad.placeholder'),
                'type' => 'string',
                'default' => 'ondemand',
            ],
            'mobileFirst' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.mobileFirst.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.mobileFirst.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.mobileFirst.placeholder'),
                'type' => 'checkbox',
                'default' => false,
            ],
                       
            'pauseOnFocus' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.pauseOnFocus.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.pauseOnFocus.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.pauseOnFocus.placeholder'),
                'type' => 'checkbox',
                'default' => true,
            ],

            'pauseOnHover' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.pauseOnHover.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.pauseOnHover.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.pauseOnHover.placeholder'),
                'type' => 'checkbox',
                'default' => true,
            ],

            'pauseOnDotsHover' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.pauseOnDotsHover.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.pauseOnDotsHover.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.pauseOnDotsHover.placeholder'),
                'type' => 'checkbox',
                'default' => false,
            ],
                       
            'respondTo' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.respondTo.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.respondTo.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.respondTo.placeholder'),
                'type' => 'dropdown',
                'options' => ['window' => 'window', 'slider' => 'slider', 'min' => 'min'],
                'default' => 'window',
            ],

            'responsive' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.responsive.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.responsive.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.responsive.placeholder'),
                'type' => 'string', // object
                'default' => '',
            ],
                       
            'rows' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.rows.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.rows.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.rows.placeholder'),
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
                'default' => '1',
            ],

            'slide' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.slide.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.slide.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.slide.placeholder'),
                'type' => 'string', // element
                'default' => '',
            ],
                       
            'slidesPerRow' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.slidesPerRow.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.slidesPerRow.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.slidesPerRow.placeholder'),
                'type' => 'string', // int
                'validationPattern' => '^[0-9]+$',
                'default' => '1',
            ],

            'slidesToShow' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.slidesToShow.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.slidesToShow.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.slidesToShow.placeholder'),
                'type' => 'string', // int
                'validationPattern' => '^[0-9]+$',
                'default' => '1',
            ],

            'slidesToScroll' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.slidesToScroll.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.slidesToScroll.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.slidesToScroll.placeholder'),
                'type' => 'string', // int
                'validationPattern' => '^[0-9]+$',
                'default' => '1',
            ],

            'speed' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.speed.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.speed.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.speed.placeholder'),
                'type' => 'string', // int(ms)',
                'validationPattern' => '^[0-9]+$',
                'default' => '300',
            ],

            'swipe' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.swipe.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.swipe.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.swipe.placeholder'),
                'type' => 'checkbox',
                'default' => true,
            ],
                       
            'swipeToSlide' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.swipeToSlide.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.swipeToSlide.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.swipeToSlide.placeholder'),
                'type' => 'checkbox',
                'default' => false,
            ],

            'touchMove' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.touchMove.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.touchMove.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.touchMove.placeholder'),
                'type' => 'checkbox',
                'default' => true,
            ],

            'touchThreshold' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.touchThreshold.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.touchThreshold.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.touchThreshold.placeholder'),
                'type' => 'string', // int
                'validationPattern' => '^[0-9]+$',
                'default' => '5',
            ],

            'useCSS' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.useCSS.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.useCSS.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.useCSS.placeholder'),
                'type' => 'checkbox',
                'default' => true,
            ],
                       
            'useTransform' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.useTransform.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.useTransform.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.useTransform.placeholder'),
                'type' => 'checkbox',
                'default' => true,
            ],
                       
            'variableWidth' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.variableWidth.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.variableWidth.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.variableWidth.placeholder'),
                'type' => 'checkbox',
                'default' => false,
            ],

            'vertical' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.vertical.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.vertical.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.vertical.placeholder'),
                'type' => 'checkbox',
                'default' => false,
            ],
                       
            'verticalSwiping' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.verticalSwiping.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.verticalSwiping.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.verticalSwiping.placeholder'),
                'type' => 'checkbox',
                'default' => false,
            ],

            'rtl' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.rtl.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.rtl.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.rtl.placeholder'),
                'type' => 'checkbox',
                'default' => false,
            ],
                       
            'waitForAnimate' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.waitForAnimate.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.waitForAnimate.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.waitForAnimate.placeholder'),
                'type' => 'checkbox',
                'default' => true,
            ],
                       
            'zIndex' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.zIndex.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.zIndex.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.zIndex.placeholder'),
                'type' => 'string', // number
                'validationPattern' => '^[0-9]+$',
                'default' => '1000',
            ],

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

        $injectCSS = (boolean) $this->property('injectCSS');
        if ($injectCSS)
        {
            $this->addCss('assets/vendor/slick-carousel/slick/slick.css');
            $this->addCss('assets/vendor/slick-carousel/slick/slick-theme.css');
            $this->addCss('assets/css/backgroundbox.css');
        }

        $this->addJs('assets/vendor/jquery/dist/jquery.min.js');
        $this->addJs('assets/vendor/jquery-migrate/jquery-migrate.min.js');
        $this->addJs('assets/vendor/slick-carousel/slick/slick.min.js');
    }
}
