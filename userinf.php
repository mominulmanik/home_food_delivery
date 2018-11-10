
<?php //include('include/admin/header.php');?>
    <section>
		<div class="container">
			<div class="row">
				<?php //include('include/admin/sidebar.php');?>

                    
    <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						
					
						<?php
							include('db.php');
							$id=$_GET['id'];
							$result = mysql_query("SELECT * FROM user where id=$id");
							while($row = mysql_fetch_array($result))
								{?>
									<p>Name:<?php  echo $row['name']; ?></p>
                            <p>Hall:<?php   echo $row['hall'] ?></p>
                            <p>Mobile:<?php   echo $row['contact']; ?></p>
                            <p>Room:<?php  echo $row['room']; ?></p>
                            <p>Email:<?php  echo $row['email'];?>
						<?php		 }
?> 
						
              </section>
<?php //include('include/admin/footer.php'); ?>