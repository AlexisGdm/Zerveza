function sblanche() {
  document.getElementById("ablanche").style.color = "rgb(255,212,0)";
  document.getElementById("ablonde").style.color = "white";
  document.getElementById("aambree").style.color = "white";
  document.getElementById("abrune").style.color = "white";
  document.getElementById("aspecial").style.color = "white";
}
function sblonde() {
  document.getElementById("ablanche").style.color = "white";
  document.getElementById("ablonde").style.color = "rgb(255,212,0)";
  document.getElementById("aambree").style.color = "white";
  document.getElementById("abrune").style.color = "white";
  document.getElementById("aspecial").style.color = "white";
}
function sambree() {
  document.getElementById("ablanche").style.color = "white";
  document.getElementById("ablonde").style.color = "white";
  document.getElementById("aambree").style.color = "rgb(255,212,0)";
  document.getElementById("abrune").style.color = "white";
  document.getElementById("aspecial").style.color = "white";
}
function sbrune() {
  document.getElementById("ablanche").style.color = "white";
  document.getElementById("ablonde").style.color = "white";
  document.getElementById("aambree").style.color = "white";
  document.getElementById("abrune").style.color = "rgb(255,212,0)";
  document.getElementById("aspecial").style.color = "white";
}
function sspeciale() {
  document.getElementById("ablanche").style.color = "white";
  document.getElementById("ablonde").style.color = "white";
  document.getElementById("aambree").style.color = "white";
  document.getElementById("abrune").style.color = "white";
  document.getElementById("aspecial").style.color = "rgb(255,212,0)";
}

$(document).ready(function () {
  $(".links").click(function () {
    if ($(this).html() == "Blanche") {
      $("#sous-blonde").hide();
      $("#sous-ambree").hide();
      $("#sous-brune").hide();
      $("#sous-speciale").hide();
      $("#sous-blanche").show();
    } else if ($(this).html() == "Blonde") {
      $("#sous-blonde").show();
      $("#sous-ambree").hide();
      $("#sous-brune").hide();
      $("#sous-speciale").hide();
      $("#sous-blanche").hide();
    } else if ($(this).html() == "Ambrée") {
      $("#sous-blonde").hide();
      $("#sous-ambree").show();
      $("#sous-brune").hide();
      $("#sous-speciale").hide();
      $("#sous-blanche").hide();
    } else if ($(this).html() == "Brune") {
      $("#sous-blonde").hide();
      $("#sous-ambree").hide();
      $("#sous-brune").show();
      $("#sous-speciale").hide();
      $("#sous-blanche").hide();
    } else if ($(this).html() == "Spéciale") {
      $("#sous-blonde").hide();
      $("#sous-ambree").hide();
      $("#sous-brune").hide();
      $("#sous-speciale").show();
      $("#sous-blanche").hide();
    }
  });
});
