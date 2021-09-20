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

hambButton.addEventListener("click", () => {
  const menuClassActive = menu.classList[1];

  switch (menuClassActive) {
    case undefined:
      console.log("to no undefined ")
      menu.classList.add("show-menu");

      hambButton.style.gap = "0";
      menuLines[0].style.top = "3.5px";
      menuLines[0].style.transform = "rotate(125deg)";
      menuLines[2].style.transform = "rotate(55deg)";
      menuLines[1].style.transform = "TranslateX(100px)";
      break;

    case "show-menu":
      // fechar menu
      if (controler == 1) {
        console.log("to no show-menu controler 1 ")
        menu.classList.add("close-menu");
        menu.classList.remove('show-menu');
        

    
        hambButton.style.gap = "5px";
        menuLines[0].style.top = "-1px";
        menuLines[0].style.transform = "rotate(0deg)";
        menuLines[2].style.transform = "rotate(0deg)";
        menuLines[1].style.transform = "rotate(0deg)";
        
        controler = 2
      } else {
        menu.classList.remove("show-menu");
        menu.classList.add("close-menu");
  
        hambButton.style.gap = "5px";
        menuLines[0].style.top = "-1px";
        menuLines[0].style.transform = "rotate(0deg)";
        menuLines[2].style.transform = "rotate(0deg)";
        menuLines[1].style.transform = "TranslateX(0px)";
        console.log("to no show-menu else")
      }
  break;

    case "close-menu":

      if (controler == 2) {
        console.log("to no close-menu controler 2 ")
        hambButton.style.gap = "0px";
        menuLines[0].style.top = "3.5px";
        menuLines[0].style.transform = "rotate(125deg)";
        menuLines[2].style.transform = "rotate(55deg)";
        menuLines[1].style.transform = "TranslateX(100px)"
        
        menu.classList.remove('close-menu')
        menu.classList.add('show-menu')
      }  else {
        console.log("to no sclose-menu else")
        menu.classList.remove("close-menu");
        menu.classList.add("show-menu");
  
        hambButton.style.gap = "5px";
        menuLines[0].style.top = "-1px";
        menuLines[0].style.transform = "rotate(0deg)";
        menuLines[2].style.transform = "rotate(0deg)";
        menuLines[1].style.transform = "TranslateX(100px)"
      }
      break;
  }
});



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
