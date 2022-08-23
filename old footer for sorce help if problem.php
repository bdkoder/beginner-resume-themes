
   <!-- footer
   ================================================== -->
   <!-- footer
   ================================================== -->

   <footer>
     	<div class="row">

     		<div class="col-six tab-full pull-right social">

     			<ul class="footer-social">        
			      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			      <li><a href="#"><i class="fa fa-behance"></i></a></li>
			      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
			      <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
			      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
			   </ul> 
	      		
	      </div>

      	<div class="col-six tab-full">
	      	<div class="copyright">
		        	<span> © Copyright <?php echo the_time('Y'); ?>.</span> 
		        	<span>Design by <a href="http://www.shahidul.net">Shahidul Islam</a></span>	         	
		         </div>		                  
	      	</div>

	      	<div id="go-top">
		         <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
		      </div>

      	</div> <!-- /row -->     	
   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.3.min.js"></script>
   <script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
   <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php 
   wp_footer();
 ?>
</body>

</html>