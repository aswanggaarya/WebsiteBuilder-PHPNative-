// event link
$('.page-scroll').on('click', function(e){
	//ambil isi href

	var tujuan = $(this).attr('href');
	
	//tangkap elemen bersangkutan

	var elemenTujuan = $(tujuan);

	//pindahkan scroll

	//$('body').scrollTop(elemenTujuan.offset().top);
	$('html,body').animate({
		scrollTop: elemenTujuan.offset().top - 50
	});

	e.preventDefault();
});




// paralax
// about

$(window).on('load', function(){
	$('.Pkiri').addClass('Pmuncul');
	$('.Pkanan').addClass('Pmuncul');
});


$(window).scroll(function(){
	var wScroll = $(this).scrollTop();

	$('.jumbotron img').css({
		'transform' : 'translate(0px, '+ wScroll/4 +'%)'
	});

	$('.jumbotron h1').css({
		'transform' : 'translate(0px, '+ wScroll/2 +'%)'
	});

	$('.jumbotron p').css({
		'transform' : 'translate(0px, '+ wScroll/1.2 +'%)'
	});

	//console.log(wScroll);

	//portfolio


				

		
		//300 = 0.3s
		//console.log('ok');
});