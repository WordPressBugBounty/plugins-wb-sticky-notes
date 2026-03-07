<?php
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

?>
<div class="wb_stn_note_menu_dropdown">
	<ul>
		<li class="wb_stn_new"><span class="dashicons dashicons-plus"></span> <?php esc_html_e('New', 'wb-sticky-notes'); ?> </li>
		<li class="wb_stn_duplicate"><span class="dashicons dashicons-admin-page"></span> <?php esc_html_e('Duplicate', 'wb-sticky-notes'); ?> </li>
		<li data-wb_stn_note_options_sub="wb_stn_note_options_sub_menu_theme">
			<span class="dashicons dashicons-art"></span> <?php esc_html_e('Theme', 'wb-sticky-notes'); ?> </li>
		<li data-wb_stn_note_options_sub="wb_stn_note_options_sub_menu_font">
			<span class="dashicons dashicons-editor-textcolor"></span> <?php esc_html_e('Font', 'wb-sticky-notes'); ?> </li>
		<li class="wb_stn_archive_btn">
			<span class="dashicons dashicons-archive"></span> <?php esc_html_e('Archive', 'wb-sticky-notes'); ?> </li>
	</ul>
	<ul class="wb_stn_note_options_sub_menu wb_stn_note_options_sub_menu_font">
		<?php
		foreach(Wb_Sticky_Notes::$fonts as $fontk=>$font)
		{
		?>
			<li class="wb_stn_font_<?php echo esc_attr($font);?>" data-wb_stn_val="wb_stn_font_<?php echo esc_attr($font);?>"><?php esc_html_e('Sample Text', 'wb-sticky-notes'); ?></li>
		<?php
		}
		?>
	</ul>
	<ul class="wb_stn_note_options_sub_menu wb_stn_note_options_sub_menu_theme">
		<?php
		foreach(Wb_Sticky_Notes::$themes as $colork=>$color)
		{
		?>
			<li data-wb_stn_val="wb_stn_<?php echo esc_attr($color);?>">
				<span class="wb_stn_preview_dot wb_stn_<?php echo esc_attr($color);?>"></span><?php echo esc_html( ucfirst( $color ) );?>
			</li>
		<?php
		}
		?>
	</ul>
</div>