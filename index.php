<?php get_header(); ?>

   <!-- Intro Section
   ================================================== -->
   <section id="intro">

      <!-- Flexslider Start-->
	   <div id="intro-slider" class="flexslider">

		   <ul class="slides">

			   <!-- Slide -->
			   <li>
				   <div class="row">
					   <div class="twelve columns">
						   <div class="slider-text">
							   <h1>Lorem ipsum dolor sit<span>.</span></h1>
							   <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
                        enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. lacus sit amet luctus lobortis, dolores et quas molestias excepturi
                        enim tellus ultrices elit.</p>
						   </div>
                     <div class="slider-image">
                        <img src="images/sliders/home-slider-image-01.png" alt="" />
                     </div>
					   </div>
				   </div>
			   </li>

            <!-- Slide -->
			   <li>
				   <div class="row">
					   <div class="twelve columns">
						   <div class="slider-text">
							   <h1>Lorem ipsum dolor sit<span>.</span></h1>
							   <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                        deleniti eos et accusamus. amet consequat enim elit noneas sit amet luctu. lacus sit amet luctus lobortis.
                        Aenean condimentum, lacus sit amet luctus.</p>
						   </div>
                     <div class="slider-image">
                        <img src="images/sliders/home-slider-image-02.png" alt="" />
                     </div>
					   </div>
				   </div>
			   </li>

		   </ul>

	   </div> <!-- Flexslider End-->

   </section> <!-- Intro Section End-->

   <!-- Info Section
   ================================================== -->
   <section id="info">

      <div class="row">

         <div class="bgrid-quarters s-bgrid-halves">

           <div class="columns">
              <h2>Lorem ipsum.</h2>

              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
              Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
              </p>
           </div>

           <div class="columns">
              <h2>Lorem ipsum.</h2>

              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
              Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
              </p>
           </div>

           <div class="columns s-first">
              <h2>Lorem ipsum.</h2>

              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
              Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
              </p>
           </div>

           <div class="columns">
              <h2>Lorem ipsum.</h2>

              <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.
              Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
              </p>
           </div>

           </div>

      </div>

   </section> <!-- Info Section End-->

   <!-- Works Section
   ================================================== -->
   <section id="works">

      <div class="row">

         <div class="twelve columns align-center">
            <h1>Lorem ipsum dolor sit amet.</h1>
         </div>

         <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-halves">

    		   <div class="columns portfolio-item">
               <div class="item-wrap">
    				   <a href="portfolio.html">
                     <img alt="" src="images/portfolio/geometrics.jpg">
                     <div class="overlay"></div>
                     <div class="link-icon"><i class="fa fa-link"></i></div>
                  </a>
    					<div class="portfolio-item-meta">
    					   <h5><a href="portfolio.html">Lorem ipsum.</a></h5>
                     <p>Lorem ipsum.</p>
    					</div>
               </div>
    			</div>

            <div class="columns portfolio-item">
               <div class="item-wrap">
    				   <a href="portfolio.html">
                     <img alt="" src="images/portfolio/console.jpg">
                     <div class="overlay"></div>
                     <div class="link-icon"><i class="fa fa-link"></i></div>
                  </a>
    					<div class="portfolio-item-meta">
    					   <h5><a href="portfolio.html">Lorem ipsum.</a></h5>
                     <p>Lorem ipsum.</p>
    					</div>
               </div>
    			</div>

            <div class="columns portfolio-item s-first">
               <div class="item-wrap">
    				   <a href="portfolio.html">
                     <img alt="" src="images/portfolio/camera-man.jpg">
                     <div class="overlay"></div>
                     <div class="link-icon"><i class="fa fa-link"></i></div>
                  </a>
    					<div class="portfolio-item-meta">
    					   <h5><a href="portfolio.html">Lorem ipsum.</a></h5>
                     <p>Lorem ipsum.</p>
    					</div>
               </div>
    			</div>

            <div class="columns portfolio-item">
               <div class="item-wrap">
    				   <a href="portfolio.html">
                     <img alt="" src="images/portfolio/into-the-light.jpg">
                     <div class="overlay"></div>
                     <div class="link-icon"><i class="fa fa-link"></i></div>
                  </a>
    					<div class="portfolio-item-meta">
    					   <h5><a href="portfolio.html">Lorem ipsum.</a></h5>
                     <p>Lorem ipsum.</p>
    					</div>
               </div>
    			</div>

         </div>

      </div>

   </section> <!-- Works Section End-->

   <!-- Journal Section
   ================================================== -->
   <section id="journal">

      <div class="row">
         <div class="twelve columns align-center">
            <h1>Our latest posts and rants.</h1>
         </div>
      </div>

      <div class="blog-entries">

        <?php // параметры по умолчанию
          $posts = get_posts( array(
                  'numberposts' => 3,
                  'category'    => 0,
                  'orderby'     => 'date',
                  'order'       => 'ASC',
                  'meta_key'    => '',
                  'meta_value'  =>'',
                  'post_type'   => 'post',
                  'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){setup_postdata($post);
    // формат вывода the_title() ...
   ?>
    <!-- Entry -->
         <article class="row entry">

            <div class="entry-header">

               <div class="permalink">
                  <a href="<?php the_permalink()?>"><i class="fa fa-link"></i></a>
               </div>

               <div class="ten columns entry-title pull-right">
                  <h3><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
               </div>

               <div class="two columns post-meta end">
                  <p>
                  <time datetime="2014-01-31" class="post-date" pubdate=""><?php the_time('F jS, Y') ?></time>
                  <span class="dauthor">By <?php the_author() ?></span>
                  </p>
               </div>

            </div>

            <div class="ten columns offset-2 post-content">
               <?php the_excerpt() ?>
               <a class="more-link" href="<?php the_permalink()?>">Read More<i class="fa fa-arrow-circle-o-right"></i></a>
            </div>

         </article> <!-- Entry End -->
   <?php
}

wp_reset_postdata(); // сброс ?>

      </div> <!-- Entries End -->

   </section> <!-- Journal Section End-->
<?php get_footer(); ?>