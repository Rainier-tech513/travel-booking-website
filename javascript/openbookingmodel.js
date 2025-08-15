const bookBtn = document.getElementById('book-btn');
const overlay = document.getElementById('overlay');
const modal = document.getElementById('modal');
const closeModal = document.getElementById('close-modal');

bookBtn.addEventListener('click', () => {
    overlay.style.display = 'block';
    modal.style.display = 'block';
});

closeModal.addEventListener('click', () => {
    overlay.style.display = 'none';
    modal.style.display = 'none';
});

overlay.addEventListener('click', () => {
    overlay.style.display = 'none';
    modal.style.display = 'none';
});