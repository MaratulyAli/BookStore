let backToTopBtn = document.querySelector('#back_to_top');
backToTopBtn.addEventListener('click', backToTop);
function backToTop() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0;
}