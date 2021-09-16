const hambButton = document.querySelector('.hamburguer-menu');
const menu = document.querySelector('.menu-wrapper-ul')
const body = document.querySelector('#body');
const readMore = document.querySelector('.read-more-btn')
const aboutTextMore = document.querySelector('#aboutTextMore')
const aboutText = document.querySelector('#aboutText')
const aboutTextIntroduction = document.querySelector('#aboutTextIntroduction')
const loadingScreen = document.querySelector('.loading');
const allContent = document.querySelector('.content');

console.log(hambButton)

/* Responsive Menu */

hambButton.addEventListener('click', () => {
  console.log("clicado")
  const menuClassActive = menu.classList[1]
  
  switch (menuClassActive) {
    case undefined:
      menu.classList.add('show-menu');
    break;

    case 'show-menu':
      menu.classList.remove('show-menu');
      menu.classList.add("close-menu");
    break;

    case 'close-menu':
      menu.classList.remove('close-menu');
      menu.classList.add('show-menu');
    break;
  
    }
})

/* Tela de loading */

window.addEventListener('load', () => {
  loadingScreen.style.display = 'none'
  allContent.style.visibility = 'visible'
})


/* adjust title of editais/documents */

const documentsTitle = document.getElementsByClassName("document-title");

for(let i = 0; i < documentsTitle.length; i++) {
  if (documentsTitle[i].innerText.length >= 45) {
    documentsTitle[i].style.fontSize = "1.05rem"
    documentsTitle[i].style.padding = "1rem"
  }
}

/*Read more - sobreNos */

readMore.addEventListener('click', () => {
  if (aboutTextMore.style.display === 'none') {
    aboutTextMore.style.display = 'block'
    readMore.innerHTML = "Ver menos"
    aboutText.style.overflowY = 'scroll'
    aboutTextIntroduction.style.display = 'none'
  } else {
    aboutTextMore.style.display = 'none'
    readMore.innerHTML = "Ver mais"
    aboutText.style.overflowY = 'hidden'
    aboutTextIntroduction.style.display = 'block'
  } 

})

