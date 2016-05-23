String.prototype.contains = function(it) {
    return this.indexOf(it) != -1;
};

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



});
