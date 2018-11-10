<div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"> Login </h4>
      </div>
      <div class="modal-body">
        <form action="cart/data.php?q=user" method="POST">
            <div class="form-group">
                <label>Id</label>
                <input type="text" name="Id" class="form-control" placeholder="Id" required>
            </div>
            <div class="form-group">
                <label>password</label>
                <input type="password" name="password" class="form-control" placeholder="password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">LogIn</button>
                <a href="registration.php"  class="btn btn-success  ">Registration</a>
                <a href="forget.php"  class="btn btn-success  ">Forget Password</a>

            </div>
          </form>
      </div>
    </div>
  </div>
</div>