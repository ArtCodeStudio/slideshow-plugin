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
            'injectSlickAssets' => [
                'title'             => 'jumplink.slideshow::lang.components.slideshow.properties.injectSlickAssets.title',
                'description'       => 'jumplink.slideshow::lang.components.slideshow.properties.injectSlickAssets.description',
                'type'              => 'checkbox',
                'default'           => 1,
            ],
            'injectSlickTheme' => [
                'title'             => 'jumplink.slideshow::lang.components.slideshow.properties.injectSlickTheme.title',
                'description'       => 'jumplink.slideshow::lang.components.slideshow.properties.injectSlickTheme.description',
                'type'              => 'checkbox',
                'default'           => 1,
            ],
            'injectJLSlideshowCSS' => [
                'title'             => 'jumplink.slideshow::lang.components.slideshow.properties.injectJLSlideshowCSS.title',
                'description'       => 'jumplink.slideshow::lang.components.slideshow.properties.injectJLSlideshowCSS.description',
                'type'              => 'checkbox',
                'default'           => 1,
            ],
            'injectJQuery' => [
                'title'             => 'jumplink.slideshow::lang.components.slideshow.properties.injectJQuery.title',
                'description'       => 'jumplink.slideshow::lang.components.slideshow.properties.injectJQuery.description',
                'type'              => 'checkbox',
                'default'           => 0,
            ],

            'aspectRatio' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.aspectRatio.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.aspectRatio.description',
                'type' => 'dropdown',
                'options' => ['ratio-1-1' => '1:1', 'ratio-2-1' => '2:1', 'ratio-1-2' => '1:2', 'ratio-4-3' => '4:3', 'ratio-16-9' => '16:9', 'ratio-3-4' => '3:4'],
                'default' => 'ratio-1-1',
            ],

            'captionPosition' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.captionPosition.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.captionPosition.description',
                'type' => 'dropdown',
                'options' => ['top left' => 'top left', 'top center' => 'top center', 'top right' => 'top right',
                            'middle left' => 'middle left', 'middle center' => 'middle center', 'middle right' => 'middle right',
                            'bottom left' => 'bottom left', 'bottom center' => 'bottom center', 'bottom right' => 'bottom right'],
                'default' => 'middle center',
            ],

            'autoplayOnShow' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.autoplayOnShow.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.autoplayOnShow.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.autoplayOnShow.placeholder'),
                'type' => 'checkbox',
                'default' => 1,
            ],

            'nextSlideOnEnd' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.nextSlideOnEnd.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.nextSlideOnEnd.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.autoplayOnShow.placeholder'),
                'type' => 'checkbox',
                'default' => 1,
            ],
            
            'accessibility' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.accessibility.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.accessibility.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.accessibility.placeholder'),
                'type' => 'checkbox',
                'default' => 1,
            ],
                       
            'adaptiveHeight' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.adaptiveHeight.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.adaptiveHeight.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.adaptiveHeight.placeholder'),
                'type' => 'checkbox',
                'default' => 0,
            ],

            'autoplay' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.autoplay.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.autoplay.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.autoplay.placeholder'),
                'type' => 'checkbox',
                'default' => 0,
            ],

            'autoplaySpeed' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.autoplaySpeed.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.autoplaySpeed.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.autoplaySpeed.placeholder'),
                'type' => 'string', // milliseconds
                'validationPattern' => '^[0-9]+$',
                'default' => '' // '3000',
            ],

            'arrows' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.arrows.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.arrows.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.arrows.placeholder'),
                'type' => 'checkbox',
                'default' => 1,
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
                'default' => '' // '<button type="button" class="slick-prev">Previous</button>',
            ],
                                   
            'nextArrow' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.nextArrow.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.nextArrow.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.nextArrow.placeholder'),
                'type' => 'string', // (html|jQuery selector) | object (DOM node|jQuery object)',
                'default' => '' // '<button type="button" class="slick-next">Next</button>',
            ],

            'centerMode' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.centerMode.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.centerMode.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.centerMode.placeholder'),
                'type' => 'checkbox',
                'default' => 0,
            ],

            'centerPadding' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.centerPadding.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.centerPadding.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.centerPadding.placeholder'),
                'type' => 'string',
                'default' => '', // '50px',
            ],

            'cssEase' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.cssEase.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.cssEase.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.cssEase.placeholder'),
                'type' => 'string',
                'default' => '', // 'ease',
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
                'default' => 0,
            ],
                       
            'dotsClass' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.dotsClass.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.dotsClass.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.dotsClass.placeholder'),
                'type' => 'string',
                'default' => '', // 'slick-dots',
            ],

            'draggable' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.draggable.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.draggable.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.draggable.placeholder'),
                'type' => 'checkbox',
                'default' => 1,
            ],

            'fade' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.fade.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.fade.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.fade.placeholder'),
                'type' => 'checkbox',
                'default' => 0,
            ],
                                    
            'focusOnSelect' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.focusOnSelect.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.focusOnSelect.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.focusOnSelect.placeholder'),
                'type' => 'checkbox',
                'default' => 0,
            ],

            'easing' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.easing.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.easing.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.easing.placeholder'),
                'type' => 'string',
                'default' => '', // 'linear',
            ],
                       
            'edgeFriction' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.edgeFriction.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.edgeFriction.description',
                'placeholder' => '0.15', // Lang::get('jumplink.slideshow::lang.components.slideshow.properties.edgeFriction.placeholder'),
                'type' => 'string',
                'validationPattern' => '^[0-9]+\.[0-9]+$',
                'default' => '' // '0.15',
            ],

            'infinite' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.infinite.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.infinite.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.infinite.placeholder'),
                'type' => 'checkbox',
                'default' => 1,
            ],
                       
            'initialSlide' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.initialSlide.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.initialSlide.description',
                'placeholder' => '0', Lang::get('jumplink.slideshow::lang.components.slideshow.properties.initialSlide.placeholder'),
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
                'default' => '', // '0',
            ],

            'lazyLoad' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.lazyLoad.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.lazyLoad.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.lazyLoad.placeholder'),
                'type' => 'string',
                'default' => '', //'ondemand',
            ],
            'mobileFirst' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.mobileFirst.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.mobileFirst.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.mobileFirst.placeholder'),
                'type' => 'checkbox',
                'default' => 0,
            ],
                       
            'pauseOnFocus' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.pauseOnFocus.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.pauseOnFocus.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.pauseOnFocus.placeholder'),
                'type' => 'checkbox',
                'default' => 1,
            ],

            'pauseOnHover' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.pauseOnHover.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.pauseOnHover.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.pauseOnHover.placeholder'),
                'type' => 'checkbox',
                'default' => 1,
            ],

            'pauseOnDotsHover' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.pauseOnDotsHover.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.pauseOnDotsHover.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.pauseOnDotsHover.placeholder'),
                'type' => 'checkbox',
                'default' => 0,
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
                'placeholder' => '1', // Lang::get('jumplink.slideshow::lang.components.slideshow.properties.rows.placeholder'),
                'type' => 'string',
                'validationPattern' => '^[0-9]+$',
                'default' => '' // '1',
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
                'default' => '', // '1',
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
                'default' => '', // '1',
            ],

            'speed' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.speed.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.speed.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.speed.placeholder'),
                'type' => 'string', // int(ms)',
                'validationPattern' => '^[0-9]+$',
                'default' => '', // '300',
            ],

            'swipe' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.swipe.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.swipe.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.swipe.placeholder'),
                'type' => 'checkbox',
                'default' => 1,
            ],
                       
            'swipeToSlide' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.swipeToSlide.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.swipeToSlide.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.swipeToSlide.placeholder'),
                'type' => 'checkbox',
                'default' => 0,
            ],

            'touchMove' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.touchMove.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.touchMove.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.touchMove.placeholder'),
                'type' => 'checkbox',
                'default' => 1,
            ],

            'touchThreshold' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.touchThreshold.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.touchThreshold.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.touchThreshold.placeholder'),
                'type' => 'string', // int
                'validationPattern' => '^[0-9]+$',
                'default' => '' // '5',
            ],

            'useCSS' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.useCSS.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.useCSS.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.useCSS.placeholder'),
                'type' => 'checkbox',
                'default' => 1,
            ],
                       
            'useTransform' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.useTransform.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.useTransform.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.useTransform.placeholder'),
                'type' => 'checkbox',
                'default' => 1,
            ],
                       
            'variableWidth' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.variableWidth.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.variableWidth.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.variableWidth.placeholder'),
                'type' => 'checkbox',
                'default' => 0,
            ],

            'vertical' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.vertical.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.vertical.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.vertical.placeholder'),
                'type' => 'checkbox',
                'default' => 0,
            ],
                       
            'verticalSwiping' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.verticalSwiping.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.verticalSwiping.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.verticalSwiping.placeholder'),
                'type' => 'checkbox',
                'default' => 0,
            ],

            'rtl' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.rtl.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.rtl.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.rtl.placeholder'),
                'type' => 'checkbox',
                'default' => 0,
            ],
                       
            'waitForAnimate' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.waitForAnimate.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.waitForAnimate.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.waitForAnimate.placeholder'),
                'type' => 'checkbox',
                'default' => 1,
            ],
                       
            'zIndex' => [
                'title' => 'jumplink.slideshow::lang.components.slideshow.properties.zIndex.title',
                'description' => 'jumplink.slideshow::lang.components.slideshow.properties.zIndex.description',
                'placeholder' => Lang::get('jumplink.slideshow::lang.components.slideshow.properties.zIndex.placeholder'),
                'type' => 'string', // number
                'validationPattern' => '^[0-9]+$',
                'default' => '' // '1000',
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

        $slideshowQueryBuilder = SlideshowModel::where('id', '=', $slideshowId)
                ->with(['slides' => function ($query) {
                    $query->published();
            }])
        ;

        $this->slideshow = $slideshowQueryBuilder->firstOrFail();

        if ($this->property('injectSlickAssets'))
        {
            $this->addCss('assets/vendor/slick-carousel/slick/slick.css');
            $this->addJs('assets/vendor/slick-carousel/slick/slick.min.js');
        }

        if ($this->property('injectSlickTheme'))
        {
            $this->addCss('assets/vendor/slick-carousel/slick/slick-theme.css');            
        }

        if ($this->property('injectJQuery'))
        {
            $this->addJs('assets/vendor/jquery/dist/jquery.min.js');
            $this->addJs('assets/vendor/jquery-migrate/jquery-migrate.min.js');
        }

        if ($this->property('injectJLSlideshowCSS'))
        {
            $this->addCss('assets/css/slideshow.css');         

        }
    }
}
