const arraySkills = [
  {
    title:
      "Intégrer des éléments sur une page web en utilisant les fondamentaux de HTML",
  },
  { title: "Intégrer du contenu conformément à une maquette avec HTML et CSS" },
  { title: "Configurer un site WordPress grâce à un thème" },
  { title: "Créer une page web avec un page builder" },
  { title: "Installer un environnement de développement WordPress" },
  { title: "Développer en PHP en utilisant les fondamentaux du langage" },
  { title: "Versionner son projet avec Git et Github" },
  {
    title:
      "Personnaliser un template WordPress conformément à une maquette avec HTML et CSS",
  },
  { title: "Personnaliser un thème enfant sur WordPress avec PHP" },
  {
    title: "Optimiser les performances et le référencement d'un site Wordpress",
  },
  { title: "Programmer en utilisant les fondamentaux de JavaScript" },
  { title: "Manipuler des éléments du DOM avec JavaScript" },
  { title: "Mettre en œuvre des animations CSS et Sass" },
  { title: "Débugger le code d'un site WordPress grâce à wp-debug" },
  { title: "Tester le fonctionnement et la performance d'un site WordPress" },
  {
    title:
      "Mettre en place des structures de données et des champs configurables",
  },
  {
    title:
      "Rendre des templates de contenu dynamiques en utilisant les données du back-office",
  },
  {
    title:
      "Découper une fonctionnalités en tâches pour préparer le développement",
  },
  { title: "Présenter une solution technique à un client" },
  { title: "Mettre en place une méthode de veille technologique" },
  {
    title:
      "Suivre le déroulement d'un projet grâce à un outil de gestion de projet",
  },
  { title: "Rédiger les spécifications techniques d'un projet Wordpress" },
  {
    title:
      "Déployer un site WordPress sur un hébergeur pour le rendre accessible en ligne",
  },
];

const arrowLeftCarouselSkill = document.getElementById(
  "arrow_left_carousel_skills"
);
const arrowRightCarouselSkill = document.getElementById(
  "arrow_right_carousel_skills"
);
const slideCarouselSkill = document.querySelector(".slide_carousel_skill");

let slidesLength = arraySkills.length;
let currentSlideIndex = 0;

slideCarouselSkill.innerHTML = arraySkills[0].title;

function prevSlide() {
  if (currentSlideIndex > 0) {
    currentSlideIndex--;
  } else {
    currentSlideIndex = slidesLength - 1;
  }
  changeSlide();
}

function nextSlide() {
  if (currentSlideIndex < slidesLength - 1) {
    currentSlideIndex++;
  } else {
    currentSlideIndex = 0;
  }
  changeSlide();
}

function changeSlide() {
  slideCarouselSkill.innerHTML = arraySkills[currentSlideIndex].title;
}

arrowLeftCarouselSkill.addEventListener("click", prevSlide);
arrowRightCarouselSkill.addEventListener("click", nextSlide);

jQuery(document).keydown(function (e) {
  if (e.keyCode == 37) {
    prevSlide();
  } else if (e.keyCode == 39) {
    nextSlide();
  }
});
