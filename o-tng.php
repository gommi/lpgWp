<?php
//Template Name: O TNG Page
get_header();

$o_tng = get_field('o_lpg');
?>


<section class="page-section-o-nama-banner d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="o-nama-banner-txt col-12">
                <p><?php echo $o_tng['o_lpg_banner_title']; ?></p>
                <p><?php echo $o_tng['o_lpg_banner_text']; ?></p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12 o-tng-u pt-3 pb-3 pt-md-5 pb-lg-5 mb-md-5">
                <p><?php echo $o_tng['o_lpg_title']; ?></p>
                <p><?php echo $o_tng['o_lpg_text']; ?></p>
            </div>
        </div>
    </div>
</section>

<?php
get_footer(); 
?>