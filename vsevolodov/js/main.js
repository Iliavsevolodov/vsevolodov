function slowScroll(id) { 
    var offset = 0;
    $('html, body').animate({ 
         scrollTop: $(id).offset().top - offset 
    }, 1000);
    return false; 
} 

 $(function() {
 
$(window).scroll(function() {
 
if($(this).scrollTop() != 0) {
 
$('#toTop').fadeIn();
 
} else {
 
$('#toTop').fadeOut();
 
}
 
});
 
$('#toTop').click(function() {
 
$('body,html').animate({scrollTop:0},800);
 
});
 
});