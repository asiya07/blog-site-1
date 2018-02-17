
<html>
  <head>
      
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
          
         <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
         <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
          <link rel="stylesheet" type="text/css" href="assets/css/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            
            
        <script src="http://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

        <title>Ciblog</title>
        
        
        
        
  
        <script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
        
        
        
</script>
<style> 
input[type=texts] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #18BC9C;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.2s ease-in-out;
    transition: width 0.2s ease-in-out;
}

input[type=texts]:focus {
    width:200px;
}
</style>

        
        
        
  </head>

  <body>
    <nav class="navbar navbar-light" style="background-color:#e3f2fd" >
     <div class="container">
       <div class="navbar-header" style="float:left;display: inline;text-indent: 15px;">
       
           <ul class="nav navbar-header">
               
               <h5> <li><a  href="<?php echo base_url(); ?>" style="text-decoration: none;"><b>BrightSideMe</b></a></li></h5>
               <h5><li><a href="<?php echo base_url(); ?>" style="text-decoration: none;">Home</a></li></h5>
               <h5><li><a href="<?php echo base_url(); ?>about" style="text-decoration: none;">About</a></li></h5>
               <h5><li><a href="<?php echo base_url(); ?>posts" style="text-decoration: none;">Blog</a></li></h5>
                <h5><li><a href="<?php echo base_url(); ?>categories" style="text-decoration: none;">Category</a></li></h5>
                <li>
            </ul>
          
       </div>
        
           <div id="navbar" style="float:right;">
          <ul class="nav navbar-nav navbar-right" style="float:right;text-indent:380px;">
              <li> 
 
<?php if($this->session->userdata('logged_in')== TRUE ): ?>
<a href="<?php echo base_url(); ?>posts/create">Create Post</a>&nbsp;&nbsp;
<a href="<?php echo base_url(); ?>categories/create" >Create Category</a>&nbsp;&nbsp;
<a href="<?php echo base_url(); ?>users/logout">Logout</a>

   <?php else: ?>
 
<li><a href="<?php echo base_url(); ?>users/login"  style="text-decoration: none;">
    </a>&nbsp;&nbsp;<a href="<?php echo base_url(); ?>users/register" style="text-decoration: none;">
                </a>&nbsp;&nbsp;<input type="texts" name="search" placeholder="Search.."></li>
  
         <?php endif; ?>
                     
       </li>
     </ul>
    </div>
  </div> 
 </nav>

  
<div class="container">
             
     
         <?php if($this->session->flashdata('user_registered')): ?>
             <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
                <?php endif; ?>
         
           <?php if($this->session->flashdata('post_created')): ?>
             <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
                <?php endif; ?>

             <?php if($this->session->flashdata('post_updated')): ?>
              <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
                <?php endif; ?>

              <?php if($this->session->flashdata('category_created')): ?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
                  <?php endif; ?>
             
              <?php if($this->session->flashdata('post_deleted')): ?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
                  <?php endif; ?>

               <?php if($this->session->flashdata('login_failed')): ?>
                <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
                  <?php endif; ?>

              
               <?php if($this->session->flashdata('user_loggedin')): ?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
                  <?php endif; ?>

             
              <?php if($this->session->flashdata('user_loggedout')): ?>
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
                  <?php endif; ?>

</div>
            