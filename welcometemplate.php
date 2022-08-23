<?php
/*
Template Name: Welcome Resume
*/
?>
<?php get_header(); ?>



<?php 


// $ip = getenv('HTTP_CLIENT_IP')?:
// getenv('HTTP_X_FORWARDED_FOR')?:
// getenv('HTTP_X_FORWARDED')?:
// getenv('HTTP_FORWARDED_FOR')?:
// getenv('HTTP_FORWARDED')?:
// getenv('REMOTE_ADDR');


// echo $ip;


?>

<!-- intro section
================================================== -->
<section id="intro">
	<div class="intro-overlay"></div>
	<div class="intro-content">
		<div class="row">
			<div class="col-twelve">
				<section class="wow rotateIn" data-wow-duration="2s">
					
					<h5>Hello,</h5>
				</section>
				<section class="wow pulse" data-wow-duration="3s" data-wow-iteration="10000">
					
					<h1>I'm Shahidul Islam.</h1>
				</section>
				
				<p class="intro-position">
					<span>Web Developer</span>
					<span>UI/UX Designer</span>
				</p>
				<a class="button stroke smoothscroll" href="#about" title="">More About Me</a>
			</div>
			
		</div>
		</div> <!-- /intro-content -->
		
		<ul class="intro-social">
			<li><a target="blink" href="https://www.facebook.com/shahidulislam.friend"><i class="fa fa-facebook"></i></a></li>
			<li><a target="blink" href="#"><i class="fa fa-behance"></i></a></li>
			<li><a target="blink" href="https://www.instagram.com/shahidul_islam_bd_/?hl=en#"><i class="fa fa-twitter"></i></a></li>
			<li><a target="blink" href="#"><i class="fa fa-dribbble"></i></a></li>
			<li><a target="blink" href="https://www.instagram.com/shahidul_islam_bd_/?hl=en"><i class="fa fa-instagram"></i></a></li>
			</ul> <!-- /intro-social -->
			
			</section> <!-- /intro -->
			<!-- about section
			================================================== -->
			<section id="about">
				<div class="row section-intro">
					<div  class="col-twelve">
						<section class="wow rotateIn" data-wow-duration="2s">
							
							<h5>About</h5>
							<h1>Let me introduce myself.</h1>
							
						</section>
						
					</div>
					</div> <!-- /section-intro -->
					<div class="row about-content about-int">
						<div class="col-six tab-full myTextCenter">
							<section class="wow rotateInDownLeft" data-wow-duration="2s" data-wow-delay="2s">


							
					<?php
					global $post;
					$args = array( 'posts_per_page' => 1, 'post_type'=> 'myself');
						$myposts = get_posts( $args );
					foreach( $myposts as $post ) : setup_postdata($post); ?>
					
					<h3><?php the_title(); ?></h3>
									


					 <?php the_content();?>

									<br>
									<br>
					
					<?php endforeach; ?>
								
								
								<!-- <h3>Myself</h3>
								<p>Hello, I am Shahidul Islam. I am From Bangladesh. At present I am living at Colony in Bogra. This Town Situated of North of Bangladesh. My village town is Dinajpur.
									<br>
									<br>
 -->									
								</p>
								
							</section>
							
						</div>
						<div class="col-six tab-full">
							<section class="wow rotateInDownRight" data-wow-duration="2s" data-wow-delay="2s">
								
								<!-- <img src="<?php //echo get_template_directory_uri(); ?>/images/me-half photo good.jpg" alt="">
								 -->
								 	<?php
					global $post;
					$args = array( 'posts_per_page' => 1, 'post_type'=> 'myself');
						$myposts = get_posts( $args );
					foreach( $myposts as $post ) : setup_postdata($post); ?>
					
					
									


					<?php the_post_thumbnail('myself-thumb');  ?>

									<br>
									<br>
					
					<?php endforeach; ?>
							</section>
							
						</div>
					</div>
					<div class="row about-content">
						<div class="col-six tab-full myTextCenter">
							<section class="wow pulse" data-wow-duration="2s" data-wow-delay="3s">
								

				 	<?php
										global $post;
										$args = array( 'posts_per_page' => 1, 'post_type'=> 'profileDetails');
											$myposts = get_posts( $args );
										foreach( $myposts as $post ) : setup_postdata($post); ?>

										<h3><?php the_title(); ?></h3>
													
														<?php the_content(); ?>
													
								
					
					<?php endforeach; ?>
								
								<!-- <h3>Profile</h3>
								<p>Here all of my Personal Details.
									<br>
									If u wanna need more personal Details about me, you may contact with me by Email or Website Contact system.
								</p>
								 -->
							</section>
							<section class="wow pulse" data-wow-duration="2s" data-wow-delay="3s">
								
								<ul class="info-list">

									<li>
										<strong>Full Name:</strong>
										<span>Md Shahidul Islam</span>
									</li>


									<li>
										<strong>Nick Name:</strong>
										<span>Shahidul</span>
									</li>
									<li>
										<strong>Religion:</strong>
										<span>Muslim</span>
									</li>
									<li>
										<strong>Gender:</strong>
										<span>Male</span>
									</li>
									<li>
										<strong>Marital Status:</strong>
										<span>Unmaried</span>
									</li>
									<li>
										<strong>Language:</strong>
										<span>English, Bangla, Hindi.</span>
									</li>
									<li>
										<strong>Certificate Birth Date:</strong>
										<span>October 10, 1998</span>
									</li>
									<li>
										<strong>Real Birth Date:</strong>
										<span>April 04, 1996</span>
									</li>
									<li>
										<strong>Job:</strong>
										<span>Freelancer, Wordpress Developer</span>
									</li>
									<li>
										<strong>Website:</strong>
										<span>www.shahidul.net</span>
									</li>
									<li>
										<strong>Email:</strong>
										<span>mdislam7770@gmail.com</span>
									</li>
									</ul> <!-- /info-list -->
								</section>
							</div>
							<div class="col-six tab-full">
								<section class="wow pulse" data-wow-duration="2s" data-wow-delay="3s">


								<?php
										global $post;
										$args = array( 'posts_per_page' => 1, 'post_type'=> 'skillsDetails');
											$myposts = get_posts( $args );
										foreach( $myposts as $post ) : setup_postdata($post); ?>

									<h3><?php the_title(); ?></h3>
									 <?php the_content(); ?>
					
					<?php endforeach; ?>
									
								</section>
								<section class="wow pulse" data-wow-duration="2s" data-wow-delay="3s">
									<ul class="skill-bars">
										<li>
											<div class="progress percent60"><span>60%</span></div>
											<strong>C</strong>
										</li>
										<li>
											<div class="progress percent50"><span>50%</span></div>
											<strong>C++</strong>
										</li>
										<li>
											<div class="progress percent90"><span>90%</span></div>
											<strong>HTML5</strong>
										</li>
										<li>
											<div class="progress percent85"><span>85%</span></div>
											<strong>CSS3</strong>
										</li>
										<li>
											<div class="progress percent70"><span>70%</span></div>
											<strong>JavaScript</strong>
										</li>
										<li>
											<div class="progress percent80"><span>80%</span></div>
											<strong>JQuery</strong>
										</li>
										<li>
											<div class="progress percent60"><span>60%</span></div>
											<strong>PHP</strong>
										</li>
										<li>
											<div class="progress percent70"><span>70%</span></div>
											<strong>Wordpress</strong>
										</li>
										
										</ul> <!-- /skill-bars -->
									</section>
								</div>
								
							</div>
							<div class="row button-section">
								<div class="col-twelve">
									<section class="wow rotateIn" data-wow-duration="2s" data-wow-delay="2s">
										<a href="#contact" title="Hire Me" class="button stroke smoothscroll">Hire Me</a>
										<a target="blink" href="http://localhost:8011/Curriculum.pdf" target="blink" title="Download CV" class="button button-primary">Download RESUME</a>
									</section>
								</div>
							</div>
							</section> <!-- /process-->
							<!-- resume Section
							================================================== -->
							<section id="resume" class="grey-section">
								<div class="row section-intro">
									<div class="col-twelve">
										<section class="wow rollIn" data-wow-duration="2s" data-wow-delay="2s">
											
											<h5>Resume</h5>
											<h1>More of my credentials.</h1>
											<p class="lead">
												Below is a list of all my Work Experience and Short Courses.
											</p>
											
										</section>
									</div>
									</div> <!-- /section-intro-->
									<div class="row resume-timeline">
										<div class="col-twelve resume-header">
											<section class="wow pulse" data-wow-duration="2s" data-wow-delay="2s" data-wow-iteration="10000">
												<h2>Work Experience</h2>
											</section>
											</div> <!-- /resume-header -->
											<div class="col-twelve">
												<div class="timeline-wrap">
													
<section class="wow flipInX" data-wow-duration="2s" data-wow-delay="2s">
												
	
	<?php
										global $post;
										$args = array( 'posts_per_page' => -1, 'post_type'=> 'workExList');
											$myposts = get_posts( $args );
										foreach( $myposts as $post ) : setup_postdata($post); ?>

										<?php
											$course_s_e_date = get_post_meta($post->ID, 'course_s_e_date', true);
											$course_org_name = get_post_meta($post->ID, 'course_org_name', true);
										?>
	<div class="timeline-block">
		<div class="timeline-ico">
			<i class="fa fa-graduation-cap"></i>
		</div>
		<div class="timeline-header">
			<h3><?php the_title(); ?></h3>
			<p><?php echo $course_s_e_date; ?></p>
		</div>
		<div class="timeline-content">
			<h4><?php echo $course_org_name; ?></h4>
			<?php the_content(); ?>
		</div>
		</div> <!-- /timeline-block -->
					
					<?php endforeach; ?>										

<!-- 	<div class="timeline-block">
		<div class="timeline-ico">
			<i class="fa fa-graduation-cap"></i>
		</div>
		<div class="timeline-header">
			<h3>Web Designer</h3>
			<p>May 2013 - June 2014</p>
		</div>
		<div class="timeline-content">
			<h4>Great Designs Studio</h4>
			<p>Lorem ipsum Occaecat do esse ex et dolor culpa nis
			i ex in magna consectetur nisi cupidatat laboris esse eiusmod dese
			runt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum labor
			um occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.</p>
		</div>
		</div> <!- - /timeline-block --> 



</section>
</div> <!-- /timeline-wrap -->
</div> <!-- /col-twelve -->
</div> <!-- /resume-timeline -->
<div class="row resume-timeline">
																	<div class="col-twelve resume-header">
											<section class="wow pulse" data-wow-duration="2s" data-wow-delay="2s" data-wow-iteration="10000">
												<h2>Education</h2>
											</section>
																		
		</div> <!-- /resume-header -->
		<div class="col-twelve">
			<div class="timeline-wrap">

<section class="wow flipInX" data-wow-duration="2s" data-wow-delay="2s">


	<?php
										global $post;
										$args = array( 'posts_per_page' => -1, 'post_type'=> 'eduExList');
											$myposts = get_posts( $args );
										foreach( $myposts as $post ) : setup_postdata($post); ?>

										<?php
											$edu_s_e_date = get_post_meta($post->ID, 'edu_s_e_date', true);
											$edu_org_name = get_post_meta($post->ID, 'edu_org_name', true);
										?>
	<div class="timeline-block">
		<div class="timeline-ico">
			<i class="fa fa-graduation-cap"></i>
		</div>
		<div class="timeline-header">
			<h3><?php the_title(); ?></h3>
			<p><?php echo $edu_s_e_date; ?></p>
		</div>
		<div class="timeline-content">
			<h4><?php echo $edu_org_name; ?></h4>
			<?php the_content(); ?>
		</div>
		</div> <!-- /timeline-block -->
					
					<?php endforeach; ?>										

</section>


</div> <!-- /timeline-wrap -->
</div> <!-- /col-twelve -->
</div> <!-- /resume-timeline -->
</section> <!-- /features -->


<!-- Portfolio Section
							================================================== -->


<section id="portfolio">
<div class="row section-intro">
<div class="col-twelve">
<h5>Portfolio</h5>
<h1>Check Out Some of My Works.</h1>
<p class="lead">I do the following tasks. If you need a  Worker, please contact me</p>
</div>
</div> <!-- /section-intro-->
<div class="row portfolio-content">
<div class="col-twelve">

<!-- portfolio-wrapper -->

<div id="folio-wrapper" class="block-1-2 block-mob-full stack">





 <!-- /folio-item -->



<?php
										global $post;
										$args = array( 'posts_per_page' => -1, 'post_type'=> 'portfolio');
											$myposts = get_posts( $args );
										foreach( $myposts as $post ) : setup_postdata($post); ?>

										<div class="bgrid folio-item">
<div class="item-wrap">



<?php the_post_thumbnail('portfolio-thumb');  ?>
<?php
			 $get_portfolio_details_category;
			$get_portfolio_details_category = get_post_meta($post->ID, 'get_portfolio_details_category', true);
			?>


<a href="#<?php the_ID(); ?>" class="overlay">
<div class="folio-item-table">
<div class="folio-item-cell">
<h3 class="folio-title"><?php the_title(); ?></h3>
<span class="folio-types">

<?php if($get_portfolio_details_category) : ?>

<?php echo $get_portfolio_details_category; ?> 

<?php endif; ?>
</span>
</div>
</div>
</a>
</div>
</div> 



					
					<?php endforeach; ?>	

</div>
</div>
<!-- <div class="bgrid folio-item">
<div class="item-wrap">
<img src="<?php //echo get_template_directory_uri(); ?>/images/portfolio/shutterbug.jpg" alt="Shutterbug">
<a href="#modal-02" class="overlay">
<div class="folio-item-table">
<div class="folio-item-cell">
<h3 class="folio-title">Shutterbug</h3>
<span class="folio-types">
Web Design
</span>
</div>
</div>
</a>
</div>
</div> --> <!-- /folio-item -->




<!-- modal popups - begin
============================================================= -->


<!-- <div id="modal-02" class="popup-modal slider mfp-hide">
<div class="media">
<img src="<?php //echo get_template_directory_uri(); ?>/images/portfolio/modals/m-shutterbug.jpg" alt="" />
</div>
<div class="description-box">
<h4>Shutterbug</h4>
<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
<div class="categories">Web Design</div>
</div>
<div class="link-box">
<a href="http://www.behance.net">Details</a>
<a href="#" class="popup-modal-dismiss">Close</a>
</div>
</div> 
 -->
<?php
										global $post;
										$args = array( 'posts_per_page' => -1, 'post_type'=> 'portfolio');
											$myposts = get_posts( $args );
										foreach( $myposts as $post ) : setup_postdata($post); ?>
<?php
			
			
			 $get_portfolio_details_link = get_post_meta($post->ID, 'get_portfolio_details_link', true);
			?>


 <div id="<?php the_ID(); ?>" class="popup-modal slider mfp-hide">
<div class="media">


<img src="<?php //echo get_template_directory_uri(); ?>/images/portfolio/modals/m-shutterbug.jpg" alt="" />

<?php the_post_thumbnail('portfolio-thumb');  ?>


</div>
<div class="description-box">
<h4><?php the_title(); ?></h4>

<?php the_content(); ?>
<?php
			
			$get_portfolio_details_category = get_post_meta($post->ID, 'get_portfolio_details_category', true);
			?>
			<?php if($get_portfolio_details_category) : ?>

<div class="categories"> <?php echo $get_portfolio_details_category; ?> </div>
	<?php endif; ?>

</div>
<div class="link-box">
<?php if($get_portfolio_details_link) : ?>
<a target="blink" href="<?php echo $get_portfolio_details_link; ?>">Details</a>
<?php endif; ?>
<a href="#" class="popup-modal-dismiss">Close</a>
</div>
</div>
					
					<?php endforeach; ?>	







<!-- modal popups - end
============================================================= -->
</div> <!-- /portfolio-wrapper -->
</div>  <!-- /twelve -->
</div> <!-- /portfolio-content -->

</section> <!-- /portfolio -->
<!-- CTA Section
================================================== -->
<section id="cta" class="grey-section">
<div class="row cta-content">
<div class="col-twelve section-ads">
<h2 class="h01"><a href="http://www.shahidul.net">Styleshout Recommends Dreamhost.</a></h2>
<p class="lead">
Looking for an awesome and reliable webhosting? Try <a href="http://www.shahidul.net"><span>DreamHost</span></a>.
Get <span>$50 off</span> when you sign up with the promocode <span>styleshout</span>.
<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->
</p>
<div class="action">
<a target="blink" class="button button-primary large" href="http://www.shahidul.net">Sign Up Now</a>
</div>
</div>
</div> <!-- /cta-content -->
</section> <!-- /cta -->

<!-- services Section
================================================== -->
<section id="services">
<div class="overlay"></div>
<div class="row section-intro">
<div class="col-twelve">
<h5>Services</h5>
<h1>What Can I Do For You?</h1>
<p class="lead">
	I do all the following tasks for you.
</p>
</div>
</div> <!-- /section-intro -->
<div class="row services-content">
<div id="owl-slider" class="owl-carousel services-list">





	<?php
										global $post;
										$args = array( 'posts_per_page' => -1, 'post_type'=> 'whatIDo');
											$myposts = get_posts( $args );
										foreach( $myposts as $post ) : setup_postdata($post); ?>

										<?php
											$ser_resume_icon = get_post_meta($post->ID, 'ser_resume_icon', true);
											
										?>
 <div class="service">
<span class="icon">

<i class="fa fa-<?php echo $ser_resume_icon; ?>"></i>

</span>


<div class="service-content">
<h3><?php the_title(); ?></h3>

<?php the_content('whatIDo'); ?>


</div>
</div>
					
					<?php endforeach; ?>										

<!-- Start ei khan thekey Dynamic Hobey -->
<!-- <div class="service">
<span class="icon"><!- - <i class="icon-earth"></i> - ->

<i class="fa fa-cloud"></i>

</span>


<div class="service-content">
<h3>Webdesign</h3>
<p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
</p>

</div>
</div> --> <!-- /service -->

<!-- End ei khan thekey Dynamic Hobey -->


</div> <!-- /services-list -->

</div> <!-- /services-content -->

</section> <!-- /services -->
<!-- stats Section
================================================== -->


<?php //here Section Code Hobe ?>

<!-- contact
================================================== -->
<section id="contact">
<div class="row section-intro">
<div class="col-twelve">
<h5>Contact</h5>
<h1>I'd Love To Hear From You.</h1>
<p class="lead">If you need to contact me , You may use below of the Message System.  <br> Thank You .</p>
</div>
</div> <!-- /section-intro -->
<div class="row contact-form">
<div class="col-twelve">
<!-- form -->


<!-- <form name="contactForm" id="contactForm" method="post" action="">
<fieldset>
<div class="form-field">
<input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
</div>
<div class="form-field">
<input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
</div>
<div class="form-field">
<input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
</div>
<div class="form-field">
<textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
</div>
<div class="form-field">
<button class="submitform">Submit</button>
<div id="submit-loader">
<div class="text-loader">Sending...</div>
<div class="s-loader">
<div class="bounce1"></div>
<div class="bounce2"></div>
<div class="bounce3"></div>
</div>
</div>
</div>
</fieldset>
</form> -->




<?php echo do_shortcode('[contact-form-7 id="247" title="Contact form resume"]' ); ?>




<!-- Form End -->
<!-- contact-warning -->
<div id="message-warning">
</div>
<!-- contact-success -->
<div id="message-success">
<i class="fa fa-check"></i>Your message was sent, thank you!<br>
</div>
</div> <!-- /col-twelve -->

</div> <!-- /contact-form -->
									   	<div class="row contact-info">

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-pin"></i>
   			</div>

   			<h5>Where to find me</h5>

   			<p>
            Sherpur Road, Colony , Bogra-5800<br>
            Rajshahi, Dhaka<br>
            Bangladesh, US
            </p>

   		</div>

   		<div class="col-four tab-full collapse">

   			<div class="icon">
   				<i class="icon-mail"></i>
   			</div>

   			<h5>Email Me At</h5>

   			<p>bdkoder@gmail.com<br>
   			bdkoder@hotmail.com <br>
   			bdkoder@yahoo.com
			   				     
			   </p>

   		</div>

   		<div class="col-four tab-full">

   			<div class="icon">
   				<i class="icon-phone"></i>
   			</div>

   			<h5>Call Me At</h5>

   			<p>Mobile: (+880) 179 333 0005<br>
			  Mobile: (+880) 183 131 2936
			   </p>

   		</div>
   		
   	</div> <!-- /contact-info -->
		
	</section> <!-- /contact -->

<?php get_footer(); ?>