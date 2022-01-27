<?php 

//Template Name: Kontakt Page

get_header(); 
?>


    <section class="kontakt-banner d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="kontakt-title text-center text-md-start m-0">Kontakt</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-md-5">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <p class="kontakt-subtitle text-center pt-md-5 pb-md-5 m-0">Započnimo razgovor</p>

                </div>

            </div>

            <div class="row">

                <div class="col-12 col-md-6 kontaktne-tacke text-center text-md-start">

                    <p>LPG PETROL d.o.o.</p> <!-- 1 -->
                    <p>Ul. Gradina-Dragočaj bb</p> <!-- 2 -->
                    <p>78250 Trn Laktaši</p> <!-- 3 -->
                    <p>+387 (0)51 310-210 (Centrala)</p> <!-- 4 -->
                    <p>+387 (0)65 711-905 (Centrala)</p> <!-- 5 -->
                    <p>PJ TRN- LAKTAŠI</p> <!-- 6 -->
                    <p>Cara Dušana 109</p> <!-- 7 -->
                    <p>78250 Trn Laktaši</p> <!-- 8 -->
                    <p>Informacije</p> <!-- 9 -->
                    <p>+387 (0)51 584-220 (PJ Trn)</p> <!-- 10 -->
                    <p>+387 (0)65 711-999 (PJ Trn)</p> <!-- 11 -->
                    <p>+387 (0)65 955-074 (Veleprodaja)</p> <!-- 12 -->
                    <p>E-mail</p> <!-- 13 -->
                    <p>lpgpetrol@teol.net</p> <!-- 14 -->
                    <p>Pratite nas na našim društvenim mrežama:</p> <!-- 15 -->
                    <p>Facebook: <a href="https://www.facebook.com/LpgPetrol-doo-191637372665/" target="_blank">PJ LPG PETROL D.O.O.</a></p> <!-- 16 -->
                </div>

                <div class="col-12 col-md-6">

                    <?php echo do_shortcode("[contact-form-7 id='14' title='Contact form 1']"); ?>

                </div>

            </div>

        </div>

    </section>

<?php get_footer(); ?>