This plugin allows you to manage a collection of slideshows from the October administration area.

You can create multiple slideshows, each having slides. A slide is an entity composed of an image, with optional title, description and target link.

This plugin is an adaptation from the [Flosch Slideshow plugin](https://github.com/flo-sch/slideshow-plugin) and may diverge significantly from the original in the course of its development, e.g. we are using [Slick](http://kenwheeler.github.io/slick/) instad of the Bootstrap Carousel.

## Administration

Once the plugin is installed in your OctoberCMS project, you will be able to administrate slideshows from the back-office, within the "Slideshow" tab. It allows you to create, edit and remove slideshows, and for each of those, to create, edit and remove slides.

## Front-end dependencies

At the moment the idea is to have **no frontend dependencies** whatsoever, and to use [Slick Carousel](http://kenwheeler.github.io/slick/) for frontend rendering (with most or all of its many customazation features to be included in the backend settings) which in turn requires JQuery and JQuery migrate libraries. These are all included here within the plugin's assets dependencies and are injected by the slideshow component.
This might be changed back again later when we have a clearer idea of what we are doing. :)


## Display a slideshow

Parameter | Description
------------- | -------------
**slideshow** | the slideshow ID, required.
**numberOfSlide** | number of slides to show, optional.

In order to display this component, all you have to do is call it within a page, providing it's given ID (which can be found in the back-office list of slideshows) :
```twig
    url='/test-page-with-slideshow'

    [slideshow]
    slideshow = 1
    numberOfSlide = 5
    ==

    {% component 'slideshow' %}
```

### Customized template

If you want to customize the way the slideshow is displayed, you can create a customized template by overriding the template file: /themes/{your-theme}/partials/slideshow/default.htm

Here is the default DOM structure of the slideshow component, which implements the slick carousel DOM structure, with some additional CSS styling that has yet to be cleanly included, or maybe better left out. There will be some additional parameters in addition to the title, description and link attributes soon, to allow more comprehensive customization of all the slick carousel attributes (see commented out code below).

```twig
    {% if __SELF__.slideshow.slides %}
        <div id='__SELF__.slideshow.id' class="header-photo-carousel ah-carousel">
    
        {% for i, slide in __SELF__.slideshow.slides %}
            <!-- if slide.active -->
              <a class="header-photo-carousel-item" href="{{ slide.link }}">  <!-- slide.href -->
                <div class="background-box ratio-16-9" style="background-image: url({{ slide.image.path }});" title="{{ slide.title }}"></div>
                {% if slide.title != blank or slide.description != blank %} <!-- slide.text -->
                  <div class="carousel-caption col-xs-12 col-sm-6 col-md-4 col-lg-4"> <!--   slide.position  -->
                    <div class="carousel-caption-wrapper m-x-2 m-y-2">
                      <h2>{{ slide.title }}</h2>
                      <p>{{ slide.description }}</p> <!-- slide.text -->
                    </div>
                  </div>
                {% endif %}
              </a>
            <!-- endif -->
        {% endfor %}
        </div>
    
        {% put scripts %}
            <script type="text/javascript">
                var slickSettings = {
                    accessibility:      true,   // Boolean({{__SELF__.slideshow.settings.accessibility}} === 'true'),
                    adaptiveHeight:     false,  // Boolean({{__SELF__.slideshow.settings.adaptiveHeight}} === 'true'),
                    autoplay:           false,  // Boolean({{__SELF__.slideshow.settings.autoplay}} === 'true'),
                    autoplaySpeed:      3000,   // Number({{__SELF__.slideshow.settings.autoplaySpeed}}),
                    arrows:             true,   // Boolean({{__SELF__.slideshow.settings.arrows}} === 'true'),
                    // asNavFor
                    // appendArrows
                    // appendDots
                    // prevArrow
                    // nextArrow
                    centerMode:         false,  // Boolean({{__SELF__.slideshow.settings.centerMode}} === 'true'),
                    centerPadding:      50px,   // String({{__SELF__.slideshow.settings.centerPadding}}),
                    cssEase:            'ease'  // String({{__SELF__.slideshow.settings.cssEase}}),
                    // customPaging
                    dots:               false,  // Boolean({{__SELF__.slideshow.settings.dots}} === 'true'),
                    // dotsClass
                    draggable:          true,   // Boolean({{__SELF__.slideshow.settings.draggable}} === 'true'),
                    fade:               false,  // Boolean({{__SELF__.slideshow.settings.fade}} === 'true'),
                    focusOnSelect:      false,  // Boolean({{__SELF__.slideshow.settings.focusOnSelect}} === 'true'),
                    easing:             'linear',   // String({{__SELF__.slideshow.settings.easing}}),
                    edgeFriction:       0.15,   // parseFloat({{__SELF__.slideshow.settings.edgeFriction}}),
                    infinite:           true,   // Boolean({{__SELF__.slideshow.settings.infinite}} === 'true'),
                    initialSlide:       0,      // Number({{__SELF__.slideshow.settings.initialSlide}}),
                    lazyLoad:           'onDemand', // String({{__SELF__.slideshow.settings.lazyLoad}}),
                    mobileFirst:        false,  // Boolean({{__SELF__.slideshow.settings.mobileFirst}} === 'true'),
                    pauseOnFocus:       true,   // Boolean({{__SELF__.slideshow.settings.pauseOnFocus}} === 'true'),
                    pauseOnHover:       true,   // Boolean({{__SELF__.slideshow.settings.pauseOnHover}} === 'true'),
                    pauseOnDotsHover:   false,  // Boolean({{__SELF__.slideshow.settings.pauseOnDotHover}} === 'true'),
                    // respondTo: 'window'
                    // responsive
                    rows:               1,      // Number({{__SELF__.slideshow.settings.rows}}),
                    // slide
                    slidesPerRow:       1,      // Number({{__SELF__.slideshow.settings.slidesPerRow}}),
                    slidesToShow:       1,      // Number({{__SELF__.slideshow.settings.slidesToShow}}),
                    slidesToScroll:     1,      // Number({{__SELF__.slideshow.settings.slidesToScroll}}),
                    speed:              300,    // Number({{__SELF__.slideshow.settings.speed}}),
                    swipe:              true,   // Boolean({{__SELF__.slideshow.settings.swipe}} === 'true'),
                    swipeToSlide:       false,  // Boolean({{__SELF__.slideshow.settings.swipeToSlide}} === 'true'),
                    touchMove:          true,   // Boolean({{__SELF__.slideshow.settings.touchMove}} === 'true'),
                    touchThreshold:     5,      // Number({{__SELF__.slideshow.settings.touchThreshold}}),
                    useCSS:             true,   // Boolean({{__SELF__.slideshow.settings.useCSS}} === 'true'),
                    useTransform:       true,   // Boolean({{__SELF__.slideshow.settings.useTransform}} === 'true'),
                    variableWidth:      false,  // Boolean({{__SELF__.slideshow.settings.variableWidth}} === 'true'),
                    vertical:           false,  // Boolean({{__SELF__.slideshow.settings.vertical}} === 'true'),
                    verticalSwiping:    false,  // Boolean({{__SELF__.slideshow.settings.verticalSwiping}} === 'true'),
                    rtl:                false,  // Boolean({{__SELF__.slideshow.settings.rtl}} === 'true'),
                    waitForAnimate:     true    // Boolean({{__SELF__.slideshow.settings.waitForAnimate}} === 'true'),
                    // zIndex: 1000
                };
    
                $('#{{__SELF__.slideshow.id}}').slick(slickSettings);
            </script>
        {% endput %}
    {% endif %}
```
