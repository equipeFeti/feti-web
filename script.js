const hambButton = document.querySelector(".hamburguer-menu");
const menu = document.querySelector(".menu-wrapper-ul");
const body = document.querySelector("#body");
const readMore = document.querySelector(".read-more-btn");
const aboutTextMore = document.querySelector("#aboutTextMore");
const aboutText = document.querySelector("#aboutText");
const aboutTextIntroduction = document.querySelector("#aboutTextIntroduction");
const loadingScreen = document.querySelector(".loading");
const allContent = document.querySelector(".content");
const menuLines = document.querySelectorAll(".hamb-lines");

controler = 1;

/* Responsive Menu */

hambButton.addEventListener('click', () => {
  menu.classList.toggle('show');
  hambButton.classList.toggle('rotate')
  menuLines[0].classList.toggle('rotate0')
  menuLines[1].classList.toggle('rotate1')
  menuLines[2].classList.toggle('rotate2')
})

/* Tela de loading */

window.addEventListener("load", () => {
  loadingScreen.style.display = "none";
  allContent.style.visibility = "visible";
});

/* adjust title of editais/documents */

const documentsTitle = document.getElementsByClassName("document-title");

for (let i = 0; i < documentsTitle.length; i++) {
  if (documentsTitle[i].innerText.length >= 45) {
    documentsTitle[i].style.fontSize = "1.05rem";
    documentsTitle[i].style.padding = "1rem";
  }
}

/*Read more - sobreNos */

readMore.addEventListener("click", () => {
  if (aboutTextMore.style.display === "none") {
    aboutTextMore.style.display = "block";
    readMore.innerHTML = "Ver menos";
    aboutText.style.overflowY = "scroll";
    aboutTextIntroduction.style.display = "none";
  } else {
    aboutTextMore.style.display = "none";
    readMore.innerHTML = "Ver mais";
    aboutText.style.overflowY = "hidden";
    aboutTextIntroduction.style.display = "block";
  }
});
