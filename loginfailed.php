<?php include('include/home/header.php'); ?>  

    <div class="container">
      <div class="row">
        
       
        <?php if(isset($_SESSION['loginfail']))
       { ?>
        <h4 class="modal-title" id="myModalLabel"> <?php echo $_SESSION['loginfail'];
        unset($_SESSION['loginfail']); 
        //echo $_SESSION['loginfail']; ?> </h4>
        <?php } ?>
         <?php if(isset($_SESSION['notmatchpassword']))
       { ?>
        <h4 class="modal-title" id="myModalLabel"> <?php echo $_SESSION['notmatchpassword']; 
        unset($_SESSION['notmatchpassword']);
        //echo $_SESSION['notmatchpassword']; ?> </h4>
        <?php } ?>
         <?php if(isset($_SESSION['registrationfail']))
       { ?>
        <h4 class="modal-title" id="myModalLabel"> <?php echo $_SESSION['registrationfail']; 
        unset($_SESSION['registrationfail']);
        //echo $_SESSION['registrationfail']; ?> </h4>
        <?php } ?>
        
      </div>
    </div>
  
<?php include('include/home/footer.php'); ?>