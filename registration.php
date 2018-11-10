<?php include('include/home/header.php'); ?>  
<div class="container">
      <div class="row">
        <div class="col-sm-4 col-sm-offset-1">
        <h4 class="modal-title" id="myModalLabel"> Registration </h4>
      
        <form action="cart/data.php?q=registration" method="POST">
            <div class="form-group">
                <label>Id</label>
                <input type="text" name="id" class="form-control" placeholder="Id" required>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="name" required>
            </div>
             <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="email" required>
            </div>
            <div class="form-group">
                <label>Hall</label>
                <input type="text" name="hall" class="form-control" placeholder="hall" required>
            </div>
             <div class="form-group">
                <label>Room</label>
                <input type="text" name="room" class="form-control" placeholder="room" required>
            </div>
            <div class="form-group">
                <label>Contact</label>
                <input type="text" name="contact" class="form-control" placeholder="contact" required>
            </div>
             <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="password" required>
            </div>
            <div class="form-group">
                <label>Confirm password</label>
                <input type="password" name="confirm_password" class="form-control" placeholder="confirm password" required>
            </div>
        <div class="form-group">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </form>
</div>
</div>
</div>



<?php include('include/home/footer.php'); ?>