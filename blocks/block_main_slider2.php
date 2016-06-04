<link rel="stylesheet" href="vendor/owl.carousel/dist/assets/owl.carousel.min.css" />
<script src="vendor/owl.carousel/dist/owl.carousel.min.js"></script>
<link href="vendor/owl.carousel/dist/assets/owl.transitions.css" rel="stylesheet">

<section class="main-slide">
	<div id="main_slider" class="owl-carousel main-demo">
		<div class="item" id="item1"><img src="img/slider/1.jpg" alt="rosan" /> 
			<div class="item-caption">
				<div class="item-caption-inner">
					<div class="item-caption-wrap">
						<p class="item-cat"><a href="#">Fall/Winter 2014</a></p>
						<h2>Up to 50% off<br>on selected items</h2>
						<a href="#" class="btn btn-white hidden-xs">Shop Now</a>
					</div>
				</div>
			</div>
		</div>
		<div class="item" id="item2"><img src="img/slider/2.jpg" alt="rosan" /> 
			<div class="item-caption">
				<div class="item-caption-inner">
					<div class="item-caption-wrap">
						<p class="item-cat"><a href="#">Top</a></p>
						<h2>25% off<br>for pink swim</h2>
						<a href="#" class="btn btn-white hidden-xs">Shop Now</a>
					</div>
				</div>
			</div>
		</div>
		<div class="item" id="item3"><img src="img/slider/3.jpg" alt="rosan" /> 
			<div class="item-caption">
				<div class="item-caption-inner">
					<div class="item-caption-wrap">
						<p class="item-cat"><a href="#">Panties</a></p>
						<h2>Free shipping<br>on $50 plus $20</h2>
						<a href="#" class="btn btn-white hidden-xs">Shop Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



<script type="text/javascript">
	
//new listing
			var owl = $("#main_slider");
			
			// owl.owlCarousel({
			// 	navigation : true,
			// 	pagination: true,
			// 	singleItem : true,
			// 	autoPlay : true,
			// 	transitionStyle : "fadeUp",
			// 	navigationText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
			//   });
			  //Select Transtion Type
			$("#transitionType").change(function(){
				var newValue = $(this).val();

				//TransitionTypes is owlCarousel inner method.
				owl.data("owlCarousel").transitionTypes(newValue);

				//After change type go to next slide
				owl.trigger("owl.next");
			});


			  $(function(){
				  $('#main_slider').owlCarousel({
					  	navigation : true,
						pagination: true,
						singleItem : true,
						autoPlay : true,
						transitionStyle : "fadeUp",
						animateOut: 'slideOutDown',
						animateIn: 'flipInX',
						items:1,
						margin:0,
						stagePadding:0,
						smartSpeed:450,
						center:true,
						rtl:true,
					    loop:true,
					    margin:0,
					    nav:false,
				  });
				});


</script>