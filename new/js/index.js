String.prototype.contains = function(it) {
    return this.indexOf(it) != -1;
};

const mobile = window.matchMedia("only screen and (max-width: 768px)")["matches"];


$(document).ready(function() {
    /*SETUP*/
    if (!mobile) {
        $($(".footer")[0]).hide();
        $('body').scrollspy({target:".navbar", offset:30})
    } else {
        $($(".footer")[1]).addClass("hidden-xs");
          $('body').scrollspy({target:".navbar", offset:30})
    }


    $('li.dropdown').on('click', function() {
        var $el = $(this);
        if ($el.hasClass('open')) {
            var $a = $el.children('a.dropdown-toggle');
            if ($a.length && $a.attr('href')) {
                location.href = $a.attr('href');
            }
        }
    });

    $(".footer a, .dropdown-menu a").on('click', function(event) {

        console.log($(this).parents('#footerbar_xs'), $(this).parents('#navbar_xs'));
        if ($(this).parents('#footerbar_xs').length > 0) {
            $(".footer button.navbar-toggle").click();
        } else if ($(this).parents('#navbar_xs').length > 0) {
            //  $(".header button.navbar-toggle").click();
        }

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            /*navbar retracting*/


            /**smooth scrolling**/

            // Prevent default anchor click behavior
            event.preventDefault();
            // Store hash (#)
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function() {
                window.location.hash = hash;
            });

        }
    });

    $(window).on('scroll', function() {
        if ($(this).scrollTop() > ($(".header")[mobile ? 1 : 0].scrollHeight)) {
            if (!mobile) {
                $($(".footer")[0]).fadeIn(200);
            } else {
                $($(".footer")[1]).removeClass("hidden-xs");
            }
        } else {
            if (!mobile) {
                $($(".footer")[0]).fadeOut(200);
            } else {
                $($(".footer")[1]).addClass("hidden-xs");
            }
        }
    });

});
