<?php
/**
 * Header file for the gixus WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gixus
 */

$gixus_options['preloader_switch'] = true;
$gixus_options['preloader']        = __( 'Gixus', 'gixus' ); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Gixus - Business Consulting Template">
    

<?php wp_head(); ?>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

<?php if (isset($gixus_options['preloader_switch']) && $gixus_options['preloader_switch']) { ?>
    <!-- Start Preloader 
    ============================================= -->
    <div id="preloader">
        <div id="gixus-preloader" class="gixus-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <?php
                    // Split the preloader text into individual characters for animation
                    foreach (str_split($gixus_options['preloader']) as $char) {
                        echo '<span data-text-preloader="' . esc_html($char) . '" class="letters-loading">' . esc_html($char) . '</span>';
                    }
                    ?>
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->
    <?php } ?> 