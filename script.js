const hambButton = document.querySelector('.hamburguer-menu');
const menu = document.querySelector('.menu-wrapper-ul')
const body = document.querySelector('#body');



hambButton.addEventListener('click', () => {
  const menuClassActive = menu.classList[1]
  console.log(menuClassActive)

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
