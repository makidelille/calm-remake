

$(document).ready(function(){
  var modal = $("#zoomModal");
  var maxindex = $("#photo-display").children().size();
  var index = -1;

  $("#photo-display div.thumbnail").on("click", function(e){
    index = $(e.currentTarget).index();
    var imgSrc =$(e.currentTarget).children("img")[0].src;
    modal.modal();
    $("#img").attr("src",imgSrc)
  });

  modal.on("shown.bs.modal",function(e){
    $("body").css("padding-right", "0");
  });

  modal.on("show.bs.modal", function(e){
    $("body").css("padding-right", "0");
  });

  $(".modal-body button").on("click", function(e){
    if(e.currentTarget.value == 1){
      index = index < maxindex-1 ? index + 1 : index;
    }else{
      index = index > 0 ? index-1 : index;
    }
    $("#photo-display").children()[index].click();
  });
});
