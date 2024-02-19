<!-- Showcase -->
<?php $id = get_option("my_option_name"); ?>
<?php $id_key = $id["id_number"]; ?>
<div id="showcase" style="background-image: url(<?php echo get_the_post_thumbnail_url($id_key); ?>);">
    <div class="container">
        <div class="showcase-content">
            <!-- Title -->
            <div class="showcase-title">
                <?php echo get_the_title($id_key); ?>
            </div>
            <!-- Description -->
            <div class="showcase-des">
                <?php echo get_post_field("post_content", $id_key); ?>
            </div>
            <!-- Button -->
            <div class="showcase-button">
                <a href="<?php echo get_permalink($id_key) ?>">جزئیات بیشتر</a>
            </div>
        </div>
    </div>
</div>
<!-- .End Showcase -->