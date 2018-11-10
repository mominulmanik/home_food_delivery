
<?php include('include/admin/header.php');?>
    <section>
		<div class="container">
			<div class="row">
				<?php include('include/admin/sidebar.php');?>

                    
    <div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th> Card No </th>
								<th> Amount </th>
								<th> User_id </th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('db.php');
							$result = mysql_query("SELECT * FROM card");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['card_no'].'</td>';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['amount'].'</td>';
									echo '<td style="border-left: 1px solid #C1DAD7;"><a rel="facebox" href="userinf.php?id='.$row['user_id'].'">'.$row['user_id'].'</a> </td>';
									
									echo '</tr>';
								}
?> 
						</tbody>
					</table>
              </section>
<?php include('include/admin/footer.php'); ?>