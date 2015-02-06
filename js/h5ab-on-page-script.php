<?php

if ( ! defined( 'ABSPATH' ) ) exit;

//http://stackoverflow.com/questions/25461277/store-the-content-into-a-javascript-jquery-variable

ob_start();
the_content();
$printcontent = ob_get_contents();
ob_end_clean();
?>

<script>

jQuery(document).ready(function($){

$('body').prepend('<div id="h5ab-print-content" style="width: 100px; height: 100px; overflow: hidden; position: fixed; left: -9999px;"><h1><?php esc_attr(the_title()); ?></h1>' + <?php echo json_encode(wp_kses_post( $printcontent )); ?> + '</div>');

$('#h5ab-print-content video, #h5ab-print-content audio, #h5ab-print-content script').remove();

});

</script>
