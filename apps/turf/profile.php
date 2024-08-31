<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_TURF_ID'];
	$result = $db->prepare("select * from turf where Log_Id='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$name=$row["name"];
		$location=$row["location"];
		$addr=$row["addr"];
		$email=$row["email"];
		$cntno=$row["cntno"];	
		$expr=$row["expr"];	
		$photo=$row["photo"];	
		$date=$row["date"];	
	}
	$result = $db->prepare("select * from user where Log_Id='$Log_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$password=$row["password"];
	
	}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Turf Finding</title>
    <link rel="icon" type="text/css" sizes="16x16" href="../images/logo.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<?php
	include("include/css.php");
	?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	<header class="main-header">
	<?php
	include("include/header.php");
	?>
	</header>
	<aside class="main-sidebar">
	<?php
	include("include/leftmenu.php");
	?>
	</aside>
	<div class="content-wrapper">
	<?php
	include("include/topmenu.php");
	?>
	</div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-danger">
                <div class="box-body no-padding">
                	<div class="panel panel-primary">
  					  <div class="panel-heading ">
							Profile Update
                        </div>
							<div class="panel-body">  
                             <img src="../photo/<?php echo $photo;?>" width="300" height="350" class="img-rounded img-bordered">
                            <form method="post" action="action/profile_update.php" enctype="multipart/form-data" autocomplete="off">
                            <div class="col-md-6 col-sm-6 col-xs-12 well">
                                
                                <div class="row">
                                
                                        <div class="alert" style="padding:5px; background-color:#3399cc; color:white;">
                                            <strong>Personal Information</strong>
                                        </div>
                                    
                                    	<div class="col-md-12 col-sm-12 col-xs-12">
                                            <label>Turf ID</label>
				                               <input type="text" class="form-control" name="Log_Id"  value="<?php echo $Log_Id;?>" readonly>
                                        </div>                                                                                
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Name</label>
                                           <input type="text"  name="name"  class="form-control" value="<?php echo $name?>">
                                          </div>
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Contact No</label>
									       <input type="text"  name="cntno" class="form-control" value="<?php echo $cntno?>">
                                          </div>     
                                           <div class="col-md-12 col-sm-12 col-xs-12">
                                           <label>Address</label>
                                          	<textarea  class="form-control" rows="2" name="addr"><?php echo $addr?></textarea>
                                          </div>                                                                               
                                          <div class="col-md-12 col-sm-12 col-xs-12">
                                           <label>Experience</label>
                                          	<input type="text"  name="expr"   class="form-control" value="<?php echo $expr?>">
                                          </div>
                                       </div>                                    
								</div>
                                
                        	<div class="col-md-6 col-sm-6 col-xs-12 well">
                            
                                <div class="row">
                                
                                   <div class="alert" style="padding:5px; background-color:#3399cc; color:white">
                                        <strong>Authentication Information</strong>
                                    </div>                                   	                                       				
									  <div class="col-md-6 col-sm-6 col-xs-12">
										<label style="float:left">Create Date</label>
										<input type="text"  name="date"  class="form-control" value="<?php echo $date?>" readonly>
									 </div>	  
                                      <div class="col-md-6 col-sm-6 col-xs-12">
										<label style="float:left">Locaiton</label>
										<input type="text"  name="location"  class="form-control" value="<?php echo $location?>">
									 </div>	                                                                                          
                                     <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Password</label>
                                            	<input type="password"  name="password"  class="form-control" value="<?php echo $password?>">
                                     </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <label>Photo</label>
                                            	<input type="file"  name="photo"  class="form-control">
                                    </div>                                               
                                 </div>
                              
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12 well" style="float:right">
                            
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="submit" value="Update" class="btn btn-block btn-primary">
                            	 </div>
                                 
                            	 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="reset" value="Reset" class="btn btn-block btn-danger">
                            	 </div>
                                 
                            </div>
                            
							</form>
                         </div>
					 </div>
                  </div>				
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php
	include("include/footer.php");
?>
<div class="control-sidebar-bg"></div>
</div>
<?php
  include("include/js.php");
?>
</body>
</html>
