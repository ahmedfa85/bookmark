<?php
/**
 * Template Name: Front Page Template
 */

get_header(); ?>


    <?php get_template_part('includes/section', 'content'); ?>
    <div class="container py-5 faqs-section">
        <div class="row justify-content-center">
            <div class="col-md-6">
    <?php

// Check rows exists.
if( get_field('faqs') ): ?>
<div class="accordion faqs" id="accordionExample">
<?php $var = 0; ?>
    <!-- // Loop through rows. -->
    <?php while( has_sub_field('faqs') ): ?>
    <div class="accordion-item">
    <h2 class="accordion-header" id="<?php echo('heading-'.$var)?>">
    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo('#collapse-'.$var)?>" 
                        aria-expanded="<?php if($var==0):echo ('true'); else: echo ('false'); endif;?>" aria-controls="<?php echo('collapse-'.$var)?>">
                        <?php the_sub_field('pregunta'); ?>
        <?php the_sub_field('question') ?>
      </button>
    </h2>
    <div id="<?php echo('collapse-'.$var)?>" class="accordion-collapse collapse" aria-labelledby="<?php echo('heading-'.$var)?>" data-bs-parent="#accordionExample">
      <div class="accordion-body">
            <?php the_sub_field('answer') ?>
      </div>
    </div>
    </div>
    <?php $var++; endwhile; ?>
</div>
<?php endif; ?>
</div>
</div>
</div>
<section class="newsletter">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 py-5 text-center">
                <h5 class="text-white">35,000+ already joined</h5>
                <h2 class="py-3">Stay up-to-date with what we’re doing</h2>
                <?php echo do_shortcode( "[mc4wp_form id='65']" ); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>