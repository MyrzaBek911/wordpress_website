<?php get_header() ?>

   <!-- Page Title
   ================================================== -->
  
   <?php if(have_posts()):while(have_posts()): the_post()?>
   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row">

         <div id="primary" class="eight columns">

            <article class="post">

               <div class="entry-header cf">

                  <h1><?php the_title() ?></h1>

                  <p class="post-meta">

                     <time class="date" datetime="2014-01-14T11:24"><?php the_time('F jS, Y') ?></time>
                     /

                  </p>

               </div>

               <div class="post-thumb">
                  <?php the_post_thumbnail() ?>
               </div>

               <div class="post-content">
                  
              <?php the_content() ?>

               </div>

            </article> <!-- post end -->


         </div> <!-- Primary End-->

         <div id="secondary" class="four columns end">

          <?php get_sidebar() ?>

         </div> <!-- Secondary End-->

      </div>

   </div> <!-- Content End-->
   <?php endwhile; ?>
<?php endif; ?>

  <?php get_footer() ?>