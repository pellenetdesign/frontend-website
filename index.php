<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<!--http://paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither-->

<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->

<!--//-HTML5 Polyfill for <IE9-//-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<title>Welcome to Pellenetdesign</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/960fluid.css">
<link rel="stylesheet" href="css/text.css">
<link rel="stylesheet" href="js/captcha/captcha.css">
<link rel="stylesheet" href="css/default.css">
<link rel="stylesheet" href="css/bx_styles.css">
<!--PRELOAD-->
<script>
		<!--//--><![CDATA[//><!--
			var images = new Array()
			function preload() {
				for (i = 0; i < preload.arguments.length; i++) {
					images[i] = new Image()
					images[i].src = preload.arguments[i]
				}
			}
			preload(
				"images/bg/logo_960.png",
				"images/photos/pellePose.png",
				"images/photos/pellePosePose.png",
				"images/photos/pellePosePosePose.png",
				"images/slider/stockngo/StockBefore.png",
				"images/slider/stockngo/stockngAfter.png",
				"images/btn/footerbuttons/twitterOn.png",
				"images/btn/footerbuttons/linkedinOn.png",
				"images/btn/footerbuttons/facebookOn.png",
				"images/btn/footerbuttons/flickrOn.png",
				"images/slider/stockngo/StockBefore.png",
				"images/slider/stockngo/stockngAfter.png",
				"images/slider/stockngo/StockBefore.png",
				"images/btn/blueDrop.png"
			)
		//--><!]]>
</script>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>
<body>
<!--960 wrap-->
<div id="background" class="container_16">
	<header id="logotype" class="grid_16">
        <h1 class="navTitle">Home of Pellenetdesign</h1>
    
        
       <nav id="mainMenu">
        	<h1 class="navTitle">Main Page Navigation</h1>
            <ul>
                <li class="mainMenu">
                	<a href="#" title="home">
                    	<p>Home</p>
                    </a>
 				</li>
                <li class="mainMenu">
                    <a href="#" title="Contact">
                    	<p>Contact</p>
                    </a>
                </li>
                <li class="mainMenu">
                    <a href="#" title="Blog">
                    	<p>Blog</p>
                    </a>
                </li>
            </ul>
        </nav>
         <aside>
         <div id="formMessage" class="clearBoth floatLeft push_1">
         	 <!-- if the variable "wrong_code" is sent from previous page then display the error field -->
                        <?php if(isset($_GET['wrong_code'])){?>
                        Wrong verification code, are you a robot?
                        <?php ;}?>
         </div>
         </aside>
        <article id="welcome" class="floatRight">
            <hgroup>
                <h1 id="hello" class="fontMainBold">My name is Jarl</h1>
                <h6 class="fontHandwrittenBold margin_vert_5">I'm a webdesigner, photographer, musician &amp; I'm absolutely bonkers about CSS, HTML5, jQuery and all things Apple.
                </h6>
            
                
			</hgroup>
			<p class="fontMainRegular">
                For the years in the past, the tedious work of forcing websites to appear correctly in all browsers, all resolutions &amp; all mobile devices has been a mind-boggling time-spender.  We are entering a new era, where the work of 'Numerous JavaScript-traps &amp; Anti-Semantic IE-bugfixes' is over. We are able create online applications comfortable in ALL medias, with ease. This is more a philosophy than pure development, it's called 'Responsive Design'.
                </p>	
		</article>
	</header>
	<div class="clearBoth"></div>

    <!-- main content-->
    <section>
    
        <h1 class="navTitle">Jarl Explains His way Of Working</h1>
    	<div id="mainContent">
        
        
        
            <nav>
        <h1 class="navTitle">Slider Navigation</h1>
                <ul class="thumbs">
                    <li class="secondMenu">
                        <a href="index.php" title="Who is Jarl">
                            1
                        </a>
                    </li>
                    <li class="secondMenu">
                        <a href="index.php" title="What is Jarl">
                            2
                        </a>
                    </li>
                    <li class="secondMenu">
                        <a href="index.php" title="Work of Jarl">
                            3
                        </a>
                    </li>
                </ul>
            </nav>          
            
            
            
        <!--<div class="slider1">-->
            <ul id="slider1">
            
              <!-- Slide 1 start-->
              <li id="sliderpage1" class="grid_16 sliderPagePosition">
              	<article>
                    	<h1 class="navTitle">What makes Jarl tick</h1>
						<aside class="grid_6 floatLeft">
                        	<h1 class="navTitle">A photo of a surprised Jarl</h1>
                            <img src="images/photos/pellePose.png" alt="Jarl Pelle Helin Photo" class="pellePose">
                        </aside>
                        
                        <aside class="grid_3 pull_1 fontHandwrittenRegular margin_vert_2">
                            <p class="speekCloud_first floatLeft">But!</p>
                            <p class="speekCloud_middle floatLeft">
                                ..OH MY?!
                            </p>
                            <div class="speekCloud_last floatLeft">
                                ...
                            </div>
                        </aside>
                        <div id="onetorule" class="grid_7 floatLeft">
							
								<h5 class="noMargin padding_vert_5">
									One page to rule them all
								</h5>							 <p>
                                Using Responsive &amp; Progressive Design as the cornerstone building robust web-pages for the future, it becomes easy to alter content of a website. Add Drupal, HTML5, jQuery &amp; a few Polyfills to the brew and you get a very powerful, dynamic &amp; fluid website. 
                                <p>Need a blog, a webportal, a forum or a secure paysite? It has to apply perfectly to your SMART-phone, your tablet and to your desktop?</p> 
                                <h6 class="fontHandwritten fontSize_140 margin_vert_5">
                                I'm here to create your page, the one to rule them all!
                                </h6>   
                        </div>
				</article> 
              <!-- Slide 1 end-->
              </li>
              
              
              <!-- Slide 2 start-->
			<li id="sliderpage2" class="grid_16 sliderPagePosition">
                <article>
                                        <aside class="grid_4">
                                        	<h1 class="navTitle">A photo of Jarl</h1>
                                            <img src="images/photos/pellePosePose.png" alt="Jarl Pelle Helin Photo" class="pellePosePose margin_vert_15">
                                        </aside>
                                    <div id="resume" class="grid_12 margin_vert_2">
                                    <h1 class="navTitle">Jarl's background</h1>
                                      
                                      <table id="cv" border="0">
                                      	<thead>
										  <tr>
										    <th>Experience</th>
										  </tr>
                                      	</thead>
                                      	<tbody class="experience">
										  <tr>
										    <td>
										    	<a href="#">
                                       		    <p class="titleResume">Independent Contractor</p>
                                       		    <p class="yearResume">Feb 12 - Present</p>
                                       		    </a>
                                            </td>
										    <td>
										    	<a href="#">
                                       		    <p class="titleResume">Webdesigner Freelance</p>
                                       		    <p class="yearResume">Aug 07 - Oct 10</p>
                                       		    </a>
                                            </td>
                                            <td>
										    	<a href="#">
                                       		    <p class="titleResume">Lecturer in Graphic &amp; Webdesign</p>
                                       		    <p class="yearResume">Sept 10 - Oct 10</p>
                                       		    </a>
                                            </td>
                                            <td>
										    	<a href="#">
                                       		    <p class="titleResume">Multimedia Designer</p>
                                       		    <p class="yearResume">Sept 08 - Oct 09</p>
                                       		    </a>
                                            </td>
										  </tr>
                                      	</tbody>
                                      	<thead>
										  <tr>
										    <th>Education</th>
										  </tr>
										  <tbody class="education">
										  <tr>
										    <td>
										    	<a href="#">
                                       		    <p class="titleResume">Intensive Graphic Design &amp; Print Program</p>
                                       		    <p class="yearResume">Oct 09 - June 10</p>
                                       		    </a>
                                            </td>
										    <td>
										    	<a href="#">
                                       		    <p class="titleResume">Webmaster Licence</p>
                                       		    <p class="yearResume">Sept 03 - July 04</p>
                                       		    </a>
                                            </td>
                                            <td>
										    	<a href="#">
                                       		    <p class="titleResume">Certificate in Musical Studies</p>
                                       		    <p class="yearResume">Apr 00 - Oct 00</p>
                                       		    </a>
                                            </td>
                                            <td>
										    	<a href="#">
                                       		    <p class="titleResume">Professional Firefighter Diploma</p>
                                       		    <p class="yearResume">Feb 96 - Mar 97</p>
                                       		    </a>
                                            </td>
										  </tr>
                                      	</tbody>
                                      	</thead>
										</table>
										
										                                       </div>
                                                        
                </article>
            <!-- Slide 2 end-->
			</li>
              
              <!-- Slide 3 start-->
              <li id="sliderpage3" class="grid_16 sliderPagePosition">
              		<article>
                    	<h1 class="navTitle">An example of work done, before &amp; after</h1>
                        <div class="grid_6 floatLeft">
                            <a href="#" title="Stock'nGO before work">
                                <img src="images/slider/stockngo/StockBefore.png" alt="Stockngo Before" class="StockngoBefore">
                            </a>
                        	<h3 class="fontHandwritten">Before</h3>
                        </div>
                            <aside class="grid_4 floatLeft">
                            	<h1 class="navTitle">A photo of Jarl</h1>
                                <img src="images/photos/pellePosePosePose.png" alt="Jarl Pelle Helin Photo" class="pellePosePosePose">
                            </aside>
                        <div class="grid_6 floatLeft">
                            <a href="#" title="Stock'nGO finished product">
                                <img src="images/slider/stockngo/StockngAfter.png" alt="Stockngo finished product" class="StockngoAfter">
                            </a>
                            <h3 class="fontHandwritten">After</h3>
                        </div>
                    </article>
                <!-- Slide 3 end-->
              </li>
			<!--end ul#slider1-->
			</ul>	
            
           
    <!--end id="maincontent"-->  
  
    	</div>
	</section>






    
    <footer class="grid_16 noMargin noPadding">
    <h1 class="navTitle">Social Networking, Miscellanous Links &amp; Contact Form</h1>
       	
        
        	<article class="fontTypewriter">
				<h1 class="navTitle">Miscellanous links, blogs, Resumes &amp; Contact Form</h1>
                			
                <nav class="footermenu grid_8 floatLeft fontTypewriter">
                	<h2 class="navTitle">Jarl's Personal Information</h2>
                    <ul id="footerbackground">
                        <li class="contactLinks grid_7 prefix_1">
                       		<h4 class="navTitle">Jarl's Resume in English, French &amp; Swedish</h4>
                            <a href="#" title="Title">
                                Arty Resume
                            </a><br />
                            <a href="#" title="Title">
                                Legible Resume
                            </a><br />
                            <a href="#" title="Title">
                                Curriculum Vitae
                            </a><br />
                            <a href="#" title="Title">
                                Levnadsbeskrivning
                            </a>
                        </li>
                        <li class="contactLinks grid_7 prefix_1">
                       		<h5 class="navTitle">Jarl's other websites &amp; blogs</h5>
                        	<a href="http://movingtoorlando.tumblr.com" title="Jarl's US Photo BLog">
                        		Moving To Orlando
                            </a><br />
                            <a href="#" title="All things GEEK">
                            	Geektastic
                            </a><br />
                        	<a href="#" title="Puff on">
                        		Cigars
                            </a><br />
                            <a href="#" title="Quote your website">
                        		Quote your website
                            </a>
                        </li>
                        
                    </ul>
				</nav>
                
            
				<nav id="tribute" class="footermenu floatLeft clearLeft">
                        <h6 class="tribute">A tribute goes out to the folks making the web a fun toy to play with :</h6>
                            <p class="contactLinks padding_vert_5 tribute">Nathan Smith for his <a href="http://960.gs" title="Website prototyping">960.gs</a> &amp; his new plug <a href="http://formalize.me" title="Making forms generic">Formalize</a>, Ethan Marcotte for his book on <a href="http://www.abookapart.com/products/responsive-web-design" title="Buy it, read it">Responsive Design</a> &amp; Paul Irish for his work on the <a href="http://html5boilerplate.com" title="A great source for a complete HTML5 setup">HTML5 Boilerplate</a>, not to forget his FAB IE bugfix at <a href="http://paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither">Paulirish.com</a>. I also would like to thank Dan Cederholm for his webinars &amp; his book <a href="http://www.abookapart.com/products/css3-for-web-designers">'CSS3 for Designers'</a>, <a href="http://www.alistapart.com" title="My absolute favourite">A List Apart</a> for a boastin' website, the guys at <a href="http://www.acquia.com" title="The best Drupal community in the world">Aqcuia</a> &amp; the geeks at <a href="http://drupalize.me" title="Drupalize ME">Lullabot</a> for making great Drupal tutorials.
                           </p> 
				</nav>
                
                    <form class="floatRight" name="form1" id="contactPellenetdesign" method="post" action="Form/mailer.php" onsubmit="MM_validateForm('from','','RisEmail','subject','','R','verif_box','','R','message','','R');return document.MM_returnValue">
                        <h1 class="navTitle">Contact Form</h1>
                      
                        <input type="text" name="name" id="name" tabindex="10" autocomplete="on" placeholder="Your name" value="<?php echo $_GET['name'];?>">
                   
                        <input type="email" name="from" id="from email" tabindex="20" autocomplete="on" placeholder="you@yourdomain" value="<?php echo $_GET['from'];?>">
                       
                        <input type="text" name="subject" id="subject" tabindex="30" autocomplete="off" placeholder="Subject" value="<?php echo $_GET['subject'];?>">
                      
                        <input type="text" name="verif_box" id="verif_box" tabindex="40" autocomplete="off" placeholder="Type verification image">
                        <img src="Form/verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image, type it in the box" />
                        
                        <textarea name="message" tabindex="70" rows="5" id="message" autocomplete="off" placeholder="Your message"><?php echo $_GET['message'];?></textarea>
                       
                        <input type="submit" name="Submit" id="submit" value="Hit it!"/>
					</form>
                    

                    
                    
                <aside id="miscPosition" class="floatLeft clearLeft">
                    <h1 class="navTitle">Miscellanous Links to important Website Tools</h1>
                    <nav class="alignCenter">
                        <ul>
                            <li class="miscFooterLinks floatLeft">
                                <h3 class="navTitle">960.gs</h3>
                                <a href="#" title="Prototyping">
                                    <img src="images/btn/footerbuttons/960gs.png" alt="960.gs Link" <!--onmouseover="desaturate(this);-->">
                                </a>
                            </li>
                            <li class="miscFooterLinks floatLeft">
                                <h2 class="navTitle">Drupal</h2>
                                <a href="#" title="The best CMS out there">
                                    <img src="images/btn/footerbuttons/drupal.png" alt="Drupal Link" <!--onmouseover="desaturate(this);-->">
                                </a>
                            </li>
                            <li class="miscFooterLinks floatLeft">
                                <h4 class="navTitle">jQuery</h4>
                                <a href="#" title="A JavaScript framework at it's best">
                                    <img src="images/btn/footerbuttons/jQuery.png" alt="jQuery Link" <!--onmouseover="desaturate(this);-->">
                                </a>
                            </li>
                        </ul>
                    </nav>
                </aside>
            </article>
  </footer>

<!--end container_16/960 wrap-->
</div>
<aside class="alignCenter">
   <h1 class="navTitle">Copyright</h1>
   <p id="copyright">&copy; 2012 Pellenetdesign</p>
</aside>



<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery-ui-1.8.20.custom.min.js"></script>
<script src="js/captcha/jquery.captcha.js"></script>
<script src="js/jQuery.easing.1.3.js"></script>
<script src="js/jquery.bxSlider.min.js"></script>
<script src="js/jquery.formalize.min.js"></script>
<script src="js/animation.js"></script>
<script src="js/pixastic.custom.js"></script>
<script src="js/jquery.scrollTo-1.4.2-min.js"></script>
<script src="js/animationPixastic.js"></script>
</body>
</html>


