
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>js/video.js"></script>
    <script src="<?php echo base_url();?>js/flat-ui.js"></script>
    <script src="<?php echo base_url();?>js/jquery.cbpFWSlider.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/headhesive.js"></script>

	<script>

        // Set options
        var options = {
            offset: '#showHere',
            classes: {
                clone:   'banner--clone',
                stick:   'banner--stick',
                unstick: 'banner--unstick'
            }
        };

        // Initialise with options
        var banner = new Headhesive('.banner', options);

        // Headhesive destroy
        // banner.destroy();
    </script>
    	<script>
			$( function() {
				/*
				- how to call the plugin:
				$( selector ).cbpFWSlider( [options] );
				- options:
				{
					// default transition speed (ms)
					speed : 500,
					// default transition easing
					easing : 'ease'
				}
				- destroy:
				$( selector ).cbpFWSlider( 'destroy' );
				*/

				$( '#cbp-fwslider' ).cbpFWSlider();

			} );

         
	</script>

    <script>


</body>
</html>