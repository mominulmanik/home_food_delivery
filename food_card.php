
<?php ob_start();
include('include/admin/header.php');?>
    <section>
		<div class="container">
			<div class="row">
				<?php include('include/admin/sidebar.php');
				 $rand= rand(); ?>

                    
    <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Issue food cart</h2>
                        
          <?php

           include('db.php');
        if(isset($_POST['amount'])){
        $amount=$_POST['amount'];
        $user_id=$_POST['user'];
        $card_no=$_POST['card'];

        
        $q="INSERT INTO card (card_no,amount,user_id) VALUES ('$card_no','$amount','$user_id')";
        if(mysql_query($q))
            header("location:card_list.php");
        else echo "error";
        
}
          ?>
          					
          					<form action="food_card.php" method="POST">
          						<div class="form-group">
					                <label>Card no</label>
					                <input type="text" name="card" class="form-control" placeholder="<?php echo $rand;?>" value="<?php echo $rand?>" required>
					            </div>
					            <div class="form-group">
					                <label>Amount</label>
					                <input type="number" name="amount" class="form-control" placeholder="Amount" required>
					            </div>
					            <div class="form-group">
					                <label>User Id</label>
					                <input type="number" name="user" class="form-control" placeholder="User Id" required>
					            </div>
					            <div class="form-group">
					                <button type="submit" class="btn btn-success">OK</button>
					            </div>
					        </form>
              </section>
<?php include('include/admin/footer.php'); 
ob_end_flush();?>