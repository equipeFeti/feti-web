const hambButton = document.querySelector('.hamburguer-menu');
const menu = document.querySelector('.menu-wrapper-ul')
const body = document.querySelector('#body');

/* adjust title of editais/documents */

const documentsTitle = document.getElementsByClassName("document-title");

for(let i = 0; i < documentsTitle.length; i++) {
  if (documentsTitle[i].innerText.length >= 45) {
    documentsTitle[i].style.fontSize = "1.05rem"
    documentsTitle[i].style.padding = "1rem"
  }
}

/* Responsive Menu */

hambButton.addEventListener('click', () => {
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
