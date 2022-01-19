<?php get_header(); ?>
<main>
    <div class="container">
        <div class="hero">
            <div class="left">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/image.jpg'; ?>" class="post-thumb" alt="post thumb">
                <a href="#" class="author">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/avatar.png' ?>" alt="author avatar" class="avatar">
                    <div class="author-bio">
                        <span class="author-name">Kri</span>
                        <span class="author-rank">Dev</span>
                    </div>
                    <!-- /.author-bio -->
                </a>
                <div class="post-text">
                    <a href="#" class="category-name">Categories</a>
                    <h2 class="post-title">Post Name</h2>
                    <a href="#" class="more">Read More &nbsp;&rarr;</a>
                </div>
                <!-- /.post-text -->
            </div>
            <!-- /.left -->
            <div class="right">

            </div>
            <!-- /.right -->
        </div>
        <!-- /.hero -->
    </div>
    <!-- /.container -->
</main>
<?php get_footer(); ?>