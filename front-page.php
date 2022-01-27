 <?php get_header(); ?>

<?php 
    $usluga = get_field('usluge');
    $onama = get_field('o_nama');
    $brojac = get_field('brojac');
    $prednosti = get_field('prednosti_lpg');
?>

<!--Banner-->



    <section class="section-banner">

        <div id="banner-section" class="container">

            <div class="row">
                <div class="banner-text col-12 col-md-6 d-flex flex-column align-items-center align-items-md-start justify-content-center">
                    <p class="banner-title m-0 text-center text-md-start">Najbolje rješenje za <br> dostavu LPG-a</p>
                    <p class="banner-txt m-0 text-center text-md-start">Uvid i isporuka za danas, <br> sutra i našu budućnost.</p>
                    <a href="#o-nama-section" class="btn banner-btn d-none d-md-block">Započni</a>
                </div>

                <div class="banner-image col-12 col-md-6 d-flex justify-content-center justify-content-md-end align-items-center p-0">
                    <img class="d-none d-md-block" src="<?php bloginfo('template_directory');?>/img/bannerImage.png" alt="Dostavno vozilo">
                    <img class="d-md-none kombi-two" src="<?php bloginfo('template_directory');?>/img/bannerImage.png" alt="Dostavno vozilo">
                </div>

                <div class="col-12 d-block d-md-none d-flex align-items-center justify-content-center pb-md-5 pt-md-5">
                    <a href="#o-nama-section" class="btn banner-btn d-block d-md-none">Započni</a>
                </div>
            </div>
        </div>
    </section>



    <!--Usluge-->
    <section id="usluge-section" class="section-usluge d-flex justify-content-center align-items-center">
        <div class="container usluge-cont pb-lg-5">
            <div class="row">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <!--<p class="usluge-title pt-lg-5 pb-lg-5 text-center text-lg-start">Istražite naša <br class="d-block d-md-none"> rešenja za isporuku <br class="d-block d-md-none"> energije</p>-->
                    <p class="usluge-title pt-lg-5 pb-lg-5 text-center text-lg-start"><?php echo $usluga['usluge_naslov']; ?></p>
                </div>

                <div class="cont-section-title col-12 col-lg-6 d-flex justify-content-center justify-content-lg-end pb-lg-5 pt-lg-5 order-1 order-lg-2">
                    <hr class="section-hr">
                    <p class="section-title">Usluge</p>
                    <hr class="section-hr d-block d-lg-none">
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4 p-0 d-flex justify-content-center">
                    <div class="usluga-card mb-4">
                        <div class="image-card-jedan"></div>
                        <div class="card-body">
                            <p class="title-card m-0 text-start text-md-center text-lg-start"><?php echo $usluga['plin_u_boci_naslov']; ?></p>
                            <!--<hr class="card-hr">-->
                            <p class="card-text m-0 text-start text-md-center text-lg-start"><?php echo $usluga['plin_u_boci_kratki_tekst']; ?></p>
                            <p class="card-cijena m-0 text-start text-md-center text-lg-start">Cijena: <?php echo $usluga['plin_u_boci_cijena']; ?>KM</p>
                            <div class="footer-card d-flex justify-content-md-center justify-content-lg-start">
                                <a class="card-btn btn d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#modalJedan">Više</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 p-0 d-flex justify-content-center">
                    <div class="usluga-card mb-4">
                        <div class="image-card-dva"></div>
                        <div class="card-body">

                            <p class="title-card m-0 text-start text-md-center text-lg-start"><?php echo $usluga['auto_gas_naslov']; ?></p>
                            <!--<hr class="card-hr">-->
                            <p class="card-text m-0 text-start text-md-center text-lg-start"><?php echo $usluga['auto_gas_kratki_tekst']; ?></p>
                            <p class="card-cijena m-0 text-start text-md-center text-lg-start">Cijena: <?php echo $usluga['auto_gas_cijena']; ?>KM</p>
                            <div class="footer-card d-flex justify-content-md-center justify-content-lg-start">
                                <a class="card-btn btn d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#modalDva">Više</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 p-0 d-flex justify-content-center">
                    <div class="usluga-card mb-4">
                        <div class="image-card-tri"></div>
                        <div class="card-body">
                            <p class="title-card m-0 text-start text-md-center text-lg-start"><?php echo $usluga['plin_u_cisterni_naslov']; ?></p>
                            <!--<hr class="card-hr">-->
                            <p class="card-text m-0 text-start text-md-center text-lg-start"></p>
                            <p class="card-cijena m-0 text-start text-md-center text-lg-start">Cijena: <?php echo $usluga['plin-u-cisterni-cijena']; ?>KM</p>
                            <div class="footer-card d-flex justify-content-md-center justify-content-lg-start">
                                <a class="card-btn btn d-flex justify-content-center align-items-center disabled" data-bs-toggle="modal" data-bs-target="#modalTri" aria-disabled="true">Više</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--
    *
    *
-->

    <!-- Modal jedan -->

    <div class="modal fade" id="modalJedan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog modal-lg modal-dialog-centered">

            <div class="modal-content">

                <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close">

                    <i class="fas fa-times"></i>

                </button>

                <div class="modal-body">

                    <div class="row">

                        <div class="col-12 col-md-6">

                            <div class="modal-image-jedan"></div>

                            <h3 class="modal-title mt-2" id="exampleModalLabel"><?php echo $usluga['plin_u_boci_naslov']; ?></h3>

                            <div class="d-flex cijena">

                                <p class="fw-bold">Cijena:</p>

                                <p class="fw-bold ms-1"><?php echo $usluga['plin_u_boci_cijena']; ?>KM</p>

                            </div>

                            <div class="kolicina-narudzbe">

                                <p class="fw-bold m-0">Kalkulator narudzbe:</p>

                                <!--<p class="fw-bold">Količina * Cijena = Ukupna cijena</p>-->

                                <div class="zbir d-flex">

                                    <p id="demo">1</p>

                                    <p class="ms-1">kom</p>

                                    <p class="ms-1 me-1">*</p>

                                    <p id="cijena"><?php print $usluga['plin_u_boci_cijena']; ?></p>

                                    <p> = </p>

                                    <p id="demoDva"><?php echo $usluga['plin_u_boci_cijena']; ?></p>

                                    <p>KM</p>

                                </div>

                                <p>*Cijene su informativnog karaktera</p>

                                <p class="modal-opis"><?php echo $usluga['plin_u_boci_opis']; ?></p>

                            </div>

                        </div>

                        <div class="col-12 col-md-6">
                            <?php echo do_shortcode("[contact-form-7 id='15' title='Plin u boci']"); ?>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- Modal dva -->

    <div class="modal fade" id="modalDva" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="modal-image-dva"></div>
                            <h3 class="modal-title mt-2" id="exampleModalLabel"><?php echo $usluga['auto_gas_naslov']; ?></h3>
                            <p></p>
                            <div class="d-flex cijena">
                                <p class="fw-bold">Cijena:</p>
                                <p class="fw-bold ms-1"><?php echo $usluga['auto_gas_cijena']; ?></p>
                            </div>

                            <div class="kolicina-narudzbe">
                                <p class="fw-bold m-0">Kalkulator narudzbe:</p>
                                <!--<p class="fw-bold">Količina * Cijena = Ukupna cijena</p>-->
                                <form action="POST">
                                    <label for=""><i class="fas fa-gas-pump"></i> Količina:</label>
                                    <select class="form-select mb-3" aria-label=".form-select example" id="kolicinaDva" OnChange="autoGas()"></select>
                                </form>

                                <div class="zbir d-flex">
                                    <p id="autoGasJedan">1</p>
                                    <p class="ms-1">l</p>
                                    <p class="ms-1 me-1">*</p>
                                    <p id="gasCijena"><?php echo $usluga['auto_gas_cijena']; ?></p>
                                    <p> = </p>
                                    <p id="autoGasDva"><?php echo $usluga['auto_gas_cijena']; ?></p>
                                    <p>KM</p>
                                </div>
                                <p>*Cijene su informativnog karaktera</p>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <p class="modal-opis"><?php echo $usluga['auto_gas_opis']; ?></p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Modal tri -->

    <div class="modal fade" id="modalTri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close-modal" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>

                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="modal-image-tri"></div>
                            <h3 class="modal-title mt-2" id="exampleModalLabel">Plin u cisterni</h3>
                            <div class="d-flex cijena">
                                <p class="fw-bold">Cijena:</p>
                                <p class="fw-bold ms-1">10KM</p>
                            </div>

                            <div class="kolicina-narudzbe">
                                <p class="fw-bold m-0">Kalkulator narudzbe:</p>
                                <!--<p class="fw-bold">Količina * Cijena = Ukupna cijena</p>-->

                                <div class="zbir d-flex">
                                    <p id="plinCisternaJedan">1</p>
                                    <p class="ms-1">l</p>
                                    <p class="ms-1 me-1">*</p>
                                    <p>8.88KM</p>
                                    <p> = </p>
                                    <p id="plinCisternaDva">8.88</p>
                                    <p>KM</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <form action="POST">
                                <label for=""><i class="fas fa-gas-pump"></i> Količina:</label>
                                <select class="form-select mb-3" aria-label=".form-select example" id="kolicinaTri" OnChange="plinCisterna()">
                                    <option value="1">1</option>

                                    <option value="2">2</option>

                                    <option value="3">3</option>

                                    <option value="4">4</option>

                                    <option value="5">5</option>

                                    <option value="6">6</option>

                                    <option value="7">7</option>

                                    <option value="8">8</option>

                                    <option value="9">9</option>

                                    <option value="10">10</option>

                                </select>

                                <label for=""><i class="fas fa-user"></i> Ime:</label>

                                <input type="text" class="form-control mb-3" placeholder="Ime" aria-label="First name">

                                <label for=""><i class="fas fa-user"></i> Prezime:</label>

                                <input type="text" class="form-control mb-3" placeholder="Prezime" aria-label="Last name">

                                <label for=""><i class="fas fa-phone-alt"></i> Broj telefona:</label>

                                <input type="text" class="form-control mb-3" placeholder="Broj telefona" aria-label="051/310-210">

                                <label for="adresa"><i class="fas fa-map-marked-alt"></i> Mjesto isporuke (adresa):</label>

                                <input type="text" class="form-control mb-3" id="adresa" placeholder="Adresa" aria-label="adresa">

                                <div class="mb-3">

                                    <label for="exampleFormControlTextarea1" class="form-label"><i class="fas fa-comments"></i> Poruka:</label>

                                    <textarea id="messageTri" class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Poruka"></textarea>

                                </div>

                                <button class="btn btn-naruci-modal">Naruči</button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>



<!--

    *

    *

    *

-->



    <!--O nama-->



    <section id="o-nama-section" class="section-o-nama d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">

                    <div class="cont-section-title d-flex justify-content-center justify-content-lg-start">
                        <hr class="section-hr">
                        <p class="section-title"><?php echo $onama['o_nama_naslov_sekcije']; ?></p>
                        <hr class="section-hr d-block d-lg-none">
                    </div>

                    <p class="o-nama-title m-0 text-center text-lg-start">Tamo gdje je <br> <span>sve počelo</span></p>
                    <p class="o-nama-txt m-0 text-center text-lg-start"><?php echo $onama['o_nama_tekst']; ?></p>

                    <div class="o-nama-btn-cont d-flex justify-content-center justify-content-lg-start m-md-0 p-0">
                        <a class="o-nama-btn btn d-flex justify-content-center align-items-center" href="<?php echo get_permalink(get_page_by_path('o-nama')); ?>">Više</a>
                    </div>
                </div>

                <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center mb-5 mb-lg-0">
                    <div class="o-nama-image"></div>
                </div>
            </div>
        </div>
    </section>

    <!--Okretanje-->

    <section id="numbers" class="section-okretanje d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 d-flex flex-column justify-content-center align-items-center order-1 pt-5 pb-5 pt-md-0 pb-md-0">
                    <p class="okretanje-number m-0"><?php echo $brojac['godine_rada_broj']; ?></p>
                    <p class="okretanje-txt m-0"><?php echo $brojac['godine_rada_naslov']; ?></p>
                </div>

                <div class="col-12 col-lg-4 d-flex flex-column justify-content-center align-items-center order-3 order-lg-2 pt-5 pb-5 pt-md-0 pb-md-0">
                    <div class="cont-plus d-flex justify-content-center align-items-center">
                        <p class="okretanje-number m-0"><?php echo $brojac['domacinstva_broj']; ?></p>
                        <p class="okretanje-number-plus m-0">+</p>
                    </div>

                    <p class="okretanje-txt m-0 text-center"><?php echo $brojac['domacinstva_naslov']; ?></p>
                </div>

                <div class="col-12 col-md-6 col-lg-4 d-flex flex-column justify-content-center align-items-center order-2 order-lg-3 pt-5 pb-5 pt-md-0 pb-md-0">
                    <p class="okretanje-number m-0"><?php echo $brojac['dostavna_vozila_broj']; ?></p>
                    <p class="okretanje-txt m-0 text-center"><?php echo $brojac['dostavna_vizila_naslov']; ?></p>
                </div>
            </div>
        </div>
    </section>



    <!-- Prednosti TNG-a -->



    <section class="section-prednosti">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="prednosti-title m-0 text-center pt-lg-5 pb-lg-5">Koje prednosti <span>ćete dobiti</span><br class="d-none d-md-block"> korišćenjem LPG-a?</p>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 pb-md-5 pl-0 pr-0 d-flex flex-column justify-content-center align-items-start">
                    <div class="prednosti-title-cont d-flex align-items-center">
                        <img src="<?php bloginfo('template_directory');?>/img/prednost_01.png" alt="Prednost icon">
                        <p class="prednosti-title-number m-0"><?php echo $prednosti['stavka_jedan']; ?></p>
                    </div>

                    <p class="prednosti-txt m-0"><?php echo $prednosti['stavka_jedan_tekst']; ?></p>

                    <div class="prednosti-title-cont d-flex align-items-center pt-5">
                        <img src="<?php bloginfo('template_directory');?>/img/prednosti_02.png" alt="Prednost icon">
                        <p class="prednosti-title-number m-0"><?php echo $prednosti['stavka_dva']; ?></p>
                    </div>

                    <p class="prednosti-txt m-0"><?php echo $prednosti['stavka_dva_tekst']; ?></p>

                    <div class="prednosti-title-cont d-flex align-items-center pt-5">
                        <img src="<?php bloginfo('template_directory');?>/img/prednosti_03.png" alt="Prednost icon">
                        <p class="prednosti-title-number m-0"><?php echo $prednosti['stavka_tri']; ?></p>
                    </div>

                    <p class="prednosti-txt m-0"><?php echo $prednosti['stavka_tri_tekst']; ?></p>
                </div>

                <div class="boca col-4 p-0 d-none d-lg-block d-lg-flex justify-content-lg-center align-items-lg-center">
                    <img src="<?php bloginfo('template_directory');?>/img/boca.png" alt="TNG boca">
                </div>

                 <div class="col-12 col-md-6 col-lg-4 pb-5 d-flex flex-column justify-content-start align-items-start pl-0 pr-0">                    
                    <div class="prednosti-title-cont d-flex align-items-center pt-5">
                        <img src="<?php bloginfo('template_directory');?>/img/prednosti_04.png" alt="Prednost icon">
                        <p class="prednosti-title-number m-0"><?php echo $prednosti['stavka_cetiri']; ?></p>
                    </div>

                    <p class="prednosti-txt m-0"><?php echo $prednosti['stavka_cetiri_tekst']; ?></p>

                    <div class="prednosti-title-cont d-flex align-items-center pt-5">
                        <img src="<?php bloginfo('template_directory');?>/img/prednosti_05.png" alt="Prednost icon">
                        <p class="prednosti-title-number m-0"><?php echo $prednosti['stavka_pet']; ?></p>
                    </div>

                    <p class="prednosti-txt m-0"><?php echo $prednosti['stavka_pet_tekst']; ?></p>

                    <div class="prednosti-title-cont d-flex align-items-center pt-5 pb-3">
                        <img src="<?php bloginfo('template_directory');?>/img/prednosti_06.png" alt="Prednost icon">
                        <p class="prednosti-title-number m-0">Saznajete više o LPG-u</p>
                    </div>

                    <a href="<?php echo get_permalink(get_page_by_path('o-lpg-u')); ?>" class="o-lpg-btn btn" style="width:100%;">O LPG-u</a>

                </div>
            </div>
        </div>
    </section>



    <!-- Mapbox -->



    <section class="section-map d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <?php echo do_shortcode("[wp_mapbox_gl_js map_id='6']"); ?>
            </div>
        </div>
    </section>



 <?php get_footer(); ?>