

$(document).ready(function(){
  $("#fullscreen").hide();


  var maxIndex = $("#photo-display").children().size();
  var index = -1;

  $("#photo-display div.thumbnail").on("click", function(e){
    index = $(e.currentTarget).index();
    var imgSrc =$(e.currentTarget).children("img")[0].src;
    $("#fullscreenImg").css("background-image" , "url(\"" +imgSrc +"\")");
    $("#fullscreen").fadeIn(100);

  });

  $("#left").on("click", function() {
    index = index > 0 ? index-1 : maxIndex-1;
    $("#fullscreenImg").fadeOut(150,function(){
      $("#photo-display").children()[index].click();
      $("#fullscreenImg").fadeIn();
    });

  });
  $("#right").on("click", function(){
    index = index < maxIndex-1 ? index + 1 : 0;
    $("#fullscreenImg").fadeOut(150,function(){
      $("#photo-display").children()[index].click();
      $("#fullscreenImg").fadeIn();
    });
  });


  $("#left ,#right,#close,#toggleIcons").hover( function(){
      $(this).addClass("hover");
    },function(){
      $(this).removeClass("hover");
    });

  $("#toggleIcons").on("click", function(){
      var $this =$(this);
      if($this.hasClass("on")){
        $this.removeClass("on");
        $("#toggleIcons .glyphicon").addClass("glyphicon-collapse-down");
        $("#toggleIcons .glyphicon").removeClass("glyphicon-collapse-up");
        $("#close .glyphicon,#right .glyphicon,#left .glyphicon").removeClass("hidden");
      }else {
        $this.addClass("on");
        $("#toggleIcons .glyphicon").removeClass("glyphicon-collapse-down");
        $("#toggleIcons .glyphicon").addClass("glyphicon-collapse-up");
        $("#close .glyphicon,#right .glyphicon,#left .glyphicon").addClass("hidden");
      }
  });

  $("#close").on("click", function(){
      closeFullScreen();
  });
  $(document).on("scroll", function(){
    closeFullScreen();
  });
});


function closeFullScreen(){
  $("#fullscreen").fadeOut(150,function() {
    if($("#toggleIcons").hasClass("on")){
        $("#toggleIcons").removeClass("on");
        $("#toggleIcons .glyphicon").addClass("glyphicon-collapse-down");
        $("#toggleIcons .glyphicon").removeClass("glyphicon-collapse-up");
        $("#close .glyphicon,#right .glyphicon,#left .glyphicon").removeClass("hidden");
    }
  });
}

