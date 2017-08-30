</section><!-- #content -->



</div> <!-- end body width from header -->

<?php global $asalah_data; ?>



<footer class="custom_footer container-fluid site_footer body_width">

	<div class="container">

		<div class="row-fluid">

        	<?php

                get_sidebar( 'footer' );

            ?>

		</div>

		<div class="row">

			<div class="span12">

				<p class="copyright text-center">© <?php echo date('Y');?> ADTC. ALL RIGHTS RESERVED</p>

			</div>

		</div>

	</div>



</footer>



<div class="container-fluid site_secondary_footer body_width">

	<div class="container secondary_footer_container">

		<div class="row-fluid">

        	<div class="span12 pull-left">

            <?php if ($asalah_data['asalah_copyright_text']): ?>

            	<?php echo $asalah_data['asalah_copyright_text']; ?>

            <?php endif; ?>

					</div>

		</div>

	</div>





</div>

<?php if ($asalah_data['asalah_footer_code']): ?>

		<?php echo $asalah_data['asalah_footer_code']; ?>

    <?php endif; ?>

<?php wp_footer(); ?>



<script type="text/javascript">



<?php if ((isset($asalah_data['asalah_disable_prettophoto']) && (!$asalah_data['asalah_disable_prettophoto'])) || (!isset($asalah_data['asalah_disable_prettophoto']))) {

	?>

	jQuery("a.prettyPhoto").prettyPhoto();



	jQuery(".prettyPhotolink").click(function() {

		var thisgal = jQuery(this).attr('rel');

		 jQuery("a.prettyPhoto." + thisgal + ":first").click();

	});

<?php } ?>



/* Mobile Menu */



var custom_click_event = jQuery.support.touch ? "tap" : "click";

  jQuery(".main_menu .dropdown > a, .main_menu .dropdown-submenu > a").each(function() {

    if (jQuery(this).next().length > 0) {

      jQuery(this).addClass("mobile_menu_parent");

    };

  });



  jQuery( '<span class="mobile_dropdown_arrow"><i class="fa fa-angle-down"></i></span>' ).appendTo('.main_menu li a.mobile_menu_parent');



  jQuery('.mobile_menu_button').on(custom_click_event, function(event){

    event.stopImmediatePropagation();

		event.preventDefault();

    jQuery('#below_header_span').toggleClass('mobile_menu_opened');

		jQuery('.main_navbar.desktop_menu').removeClass('desktop_menu');



  });



  jQuery(".main_navbar a.dropdown-toggle i.icon-down-open").on(custom_click_event, function(event) {

		event.preventDefault();

		event.stopPropagation();

		var parent = jQuery(this).parent().parent();

		if (parent.hasClass('opened')) {

			jQuery(this).parent().next('ul.dropdown-menu').slideUp(100);

			parent.removeClass('opened');

			jQuery(this).removeClass('icon-up-open');

			jQuery(this).addClass('icon-down-open');

		} else {

			parent.addClass('opened');

			jQuery(this).parent().next('ul.dropdown-menu').slideDown(100);

			jQuery(this).removeClass('icon-down-open');

			jQuery(this).addClass('icon-up-open');

		}

});

  jQuery(".main_navbar .dropdown-submenu a i.icon-down-open").on(custom_click_event, function(event) {

				event.preventDefault();

		    event.stopPropagation();

				var parent = jQuery(this).parent().parent();

				if (parent.hasClass('opened')) {

					jQuery(this).parent().next('ul.dropdown-menu').slideUp(100);

					parent.removeClass('opened');

					jQuery(this).removeClass('icon-up-open');

					jQuery(this).addClass('icon-down-open');

				} else {

					parent.addClass('opened');

					jQuery(this).parent().next('ul.dropdown-menu').slideDown(100);

					jQuery(this).removeClass('icon-down-open');

					jQuery(this).addClass('icon-up-open');

				}

});

</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
<script src="//cdn.callrail.com/companies/312148953/c9b8baccd1d5978b9585/12/swap.js"></script>
<script>
    jQuery(document).ready(function($) {
        /*** Parallax *** --------------------------- */
        var parallax1 = TweenMax.to('.services', 1, { css: { backgroundPosition: 'center 100%' }, ease: Linear.easeNone });
        //new ScrollMagic.Scene( { triggerElement: '#parallax1'} ).setTween(parallax1);
    });

</script>


</body>

</html>