	<?php $event_id = get_the_ID(); ?>

	<h2><?php the_title(); ?></h2>
    <div class="dt-sc-hr-invisible-xsmall"></div>

    <div class="dt-sc-one-half column first">
		<?php echo tribe_event_featured_image( $event_id, 'auditing-event-single-type4', false );
		do_action( 'tribe_events_single_event_before_the_content' );
		the_content();
		do_action( 'tribe_events_single_event_after_the_content' ); ?>
    </div>

	<?php do_action( 'tribe_events_single_event_before_the_meta' ); ?>

    <div class="dt-sc-one-half column">
    	<div class="data-wrapper">
        	<p>
            	<span><?php echo tribe_get_start_date ( $event_id, true, 'd' ); ?></span>
                <?php echo tribe_get_start_date ( $event_id, true, 'F' ); ?><br />
                <?php echo tribe_get_start_date ( $event_id, true, 'l' ).' @ '; echo '<i>'.tribe_get_start_time ( $event_id, 'h:i a' ). ' - '.tribe_get_end_time ( $event_id, 'h:i a' ).'</i>'; ?>
            </p>
        </div>
	    <div class="dt-sc-hr-invisible-xsmall"></div>

		<?php do_action( 'tribe_events_single_event_meta_primary_section_start' ); ?>

		<div class="dt-sc-one-half column first">
        	<div class="event-details">
                <h3><?php esc_html_e('Details', 'auditing'); ?></h3>
                <ul>
                    <li><dt><?php esc_html_e('Start:', 'auditing'); ?></dt><?php echo tribe_get_start_date ( $event_id, true, 'M d' ).' @ '.tribe_get_start_time ( $event_id, 'h:i a' ); ?></li>
                    <li><dt><?php esc_html_e('End:', 'auditing'); ?></dt><?php echo tribe_get_end_date ( $event_id, true, 'M d' ).' @ '.tribe_get_end_time ( $event_id, 'h:i a' ); ?></li>
                    <?php if ( tribe_get_cost() ) : ?>
                        <li><dt><?php esc_html_e('Cost:', 'auditing'); ?></dt><?php echo tribe_get_cost( $event_id, true ); ?></li>
                    <?php endif; ?>
                    <li><?php echo tribe_get_event_categories( $event_id, array( 'before' => '', 'sep' => ', ',  'after' => '', 'label' => '', 'label_before' => '<dt class="cat">'.esc_html__('Event Category', 'auditing'),
                                                                                 'label_after'  => '</dt>', 'wrap_before' => '<div class="cat-wrapper">', 'wrap_after' => '</div>' )); ?></li>
                    <li><?php echo tribe_meta_event_tags( 'Event Tags:', ', ', false ); ?></li>
                    <?php
                    $website = tribe_get_event_website_link();
                    if(!empty($website)): ?>
                        <li><dt><?php esc_html_e('Website:', 'auditing'); ?></dt><?php echo esc_url($website); ?></li><?php
                    endif; ?>
                </ul>
            </div>
        </div>
        
	    <div class="dt-sc-one-half column">
        	<div class="event-organize">
                <h3><?php esc_html_e('Organizer', 'auditing'); ?></h3>
                <h4><?php
                if(class_exists( 'Tribe__Events__Pro__Main' ))
                    echo tribe_get_organizer_link ( $event_id, true, false );
                else
                    echo tribe_get_organizer(); ?></h4>
                <ul><?php
                    $phone = tribe_get_organizer_phone();
                    if(!empty($phone)): ?>
                        <li><dt><?php esc_html_e('Phone:', 'auditing'); ?></dt><?php echo auditing_wp_kses($phone); ?></li><?php
                    endif;
                    $email = tribe_get_organizer_email();
                    if(!empty($email)): ?>
                        <li><dt><?php esc_html_e('Email:', 'auditing'); ?></dt><a href="mailto:<?php echo esc_attr($email); ?>"><?php echo auditing_wp_kses($email); ?></a></li><?php
                    endif;
                    $website = tribe_get_organizer_website_link();
                    if(!empty($website)): ?>
                        <li><dt><?php esc_html_e('Website:', 'auditing'); ?></dt><?php echo esc_url($website); ?></li><?php
                    endif; ?>
                </ul>
            </div>        
        </div>

        <div class="dt-sc-clear"></div><?php
        # Google map...
        $map = tribe_get_embedded_map($event_id, '', 260);
        if(!empty($map)): ?>
            <div class="event-google-map">
            <?php echo apply_filters( 'tribe_get_embedded_map', $map ); ?>
            </div><?php
        endif; ?>
        <div class="dt-sc-hr-invisible-small"></div>
        
        <div class="event-venue">
            <h3><?php esc_html_e('Venue', 'auditing'); ?></h3>
            <h4><?php
            if(class_exists( 'Tribe__Events__Pro__Main' ))
                echo tribe_get_venue_link($event_id, true);
            else
                echo tribe_get_venue($event_id); ?></h4>

			<div class="dt-sc-one-half column first"><?php
				if ( tribe_address_exists() ) :
					echo '<p class="event-address">'.tribe_get_full_address().'</p>';
					# Google map link...
					if ( tribe_show_google_map_link() ) :
						echo tribe_get_map_link_html();
						echo '<div class="dt-sc-hr-invisible-xsmall"></div>';
					endif;
				endif; ?>
            </div>
            <div class="dt-sc-one-half column">
                <ul><?php
                    $phone = tribe_get_phone();
                    if(!empty($phone)): ?>
                        <li><dt><?php esc_html_e('Phone:', 'auditing'); ?></dt><?php echo auditing_wp_kses($phone); ?></li><?php
                    endif;
                    $website = tribe_get_venue_website_link();
                    if(!empty($website)): ?>
                        <li><dt><?php esc_html_e('Website:', 'auditing'); ?></dt><?php echo esc_url($website); ?></li><?php
                    endif; ?>
                </ul>
            </div><?php
			# Additional fields...
			if(class_exists( 'Tribe__Events__Pro__Main' )):
				do_action( 'tribe_events_single_event_meta_primary_section_end' );
			endif; ?>
        </div>
    </div>
    
	<?php do_action( 'tribe_events_single_event_after_the_meta' ); ?>