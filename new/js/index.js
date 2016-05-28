String.prototype.contains = function(it) {
    return this.indexOf(it) != -1;
};

const mobile = window.matchMedia("only screen and (max-width: 768px)")["matches"];

function smoothScrollTo(hash){
  $('html, body').animate({
      scrollTop: $(hash).offset().top
  }, 800, function() {
      window.location.hash = hash;
  });
}


$(document).ready(function() {
    /*SETUP*/
    if (!mobile) {
        $($(".footer")[0]).hide();
        $('body').scrollspy({target:".navbar", offset:30})
    } else {
        $($(".footer")[1]).addClass("hidden-sm");
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
        if (this.hash !== "" && this.href.replace(this.hash,"") == window.location.href.replace(window.location.hash,"")) { //t.href.replace(t.hash,"")
            event.preventDefault();
            smoothScrollTo(this.hash);
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

    //for evry abbr add tooltip
    $('abbr').on("mouseover",function(e){
      $(this).tooltip({
        title : $(this).attr("title")

      });
    });

});

//on load smooth scrolling
window.onload = function(){
  if(window.location.hash !== ""){
    window.scrollTo(0,0);
    smoothScrollTo(window.location.hash);
  }
}
