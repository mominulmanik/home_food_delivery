<?php include('include/home/header.php'); ?>
	
	<section>
		<div class="container">
			<div class="row">
				<?php include('include/home/sidebar.php'); ?>
				
                
				<div class="col-sm-9 padding-right">
					<div class="alert alert-success">
					 
					   <?php 
					   if(isset($_SESSION['ban']))
					   {
					   	?><h3 class="text-center"><i class="fa fa-check-circle fa-lg"></i><?php echo $_SESSION['ban']?></h3>";
						<?php }
					   else 
					   { ?>
					   "<h3 class="text-center"><i class="fa fa-check-circle fa-lg"></i> Your order has been submitted! Thank you for Shopping!</h3>";
					   <?php
					   }
					   ?>
                    </div>
				</div>
			</div>
		</div>
		</div>
	</section>
	
	<?php include('include/home/footer.php'); ?>