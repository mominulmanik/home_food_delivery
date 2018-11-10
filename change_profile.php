<?php   

ob_start();


?>

<?php include('include/home/header.php'); ?>
    
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">

    

        <h4 class="modal-title" id="myModalLabel"> Change profile </h4>
      
      <?php 
      if(isset($_POST['hall'])&&isset($_POST['room'])){
        $hall=$_POST['hall'];
        $room=$_POST['room'];
        $contact=$_POST['contact'];
        $email=$_POST['email'];
        $id=$_SESSION['user1_id'];
 $q="UPDATE user set hall='$hall' , room='$room', contact='$contact', email='$email' where id='$id'";

        if(mysql_query($q))
        {
             header("location:profile.php");
        }
        else echo "Problem";

    }


      ?>
      <?php if(!isset($_SESSION['user1_id']))
      header("location:index.php")
      ;?>
      <div class="modal-body">
        <form action="change_profile.php" method="POST">
            <div class="form-group">
                <label>Hall</label>
                <input type="text" name="hall" class="form-control" placeholder="Hall" required>
            </div>
            <div class="form-group">
                <label>Room no</label>
                <input type="text" name="room" class="form-control" placeholder="Room no" required>
            </div>
            <div class="form-group">
                <label>Contact</label>
                <input type="text" name="contact" class="form-control" placeholder="Contact" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Email" required>
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