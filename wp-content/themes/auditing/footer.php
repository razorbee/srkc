        </div><!-- **Container - End** -->

        </div><!-- **Main - End** --><?php

        do_action( 'auditing_hook_content_after' );

        $footer = (int) get_theme_mod( 'show-footer', auditing_defaults('show-footer') );
		$activefooter = auditing_is_active_sidebar_footer();
        $show_copyright_section = (int) get_theme_mod( 'show-copyright-text', auditing_defaults('show-copyright-text') );?>
        <!-- **Footer** -->
        <footer id="footer">
            <?php if( !empty( $footer ) && $activefooter ) :
                $darkbg =(int) get_theme_mod( 'enable-footer-darkbg', auditing_defaults('enable-footer-darkbg') );
                $class = ( $darkbg ) ? 'dt-sc-dark-bg' : '';
                $columns = (int) get_theme_mod( 'footer-columns', auditing_defaults('footer-columns') );?>
                <div class="footer-widgets <?php echo esc_attr( $class ); ?>">
                    <div class="container"><?php
                        auditing_show_footer_widgetarea( $columns );?>
                    </div>
                </div>
            <?php endif;

            $copyright = get_theme_mod( 'copyright-text', auditing_defaults('copyright-text') );
            $copyright = stripslashes ( $copyright );
            $copyright = do_shortcode( $copyright );

            $copyright_next = get_theme_mod( 'copyright-next', auditing_defaults('copyright-next') );

            $darkbg = get_theme_mod( 'enable-copyright-darkbg', auditing_defaults('enable-copyright-darkbg') );
            $class  = ( $darkbg ) ? 'dt-sc-dark-bg' : '';
			$center = ( $copyright_next == 'disable' ) ? 'align-center' : ''; ?>
            <div class="footer-copyright <?php echo esc_attr( $class ); ?>">
                <div class="container">
                    <div class="column dt-sc-one-half first <?php echo esc_attr( $center ); ?>"><?php
                        if( !empty( $show_copyright_section ) ) :
                            echo auditing_wp_kses( $copyright );
                        endif; ?>
                    </div>
                    <?php if( $copyright_next != "hide"  && $copyright_next != "hidden"): ?>
                    <div class="column dt-sc-one-half <?php echo esc_attr( $copyright_next ); ?>"><?php
                        if( $copyright_next == 'sociable' ) :
                            $sociables = get_theme_mod( 'footer-sociables', auditing_defaults( 'footer-sociables' ) );
							$start = $end = $list = '';

                            if( !empty( $sociables ) ) {
                                $start = '<ul class="dt-sc-sociable">';
                                $end = '</ul>';
                            }

                            foreach( $sociables as $social ) {
                                $value = get_theme_mod( 'social-'.$social, '#' );
                                if( !empty( $value) ) {
                                    $list .= '<li class="'.esc_attr( $social ).'"><a target="_blank" href="'.esc_url( $value ).'"></a></li>';
                                }
                            }

                            echo auditing_wp_kses( $start.$list.$end );
                        elseif( $copyright_next == 'footer-menu' ):
                            wp_nav_menu( array(
                                'container' => false,
                                'menu_id' => 'menu-footer-menu',
                                'menu_class' => 'menu-links',
                                'theme_location' => 'footer-menu',
                                'depth' => 1
                            ) );
                        endif;?>
                    </div>
                <?php endif; ?>
                </div>
            </div>
           </footer><!-- **Footer - End** -->
    </div><!-- **Inner Wrapper - End** -->
</div><!-- **Wrapper - End** -->
<?php do_action( 'auditing_hook_bottom' ); ?>
<?php wp_footer(); ?>
</body>
</html>