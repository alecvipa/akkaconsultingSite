  <div id="footer-wrap" class="is-clearfix" style="border-top: 1px solid #f3f3f3; background-color: #00356C; padding: 60px 0 60px">
        <footer id="footer" class="site-footer">
          <div id="footer-inner" class="site-footer-inner container">
            <div class="row">
              <div class="col-md-8" style="display: flex; flex-wrap: wrap">
                    <div class="align-logo-footer" style="display: inline-block">
                      <a href="index">
						<img src="../img/logo-blanco-home.png" style="width: 207px; height: auto" alt="">
                      </a>
                    </div>
				    <div class="menu-footer" style="display: inline-block">
				  		<ul>
							<li><a href="index">Inicio</a></li>
							<li><a href="#">Soluciones</a></li>
							<li><a href="#">Nosotros</a></li>
							<li><a href="#">Contacto</a></li>
							<li><a href="#">Blog</a></li>
						</ul>
				    </div>
                </div>
              
              <div class="col-md-4 right-footer" style="display: flex; flex-direction: column">
                	<ul class="social">
                      <li>
                        <a href="#" target="_blank">
                          <span class="icon">
                            <i class="fa fa-facebook"></i>
                          </span>
                        </a>
                      </li>
<!--
                      <li>
                        <a href="#" target="_blank">
                          <span class="icon">
                            <i class="fab fa-twitter"></i>
                          </span>
                        </a>
                      </li>
-->
                      <li>
                        <a href="#" target="_blank">
                          <span class="icon">
                            <i class="fa fa-instagram"></i>
                          </span>
                        </a>
                      </li>
                      <li>
                        <a href="#" target="_blank">
                          <span class="icon">
                            <i class="fa fa-linkedin"></i>
                          </span>
                        </a>
                      </li>
                    </ul>
                    <p><b>Akka Consulting SA. CV.</b> Todos los derechos reservados. Sus datos est??n protegidos por la ley de privacidad.</p>  
                    
					
               </div>
                  <!-- .tagcloud -->
                
            
              <!-- .column -->
            </div>
            <!-- .columns -->
          </div>
          <!-- #footer-inner -->
        </footer>
        <!-- #footer -->
      </div>
      <!-- #footer-wrap -->
      
      <!-- #footer-bottom-wrap -->
      <!-- show floating buttons -->
      
      
    </div>
    <!-- #site-wrap -->

 
    <script src="js/bootstrap.js"></script>
    <script src="js/slick.js"></script>
  <!--TODO: Put this code in script file-->
  <script>
      $('div.dropdown').hover(function() {
          $('a.dropdown-toggle').dropdown("toggle");
      }, function() {
          $('a.dropdown-toggle').dropdown('toggle');
      });

      $('li.index-tab').click(function(){
          $('li.index-tab').removeClass('is-active');
          $(this).addClass('is-active');
      });
	  
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 500) {
        $(".clearHeader").addClass("darkHeader");
    } else {
        $(".clearHeader").removeClass("darkHeader");
    }
});


  
	  
		$(function() {
			//caches a jQuery object containing the header element

			
			var logo = $(".logo-top-white");
			var width = $(window).width();
			if (width < 993) {
					logo.addClass("logo-top-scrolled");
				} else {
			
					$(window).scroll(function() {
						var scroll = $(window).scrollTop();
						var width = $(window).width();
						if (scroll <= 80 && width < 993) {
							logo.addClass("logo-top-scrolled");
						} else if (scroll <= 80 && width >= 993) {
							logo.removeClass("logo-top-scrolled");  
						} else {
							logo.addClass("logo-top-scrolled");
						}
					});
				}
		});	
	  

	  
//$( document ).ready(function() {	  
//	  
//		$(function() {
//			//caches a jQuery object containing the header element
//
//			var logo = $(".logo-top-white");
//			$(window).scroll(function() {
//				var scroll = $(window).scrollTop();
//				var width = $(window).width();
//				if (scroll <= 80 && width < 993) {
//					logo.addClass("logo-top-scrolled");
//				} else if (scroll <= 80 && width >= 993) {
//					logo.removeClass("logo-top-scrolled");  
//				} else {
//					logo.addClass("logo-top-scrolled");
//				}
//			});
//		});	
//	  
//	});
	  
$(function() {
    //caches a jQuery object containing the header element
    var header = $(".navbar-dark");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
		var width = $(window).width();
        if (width < 993) {
            header.addClass("scrolled-nav");
        } else if (scroll >= 80 && width >= 993) {
			 header.addClass("scrolled-nav");
            
        } else {
			header.removeClass("scrolled-nav");
		}
    });
});	
	  
//$(function() {
//    //caches a jQuery object containing the header element
//    var header = $(".navbar-dark");
//	var logo = $(".logo-top-white");
//    $(window).scroll(function() {
//        var scroll = $(window).scrollTop();
//		var width = $(window).width();
//        if (scroll >= 80 && width > 993 ) {
//            header.addClass("scrolled-nav");
//			logo.addClass("logo-top-scrolled");
//        } else {
//            header.removeClass("scrolled-nav");
//			logo.removeClass("logo-top-scrolled");
//        }
//    });
//});	
  </script>
  <script>
	  window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80 && window.innerWidth > 900) {
		document.getElementById("header-wrap").style.background = "#fff";
		document.getElementById("logo").style.margin = "15px 0";
//		document.getElementsByClassName("logo").style.margin = "10px 0";
	  } else {
		document.getElementById("header-wrap").style.background = "transparent";
		document.getElementById("logo").style.margin = "15px 0";
//		document.getElementsByClassName("logo").style.margin = "10px 0";
	  }
	}

  </script>
   <script>
 	$(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready

// breakpoint and up  
$(window).resize(function(){
	if ($(window).width() >= 980){	

      // when you hover a toggle show its dropdown menu
      $(".navbar .dropdown-toggle").hover(function () {
         $(this).parent().toggleClass("show");
         $(this).parent().find(".dropdown-menu").toggleClass("show"); 
       });

        // hide the menu when the mouse leaves the dropdown
      $( ".navbar .dropdown-menu" ).mouseleave(function() {
        $(this).removeClass("show");  
      });
  
		// do something here
	}	
});  
  
  

// document ready  
});
   </script>
<!--  Counter	-->
	<script>
		(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
    </script>

<!--CAROUSEL-->

<script>
	
	  $('.center').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 4,
  arrows: false,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
 		
	function prevSlide(){
		 $('.center').slick('slickPrev');
	}
	function nextSlide(){
		 $('.center').slick('slickNext');
	}	
	
</script>
<script>

	  $('.single').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 4,
  dots: false,
  arrows: false,
  responsive: [
	  {
      breakpoint: 1200,
      settings: {
		dots: false,
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 768,
      settings: {
		dots: false,
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});

	
</script>


  </body>
</html>