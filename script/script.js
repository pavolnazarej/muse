$(document).ready(function() {
	$('.create').click(function(){
   window.location.href='Register.php';
});$('.tryit').click(function(){
   window.location.href='Register.php';
});
    
$('.sign').click(function(){
   window.location.href='signin.php';
});
    
 $('a.menu').click(function(){
    $('a.menu').removeClass("active");
    $(this).addClass("active");
});
    
});

