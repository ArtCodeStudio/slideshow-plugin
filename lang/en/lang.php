<?php return [
    'plugin' => [
        'name' => 'Slideshow',
        'description' => 'A plugin to create and display Slick carousels with additional content.',
    ],
    'navigation' => [
        'label' => 'Slideshow',
        'sideMenu' => [
            'slideshows' => 'Slideshows',
            'slides' => 'Slides',
        ],
    ],
    'permissions' => [
        'tab' => 'Slideshow',
        'manage' => 'Manage slideshows',
    ],
    'components' => [
        'slideshow' => [
            'name' => 'Slideshow',
            'description' => 'Display a slideshow.',
            'properties' => [
                'id' => [
                    'title' => 'Slideshow',
                    'description' => 'This value can be changed depending on the identifier used in the URL of this page. See the plugin\'s manual for more information.',
                    'placeholder' => 'Select slideshow',
                ],
                
                'includeHTML' => [
                    'title' => 'includeHTML',
                    'description' => 'Include HTML part',
                    'placeholder' => 'true',
                ],

                'includeJavaScript' => [
                    'title' => 'includeJavaScript',
                    'description' => 'Include JavaScript part',
                    'placeholder' => 'true',
                ],

                'number_of_slide' => [
                    'title' => 'Slides limit',
                    'description' => 'Maximal number of slides to display',
                    'placeholder' => '5',
                ],


                'injectSlickAssets' => [
                    'title' => 'injectSlickAssets',
                    'description' => 'Injects the slick CSS and JavaScript into the page. This should be only done once per page. So only check it once in case of multiple slideshows, and also uncheck it if you want to include these in the page or layout by yourself.',
                    'placeholder' => 'true',
                ],

                'injectSlickTheme' => [
                    'title' => 'injectSlickTheme',
                    'description' => 'Injects the optional slick theme CSS into the page, for slick\'s standard slideshow styling. This should be only done once per page. So only check it once in case of multiple slideshows, and also uncheck it if you want to include these in the page or layout by yourself.',
                    'placeholder' => 'false',
                ],

                'injectJQuery' => [
                    'title' => 'injectJQuery',
                    'description' => 'Injects JQuery and JQuery Migrate vendor scripts into the page. In most cases it is probably the better practice to include these in your page or layout by yourself.',
                    'placeholder' => 'false',
                ],

                'injectJLSlideshowCSS' => [
                    'title' => 'injectJLSlideshowCSS',
                    'description' => 'Injects injectJLSlideshowCSS',
                    'placeholder' => 'true',
                ],


                'aspectRatio' => [
                    'title' => 'Aspect Ratio',
                    'description' => 'choose aspect ratio for the slides'
                ],

                'customRatio' => [
                    'title' => 'Custom Ratio',
                    'description' => 'enter a custom aspect ratio (if selected "custom" in aspectRatio option)'
                ],

                'captionPosition' => [
                    'title' => 'captionPosition',
                    'description' => 'specify css classes for caption positioning: top, middle, bottom | left, center, right',
                ],

                'showCaptions' => [
                    'title' => 'showCaptions',
                    'description' => 'show captions or not',
                ],

                'autoplayOnShow' => [
                    'title' => 'autoplayOnShow',
                    'description' => 'autoplay embedded videos on slide activation',
                ],

                'nextSlideOnEnd' => [
                    'title' => 'nextSlideOnEnd',
                    'description' => 'move to the next slide when video ends',
                ],

                'accessibility' => [
                    'title' => 'accessibility',
                    'description' => 'Enables tabbing and arrow key navigation',
                    'placeholder' => 'true',
                ],
                           
                'adaptiveHeight' => [
                    'title' => 'adaptiveHeight',
                    'description' => 'Enables adaptive height for single slide horizontal carousels.',
                    'placeholder' => 'false',
                ],

                'autoplay' => [
                    'title' => 'autoplay',
                    'description' => 'Enables Autoplay',
                    'placeholder' => 'false',
                ],

                'autoplaySpeed' => [
                    'title' => 'autoplaySpeed',
                    'description' => 'Autoplay Speed in milliseconds',
                    'placeholder' => '3000',
                ],

                'arrows' => [
                    'title' => 'arrows',
                    'description' => 'Prev/Next Arrows',
                    'placeholder' => 'true',
                ],
                                        
                'asNavFor' => [
                    'title' => 'asNavFor',
                    'description' => 'Set the slider to be the navigation of other slider (Class or ID Name)',
                    'placeholder' => 'null',
                ],

                'appendArrows' => [
                    'title' => 'appendArrows',
                    'description' => 'Change where the navigation arrows are attached (Selector, htmlString, Array, Element, jQuery object)',
                    'placeholder' => '$(element)',
                ],
                           
                'appendDots' => [
                    'title' => 'appendDots',
                    'description' => 'Change where the navigation dots are attached (Selector, htmlString, Array, Element, jQuery object)',
                    'placeholder' => '$(element)',
                ],
                                       
                'prevArrow' => [
                    'title' => 'prevArrow',
                    'description' => 'Allows you to select a node or customize the HTML for the "Previous" arrow.',
                    'placeholder' => '<button type="button" class="slick-prev">Previous</button>',
                ],
                                       
                'nextArrow' => [
                    'title' => 'nextArrow',
                    'description' => 'Allows you to select a node or customize the HTML for the "Next" arrow.',
                    'placeholder' => '<button type="button" class="slick-next">Next</button>',
                ],

                'centerMode' => [
                    'title' => 'centerMode',
                    'description' => 'Enables centered view with partial prev/next slides. Use with odd numbered slidesToShow counts.',
                    'placeholder' => 'false',
                ],

                'centerPadding' => [
                    'title' => 'centerPadding',
                    'description' => 'Side padding when in center mode (px or %)',
                    'placeholder' => '50px',
                ],

                'cssEase' => [
                    'title' => 'cssEase',
                    'description' => 'CSS3 Animation Easing',
                    'placeholder' => 'ease',
                ],

                'customPaging' => [
                    'title' => 'customPaging',
                    'description' => 'Custom paging templates. See source for use example.',
                    'placeholder' => 'n/a',
                ],

                'dots' => [
                    'title' => 'dots',
                    'description' => 'Show dot indicators',
                    'placeholder' => 'false',
                ],
                           
                'dotsClass' => [
                    'title' => 'dotsClass',
                    'description' => 'Class for slide indicator dots container',
                    'placeholder' => 'slick-dots',
                ],

                'draggable' => [
                    'title' => 'draggable',
                    'description' => 'Enable mouse dragging',
                    'placeholder' => 'true',
                ],

                'fade' => [
                    'title' => 'fade',
                    'description' => 'Enable fade',
                    'placeholder' => 'false',
                ],
                                        
                'focusOnSelect' => [
                    'title' => 'focusOnSelect',
                    'description' => 'Enable focus on selected element (click) (default: false)',
                    'placeholder' => 'false',
                ],

                'easing' => [
                    'title' => 'easing',
                    'description' => 'Add easing for jQuery animate. Use with easing libraries or default easing methods (default: \'linear\')',
                    'placeholder' => 'linear',
                ],
                           
                'edgeFriction' => [
                    'title' => 'edgeFriction',
                    'description' => 'Resistance when swiping edges of non-infinite carousels (default: 0.15)',
                    'placeholder' => '0.15',
                ],

                'infinite' => [
                    'title' => 'infinite',
                    'description' => 'Infinite loop sliding',
                    'placeholder' => 'true',
                ],
                           
                'initialSlide' => [
                    'title' => 'initialSlide',
                    'description' => 'Slide to start on',
                    'placeholder' => '0',
                ],

                'lazyLoad' => [
                    'title' => 'lazyLoad',
                    'description' => 'Set lazy loading technique. Accepts \'ondemand\' or \'progressive\'',
                    'placeholder' => 'ondemand',
                ],
                'mobileFirst' => [
                    'title' => 'mobileFirst',
                    'description' => 'Responsive settings use mobile first calculation',
                    'placeholder' => 'false',
                ],
                           
                'pauseOnFocus' => [
                    'title' => 'pauseOnFocus',
                    'description' => 'Pause Autoplay On Focus',
                    'placeholder' => 'true',
                ],

                'pauseOnHover' => [
                    'title' => 'pauseOnHover',
                    'description' => 'Pause Autoplay On Hover',
                    'placeholder' => 'true',
                ],

                'pauseOnDotsHover' => [
                    'title' => 'pauseOnDotsHover',
                    'description' => 'Pause Autoplay when a dot is hovered',
                    'placeholder' => 'false',
                ],
                           
                'respondTo' => [
                    'title' => 'respondTo',
                    'description' => 'Width that responsive object responds to. Can be \'window\', \'slider\' or \'min\' (the smaller of the two)',
                    'placeholder' => 'window',
                ],

                'responsive' => [
                    'title' => 'responsive',
                    'description' => 'Object containing breakpoints and settings objects (see demo). Enables settings sets at given screen width. Set settings to "unslick" instead of an object to disable slick at a given breakpoint.',
                    'placeholder' => 'none',
                ],
                           
                'rows' => [
                    'title' => 'rows',
                    'description' => 'Setting this to more than 1 initializes grid mode. Use slidesPerRow to set how many slides should be in each row.',
                    'placeholder' => '1',
                ],

                'slide' => [
                    'title' => 'slide',
                    'description' => 'Element query to use as slide',
                    'placeholder' => '',
                ],
                           
                'slidesPerRow' => [
                    'title' => 'slidesPerRow',
                    'description' => 'With grid mode intialized via the rows option, this sets how many slides are in each grid row. dver',
                    'placeholder' => '1',
                ],

                'slidesToShow' => [
                    'title' => 'slidesToShow',
                    'description' => '# of slides to show',
                    'placeholder' => '1',
                ],

                'slidesToScroll' => [
                    'title' => 'slidesToScroll',
                    'description' => '# of slides to scroll',
                    'placeholder' => '1',
                ],

                'speed' => [
                    'title' => 'speed',
                    'description' => 'Slide/Fade animation speed',
                    'placeholder' => '300',
                ],

                'swipe' => [
                    'title' => 'swipe',
                    'description' => 'Enable swiping',
                    'placeholder' => 'true',
                ],
                           
                'swipeToSlide' => [
                    'title' => 'swipeToSlide',
                    'description' => 'Allow users to drag or swipe directly to a slide irrespective of slidesToScroll',
                    'placeholder' => 'false',
                ],

                'touchMove' => [
                    'title' => 'touchMove',
                    'description' => 'Enable slide motion with touch',
                    'placeholder' => 'true',
                ],

                'touchThreshold' => [
                    'title' => 'touchThreshold',
                    'description' => 'To advance slides, the user must swipe a length of (1/touchThreshold) * the width of the slider',
                    'placeholder' => '5',
                ],

                'useCSS' => [
                    'title' => 'useCSS',
                    'description' => 'Enable/Disable CSS Transitions',
                    'placeholder' => 'true',
                ],
                           
                'useTransform' => [
                    'title' => 'useTransform',
                    'description' => 'Enable/Disable CSS Transforms',
                    'placeholder' => 'true',
                ],
                           
                'variableWidth' => [
                    'title' => 'variableWidth',
                    'description' => 'Variable width slides',
                    'placeholder' => 'false',
                ],

                'vertical' => [
                    'title' => 'vertical',
                    'description' => 'Vertical slide mode',
                    'placeholder' => 'false',
                ],
                           
                'verticalSwiping' => [
                    'title' => 'verticalSwiping',
                    'description' => 'Vertical swipe mode',
                    'placeholder' => 'false',
                ],

                'rtl' => [
                    'title' => 'rtl',
                    'description' => 'Change the slider\'s direction to become right-to-left',
                    'placeholder' => 'false',
                ],
                           
                'waitForAnimate' => [
                    'title' => 'waitForAnimate',
                    'description' => 'Ignores requests to advance the slide while animating',
                    'placeholder' => 'true',
                ],
                           
                'zIndex' => [
                    'title' => 'zIndex',
                    'description' => 'Set the zIndex values for slides, useful for IE9 and lower',
                    'placeholder' => '1000',
                ],

            ],
        ],
    ],
    'controller' => [
        'view' => [
            'slideshows' => [
                'new' => 'New Slideshow',
                'breadcrumb_label' => 'Slideshows',
                'return' => 'Return to slideshows list',
                'creating' => 'Creating Slideshow...',
                'delete_confirmation' => 'Do you really want to delete this slideshow?',
            ],
        ],
        'list' => [
            'slideshows' => 'Manage Slideshows',
        ],
        'form' => [
            'slideshows' => [
                'title' => 'Slideshow',
                'create' => 'Create Slideshow',
                'update' => 'Update Slideshow',
                'flashCreate' => 'The Slideshow has been successfully created',
                'flashUpdate' => 'The Slideshow has been successfully updated',
                'flashDelete' => 'The Slideshow has been successfully deleted',
            ],
        ],
        'config' => [
            'relation' => [
                'label' => 'Slideshow slides',
                'emptyMessage' => 'This slideshow currently does not have any attached slide.'
            ],
        ],
    ],
    'columns' => [
        'slideshow' => [
            'id' => 'ID',
            'name' => 'Name',
            'slides_count' => 'Number of slides'
        ],
        'slide' => [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'link' => 'Target link',
            'is_published' => 'Published?',
        ],
    ],
    'fields' => [
        'slideshow' => [
            'name' => 'Name',
        ],
        'slide' => [
            'name' => 'Name',
            'description' => 'Description',
            'link' => 'Target link',
            'image' => 'Image',
            'mp4' => 'mp4',
            'webm' => 'webm',
            'ogg' => 'ogg',
            'unpublished_at' => 'Finish publishing',
            'published_at' => 'Start publishing',
            'is_published' => 'Published?',
            'aspect_ratio' => 'aspect ratio of slide ("auto" will take the value from the Slideshow component property, if set)',
            'custom_ratio' => 'custom value for aspect ratio, if "custom" selected (width / height => decimal value)',
            'caption_position' => 'caption position'
        ],
    ],
];
