
const body = document.querySelector("#body");
const readMore = document.querySelector(".read-more-btn");
const aboutTextMore = document.querySelector("#aboutTextMore");
const aboutText = document.querySelector("#aboutText");
const aboutTextIntroduction = document.querySelector("#aboutTextIntroduction");
const loadingScreen = document.querySelector(".loading");
const allContent = document.querySelector(".content");

const name  = document.querySelector("#name"); 
const age  = document.querySelector("#age"); 
const email  = document.querySelector("#email"); 
const cel  = document.querySelector("#cel");
const submitBtn  = document.querySelector(".register-form-btn");
const alarmBox  = document.querySelector(".alarm-box");


/* Tela de loading */

window.addEventListener("load", () => {
  loadingScreen.style.display = "none";
  allContent.style.visibility = "visible";
});


/* Responsive Menu */

const menuLines = document.querySelectorAll(".hamb-lines");
const hambButton = document.querySelector(".hamburguer-menu");
const menu = document.querySelector(".menu-wrapper-ul");

hambButton.addEventListener('click', () => {
  menu.classList.toggle('show');
  hambButton.classList.toggle('rotate')
  menuLines[0].classList.toggle('rotate0')
  menuLines[1].classList.toggle('rotate1')
  menuLines[2].classList.toggle('rotate2')
})

/* adjust title of editais/documents */

const documentsTitle = document.getElementsByClassName("document-title");

for (let i = 0; i < documentsTitle.length; i++) {
  if (documentsTitle[i].innerText.length >= 45) {
    documentsTitle[i].style.fontSize = "1.05rem";
    documentsTitle[i].style.padding = "1rem";
  }
}

/* cel mask */

if (window.location.href.includes('cadastroPCD')) {
  cel.addEventListener('keydown', e => {

    let celInputValue = cel.value
  
    celInputValue = celInputValue.replace(/\D/g,'');
    celInputValue = celInputValue.replace(/(^\d{2})(\d)/,'($1) $2');
    celInputValue = celInputValue.replace(/(\d{4,5})(\d{3}$)/,'$1-$2');
  
    e.target.value = celInputValue;
  })
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

// banco de talentos

submitBtn.addEventListener("click", e => {
  
  if (name.value == '' || age.value == '' || email.value == '' || cel.value == '') {
    e.preventDefault();
    alarmBox.style.display = 'flex'
    alarmBox.style.right = '25px'
    alarmBox.style.top = "150px"
  } 
})

alarmBox.addEventListener('click', e => {
  
  e.target.style.right = "-999px"
})


