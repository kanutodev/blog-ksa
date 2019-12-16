	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<!--   Core JS Files   -->
	<script src="../../assets/js/core/jquery.min.js" type="text/javascript"></script>
	<script src="../../assets/js/core/popper.min.js" type="text/javascript"></script>
	<script src="../../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
	<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
	<script src="../../assets/js/plugins/bootstrap-switch.js"></script>
	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="../../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
	<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
	<script src="../../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
	<!--  Google Maps Plugin    -->
	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
	<script src="../../assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


	<script type="text/javascript">
	anime.timeline({loop: true})
		.add({
			targets: '.ml15 .word',
			scale: [14,1],
			opacity: [0,1],
			easing: "easeOutCirc",
			duration: 800,
			delay: (el, i) => 800 * i
		}).add({
			targets: '.ml15',
			opacity: 0,
			duration: 1000,
			easing: "easeOutExpo",
			delay: 1000
			});	
	</script>
	<script type="text/javascript">
		// Wrap every letter in a span
		var textWrapper = document.querySelector('.ml12');
		textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

		anime.timeline({loop: true})
			.add({
				targets: '.ml12 .letter',
				translateX: [40,0],
				translateZ: 0,
				opacity: [0,1],
				easing: "easeOutExpo",
				duration: 1200,
				delay: (el, i) => 500 + 30 * i
			}).add({
				targets: '.ml12 .letter',
				translateX: [0,-30],
				opacity: [1,0],
				easing: "easeInExpo",
				duration: 1100,
				delay: (el, i) => 100 + 30 * i
			});
	</script>

  
	<script type="text/javascript">
	    
	  AOS.init({
	    duration : 1000,
	  });
	</script>

	<script>
	  function openCity(evt, cityName) {
	  // Declare all variables
	  var i, tabcontent, tablinks;

	  // Get all elements with class="tabcontent" and hide them
	  tabcontent = document.getElementsByClassName("tabcontent");
	  for (i = 0; i < tabcontent.length; i++) {
	    tabcontent[i].style.display = "none";
	  }

	  // Get all elements with class="tablinks" and remove the class "active"
	  tablinks = document.getElementsByClassName("tablinks");
	  for (i = 0; i < tablinks.length; i++) {
	    tablinks[i].className = tablinks[i].className.replace(" active", "");
	  }

	  // Show the current tab, and add an "active" class to the button that opened the tab
	  document.getElementById(cityName).style.display = "block";
	  evt.currentTarget.className += " active";
	}
	</script>