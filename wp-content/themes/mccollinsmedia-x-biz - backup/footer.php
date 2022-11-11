<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package McCollinsMedia_x_BIZ
 */

?>
<section class="footer">
    <div class="footerMain">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href="http://localhost/mccollinsmedia-x-biz/" class="footerLogo">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo@2x.png" alt="logo">
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="T5 text-right">Bringing ideas to life</div>
                </div>
            </div>
            <div class="Styled-Border">&nbsp;</div>
            <div class="T6">Dubai Office</div>
            <div class="row">
                <div class="col-md-6">
                    <div class="AddressT">Suite 13 & 14 , The Iridium Building, Umm Suqeim Road,

                        Al Barsha. P. O. Box 391186, Dubai, UAE</div>
                    <div>
                        <a href="#" class="Flink hover-1">
                            <span>Toll-Free 24*7&nbsp;:</span> 800 BIZ (249)
                        </a>
                    </div>
                    <div>
                        <a href="#" class="Flink hover-1">
                            <span>Email&nbsp;:</span>setup@bizincorp.ae
                        </a>
                    </div>
                    <div>
                        <a href="#" class="Flink hover-1">
                            <span>Operating Hours&nbsp;:</span>
                            <div> Mon – Fri: 8.30 am – 5.30 pm</div>
                        </a>
                    </div>
                    <div>
                        <div class="SocialMedia">
                            <a href="#" target="_blank">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram.png">
                            </a>
                            <a href="#" target="_blank">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook.png">
                            </a>
                            <a href="#" target="_blank">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/linkedin.png">
                            </a>
                            <a href="#" target="_blank">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="FooterLinks">
                        <a href="#" class="hover-1">BLOG</a>
                        <a href="#" class="hover-1">FAQ’S</a>
                        <a href="#" class="hover-1">CAREERS</a>
                        <a href="#" class="hover-1">REFER A FRIEND</a>
                        <a href="#" class="hover-1">TERMS & CONDITIONS</a>
                        <a href="#" class="hover-1">PRIVACY POLICY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footerBottom">
        <div class="container text-center">
            <div>Copyright © 2022 BIZ legal. Business Incorporation Zone</div>
            <div><a href="https://www.mccollinsmedia.com/" target="_blank">Design & Developed By : McCollins Media</a></div>
        </div>
    </div>
</section>
<div class="contact-pop-up">
    <div class="OverLay">&nbsp;</div>
    <div class="popup1Wrap">
        <div class="Popup1">
            <div class="ContactFrm1">
                <?php echo do_shortcode('[gravityform id="3" title="true"]'); ?>
            </div>
        </div>
    </div>
</div>
<div class="Text-popup">
    <div class="OverLay2">&nbsp;</div>
    <div class="popup1Wrap">
        <div class="Popup2">
            <div class="PopModal2">
                <div class="p2HeadText">&nbsp;</div>
                <div class="p2mainContent">&nbsp;</div>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/biz-slider/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/biz-main.js" type="text/javascript" charset="utf-8"></script>
</body>

</html>