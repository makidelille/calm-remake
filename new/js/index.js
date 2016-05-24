String.prototype.contains = function(it) {
    return this.indexOf(it) != -1;
};

Array.prototype.contains = function(it) {
    for (var i = 0; i < this.length; i++) {
        if (this[i] === it) return true;
    }
    return false;
}

// window.onscroll = function(){
//   var toggleBarScroll = document.getElementById('navbar').scrollHeight/2;
//   if(document.body.scrollTop > toggleBarScroll && !document.getElementById('navbar').className.contains('navbar-fixed-top')){
//     document.getElementById('navbar').className = document.getElementById('navbar').className + " navbar-fixed-top";
//   }else if(document.body.scrollTop < toggleBarScroll && document.getElementById('navbar').className.contains('navbar-fixed-top') ){
//     document.getElementById('navbar').className = document.getElementById('navbar').className.replace("navbar-fixed-top","");
//   }
// }
$(document).ready(function() {

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

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {


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

            /*navbar retracting*/
            console.log($(this));
            if ($(this).parents('#footer_xs').length > 0) {
                $(".footer button.navbar-toggle").click();
                return;
            } else if ($(this).parents($('#navbar_xs')).length > 0) {
                $(".header button.navbar-toggle").click();
                return;
            }
        }
    });
});
