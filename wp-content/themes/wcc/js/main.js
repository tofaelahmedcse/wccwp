/*	main.js Unique functions for website
 *	info@reactionmarketing.ca
 *
 *	MIT Lisense
 *	Copyright (C) 2016 REaction
 *
 *	Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without
 *	restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software,
 *	and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 *	The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 *
 *	THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *	FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
 *	WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

jQuery(document).ready(function () {

    /*	Check for browser SVG support
   =====================================================================*/
    if (!Modernizr.svg) {
        var i = document.getElementsByTagName('img'), j, y
        for (j = i.length; j--;) {
            y = i[j].src
            if (y.match(/svg$/)) {
                i[j].src = y.slice(0, -3) + 'png'
            }
        }
    }

    /* Match Height of elements
    =====================================================================*/
    jQuery('.equal').matchHeight()

    jQuery('.equal-carousel').matchHeight({
        byRow: 0
    })

    //equal height for content-26 and 27
    jQuery('.equal-section').matchHeight()

    jQuery.fn.matchHeight._maintainScroll = true

    /* Add Selected Class to form labels for styling
    =================================================================*/
    jQuery('header').click(function () {
        jQuery('.nf-field-element').toggleClass('selected')
    })

    /* Form Affirmative Validation
      =====================================================================*/
    function lagCheck () {
        jQuery('input[type=\'text\']').on('keyup', function () {
            if (jQuery(this).val().length != 0) {
                jQuery(this).parent().parent().addClass('filled')
            } else if (jQuery(this).val().length === 0) {
                jQuery(this).parent().parent().removeClass('filled')
            }

        })
        /////change ID to reflect appropriate field IDs
        jQuery('#nf-field-60').on('keyup', function () {
            if (jQuery(this).val().length != 0) {
                jQuery(this).parent().parent().addClass('filled')
            } else if (jQuery(this).val().length === 0) {
                jQuery(this).parent().parent().removeClass('filled')
            }
        })
        jQuery('#nf-field-67').on('keyup', function () {
            if (jQuery(this).val().length != 0) {
                jQuery(this).parent().parent().addClass('filled')
            } else if (jQuery(this).val().length === 0) {
                jQuery(this).parent().parent().removeClass('filled')
            }

        })

        //radio button toggles
        jQuery('#nf-field-5-wrap>.nf-field-element>ul>li>label').on('click', function () {
            if (jQuery('#nf-field-5-wrap>.nf-field-element>ul>li').hasClass('checked')) {
                jQuery('#nf-field-5-wrap>.nf-field-element>ul>li').removeClass('checked')
            }

            jQuery(this).parent().addClass('checked')
        })
        jQuery('#nf-field-13-wrap>.nf-field-element>ul>li>label').on('click', function () {
            if (jQuery('#nf-field-13-wrap>.nf-field-element>ul>li').hasClass('checked')) {
                jQuery('#nf-field-13-wrap>.nf-field-element>ul>li').removeClass('checked')
            }

            jQuery(this).parent().addClass('checked')
        })
    }

    setTimeout(lagCheck, 1000)

    // Mobile Nav - 2-layer
    //////////////////////////

    /*close btn click action*/
    jQuery('.menu-close-btn').on('click', function () {
        if (jQuery('.menu-item-has-children>ul').hasClass('show-sub')) {
            jQuery('.menu-item-has-children>ul').removeClass('show-sub')
        }
        jQuery('.mobile-nav').removeClass('mobile-nav-show')
        jQuery('.menu-close-btn').removeClass('close-btn-show')
        if (jQuery('.navbar-back-btn').hasClass('back-btn-show')) {
            jQuery('.navbar-back-btn').removeClass('back-btn-show')
        }
        jQuery('.navbar-close-btn').removeClass('show')
        jQuery('body').removeClass('mobile-menu')
    })

    //mobile second-layer nav
    jQuery('.menu-item-has-children').on('click', function () {
        jQuery('.navbar-back-btn').addClass('back-btn-show')
        jQuery('.navbar-close-btn').removeClass('close-btn-show')
        jQuery(this).children('ul').addClass('show-sub')
    })

    jQuery('.navbar-back-btn').on('click', function () {
        jQuery('.menu-item-has-children').children('ul').removeClass('show-sub')
        jQuery('.navbar-back-btn').removeClass('back-btn-show')
        jQuery('.navbar-close-btn').addClass('close-btn-show')
    })

    //mobile toggle btn
    jQuery('.navbar-toggler').on('click', function () {
        jQuery('.mobile-nav').addClass('mobile-nav-show')
        jQuery('body').addClass('takeover')
        // jQuery(this).hide()
        jQuery('.navbar-close-btn').addClass('close-btn-show')
    })

    jQuery('.navbar-close-btn').on('click', function () {
        jQuery('.mobile-nav').removeClass('mobile-nav-show')
        jQuery(this).removeClass('close-btn-show')
        jQuery('body').removeClass('takeover')
        jQuery('.navbar-toggler').show()
    })

    // Takeover Nav
    //////////////////////////

    jQuery('.menu-toggler-icon').on('click', function () {
        jQuery('.menu-toggler-icon').addClass('open')
        jQuery('.menu-close-icon').addClass('open')
        jQuery('.menu-overlay').addClass('open')
    })

    jQuery('.menu-close-icon').on('click', function () {
        jQuery('.menu-toggler-icon').removeClass('open')
        jQuery('.menu-close-icon').removeClass('open')
        jQuery('.menu-overlay').removeClass('open')
    })

    // Sticky Nav Scroll Effects
    ////////////////////////////////

    var lastScrollTop = window.scrollY

    var docH = parseInt($('body').prop('scrollHeight'))
    var h = window.innerHeight


    if (docH > h) {

        jQuery(window).on('scroll', function (event) {
            var scroll = jQuery(document).scrollTop()
            var delta = 30

            if (Math.abs(lastScrollTop - scroll) <= delta) {
                if (lastScrollTop > scroll) {

                    if (scroll <= 0) {
                        if (jQuery('#nav-adjust').hasClass('active')) {
                            jQuery('#nav-adjust').removeClass('active')
                            jQuery('.main-wrapper').removeClass('fixed')
                        }
                        if (jQuery('header').hasClass('pushed')) {
                            jQuery('header').removeClass('pushed')
                        }
                        if (jQuery('header').hasClass('fixed')) {
                            jQuery('header').removeClass('fixed')
                        }
                        if (jQuery('#main-menu').hasClass('scrolled')) {
                            jQuery('#main-menu').removeClass('scrolled')
                        }
                        if (jQuery('.utility-nav-wrapper').hasClass('hide')) {
                            jQuery('.utility-nav-wrapper').removeClass('hide')
                        }
                    }
                    if (scroll <= 42) {

                    } else {
                        jQuery('.utility-nav-wrapper').addClass('pushed')
                        jQuery('header').addClass('pushed')
                        jQuery('ul.dropdown-menu').removeClass('scrolled')
                        jQuery('#main-menu').addClass('pushed')
                    }
                } else {

                    if (scroll > 42) {
                        jQuery('header').addClass('fixed')
                        jQuery('#main-menu').addClass('scrolled')
                        if (jQuery('#main-menu').hasClass('pushed')) {
                            jQuery('#main-menu').removeClass('pushed')
                        }
                        if (jQuery('.utility-nav-wrapper').hasClass('pushed')) {
                            jQuery('.utility-nav-wrapper').removeClass('pushed')
                        }
                        jQuery('#nav-adjust').addClass('active')
                        //jQuery('.main-wrapper').addClass('fixed')
                        jQuery('.utility-nav-wrapper').addClass('hide')
                        jQuery('ul.dropdown-menu').addClass('scrolled')
                    }
                }
            }
            if (window.scrollDownTimeout) {
                clearTimeout(window.scrollDownTimeout)
            }
            window.scrollDownTimeout = setTimeout(function () {
            }, 1)
            lastScrollTop = window.scrollY

        })
    }

    //  Simple Nav Mobile Effects
    ///////////////////////////////

    //mobile toggle btn
    jQuery('.navbar-toggler-main').on('click', function () {
        jQuery('.mobile-nav').addClass('mobile-nav-show')
    })

    //mobile subnav block open and close
    jQuery('#menu-mobile>li').on('click', function () {
        if (jQuery(this).children('.sub-menu').hasClass('show-sub-nav')) {
            jQuery(this).children('.sub-menu').removeClass('show-sub-nav')
            console.log('limited')
        } else {
            jQuery('#menu-mobile>li').find('.show-sub-nav').removeClass('show-sub-nav')
            jQuery(this).children('.sub-menu').addClass('show-sub-nav')
            console.log('returns')
        }
    })

    /*Back btn click action*/
    jQuery('.back-btn').on('click', function () {
        jQuery('.mobile-nav').removeClass('mobile-nav-show')
    })
    jQuery('.back-btn>i').on('click', function () {
        jQuery('.mobile-nav').removeClass('mobile-nav-show')
    })

    //category filter dropdown of blog landing page
    jQuery('#cate-dropdown').on('change', function () {
        var val = jQuery('#cate-dropdown').val()
        if (val) {
            if (val == 'all') {
                window.location.href = window.location.pathname
            }
            else {
                window.location.href = '?category=' + val
            }
        }
    })

    jQuery('.owl-carousel-experience').owlCarousel({
        items: 1,
        nav: true,
        navText: [
            '<i class="fas fa-chevron-left"></i>',
            '<i class="fas fa-chevron-right"></i>'
        ],
    })

    function md_ninja() {
      console.log('1')
      if(jQuery('.nf-field-container').hasClass('mui-textfield')) {
        console.log('mui');
        console.log(jQuery(this).find('nf-field-element'));

        jQuery('.mui-textfield>.nf-field>.field-wrap>.nf-field-element').addClass('mui-textfield mui-textfield--float-label');
      }
    }

    setTimeout(md_ninja, 1000)


    /* Gallery actions
=================================================*/
    var row = 2
    jQuery('#btn-see-more').click(function () {
        jQuery('.cont-' + row).show(500);
        row++
        if (row == 4) {
            jQuery('#btn-see-more').hide()
        }
    })

    var headerHeight = jQuery(".site-header").outerHeight();

    //Scroll to next section
    jQuery("#go-next-section").on("click", function(){
        var target = jQuery(this).parent().next().offset().top - headerHeight;
        jQuery("html,body").stop(true, true).animate({
            scrollTop: target
        }, 800)

    })

    if ( jQuery(window).width() < 768 ) {
    
        $('#slider-wrap').owlCarousel({
              navigation : false, 
              slideSpeed : 300,
              paginationSpeed : 400,
              items: 1,

            });
        }



})
