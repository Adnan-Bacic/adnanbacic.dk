//Go back to last page
const backbtn = document.querySelector('#backbtn');

backbtn?.addEventListener('click', () => {
    window.history.back();
});