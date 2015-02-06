<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$h5abPrintArray = get_option('h5abPrintData');
?>

<div id="h5ab-print-container">

    <h1>Print Settings</h1>

	<form id="h5ab-print" method="post" enctype="multipart/form-data">

		<div id="table">
		    <table width="100%" cellpadding="10">
                <tbody>

                    <tr>
                    <td scope="row" align="left">
                    <label>Print Active: </label>
                    <br/>
                    <input type="checkbox" value='true' <?php if (esc_attr($h5abPrintArray['h5abPrintActive']) == 'true'){echo "checked";} ?> name="h5ab-print-active"/>
                    </td>
                    </tr>

                    <tr>
                    <td scope="row" align="left">
                    <label>Print Label: </label>
                    <br/>
                    <input type="text" value='<?php echo esc_attr($h5abPrintArray['h5abPrintLabel']); ?>' name="h5ab-print-label"/>
                    </td>
                    </tr>

                    <tr>
                    <td scope="row" align="left">
                    <label>Print Icon Size: </label>
                    <br/>
                    <select name="h5ab-print-icon-size">
                        <option <?php if(esc_attr($h5abPrintArray['h5abPrintIconSize']) == 'fa-lg'){echo 'selected';}; ?> value="fa-lg">Small</option>
                        <option <?php if(esc_attr($h5abPrintArray['h5abPrintIconSize']) == 'fa-2x'){echo 'selected';}; ?> value="fa-2x">Medium</option>
                        <option <?php if(esc_attr($h5abPrintArray['h5abPrintIconSize']) == 'fa-3x'){echo 'selected';}; ?> value="fa-3x">Large</option>
                    </select>
                    </td>
                    </tr>

                    <tr>
                    <td scope="row" align="left">
                    <label>Print Icon Color: </label>
                    <br/>
                    <input type="text" id="h5ab-print-color-picker" value='<?php echo esc_attr($h5abPrintArray['h5abPrintIconColor']); ?>' name="h5ab-print-icon-color" />
                    </td>
                    </tr>

                    <tr>
                    <td scope="row" align="left">
                    <label>Print Placement: </label>
                    <br/>
                    <select name="h5ab-print-placement">
                        <option <?php if(esc_attr($h5abPrintArray['h5abPrintPlacement']) == 'before'){echo 'selected';}; ?> value="before">Before Content</option>
                        <option <?php if(esc_attr($h5abPrintArray['h5abPrintPlacement']) == 'after'){echo 'selected';}; ?> value="after">After Content</option>
                    </select>
                    </td>
                    </tr>

                    <tr>
                    <td scope="row" align="left">
                    <label>Print Alignment: </label>
                    <br/>
                    <select name="h5ab-print-alignment">
                        <option <?php if(esc_attr($h5abPrintArray['h5abPrintAlignment']) == 'left'){echo 'selected';}; ?> value="left">Left</option>
                        <option <?php if(esc_attr($h5abPrintArray['h5abPrintAlignment']) == 'right'){echo 'selected';}; ?> value="right">Right</option>
                    </select>
                    </td>
                    </tr>

                </tbody>
            </table>


		</div>

		<?php
			wp_nonce_field( 'h5ab_print_settings_n', 'h5ab_print_settings_nonce' );
			if ( ! is_admin() ) {
			echo 'Only Admin Users Can Update These Options';
			} else {
			echo '<input type="submit"  class="button button-primary show_field" id="h5ab_print_settings_submit" name="h5ab_print_settings_submit" value="Save and Activate" />';
			}

		?>

	</form>

</div>

<div class="h5ab-affiliate-advert">
                    <p style="margin: 0; text-align: center;">Advertisement</p>
                    <a href="http://trck.me/318830/" target="_blank"><img src="http://dash.trck.me/img/newtrckmebanner300x250b.jpg" border="0" style="max-width: 100%; height: auto;" /></a>
                    <p style="margin: 0;">*Affiliate Link</p>

</div>

<hr/>

<div style="width: 98%; padding: 0 5px;">
<p>*Affiliate Link - We (Plugin Authors) earn commission on sales generated through this link - We also use it ourselves and love the service.</p>
</div>


<script>
jQuery(document).ready(function($) {
    $('#h5ab-print-color-picker').spectrum({
        showInput: true,
        clickoutFiresChange: true,
        preferredFormat: 'hex'
    });
});
</script>
