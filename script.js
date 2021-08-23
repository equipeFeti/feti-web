const hambButton = document.querySelector('.hamburguer-menu');
const menu = document.querySelector('.menu-wrapper-ul')

hambButton.addEventListener('click', () => {
  menu.classList.toggle('show-menu')
  menu.classList.toggle('close-menu')
})

