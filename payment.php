<?php
ob_start();
 include('include/home/header.php'); ?>

    	<section>
		<div class="container">
			<div class="row">
				<?php include('include/home/sidebar.php'); ?>

                    
    <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<?php 
						$total=$_GET['total'];

    	include('db.php');
    	//session_start();
    	if(isset($_POST['card']))
    	{	//$taka=0;
    		$card=$_POST['card'];
    		$result = mysql_query("SELECT * FROM card where card_no=$card");
							while($row = mysql_fetch_array($result))
								{

									$taka=$row['amount'];

								}
								
								if($taka>=$total)
								{ 
									$am=$taka-$total;
									$sql="UPDATE card set amount='$am' where card_no='$card'";
									//var_dump($sql);
									//unset($_SESSION['abc']);
									if(mysql_query($sql))
										//echo "oll";
										$total=0;
									header("location:cart/data.php?q=checkout");
								
									
								}
								else echo "Insufficient balance";
    	}

    	?>

        <form action="payment.php?total=<?php echo $total ;?>" method="POST">
          						<div class="form-group">
					                <label>Food card no</label>
					                <input type="number" name="card" class="form-control" placeholder="card" required>
					            </div>
					            
					            <div class="form-group">
					                <button type="submit" class="btn btn-success">OK</button>
					            </div>
					        </form>

<!--php ends here-->
		</div>
        </div>
</div>
</div>

</section>

<?php include('include/home/footer.php'); 
ob_end_flush();?>





















