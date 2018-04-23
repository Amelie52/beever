<footer>


		<div class="grid-3-small-1">
			<div></div>
			<div class="networks txtcenter">
				<div class="grid-3">
					<a href=""><div class="round_network"><i class="fa fa-facebook" aria-hidden="true"></i></div></a>
					<a href=""><div class="round_network"><i class="fa fa-twitter" aria-hidden="true"></i></div></a>
					<a href=""><div class="round_network"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a>
				</div>
			</div>
			<div></div>
		</div>

		<form class="txtcenter newsletter" action="../view/newsletter.php" method="POST">
			<label> Get the Newsletter </label>
			<input type="mail" name="email" placeholder="Your email">
			<button type="submit" name="Send" value="Send">Send</button>
		</form><br>


		<div class="conditions txtcenter">
			<div>
				<span>© 2016 Beever</span>
				<a href="">Legale Notices</a>  
				<a href="">Conditions of use</a> 
				<a href="">Risk Factor</a> 
				<a href="">Contact</a>
				<a href=""><i class="fa fa-question-circle" aria-hidden="true"></i><b> F.A.Q</b></a>
				<!-- <a href=""><img src="../photos/drapeau_us.png" alt="flag"></a> <a href=""><img src="../photos/drapeau_fr.png" alt="flag"></i></a>   -->
			</div>
		</div>

	

</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="../js/slick.js" type="text/javascript" charset="utf-8"></script>
<script>
	$(document).ready(function(){

		// if(winWidth <= 640) {
		// 			var winWidth = $(window).width();
		// 			$(".bar").addClass("grid-item-first");
		// 			$(".bar").css("margin-left", "0");
		// 		}
			
		// 	    $(window).resize(function(){
		// 	     	var width = $(window).width();
		// 			if(width <= 640) {
		// 				$(".bar").addClass("grid-item-first");
		// 				$(".bar").css("margin-left", "0");
		// 			} else {
		// 				$(".bar").removeClass("grid-item-first");
		// 				$(".bar").css("margin-left", "2rem");
		// 			}
		// 	    });

	  $(".one").slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });
      $(".three").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });


		$('.menu').hide(0);
		$('.title_mobile').click(function(){
			$('.menu').slideToggle();
		});

		function $$(selector, context) {
			context = context || document;
			var elements = context.querySelectorAll(selector);
			return Array.prototype.slice.call(elements);
		}

		// var i = 0;

		// $(document).ready(function() {
		// 	$('.slider_3').slick({
		// 		slidesToShow: 3,
		// 		slidesToScroll: 1,
		// 		autoplay: true,
		// 		autoplaySpeed: 8000,
				
		// 	});
		// });

		function $$(selector, context) {
			context = context || document;
			var elements = context.querySelectorAll(selector);
			return Array.prototype.slice.call(elements);
		} 

		$$('.pie').forEach(function(pie) {
			var p = parseFloat(pie.textContent);
			var NS = "http://www.w3.org/2000/svg";
			var svg = document.createElementNS(NS, "svg");
			var circle = document.createElementNS(NS, "circle");
			var title = document.createElementNS(NS, "title");


			circle.setAttribute("r", 16);
			circle.setAttribute("cx", 16);
			circle.setAttribute("cy", 16);
			circle.setAttribute("stroke-dasharray", p + " 100");

			svg.setAttribute("viewBox", "0 0 32 32");
			title.textContent = pie.textContent;
			pie.textContent = '';
			svg.appendChild(title);
			svg.appendChild(circle);
			pie.appendChild(svg);
		});
	});
</script>