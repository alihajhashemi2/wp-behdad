<!-- Showcase -->
<?php
$id = get_option("my_option_name");
$id_key = $id["id_number"];
$title = get_option("my_option_name");
$title_key = $title["title"];
?>
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
                <a href="<?php echo get_permalink($id_key) ?>"><?php echo $title_key; ?></a>
            </div>
        </div>
    </div>
</div>
<!-- .End Showcase -->