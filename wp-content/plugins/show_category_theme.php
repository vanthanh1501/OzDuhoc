<?php
/**
 * Widget admin for the event list widget.
 */

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

?>
<p>
	<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'the-events-calendar' ); ?></label>
	<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
</p>

<p>
	<label for="<?php echo esc_attr( $this->get_field_id( 'Category' ) ); ?>"><?php esc_html_e( 'Category:', 'the-events-calendar' ); ?></label>
	<select id="<?php echo esc_attr( $this->get_field_id( 'Category' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'Category' ) ); ?>" class="widefat">

		<?php 
			$listcategory = get_categories( $args );
			foreach ($listcategory as $category ) {

			?>
			<option <?php if ( $category->name == $instance['Category'] ) {
				echo 'selected="selected"';
			} ?> > <?php echo $category->name; ?> </option>
		<?php } ?>
	</select>
</p>

<p>
	<label for="<?php echo esc_attr( $this->get_field_id( 'num_of_Post' ) ); ?>"><?php esc_html_e( 'Number Of Post:', 'the-events-calendar' ); ?></label>
	<select id="<?php echo esc_attr( $this->get_field_id( 'num_of_Post' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'num_of_Post' ) ); ?>" class="widefat">
		<?php for ( $i = 1; $i <= 10; $i ++ ) {
			?>
			<option <?php if ( $i == $instance['num_of_Post'] ) {
				echo 'selected="selected"';
			} ?> > <?php echo $i; ?> </option>
		<?php } ?>
	</select>
</p>