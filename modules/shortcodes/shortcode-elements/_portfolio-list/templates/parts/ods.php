<?php
    $terms = wp_get_post_terms(get_the_ID(), 'ods',array( 'orderby' => 'id','order' => 'ASC',  ));
?>

    <span class="ods-mini">
        <?php
            foreach ($terms as $term){
                $image = get_field('imagen','ods_'.$term->term_id);
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image); ?>"  />
                <?php endif; ?>
                <?php
            }
        ?>
    </span>

<style>

    .image_holder .portfolio_title  {
        max-width: 65%;
        margin: 0 auto;
        margin-bottom: 25px;
    }

    .ods-mini img {
        display:inline-block !important;
        width: 50px !important;
        height: auto !important;
        margin: 5px !important;
    }

</style>
