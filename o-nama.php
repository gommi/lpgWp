<?php 
//Template Name: O nama Page
get_header(); 

$o_nama_page = get_field('o_nama_page');
?>



<section class="page-section-o-nama-banner d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="o-nama-banner-txt col-12">
                    <p><?php echo $o_nama_page['o_nama_banner_title']; ?></p>
                    <p><?php echo $o_nama_page['o_nama_banner_text']; ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="o-nama-page-section">
        <div class="container pt-md-5 pb-md-5">
            <div class="row">
                <div class="col-12 col-lg-6 o-nama-page-txt d-flex flex-column justify-content-center">
                    <p><?php echo $o_nama_page['o_nama_page_title']; ?></p>
                    <p><?php echo $o_nama_page['o_nama_page_text_one']; ?></p>
                    <p><?php echo $o_nama_page['o_nama_page_text_two']; ?></p>
                    <p><?php echo $o_nama_page['o_nama_page_text_three']; ?></p>
                    <p><?php echo $o_nama_page['o_nama_page_text_four']; ?></p>
                    
                </div>

                <div class="col-12 col-lg-6 o-nama-page-txt d-flex flex-column justify-content-center">
                    <div class="o-nama-worker" style=" background-image: url('<?php bloginfo('template_directory');?>/img/puniliste.jpeg');"></div>
                </div>

            </div>
            <div class="row pt-md-5">
                <div class="col-12 galerija">
                    <p class="m-0">Galerija</p>
                </div>
                <div class="col-12 col-md-12">
                    <?php echo do_shortcode('[nggallery id=1]');?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>