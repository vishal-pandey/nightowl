<div class="col-sm-12">
  <h3 align="center">Welcome Admin</h3>
  <div class="well col-sm-6" style="float: initial; margin-left: auto; margin-right: auto;">
    <form method="post">
      <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input type="text" class="form-control" name="uid" placeholder="User Id" required="true">
      </div>
      <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Password" required="true">
      </div>
      <br>
      <div class="input-group col-sm-12" style="text-align: center;">
        <input type="submit" name="submit" class="btn btn-primary" value="submit">
      </div>
    </form>
  </div>
  <div class="col-sm-12 error" style="text-align: center; display: none; color: red;">
      Wrong Credentials
  </div>
</div>
<?php
    if (isset($_POST['submit'])) {
        if (($_POST['uid'] == "admin") && (md5($_POST['password']) == "b6d57080f8ed5f7dbffaec653802cf3a"))
        {
            $_SESSION['theadmin'] = "superadmin";
            echo '<script type="text/javascript">location.reload();</script>';
            // echo '<script type="text/javascript">  window.location.href="./?link=home";</script>';
        }
        else{
            $_SESSION['error'] = "Wrong Credentials";
            echo '<script type="text/javascript">$(document).ready(function(){$(".error").css("display","block");});</script>';
        }
    }
?>

