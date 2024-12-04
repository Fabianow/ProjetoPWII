// JavaScript para adicionar interatividade, como mostrar/ocultar seções, validações, etc.

// Exemplo simples para mostrar/ocultar seções ao clicar nos links da navegação
const sections = document.querySelectorAll('section');
const navLinks = document.querySelectorAll('nav a');

navLinks.forEach(link => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    const targetId = link.getAttribute('href').substring(1);
    sections.forEach(section => {
      section.style.display = section.id === targetId ? 'block' : 'none';
    });
  });
});