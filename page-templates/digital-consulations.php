<?php
/*
  Template Name: Digital Consultations
*/
?>

<?php get_header(); ?>
<script type="text/javascript" charset="utf-8">
  (function() {
 
 // store the slider in a local variable
 var $window = jQuery(window),
     flexslider = { vars:{} };

 // tiny helper function to add breakpoints
 function getGridSize() {
   return (window.innerWidth < 600) ? 1 :
          (window.innerWidth < 900) ? 3 : 4;
 }

 jQuery(function() {
   SyntaxHighlighter.all();
 });

 $window.load(function() {
    jQuery('.flexslider').flexslider({
     animation: "slide",
     animationLoop: true,
     itemWidth: 210,
     itemMargin: 5,
     directionNav: true,
     controlNav: true,
     minItems: getGridSize(), // use function to pull in initial value
     maxItems: getGridSize() // use function to pull in initial value
   });
 });

 // check grid size on resize event
 $window.resize(function() {
   var gridSize = getGridSize();

   flexslider.vars.minItems = gridSize;
   flexslider.vars.maxItems = gridSize;
 });
}());
</script>

<section class="content centred">
    
        <div class="content-container boxed-content">
            <div class="titles-container">
                <!-- Breadcrumbs -->
                <div class="breadcrumbs mb-2" typeof="BreadcrumbList" vocab="http://schema.org/">
                    <?php if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }
                    ?>
                </div>
                <h1 class="page-title"><?php the_title(); ?></h1>    
            </div>
            
                <?php 
                    $image = get_field('image');
                    $text = get_field('text_box');
                ?>
                    <div class="image-and-logos">
                            <img class="digital-image" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
                    </div>
                    
                        <div class="centred-column digital-text digital-textarea"><?= $text; ?>
                            <div class="vdc-container centred">
                                <a href="/request-a-brochure/" class="vdc btn btn-dark">Arrange Virtual Design Consultation</a>
                            </div>
                        </div>

                    <div class="logos-container">
                        <?php 
                            $logos = get_field('logos');
                        
                        if(have_rows('logos')) : ?>

                            <?php while(have_rows('logos') ) : the_row();
                                $logo_image = get_sub_field('logo_image');
                            ?>

                                <img src="<?= $logo_image['url']; ?>" alt="" class="contact-method-logos">

                            <?php endwhile; ?>

                        <?php endif; ?>
                    </div>

                    <?php 
                        $projects = get_field('projects');
                        if( $projects ): ?>
                            <div id="slider" class="flexslider carousel project-slider">
                                <ul class="slides">
                                    <?php foreach( $projects as $project ): ?>
                                        <li>
                                            <img src="<?php echo esc_url($project['url']); ?>" alt="<?php echo esc_attr($project['alt']); ?>" />
                                            <p><?php echo esc_html($project['alt']); ?></p>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                    <?php endif; ?>
        </div>
</section>
<?php get_footer(); ?>