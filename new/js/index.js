String.prototype.contains = function(it) { return this.indexOf(it) != -1; };

// window.onscroll = function(){
//   var toggleBarScroll = document.getElementById('navbar').scrollHeight/2;
//   if(document.body.scrollTop > toggleBarScroll && !document.getElementById('navbar').className.contains('navbar-fixed-top')){
//     document.getElementById('navbar').className = document.getElementById('navbar').className + " navbar-fixed-top";
//   }else if(document.body.scrollTop < toggleBarScroll && document.getElementById('navbar').className.contains('navbar-fixed-top') ){
//     document.getElementById('navbar').className = document.getElementById('navbar').className.replace("navbar-fixed-top","");
//   }
// }
