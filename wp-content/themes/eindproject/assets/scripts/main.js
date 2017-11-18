/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
        init: function () {
            // JavaScript to be fired on all pages
            this.mobiletoggle();
            this.mainmenu();
            this.tab();
            this.clipboard();
            this.customizer();
        },
        clipboard: function(){
            var clipboard = new Clipboard('.btn');
            $('[data-toggle="tooltip"]').tooltip({ trigger:"focus", delay:{hide:200}});

            clipboard.on('success', function(e) {
                console.info('Action:', e.action);
                console.info('Text:', e.text);
                console.info('Trigger:', e.trigger);

                e.clearSelection();
            });

            clipboard.on('error', function(e) {
                console.error('Action:', e.action);
                console.error('Trigger:', e.trigger);
            });
        },
        mobiletoggle: function () {
            $(".toggle").click(function () {
                $(".mainnav").slideToggle();
            });
        },

        mainmenu: function () {
            $(window).resize(function () {
                console.log($(window).width());
                if ($(window).width() > 300) {
                    $(".mainnav").css("display", "block");
                    $(".top-header").css("display", "flex");
                }
            });
        },
        tab: function () {
            jQuery(document).ready(function() {
                jQuery('.tabs .tab-links a').on('click', function(e)  {
                    var currentAttrValue = jQuery(this).attr('href');

                    // Show/Hide Tabs
                    jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

                    // Change/remove current tab to active
                    jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

                    e.preventDefault();
                });
            });
        },
        customizer: function (){
            $("#customizer-bgcolor").change(function () {
                var value = $(this).children(":selected").attr("id");
                $('.button-flat__round button').css('background-color', value);
                $('.button-flat button').css('background-color', value);
                $('.button-flat__submit button').css('background-color', value);
                $('.button-flat__submit-round button').css('background-color', value);
            });
            $("#customizer-font").change(function () {
                var value = $(this).children(":selected").attr("id");
                $('.button-flat__round button').css('font-family', value);
                $('.button-flat button').css('font-family', value);
                $('.button-flat__submit button').css('font-family', value);
                $('.button-flat__submit-round button').css('font-family', value);
            });
            $("#customizer-textcolor").change(function () {
                var value = $(this).children(":selected").attr("id");
                $('.button-flat__round button').css('color', value);
                $('.button-flat button').css('color', value);
                $('.button-flat__submit button').css('color', value);
                $('.button-flat__submit-round button').css('color', value);
            });

            // Function to preview image
            $(function () {
                $("#file").change(function () {
                    $("#message").empty(); // To remove the previous error message
                    var file = this.files[0];
                    var imagefile = file.type;
                    var match = ["image/jpeg", "image/png", "image/jpg", "xml/svg"];
                    if (!((imagefile === match[0]) || (imagefile === match[1]) || (imagefile === match[2]))) {
                        $('#previewing').attr('src', 'noimage.png');
                        $("#message").html("<p id='error'>Please Select A valid Image File</p>" + "<h4>Note</h4>" + "<span id='error_message'>Only jpeg, jpg, png and svg Images type allowed</span>");
                        return false;
                    }
                    else {
                        var reader = new FileReader();
                        reader.onload = imageIsLoaded;
                        reader.readAsDataURL(this.files[0]);
                    }
                });
            });
            function imageIsLoaded(e) {
                $("#file").css("color", "green");
                $('#image_preview').css("display", "block");
                $('#previewing').attr('src', e.target.result);
                $('#previewing').attr('width', '250px');
                $('#previewing').attr('height', '230px');
                $('.button-flat__submit button img').attr('src', e.target.result);
                $('.button-flat__submit button img').attr('width', '20px');
                $('.button-flat__submit button img').attr('height', '20px');
                $('.button-flat__submit-round button img').attr('src', e.target.result);
                $('.button-flat__submit-round button img').attr('width', '20px');
                $('.button-flat__submit-round button img').attr('height', '20px');
            };

        },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
