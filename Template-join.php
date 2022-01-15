<?php
/**
 * Template Name: Join us
 */
get_header();
?>

<section class="joinUs">

  <img class="shape1" src="<?php echo get_template_directory_uri() ?>/img/join-us-img-1.svg">
  <img class="shape2" src="<?php echo get_template_directory_uri() ?>/img/join-us-img-2.svg">
  <img class="shape3" src="<?php echo get_template_directory_uri() ?>/img/join-us-img-3.svg">

  <div class="container">
    <div class="col-xs-12">
      <div class="title">
        <img class="rightIcon" src="<?php echo get_template_directory_uri() ?>/img/ns2.svg">
        <h1><?= get_the_title(); ?></h1>
        <img class="rightIcon" src="<?php echo get_template_directory_uri() ?>/img/ns.svg">
      </div>
    </div>
    <div class="col-xs-12">
      <div class="box">
        <img class="w100 topShape" src="<?php echo get_template_directory_uri() ?>/img/join-us-top-shape.svg">

        <div class="warp">
          <div class="boxTitle">
            <h2><?php echo get_field('join_us_subtitle'); ?></h2>
          </div>
          <div class="image">
            <?php 
            if ( WPGlobus::Config()->language !== 'en'){
              $image = get_field('image_arabic');
            }else{
              $image = get_field('image_arabic');
            }
            
            ?>
            <img src="<?php echo $image['url'] ?>" alt="<?= $image['alt']; ?>">
          </div>
          <div class="boxDesc">
            <p><?= get_the_content(); ?></p>
          </div>
             <?php 
             $contact_form = '{:ar}'.do_shortcode('[contact-form-7 id="440" title="Join us Arabic" html_class="customValid formAr"]').'{:}{:en}'.do_shortcode('[contact-form-7 id="442" title="Join us English" html_class="customValid"]').'{:}';
                                echo apply_filters('the_title', $contact_form );
                           ?>
          
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer() ?>

<script>
  $(document).ready( function(){
    $('.wpcf7-select option:first').attr('disabled',true);
    $('.cats .wpcf7-select option:first').attr('disabled',true);
    $("#locationIdInput").removeAttr("value")
  });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHbWxBQyK6fEcUZw1eKSivwMCFdl1vYpI&libraries=places&ver=5.1.6"></script>

<script>
 function initialize(markers) {
	 var map;
	 var myLatLng = { lat:  markers[0], lng: markers[1]};

	 if(!navigator.geolocation) {                
		 showMap();
	 } else {
		 navigator.geolocation.getCurrentPosition(showPosition,showMap);
	 }

   var mapAddress = $(".joinUs form input[name='location']");

	 function showPosition(position) {
		 myLatLng = { lat:  position.coords.latitude, lng: position.coords.longitude };
		 mapAddress.val("https://www.google.com/maps/search/?api=1&query="+ position.coords.latitude + "," +position.coords.longitude);
		 showMap();
	 }
	 
	 function showMap(){
		 var mapOptions = {
			 mapTypeId: 'roadmap',
			 zoom: 14,
			 center: myLatLng,
			 scrollwheel: false,
			 zoomControl: true,
			 mapTypeControl: false,
			 scaleControl: false,
			 streetViewControl: false,
			 rotateControl: false,
			 fullscreenControl: false
		 };

		 // Display a map on the page
		 map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

		 var marker = new google.maps.Marker({
			 position: myLatLng,
			 map,
			 icon:'<?php echo get_template_directory_uri() ?>/img/pin.png',
			 draggable: true
		 });
		 marker.setMap(map);

        google.maps.event.addListener(map, 'click', function(event) {
            marker.setPosition(event.latLng);
            mapAddress.val("https://www.google.com/maps/search/?api=1&query=" + marker.position.lat() + "," + marker.position.lng());
            console.log(mapAddress.val())
        });
        google.maps.event.addListener(marker, 'dragend', function() {
            mapAddress.val("https://www.google.com/maps/search/?api=1&query=" + marker.position.lat() + "," + marker.position.lng());
            console.log(mapAddress.val)
        });

        $(".wpcf7-submit").on('click', function() {
            console.log($(".joinUs form input[name='location']").val());
        })
	 }
 }
//google map


//google map
initialize([30.044486453689096, 31.235736090356266]);
$(window).load(function(){
    console.log($(".joinUs form input[name='location']").val());
});
</script>
