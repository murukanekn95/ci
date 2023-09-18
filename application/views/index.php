
<?php 


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="<?=asset_url();?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=asset_url();?>css/toastr.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"> -->
     <script src="<?=asset_url()?>js/jquery_min.js"></script>
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> -->
      
   
      

  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        
       
      </ul>
     <!--  <form class="d-flex" role="search">
        <input class="form-control " type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
<?php
if(!$this->session->userdata('userid'))
{
  ?><a class="nav-link me-5" style="" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Login</a>
<?php }
 ?>
          
          <!-- <button type="button" class="btn btn-primary" >
  Launch demo modal
</button>
    -->
    <?php 

if($this->session->userdata('userid'))
{  ?> <span>
      <li style="margin-right: 130px;" class="nav-item dropdown d-flex">
       <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?=$this->session->userdata('name')?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Account</a></li>
            <li><a class="dropdown-item" href="#">Forgot Password</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </li>
      </span>

<?php }

?>
   
         
    </div>
  </div>
</nav>

<div class="container mt-5">
  <h2 class="text-center">Posts</h2>
  <div class="col-md-12">
  <div class="row">
    
    <div class="col-md-4">
       <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    </div>
        <div class="col-md-4">
       <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    </div>
       <div class="col-md-4">
       <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    </div>
       <div class="col-md-4 mt-2">
       <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" id="form-name">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php echo form_open('welcome/doLogin', array('id' => 'loginform')) ?>
    <div class="mb-3" style="display: none;" id="namediv">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
<div class="mb-3" >
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
<input type="hidden" id="type" name="type" value="login">
     
      </div>
      <div class="modal-footer">
        <span class="me-5" id="showname">don't have an accouct? <a  href="#">Click here</a></span>
        <span id="login_text" style="display:none;" class="me-5">for login <a id="showlogin" href="#">Click here</a></span>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" id="login-btn" class="btn btn-primary" value="Login">
        <button type="submit" style="display:none;" id="register-btn" class="btn btn-primary">Register</button>

         </form>
      </div>
    </div>
  </div>
</div>
    <script src="<?=asset_url();?>bootstrap/dist/js/bootstrap.bundle.min.js"></script>
     <script src="<?=asset_url()?>js/toastr.js"></script>
    
   

        <script type="text/javascript">
          $(document).ready(function(){

            $("#showname").click(function(){
              $("#namediv").fadeIn(1000);
              $("#showname").hide();
              $("#login_text").show();
              $("#login-btn").hide();
              $("#register-btn").show();
              $("#form-name").html('Register');
              $("#type").val('register');
            });
            $("#showlogin").click(function(){
              $("#namediv").fadeOut(1000);
              $("#showname").show();
              $("#login_text").hide();
              $("#login-btn").show();
              $("#register-btn").hide();
              $("#form-name").html('Login');
              $("#type").val('login');

            });
    
          });
     
    </script>
  </body>
</html>