//examples code





$(document).ready( function() {

//---------bx Slider parameters-------------//

  // assign the slider to a variable
  var slider = $('#slider1').bxSlider({
    controls: false
  });

  // assign a click event to the external thumbnails
  $('.thumbs a').click(function(){
   var thumbIndex = $('.thumbs a').index(this);
    // call the "goToSlide" public function
    slider.goToSlide(thumbIndex);
  
    // remove all active classes
    $('.thumbs a').removeClass('pager-active');	
    // assign "pager-active" to clicked thumb
    $(this).addClass('pager-active');
    // very important! you must kill the links default behavior
    return false;
  });
  // assign "pager-active" class to the first thumb
  $('.thumbs a:first').addClass('pager-active');
  // assign "pager-passive" class to the second and last thumb
  
//---------end bx slider-------------//


//--------------footerButtons-------------//
/*$('ul#socialmenu li a').hover(function(){
	$(this).children('img:last').stop().animate({
		opacity:'0'},600);
	},function(){
		$(this).children('img:last').stop().animate({
		opacity:'1'},600,'easeOutCirc');
		});*/
//------------end footer Buttons---------//


//--------------Main menu btns-------------//
/*$('li.mainMenu').hover(function(){
	//alert('It works!');
	$(this).stop().animate({
		width:'7.5em',
		height:'7.5em',
		marginRight:'-0.625em',
		marginLeft:'1.25em'
		});
	$(this).children('a').stop().animate({
		lineHeight:'12.8125em',
		fontSize:'0.625em'});
	},function(){
	$(this).stop().animate({
		width:'6.25em',
		height:'6.25em',
		marginRight:'0',
		marginLeft:'1.875em'
		},1200, 'easeOutElastic');
	$(this).children('a').stop().animate({
		lineHeight:'1.875em'},400, 'easeInOutCirc',function(){
			$(this).animate({
					fontSize:'1.3125em'
				},400,function(){
							$(this).animate({
							lineHeight:'6em'
							},1000, 'easeOutBounce');
						});
					});
			
		});*/
//---------Second Menu Buttons hover--------------//

/*$('li.secondMenu a').hover(function(){
	$(this).stop().animate({
		marginTop:'5px',
		marginBottom:'-5px'
		});
	},function(){
			$(this).stop().animate({
		marginTop:'-5px',
		marginBottom:'5px'
			});
		});*/

//onClick:Scrollto
$('li.mainMenu:nth-child(2)').click(function(){
	//alert('It works!');
	$.scrollTo( 'form#contactPellenetdesign', 2500, 'easeOutCirc');
        // highlight the DIV using jQuery UI effect
       $('#contactPellenetdesign').effect('highlight', {}, 3000);
	});
	$('#formMessage').click(function(){
		//alert('It works!');
		$.scrollTo( 'form#contactPellenetdesign', 2500, 'easeOutCirc');
	        // highlight the DIV using jQuery UI effect
	       $('#contactPellenetdesign').effect('highlight', {}, 3000);
		});

//Read More/Read Less actions

//entry states
$('#onetorule .readless').fadeOut(0);
$('#onetorule p:nth-child(3)').fadeOut(0);
$('#onetorule h6').fadeOut(0);
$('#onetorule .readmore').click(function(){
	//alert('It works!');
	$(this).fadeOut(0);
	$(this).parents().children().find('#onetorule .readless').fadeIn(800);
	
	$(this).parents().children().find('#onetorule p:nth-child(2)').fadeOut(0);
	
	$(this).parents().children().find('#onetorule p:nth-child(3)').fadeIn(800);
	$(this).parents().children().find('#onetorule h6').fadeIn(800);
	});
$('#onetorule .readless').click(function(){
	//alert('It works!');
	$(this).fadeOut(0);
	$(this).parents().children().find('#onetorule .readmore').fadeIn(800);
	
	$(this).parents().children().find('#onetorule p:nth-child(2)').fadeIn(800);
		
	$(this).parents().children().find('#onetorule p:nth-child(3)').fadeOut(0);
	$(this).parents().children().find('#onetorule h6').fadeOut(0);

		
	
	});




//document ready		
});