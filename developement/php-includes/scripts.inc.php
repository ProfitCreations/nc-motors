<!-- <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script> -->

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.js"><\/script>')
</script> -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/jquery-1.10.2.min.js"><\/script>')</script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

<!-- Material Design -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.2.2/js/ripples.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.2.2/js/material.min.js"></script>
<script>
    $(document).ready(function() {
        $.material.init();
    });
</script>

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

        <!--
    Text Effects
-->
<script src="js/textEffect.jquery.js"></script>
<script>
    jQuery('#slogan').textEffect('jumble');
</script>

<!-- WOW -->
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

<!-- scrollUp -->
<script src="js/jquery.scrollUp.js"></script>
<script>
    $(function() {
        $.scrollUp({
                        scrollName: 'scrollUp', // Element ID
                        topDistance: '300', // Distance from top before showing element (px)
                        topSpeed: 300, // Speed back to top (ms)
                        animation: 'fade', // Fade, slide, none
                        animationInSpeed: 200, // Animation in speed (ms)
                        animationOutSpeed: 200, // Animation out speed (ms)
                        scrollText: '', // Text for element
                        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
                    });
    });
</script>


        <!--
scrollTo
locallScroll
-->
<script src="js/jquery.scrollTo.js"></script>
<script src="js/jquery.localScroll.js"></script>
<script type="text/javascript">
    jQuery(function($) {
                /**
                 * Most jQuery.localScroll's settings, actually belong to jQuery.ScrollTo, check it's demo for an example of each option.
                 * @see http://flesler.demos.com/jquery/scrollTo/
                 * You can use EVERY single setting of jQuery.ScrollTo, in the settings hash you send to jQuery.LocalScroll.
                 */

                // The default axis is 'y', but in this demo, I want to scroll both
                // You can modify any default like this
                $.localScroll.defaults.axis = 'xy';

                /**
                 * NOTE: I use $.localScroll instead of $('#navigation').localScroll() so I
                 * also affect the >> and << links. I want every link in the page to scroll.
                 */
                 $.localScroll({
                        target: '#content', // could be a selector or a jQuery object too.
                        queue: true,
                        duration: 500,
                        hash: true,
                        onBefore: function(e, anchor, $target) {
                                // The 'this' is the settings object, can be modified
                            },
                            onAfter: function(anchor, settings) {
                                // The 'this' contains the scrolled element (#content)
                            }
                        });
             });
         </script>

         <!-- jQuery.nav.js -->
         <script src="js/jquery.nav.js"></script>
         <script>
            $('#nav').onePageNav({
                currentClass: 'current',
                changeHash: false,
                scrollSpeed: 750,
                scrollThreshold: 0.5,
                filter: '',
                easing: 'swing',
                begin: function() {
                        //I get fired when the animation is starting
                    },
                    end: function() {
                        //I get fired when the animation is ending
                    },
                    scrollChange: function($currentListItem) {
                        //I get fired when you enter a section and I pass the list item of the section
                    }
                });
            </script>

            <!-- MixitUp -->
            <script src="js/jquery.mixitup.min.js"></script>
            <script>
                $(function(){
                    $('#Container').mixItUp();
                });
            </script>

            <!-- New Button -->
            <script>
                (function (root, factory) {
                    if (typeof define === 'function' && define.amd) {
        // AMD module
        define(factory);
    } else {
        // Browser global
        root.transformicons = factory();
    }
}(this || window, function () {

    // ####################
    // MODULE TRANSFORMICON
    // ####################
    'use strict';

    var
        tcon = {}, // static class
        _transformClass = 'tcon-transform',

        // const
        DEFAULT_EVENTS = {
            transform : ['click'],
            revert : ['click']
        };

    // ##############
    // private methods
    // ##############

    /**
    * Normalize a selector string, a single DOM element or an array of elements into an array of DOM elements.
    * @private
    *
    * @param {(string|element|array)} elements - Selector, DOM element or Array of DOM elements
    * @returns {array} Array of DOM elements
    */
    var getElementList = function (elements) {
        if (typeof elements === 'string') {
            return Array.prototype.slice.call(document.querySelectorAll(elements));
        } else if (typeof elements === 'undefined' || elements instanceof Array) {
            return elements;
        } else {
            return [elements];
        }
    };

    /**
    * Normalize a string with eventnames separated by spaces or an array of eventnames into an array of eventnames.
    * @private
    *
    * @param {(string|array)} elements - String with eventnames separated by spaces or array of eventnames
    * @returns {array} Array of eventnames
    */
    var getEventList = function (events) {
        if (typeof events === 'string') {
            return events.toLowerCase().split(' ');
        } else {
            return events;
        }
    };

    /**
    * Attach or remove transformicon events to one or more elements.
    * @private
    *
    * @param {(string|element|array)} elements - Selector, DOM element or Array of DOM elements to be toggled
    * @param {object} [events] - An Object containing one or more special event definitions
    * @param {boolean} [remove=false] - Defines wether the listeners should be added (default) or removed.
    */
    var setListeners = function (elements, events, remove) {
        var
        method = (remove ? 'remove' : 'add') + 'EventListener',
        elementList = getElementList(elements),
        currentElement = elementList.length,
        eventLists = {};

        // get events or use defaults
        for (var prop in DEFAULT_EVENTS) {
            eventLists[prop] = (events && events[prop]) ? getEventList(events[prop]) : DEFAULT_EVENTS[prop];
        }

        // add or remove all events for all occasions to all elements
        while(currentElement--) {
            for (var occasion in eventLists) {
                var currentEvent = eventLists[occasion].length;
                while(currentEvent--) {
                    elementList[currentElement][method](eventLists[occasion][currentEvent], handleEvent);
                }
            }
        }
    };

    /**
    * Event handler for transform events.
    * @private
    *
    * @param {object} event - event object
    */
    var handleEvent = function (event) {
        tcon.toggle(event.currentTarget);
    };

    // ##############
    // public methods
    // ##############

    /**
    * Add transformicon behavior to one or more elements.
    * @public
    *
    * @param {(string|element|array)} elements - Selector, DOM element or Array of DOM elements to be toggled
    * @param {object} [events] - An Object containing one or more special event definitions
    * @param {(string|array)} [events.transform] - One or more events that trigger the transform. Can be an Array or string with events seperated by space.
    * @param {(string|array)} [events.revert] - One or more events that trigger the reversion. Can be an Array or string with events seperated by space.
    * @returns {transformicon} transformicon instance for chaining
    */
    tcon.add = function (elements, events) {
        setListeners(elements, events);
        return tcon;
    };

    /**
    * Remove transformicon behavior from one or more elements.
    * @public
    *
    * @param {(string|element|array)} elements - Selector, DOM element or Array of DOM elements to be toggled
    * @param {object} [events] - An Object containing one or more special event definitions
    * @param {(string|array)} [events.transform] - One or more events that trigger the transform. Can be an Array or string with events seperated by space.
    * @param {(string|array)} [events.revert] - One or more events that trigger the reversion. Can be an Array or string with events seperated by space.
    * @returns {transformicon} transformicon instance for chaining
    */
    tcon.remove = function (elements, events) {
        setListeners(elements, events, true);
        return tcon;
    };

    /**
    * Put one or more elements in the transformed state.
    * @public
    *
    * @param {(string|element|array)} elements - Selector, DOM element or Array of DOM elements to be transformed
    * @returns {transformicon} transformicon instance for chaining
    */
    tcon.transform = function (elements) {
        getElementList(elements).forEach(function(element) {
            element.classList.add(_transformClass);
        });
        return tcon;
    };

    /**
    * Revert one or more elements to the original state.
    * @public
    *
    * @param {(string|element|array)} elements - Selector, DOM element or Array of DOM elements to be reverted
    * @returns {transformicon} transformicon instance for chaining
    */
    tcon.revert = function (elements) {
        getElementList(elements).forEach(function(element) {
            element.classList.remove(_transformClass);
        });
        return tcon;
    };

    /**
    * Toggles one or more elements between transformed and original state.
    * @public
    *
    * @param {(string|element|array)} elements - Selector, DOM element or Array of DOM elements to be toggled
    * @returns {transformicon} transformicon instance for chaining
    */
    tcon.toggle = function (elements) {
        getElementList(elements).forEach(function(element) {
            tcon[element.classList.contains(_transformClass) ? 'revert' : 'transform'](element);
        });
        return tcon;
    };

    return tcon;
}));transformicons.add('.tcon');
</script>

<!-- Slick.js -->
<!-- <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>
<script>
    $(document).ready(function(){
        $('.mod-slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true,
            autoplay: true,lazyLoad: 'ondemand',
            initialSlide: 0,
            mobileFirst: true
        });
    });
</script>
-->

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function() {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = '//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X');
    ga('send', 'pageview');
</script>

<!-- test static scrollTop -->
<script>
    document.onscroll = function() {
        if( $(window).scrollTop() > $('header').height() ) {
            $('#scrollUp').removeClass('hidden');
        }
        else {
            $('#scrollUp').addClass('hidden');
        }
    };
</script>
<!-- Taal -->
<script src="js/buttons.js"></script>
<!-- flickity -->
<script src="//cdnjs.cloudflare.com/ajax/libs/flickity/0.3.1/flickity.pkgd.min.js"></script>
<script>
    $('#main-gallery').flickity({
  // options
  cellAlign: 'center',
  contain: true,
  wrapAround: true,
  autoPlay: true,
  watchCSS: true
});
</script>
<!-- NavTogle -->
<script>''
    $( '#nav > li' ).click(function() {
        if ( $( '.navbar-ex1-collapse' ).hasClass( 'in' ) ) {
            $( '#button-nav' ).toggleClass('tcon-transform');
            $( '.navbar-ex1-collapse' ).toggleClass('in')
        }
    });

</script>
</body>

</html>
