<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIGN UP</title>
  <link rel="shortcut icon" href="images/logo.png"/>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" href="admin/webcraft/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="admin/webcraft/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="admin/webcraft/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="admin/webcraft/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="admin/style/css/AdminLTE.min.css">
  <link rel="stylesheet" href="admin/style/css/skins/_all-skins.min.css">
  
</head>
<body style="background-image:url(assets/images/breadcrumbs/3.jpg); background-size:cover;">
<br><br>
<section class="content">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        	<br><br><br><br> 
            <br>          
        </div>       
        <section>
            <div class="login-box">
    			<h1 class="text-center">&nbsp;</h1>
                <div class="login-box-body" style="background-color:transparent">
                    <br><br>
                    <form action="signup_save.php" method="post" autocomplete="off">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="cntno" placeholder="Contact" required>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                        	<select name="utype" class="form-control">
                            	<option value="">Select</option>
                                <option>Turf</option>
                                <option>Shops</option>
                                <option>Restaurant</option>
                                <option>User</option>
                            </select>
                        </div>
                        <div class="row">       
                        <div class="col-xs-4 pull-right">
                                <br>
                                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                            </div>                                                   
                             <div class="col-xs-4 pull-right">
                                <br>
                                <a href="index.php" class="btn btn-danger btn-block btn-flat">Back</a>
                            </div>      
                                              
                        </div>
                         <br> <br>                       
                    </form>  
                </div>
			</div> 	
        </section> 
    </div>
</section>
</body>
</html>

