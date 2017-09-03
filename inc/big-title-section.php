<?php
/**
 *
 * *****   BIG TITLE SECTION   *******
 *
 */

$shop_isle_big_title_hide = get_theme_mod( 'shop_isle_big_title_hide' );

if ( isset($shop_isle_big_title_hide) && $shop_isle_big_title_hide != 1 ) {
echo '<section id="home" class="home-section home-parallax home-fade -home-full-height">';
    } elseif ( is_customize_preview() ) {
    echo '<section id="home" class="home-section home-parallax home-fade -home-full-height shop_isle_hidden_if_not_customizer">';
        }

        if( ( isset($shop_isle_big_title_hide) && $shop_isle_big_title_hide != 1 ) || is_customize_preview() ) {

        $shop_isle_big_title_image = get_theme_mod( 'shop_isle_big_title_image', get_template_directory_uri().'/assets/images/slide1.jpg' );
        $shop_isle_big_title_title = get_theme_mod( 'shop_isle_big_title_title', 'Boxcar Books' );
        $shop_isle_big_title_subtitle = get_theme_mod( 'shop_isle_big_title_subtitle', __( ' ', 'shop-isle' ) );
        $shop_isle_big_title_button_label = get_theme_mod( 'shop_isle_big_title_button_label', __( 'Find out more', 'shop-isle' ) );
        $shop_isle_big_title_button_link = get_theme_mod( 'shop_isle_big_title_button_link', __( '/about', 'shop-isle' ) );

        if( !empty( $shop_isle_big_title_image ) ) {

        echo '<div class="hero-slider">';

            echo '<ul class="slides">';

                echo '<li class="bg-dark" style="background-image:url('. esc_url( $shop_isle_big_title_image ).')">';

                    echo '<div class="home-slider-overlay"></div>';
                    echo '<div class="hs-caption">';
                        echo '<div class="caption-content">';

                            if( !empty($shop_isle_big_title_title) ) {
                            echo '<div class="hs-title-size-4 font-alt mb-30">'. $shop_isle_big_title_title .'</div>';
                            echo '<div class="big-title-info-box">Boxcar Books and Community Center, Inc. is a volunteer powered, non-profit organization that exists to provide new and used books, zines, magazines, and comics on topics of social justice, independent media, and fiction for the community; send literature of all types free of charge to prisoners in the midwest; and to provide a meeting space for community and literary groups.</div>';
                            }
                            
                            if( !empty($shop_isle_big_title_subtitle) ) {
                            echo '<div class="hs-title-size-1 font-alt mb-40">'.$shop_isle_big_title_subtitle.'</div>';
                            }

                            if( !empty($shop_isle_big_title_button_label) && !empty($shop_isle_big_title_button_link) ) {
                            echo '<a href="'. esc_url( $shop_isle_big_title_button_link ).'" class="section-scroll btn btn-border-w btn-round">'. $shop_isle_big_title_button_label .'</a>';
                            }
                            echo '</div><!-- .caption-content -->';
                        echo '</div><!-- .hs-caption -->';

                    echo '</li><!-- .bg-dark -->';

                echo '</ul><!-- .slides -->';

            echo '</div><!-- .hero-slider -->';

        }

        echo '</section >';

    } /* END SLIDER */