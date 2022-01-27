<?php 
    $footer = get_field('footer', 2);
    //print_r($footer);
?>

<!-- Footer -->



    <section class="section-footer d-flex flex-column justify-content-center align-items-center">
        <div id="footer-info-cont" class="container-fluid container-lg">
            <div class="row">
                <div class="footer-info col-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center">
                    <img src="<?php bloginfo('template_directory');?>/img/pin_icon.png" alt="Pin icon">
                    <div>
                        <?php echo $footer['podruzne_jedinice']; ?>
                    </div>
                </div>

                <div class="footer-info-tel col-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center">
                    <img src="<?php bloginfo('template_directory');?>/img/phone_icon.png" alt="Phone icon">
                    <div>
                        <?php echo $footer['brojevi_telefona']; ?>
                    </div>
                    <!--<p class="m-0"><?php //echo strip_tags($footer['brojevi_telefona']); ?></p> Potrebno je provjeriti brojeve koji je za sta-->
                </div>

                <div class="footer-info-email col-12 col-md-12 col-lg-4 d-flex justify-content-center align-items-center">
                    <img src="<?php bloginfo('template_directory');?>/img/email_icon_red.png" alt="Email icon">
                    <p class="m-0"><?php echo $footer['email']; ?></p>
                </div>
            </div>
        </div>

        <div class="container-fluid pt-md-5 pb-md-5">
            <div class="row">
                <div class="col-12 footer-logo text-center pb-md-5">
                    <img src="<?php bloginfo('template_directory');?>/img/lpgLogo.png" alt="Logo">
                </div>

                <div class="col-12 text-center pb-md-5 d-flex justify-content-center align-items-center">
                    <p class="footer-txt m-0"><?php echo strip_tags($footer['lpg_slogan']); ?></p>
                </div>

                <div class="footer-social-media col-12 d-flex justify-content-center align-items-center pb-md-5">
                    <a href="https://www.facebook.com/LpgPetrol-doo-191637372665" target="_blank">
                        <img src="<?php bloginfo('template_directory');?>/img/facbook_icon_footer.png" alt="Facebook icon">
                    </a>

                    <!--<img src="img/instagram_icon_footer.png" alt="Instagram icon">-->
                </div>
            </div>
        </div>
    </section>



    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="bottom-footer col-12 d-flex justify-content-center align-items-center">
                    <i class="far fa-copyright"></i>
                    <p class="m-0"><?php echo date("Y"); ?></p>
                    <p class="m-0">LPG Petrol</p>
                </div>
            </div>
        </div>
    </section>
    <?php wp_footer() ?>
    </body>
</html>