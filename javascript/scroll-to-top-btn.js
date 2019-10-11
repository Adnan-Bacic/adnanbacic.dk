//Scrolls the user to the top of the page
var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});


/*
let btn = document.querySelector('#button');
window.addEventListener('scroll', scrollTop);
	function scrollTop(){
		if (window.scrollTop() > 300){
		btn.classList.add('show');
	} else {
		btn.classList.remove('show');
	}
	};


window.scroll(function(){
	if (window.scrollTop() > 300){
		btn.classList.add('show');
	} else {
		btn.classList.remove('show');
	}
});
*/


/*
btn.addEventListener('click', scrollToTop);
function scrollToTop(){
	document.documentElement, document.body
}
*/