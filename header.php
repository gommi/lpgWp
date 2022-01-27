<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="lxj6CugcKlc_QqyklFh7fgRBGQNVN27XsMdq6AbAKb8" />
    <meta name="title" content="LPG Petrol - Banja LUka">
    <meta name="description" content="LPG Petrol je NAJPOUZDANIJI dobavljač PLINA u Banja Luci sa više od 23 godina iskustva u radu. MALOPRODAJA I VELEPRODAJA tečnog naftnog gasa (TNG)">
    <meta name="keywords" content="LPG, Petrol, Banja Luka, Plin, prodaja plina, TNG, LPG petrol">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo get_the_title() ?></title>



    <?php 

        wp_head();

    ?>

</head>

<body>



<!--Navbar-->

    <section id="section-nav" class="section-navbar">

        <nav class="navbar navbar-expand-lg">

            <div class="container">

                <a class="navbar-brand" href="<?php echo get_permalink(get_page_by_path('lpg-petrol')); ?>">

                    <img src="<?php bloginfo('template_directory');?>/img/lpgLogo.png" alt="LPG Petrol logo">

                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul id="top-menu" class="navbar-nav ms-auto mb-2 mb-lg-0">

                            <?php if(get_permalink('lpg-petrol')){?> 

                                <li class="nav-item text-center d-flex justify-content-center align-items-center active">
                                    <a class="nav-link" aria-current="page" href="#banner-section">Početna</a>
                                    <img class="d-none d-lg-block" src="<?php bloginfo('template_directory');?>/img/whiteLine.png" alt="line" style="height: 40px; width: 1px;">
                                </li>

                                <?php }else{ ?>

                                <li class="nav-item text-center d-flex justify-content-center align-items-center">
                                    <a class="nav-link" aria-current="page" href="<?php echo get_permalink(get_page_by_path('lpg-petrol'))."#banner-section"; ?>">Početna</a>
                                    <img class="d-none d-lg-block" src="<?php bloginfo('template_directory');?>/img/whiteLine.png" alt="line" style="height: 40px; width: 1px;">
                                </li>

                                <?php

                            } ?>

                            <?php if(get_permalink('lpg-petrol')){?>
                                <li class="nav-item text-center d-flex justify-content-center align-items-center">
                                    <a class="nav-link" aria-current="page" href="#usluge-section">Usluge</a>
                                    <img class="d-none d-lg-block" src="<?php bloginfo('template_directory');?>/img/whiteLine.png" alt="line" style="height: 40px; width: 1px;">
                                </li>
                                <?php

                            }else{

                                ?>

                                <li class="nav-item text-center d-flex justify-content-center align-items-center">
                                    <a class="nav-link" aria-current="page" href="<?php echo get_permalink(get_page_by_path('lpg-petrol'))."#usluge-section"; ?>">Usluge</a>
                                    <img class="d-none d-lg-block" src="<?php bloginfo('template_directory');?>/img/whiteLine.png" alt="line" style="height: 40px; width: 1px;">
                                </li>

                                <?php

                            } ?>

                        <li class="nav-item text-center d-flex justify-content-center align-items-center">
                            <?php if(get_permalink('lpg-petrol')){?> 
                                <a class="nav-link" aria-current="page" href="#o-nama-section">O nama</a>
                                <img src="<?php bloginfo('template_directory');?>/img/whiteLine.png" alt="line" style="height: 40px; width: 1px;">
                            <?php }else{ ?>
                                <a class="nav-link" aria-current="page" href="<?php echo get_permalink(get_page_by_path('lpg-petrol'))."#o-nama-section"; ?>">O nama</a>
                                <img class="d-none d-lg-block" src="<?php bloginfo('template_directory');?>/img/whiteLine.png" alt="line" style="height: 40px; width: 1px;">
                            <?php } ?>
                        </li>

                        <li class="nav-item text-center">

                            <a class="nav-link" href="<?php echo get_permalink(get_page_by_path('kontakt')); ?>">Kontakt</a> 

                        </li>

                        <!--<li class="nav-item text-center">

                            <a class="nav-link disabled" href="#" disabled>Trgovina</a>

                        </li>-->

                    </ul>

                </div>

            </div>

        </nav>

    </section>