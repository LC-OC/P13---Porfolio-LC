const modaleContainer = document.getElementById("modale_contact");
const openModaleContact = document.getElementById("open_contact_form");

// Modale Contact

function openModale() {
  modaleContainer.classList.toggle("overlay");
}

// close modal when user clicks outside of it
window.addEventListener("click", function (e) {
  if (e.target == modaleContainer) {
    modaleContainer.classList.remove("overlay");
  }
});

openModaleContact.addEventListener("click", openModale);
