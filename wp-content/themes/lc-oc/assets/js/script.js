const showFooterIcon = document.getElementById("icon_show_footer");
const footer = document.getElementById("footer");

console.log(footer);

function showFooter() {
  if (footer.style.display === "block") {
    footer.style.display = "none";
  } else {
    footer.style.display = "block";
  }
  console.log("cliqué");
}

showFooterIcon.addEventListener("click", showFooter);
