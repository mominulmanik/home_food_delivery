<?php   

ob_start();


?>

<?php include('include/home/header.php'); ?>
    
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">

    

        <h4 class="modal-title" id="myModalLabel"> Change profile </h4>
      
      <!--<?php 
      if(isset($_POST['id'])&&isset($_POST['password'])){
        $id=$_POST['id'];
        $password=md5($_POST['password']);
       
 $sql="UPDATE user set password='$password' where id='$id'";
         $q = "SELECT * from user where id='$id'";
        $result = mysql_query($q);
        $row = mysql_fetch_array($result);
        if(mysql_query($sql))
        {
         // echo "ooooooo";
          $_SESSION['userlogin']=$row['name'];
        $_SESSION['user1_id']=$row['id'];
        echo $_SESSION['userlogin'];
        unset($_SESSION['login']);
        // header("location:index.php");
        }
        else echo "Problem";

    }


      ?>
      <?php if(isset($_SESSION['user1_id']))
      header("location:index.php")
      ;?>-->
      
      <div class="modal-body">
        <form action="forget.php" method="POST">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control" placeholder="ID" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>

<?php include('include/home/footer.php'); ?>

<?php ob_end_flush(); ?>