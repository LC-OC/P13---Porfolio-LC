const modaleContainer = document.getElementById("modale_contact");
const openModaleContact = document.getElementById("open_contact_form");

// Modale Contact

function openModale() {
  modaleContainer.classList.toggle("overlay");
  console.log("open!");
}

openModaleContact.addEventListener("click", openModale);
