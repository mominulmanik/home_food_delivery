<?php 
ob_start();
?>

<?php include('include/home/header.php'); ?>
    
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <?php  
                        if(isset($_SESSION['user1_id'])){
                        $id=$_SESSION['user1_id'];
                        $sql="SELECT * FROM user where id='$id'";
                        $result=mysql_query($sql);
                        while($row = mysql_fetch_array($result)){ 
                         ?>
                        
                        <address>
                            <p>Name:<?php  echo $row['name']; ?></p>
                            <p>Hall:<?php   echo $row['hall'] ?></p>
                            <p>Mobile:<?php   echo $row['contact']; ?></p>
                            <p>Room:<?php  echo $row['room']; ?></p>
                            <p>Email:<?php  echo $row['email'];} }
                            else  header("location:index.php");?> </p>
                           <?php $sql1="SELECT * FROM card where user_id='$id'";
                        $result1=mysql_query($sql1);
                        while($row1= mysql_fetch_array($result1)){ 
                         ?>

                         <p>Card no:<?php  echo $row1['card_no'];?></p>
                         <p>Amount:<?php  echo $row1['amount'];?></p>
                         <?php  }?>
                            <p> <a href="change_profile.php" class="btn btn-success btn-lg">Change profile</a></p>
                        </address>
                    </div><!--/login form-->
                </div>
            </div>
        </div>
    </section><!--/form-->
    
    
<?php include('include/home/footer.php'); ?>
<?php  ob_endflush();?>