<link rel="stylesheet" href="vendor/owl.carousel/dist/assets/owl.carousel.min.css" />
<script src="vendor/owl.carousel/dist/owl.carousel.min.js"></script>


<div id="main_slider" class=" owl-carousel  owl-theme">
	<?php for($i=1 ; $i < 4 ; $i++){?>
	  		<div class="item"><img src="img/slider/<?=$i?>.jpg" alt="rosan" /> </div>
	<?php }?>
</div>

<script type="text/javascript">
	$(function(){
	  $('#main_slider').owlCarousel({
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




	 // responsive:{
	 //        0:{
	 //            items:1,
	 //            nav:true
	 //        },
	 //        600:{
	 //            items:3,
	 //            nav:false
	 //        },
	 //        1000:{
	 //            items:5,
	 //            nav:true,
	 //            loop:false
	 //        }
	 //    }
</script>