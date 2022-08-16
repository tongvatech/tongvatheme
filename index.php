<?php get_header(); ?>
<link rel="stylesheet" href="/wp-content/themes/tongvatheme/assets/css/leaflet.min.css"/>
<script src="/wp-content/themes/tongvatheme/assets/js/leaflet.min.js"></script>

<style>
  #map {
    height: 400px;
  }
</style>
<script>
  // Additional tile options:
  // https://leaflet-extras.github.io/leaflet-providers/preview/
  // https://stamen-tiles-{s}.a.ssl.fastly.net/terrain-background/{z}/{x}/{y}.png
  // https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}
  // https://server.arcgisonline.com/ArcGIS/rest/services/World_Physical_Map/MapServer/tile/{z}/{y}/{x}
  // http://tile.mtbmap.cz/mtbmap_tiles/{z}/{x}/{y}.png
  // https://basemap.nationalmap.gov/arcgis/rest/services/USGSImageryOnly/MapServer/tile/{z}/{y}/{x}
  //

  window.document.addEventListener('DOMContentLoaded', () => {
    var map = L.map('map').setView([34.052235, -118.243683], 9);
    L.tileLayer('http://tile.mtbmap.cz/mtbmap_tiles/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '© OpenStreetMap'
    }).addTo(map);
  });
</script>
<main id="primary" class="site-main" >
    <section id="map"></section>
    <?php

      if ( have_posts() ) :

        ?>
        <div class="container">
          <?php
            if ( is_home() && ! is_front_page() ) :
              echo esc_html( kiyono_frontpage_title());

            elseif ( is_archive() )  :
              echo esc_html( kiyono_archive_title());

            elseif ( is_search() )  :
              echo esc_html( kiyono_search_title());

            endif;
          ?>
        </div>
        <?php

        if ( is_home() && is_front_page() || is_archive() || is_search() ) :

          kiyono_grid_wrapper_start();

        endif;

          /* Start the Loop */
          while ( have_posts() ) :
            the_post();

            if ( is_home() || is_archive() || is_search() ) :

                get_template_part( 'template-parts/content', 'excerpt');

            elseif ( is_page()  || is_front_page()) :

              get_template_part( 'template-parts/content', 'page');

            endif;

          endwhile;

        if ( is_home() && is_front_page() || is_archive() || is_search() ) :

          kiyono_grid_wrapper_end();

        endif;

    ?>
          <div class="w-full">
            <?php kiyono_the_posts_navigation(); ?>
          </div>

    <?php

    else :

      get_template_part( 'template-parts/content', 'none' );

    endif;

    ?>
</main>

<?php get_footer(); ?>