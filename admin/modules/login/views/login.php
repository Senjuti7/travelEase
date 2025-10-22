<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jay Packers and Movers <?=date("D d M Y")?></title>
    
    <link href="<?=base_url()?>assets/admin/css/main.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/img/logo/favicon.png"/>
</head>
<body hoe-navigation-type="vertical" hoe-nav-placement="left" theme-layout="wide-layout" class="view-animate-container">
    <div id="hoeapp-wrapper" class="hoe-hide-lpanel" hoe-device-type="desktop" class="view-animate">
        
<br><br><br><br>            
    <div class=" col-sm-4 col-sm-offset-4 text-center">
        <h2 align="center">Welcome Administrator</h2>
        <br>
        <img src="<?=base_url("assets/img/logo/logo.png")?>" class="img-show" style="width:150px;" alt="logo">
        <br><br><br>
        <form class="form-horizontal" action="<?=site_url('login/check');?>" method="post">
           <?php 
           $error=validation_errors();
            if(isset($msg))
                echo '<div class="alert alert-danger">'.$msg.'</div>';
            else
            if(!$error)
                echo '<div class="alert alert-info">Please login with your Username and Password.</div>';
            else echo '<div class="alert alert-warning">'.$error.'</div>';?>
        
          
          <div class="form-group">  
            <label for="name" class="col-lg-2 control-label">Username</label>  
            <div class="col-lg-8">  
              <input class="form-control span10" name="user" autofocus id="username" value="<?=set_value('username');?>" placeholder="Username"/> 
            </div>  
          </div>  
          <div class="form-group">  
            <label for="email" class="col-lg-2 control-label">Password</label>  
            <div class="col-lg-8">  
              <input class="form-control span10" name="pass" id="password" type="password"  placeholder="Password"/> 
            </div>  
          </div> 
          <p class="col-sm-6 col-sm-offset-3">
              <button type="submit" class="btn btn-info btn-block" onclick="setvalue()" id="myButton">Login</button>
          </p>
        </form>         
    </div>

</div>
<script>
    function setvalue(){
        document.getElementById('myButton').innerText ='Verifying...';
    }
</script>
</body>
</html>