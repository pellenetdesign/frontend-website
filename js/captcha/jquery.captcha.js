;(function( $ ){
	$.fn.captcha = function(options){
			
		
	var defaults = {  
	   borderColor: "",  
	   captchaDir: "js/captcha",  
	   url: "js/captcha/captcha.php",  
	   formId: "contactPellenetdesign",  
	   text: "Hold on!, please verify that you are a human<br /> by dragging the <span>Green drop</span> into the circle.",
	   items: Array("Orange drop", "Yellow drop", "Green drop", "Red drop", "Black drop") 
	   //items: Array("pencil", "scissors", "clock", "heart", "note") 
	  };	
	
	var options = $.extend(defaults, options); 

		
	$(this).html("<div id='ajax-fc-content'><div id='ajax-fc-left'><p id='ajax-fc-task'>" + options.text + "</p><ul id='ajax-fc-task'><li class='ajax-fc-0'><img src='" + options.captchaDir + "/imgs/item-none.png' alt='' /></li><li class='ajax-fc-1'><img src='" + options.captchaDir + "/imgs/item-none.png' alt='' /></li><li class='ajax-fc-2'><img src='" + options.captchaDir + "/imgs/item-none.png' alt='' /></li><li class='ajax-fc-3'><img src='" + options.captchaDir + "/imgs/item-none.png' alt='' /></li><li class='ajax-fc-4'><img src='" + options.captchaDir + "/imgs/item-none.png' alt='' /></li></ul></div><p id='ajax-fc-circle'></p>");
	var rand = $.ajax({ url: options.url,async: false }).responseText;

	var pic = randomNumber();
	$(".ajax-fc-" + rand).html( "<img src=\"" + options.captchaDir +"/imgs/item-" + options.items[pic] + ".png\" alt=\"\" />");
	$("p#ajax-fc-task span").html(options.items[pic]);
	$(".ajax-fc-" + rand).addClass('ajax-fc-highlighted');
	$(".ajax-fc-" + rand).draggable({ containment: '#ajax-fc-content' });
	var used = Array();
	for(var i=0;i<5;i++){
		if(i != rand && i != pic)	
		{
			$(".ajax-fc-" +i).html( "<img src=\"" + options.captchaDir +"/imgs/item-" + options.items[i] + ".png\" alt=\"\" />");
			used[i] = options.items[i];
		}
	}
	
	$("#ajax-fc-circle").droppable({
		drop: function(event, ui) {
			$(".ajax-fc-" + rand).draggable("disable");
			$("#" + options.formId).append("<input type=\"hidden\" style=\"display: none;\" name=\"captcha\" value=\"" + rand + "\">");
		},
		tolerance: 'touch'
	});	
	};

})( jQuery );

function randomNumber() {
	var chars = "01234";
	chars += ".";
	var size = 1;
	var i = 1;
	var ret = "";
		while ( i <= size ) {
			$max = chars.length-1;
			$num = Math.floor(Math.random()*$max);
			$temp = chars.substr($num, 1);
			ret += $temp;
			i++;
		}
	return ret;
}
