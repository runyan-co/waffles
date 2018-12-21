@php

    // Initialize these variables
    $hero_color = $hero_image = $hero_height = $hero_content = '';

    if( have_rows( 'content' ) ) {
        while ( have_rows( 'content' ) ) : the_row();
            if( get_row_layout() == 'full_width_hero' ) :

                $inst = returnKeysClass();

                $hero_color = get_sub_field( $inst::FWH_BackgroundColor_Key );
                $hero_image = get_sub_field( $inst::FWH_BackgroundImage_Key );
                $hero_height = get_sub_field( $inst::FWH_HeightSetting_Key );
                $hero_content = get_sub_field( $inst::FWH_Content_Key );

                $html = '<section class="hero is-medium is-primary" style="background-color: ' . $hero_color . '">' . "\n";
                $html .= '<div class="hero-body">' . "\n";
                $html .= '<div class="container">' . "\n";
                $html .= $hero_content . "\n";
                $html .= '</div>' . "\n";
                $html .= '</div>' . "\n";
                $html .= '</section>' . "\n";
                
                return print $html;

            endif;
        endwhile;
    }

@endphp
