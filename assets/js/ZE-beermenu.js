// fonction qui sert à mettre en couleur le type de bière sélectionnée dans le nav bar
function colorArticleBeer() {
  let getUrl = location.href.split("=");
  if (getUrl[getUrl.length - 1] == "Blanche") {
    document.getElementById("ablanche").style.color = "rgb(232,147,16)";
  } else if (getUrl[getUrl.length - 1] == "Blonde") {
    document.getElementById("ablonde").style.color = "rgb(232,147,16)";
  } else if (getUrl[getUrl.length - 1] == "Ambr%C3%A9e") {
    document.getElementById("aambree").style.color = "rgb(232,147,16)";
  } else if (getUrl[getUrl.length - 1] == "Brune") {
    document.getElementById("abrune").style.color = "rgb(232,147,16)";
  } else if (getUrl[getUrl.length - 1] == "Sp%C3%A9ciale") {
    document.getElementById("aspecial").style.color = "rgb(232,147,16)";
  }
}
window.addEventListener("load", colorArticleBeer);
