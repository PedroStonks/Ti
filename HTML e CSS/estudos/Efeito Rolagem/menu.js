
document.querySelectorAll('.flip').forEach(flip => {
    flip.addEventListener('click', () => {
        flip.classList.toggle('flipped');
    });
});
