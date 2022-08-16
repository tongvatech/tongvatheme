<?php $kiyono_unique_id = wp_unique_id( 'search-form-' ); ?>

<div class="search-form"> 

    <form method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        
        <label for="<?php echo esc_attr($kiyono_unique_id); ?>">
            <span class="visuallyhidden"><?php esc_html_e( 'Search', 'kiyono' ); ?></span>
        </label>
        <input 
            type="search" 
            class="search-field" 
            id="<?php echo esc_attr($kiyono_unique_id); ?>" 
            placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'kiyono' ); ?>" 
            value="<?php echo esc_attr(get_search_query()); ?>"
            name="s" 
        />
        <button type="submit" class="search-btn" value="<?php echo esc_attr_x( 'Submit search', 'submit button', 'kiyono' ); ?>" aria-label="<?php echo esc_attr_x( 'Submit search button', 'submit button', 'kiyono' ); ?>" >
            <span class="visuallyhidden"><?php esc_html_e( 'Submit search', 'kiyono' ); ?></span>
            <?php echo kiyono_get_icon_svg( 'ui', 'search' ); // phpcs:ignore WordPress.Security.EscapeOutput  ?>
        </button>
       
    </form>

    <button class="search-close button" value="<?php echo esc_attr_x( 'Close search form', 'submit button', 'kiyono' ); ?>" aria-label="<?php echo esc_attr_x( 'Close search form', 'submit button', 'kiyono' ); ?>" >
        <span class="visuallyhidden"><?php esc_html_e( 'Close search form', 'kiyono' ); ?></span>
        <?php echo kiyono_get_icon_svg( 'ui', 'close' );// phpcs:ignore WordPress.Security.EscapeOutput  ?>    
    </button>

</div>
