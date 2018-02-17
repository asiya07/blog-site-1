
<?php echo form_open('users/login'); ?> 
    
<div class="row">
    <div class ="col-lg-4 col-lg-offset-4 ">
        <br>
             <h3 class="txt-railway" style="margin-left:660px;">SignIn</h3>;
          
             <div class="form-group"> 
    <input type="text" name ="username" class="form-control" placeholder="Enter Username" required autofocus style="margin-left:500px;">
              </div>  
            <div class="form-group"> 
    <input type="password" name ="password" class="form-control" placeholder="Enter Password" required autofocus style="margin-left:500px;">
              </div>  
           <button type="submit" class="btn btn-primary btn-block" style="margin-left:500px;">Login</button>
          
      </div>
  </div>
         
<?php echo form_close(); ?>

  