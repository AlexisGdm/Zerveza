jQuery(document).ready(function ($) {
  if (sessionStorage.getItem("advertOnce") !== "true") {
    $("#container_popup").show();
  } else {
    $("#container_popup").hide();
    $(".overlay-verify").hide();
  }

  $(".btn_yes").click(function () {
    sessionStorage.setItem("advertOnce", "true");
    $("#container_popup").hide();
    $(".overlay-verify").hide();
  });

  $(".btn_no").click(function () {
    window.location.href = "././assets/img/background/pikachu.gif";
  });
});
