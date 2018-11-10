<?php include('include/admin/header.php'); ?>
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
					<table class="table table-bordered">
            <thead class="bg-primary">
                <th>Id</th>
                <th>Name</th>
                <th>Hall</th>
                <th>Room</th>
                <th>Contact</th>
            </thead>
            <?php $q = "SELECT * FROM canteen.user";
                $result = mysql_query($q);
           while($row = mysql_fetch_array($result)){ ?>
                <tr>
                    <td class="text-center"><?php echo $row['id']; ?></td>
                    <td class="text-center"><?php echo $row['name']; ?></td>
                    <td class="text-center"><?php  echo $row['hall'];?></td>
                    <td class="text-center"><?php echo $row['room'];?></td>
                    <td class="text-center"><?php echo $row['contact'];?></td>
                </tr>
            <?php } ?>
        </table>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
<?php include('include/admin/footer.php'); ?>