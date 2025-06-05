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
  
  const lista = document.querySelector('.carrossel-lista');
  const imagens = document.querySelectorAll('.carrossel-imagem');
  const btnProximo = document.querySelector('.proximo');
  const btnAnterior = document.querySelector('.anterior');

  let posiçãoAtual = 0;

  function updateCarousel() {
    const width = imagens[0].clientWidth;
    lista.style.transform = `translateX(-${posiçãoAtual * width}px)`;
  }

  btnProximo.addEventListener('click', () => {
    posiçãoAtual = (posiçãoAtual + 1) % imagens.length;
    updateCarousel();
  });

  btnAnterior.addEventListener('click', () => {
    posiçãoAtual = (posiçãoAtual - 1 + imagens.length) % imagens.length;
    updateCarousel();
  });

  window.addEventListener('resize', updateCarousel);
