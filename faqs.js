$(document).ready(function()
{
   $(".answer").hide();
  $(".question").click(function () {
    $(this).removeClass("fa fa-lock");
    $(this).toggleClass("fa fa-unlock");
    $(this).nextAll(".answer").toggle(500);
    $(this).addClass("fa fa-lock");
  });
});