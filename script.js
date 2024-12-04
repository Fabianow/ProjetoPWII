const profileIcon = document.getElementById('profile-icon');
const modal = document.getElementById('profile-modal');
const closeModal = document.getElementById('close-modal');

// Mostrar o modal ao clicar no ícone de perfil
profileIcon.addEventListener('click', (e) => {
    e.preventDefault(); // Evitar redirecionamento
    modal.style.display = 'flex'; // Exibir o modal
});

// Fechar o modal ao clicar no botão de fechar
closeModal.addEventListener('click', () => {
    modal.style.display = 'none'; // Ocultar o modal
});

// Fechar o modal ao clicar fora do conteúdo
modal.addEventListener('click', (e) => {
    if (e.target === modal) {
        modal.style.display = 'none'; // Ocultar o modal
    }
});