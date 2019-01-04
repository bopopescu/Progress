<?php
/*
Template Name: reason
*/
get_header();
?>
     <aside> 
        <?php get_sidebar(); //sidebar.phpを取得 ?>
    </aside>
    <section class="card">
        <span>各種クレジットカードもご利用いただけます</span>
        <img src="<?php echo get_template_directory_uri(); ?>/img/card_sp.png" alt="">
    </section>
    <section class="banner">
        <ul class="slider">
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner_mitsui.jpg" alt="">
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner_STAFF.jpg" alt="">
            </li>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/img/banner_VOICE.jpg" alt="">
            </li>
        </ul>
    </section>
    <div class="guideLine">
        <span>不用品回収リング TOPページ</span>
    </div>
<?php get_footer(); ?>