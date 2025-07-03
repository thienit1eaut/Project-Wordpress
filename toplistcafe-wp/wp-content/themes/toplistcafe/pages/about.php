<?php /* Template Name: Trang giới thiệu */ ?>
<?php get_header(); ?>

<section class="content-banner-page">
    <div class="container">
        <div class="wrap-content-title-category">
            <h1 class="archive-title category-title"><?php the_title() ?></h1>
        </div>
    </div>
</section>

<section class="page-category-main">
    <div class="container">
        <div class="s-content py-4">
            <?php the_content() ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
