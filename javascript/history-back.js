console.log('Console log error due to the 404 page being the only page with a backbtn. Putting it only on the 404 page causes stutters.');

//Go back to last page
backbtn.addEventListener('click', () => {
    window.history.back();
});