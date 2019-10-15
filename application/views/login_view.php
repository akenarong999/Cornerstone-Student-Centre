<div class="container">
	<br><br>
    <div class="login">
        <div class="login-screen">
          <div class="login-icon">
            <img src="<?php echo base_url();?>img/ss.PNG">
            <h4>Welcome to <small>CornerStone AdminPanel</small></h4>
          </div>

          <div class="login-form">
            <div class="form-group">
              <form action="<?php echo base_url();?>verifylogin" method="post">
              <input name="username" type="text" class="form-control login-field" value="" placeholder="Enter your name" id="login-name">
              <label class="login-field-icon fui-user" for="login-name"></label>
            </div>

            <div class="form-group">
              <input name="password" type="password" class="form-control login-field" value="" placeholder="Password" id="login-pass">
              <label class="login-field-icon fui-lock" for="login-pass"></label>
            </div>

            <input class="btn btn-primary btn-lg btn-block" value="login" type="submit">
           </form>
          </div>
        </div>
      </div> 	
</div>