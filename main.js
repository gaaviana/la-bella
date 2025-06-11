const btnMenu = document.getElementById('botao-menu');
const iconMenu = document.getElementById('icon-menu');
const menu = document.getElementById('menu');

btnMenu.addEventListener('click', () => {
  menu.classList.toggle('ativo');

  if (menu.classList.contains('ativo')) {
    iconMenu.classList.remove('fa-bars');
    iconMenu.classList.add('fa-times');
  } else {
    iconMenu.classList.remove('fa-times');
    iconMenu.classList.add('fa-bars');
  }
});
  
