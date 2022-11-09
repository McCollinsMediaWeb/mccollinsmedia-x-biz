<?php /* Template Name:about-us */ ?>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package McCollinsMedia_x_BIZ
 */

get_header();
?>
<div class="main" id="main">

    <!-- Herobanner Start -->
    <div class="HeroBanner">
        <div class="heroslider">
            <div>
                <div class="HeroImage">
                    <img class="width-full" srcSet="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bannerimages/desktop/whoweare.jpg 1920w,
                <?php echo get_stylesheet_directory_uri(); ?>/assets/images/bannerimages/mobile/homepage.jpg 720w" sizes="(min-width: 960px) 960px,
                            360px" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bannerimages/desktop/homebanner2x.jpg" alt="Businessincorporationzone" />
                    <div class="layer1">
                        <div class="Laye1-cnt">
                            <div>
                                <div class="overflow-hidden">
                                    <div class="T1 rombus">I’m looking for</div>
                                </div>
                                <div>
                                    <div class="Cst-select  rombus">
                                        <div class="Cst-select-selected">
                                            Get a free zone visa
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23.484" height="15.658" viewBox="0 0 23.484 15.658">
                                                    <defs>
                                                        <clipPath id="clip-path">
                                                            <rect id="Rectangle_184" data-name="Rectangle 184" width="15.658" height="23.484" fill="#fff" />
                                                        </clipPath>
                                                    </defs>
                                                    <g id="Group_259" data-name="Group 259" transform="translate(0 15.658) rotate(-90)">
                                                        <g id="Group_258" data-name="Group 258" transform="translate(0 0)" clip-path="url(#clip-path)">
                                                            <path id="Path_177" data-name="Path 177" d="M5.016,11.741l9.94-8.283A1.958,1.958,0,0,0,12.448.449L.7,10.236a1.959,1.959,0,0,0,0,3.009l11.744,9.787a1.958,1.958,0,0,0,2.508-3.009Z" transform="translate(0 0)" fill="#fff" />
                                                        </g>
                                                    </g>
                                                </svg>

                                            </span>
                                        </div>
                                        <div class="Cst-select-options">
                                            <a href="javascript:void(0)" class="openpopup">Bank Account Opening</a>
                                            <a href="javascript:void(0)" class="openpopup">Visa Process</a>
                                            <a href="javascript:void(0)" class="openpopup">Tax Services</a>
                                            <a href="javascript:void(0)" class="openpopup">Emirates Id And Medical</a>
                                            <a href="javascript:void(0)" class="openpopup">Document Attestation</a>
                                            <a href="javascript:void(0)" class="openpopup">Co-working & Office Spaces</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Herobanner End -->
</div>

<?php

get_footer();
