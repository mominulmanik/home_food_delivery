<?php include('include/home/header.php'); ?>

    	<section>
		<div class="container">
			<div class="row">
				<?php include('include/home/sidebar.php'); ?>
                <?php $filter = isset($_GET['filter']) ? $_GET['filter'] : '';?>
                    
    <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center"><?php echo $filter;?></h2>
            <br>
	
<!--php starts here-->
<?php											
					$result = mysql_query("SELECT * FROM products where Category like '%$filter%'");
                    

				if($result){				
				while($row=mysql_fetch_array($result)){
					
				$prodID = $row["ID"];	
					echo '<ul class="col-sm-4">';
					echo '<div class="product-image-wrapper">
						  <div class="single-products">
						  <div class="productinfo text-center">
					<a href="product-details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'"><img src="reservation/img/products/'.$row['imgUrl'].'" alt="'.$row['Product'].'" title="'.$row['Product'].'" width="150" height="150" />
                    </a>
					
					<h2><a href="product-details.php?prodid='.$prodID.'" rel="bookmark" title="'.$row['Product'].'">'.$row['Product'].'</a></h2>
					<h2>'.$row['Price'].'</h2>
					
					</div>';		
					echo '</ul>';			
				}
				}
				?>

<!--php ends here-->
		</div>
        </div>
</div>
</div>
</div>
</section>

<?php include('include/home/footer.php'); ?>