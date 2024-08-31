<?php
	include("auth.php");
	include('../connect/db.php');
	$turfrid=$_GET["turfrid"];
	$result = $db->prepare("select * from turf_register where turfrid='$turfrid'");
	$result->execute();
	$row_count =  $result->rowcount();
	for($i=0; $rows = $result->fetch(); $i++)
	{
		$Log_Id=$rows["Log_Id"];
		$name=$rows["name"];
		$licenno=$rows["licenno"];
		$cntno=$rows["cntno"];
		$location=$rows["location"];
		$addr=$rows["addr"];
		$capcty=$rows["capcty"];
		$amnt=$rows["amnt"];
		$edate=$rows["edate"];
		$desp=$rows["desp"];
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
							Funds Notification Send
                        </div>
							<div class="panel-body">  
                            
                            <form method="post" action="action/turf_update.php" enctype="multipart/form-data" autocomplete="off">
                            <div class="col-md-6 col-sm-6 col-xs-12 well">
                                
                                <div class="row">
                                
                                        <div class="alert" style="padding:5px; background-color:#3399cc; color:white;">
                                            <strong>Personal Information</strong>
                                        </div>
                                    
                                    	<div class="col-md-12 col-sm-12 col-xs-12">
                                            <label>TURF ID</label>
		                              	<input type="text" class="form-control" name="Log_Id" value="<?php echo $Log_Id?>" readonly >
                                        <input type="hidden" name="turfrid" value="<?php echo $turfrid?>" >
                                        </div>                                                                                                                         
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Name</label>
                                           <input type="text"  name="name" class="form-control" value="<?php echo $name?>">
                                          </div>                                                                                    
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>License No</label>
                                          	<input type="text"  name="licenno" class="form-control" value="<?php echo $licenno?>">  
                                          </div>                                          
                                          <div class="col-md-6 col-sm-12 col-xs-12">
                                           <label>Contact No</label>
                                          <input type="text"  name="cntno" class="form-control" value="<?php echo $cntno?>">  
                                          </div>  
                                           <div class="col-md-6 col-sm-6 col-xs-6">
                                           <label>Location</label>
                                            <input type="text"  name="location" class="form-control" value="<?php echo $location?>"> 
                                          </div>  
                                           <div class="col-md-12 col-sm-12 col-xs-12">
                                           <label>Address</label>
                                            <input type="text"  name="addr" class="form-control" value="<?php echo $addr?>"> 
                                          </div>                                                                   				
                                    </div>
                                    
								</div>
                                
                        	<div class="col-md-6 col-sm-6 col-xs-12 well">
                            
                                <div class="row">
                                
                                   <div class="alert" style="padding:5px; background-color:#3399cc; color:white">
                                        <strong>General Notifcation Information</strong>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
										<label style="float:left">Capacity</label>
										<input type="text"  name="capcty"  class="form-control" value="<?php echo $capcty?>">
									</div>	  
                                     <div class="col-md-6 col-sm-6 col-xs-12">
										<label style="float:left">Amount</label>
										<input type="number"  name="amnt"  class="form-control" value="<?php echo $amnt?>">
									</div>	 
                                      <div class="col-md-6 col-sm-6 col-xs-12">
										<label style="float:left">Established</label>
										<input type="date"  name="edate"  class="form-control" value="<?php echo $edate?>">
									</div>                                     
                                    <div class="col-md-6 col-sm-6 col-xs-12">
										<label style="float:left">Photo</label>
										<input type="file"  name="photo" class="form-control" required>
									</div>                                   
                                   	 <div class="col-md-12 col-sm-12 col-xs-12">
                                       <label>Description</label>
                                      	<textarea  name="desp" rows="2" class="form-control"><?php echo $desp?></textarea>
                                      </div>                                       				
									                                                                                                  
                                 </div>
                              
                            </div>
                            
                            <div class="col-md-3 col-sm-6 col-xs-12 well" style="float:right">
                            
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="submit" value="Submit" class="btn btn-block btn-primary" id="save1">
                            	 </div>
                                 
                            	 <div class="col-md-6 col-sm-6 col-xs-12">
                                 <input type="reset" value="Reset" class="btn btn-block btn-danger" id="cls1">
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

<script type="text/javascript">
$(document).ready(function()
{
	$('#fname1').change(function()
	{
		var fname1 = $("#fname1").val();
		$.ajax({				
			type:'POST',
			url:'funds_select.php',
			data:'fname1='+fname1,	
			dataType:"JSON",			
			success:function(data)
			{
				
			   $('#Log_Id').val(data.Log_Id);  
			   $('#name').val(data.name); 
			   $('#contactno').val(data.contactno);
			   $('#dpname').val(data.dpname);   
			   $('#smname').val(data.smname);
			   $('#email').val(data.email);
			   $('#addr').val(data.addr);
			}				
		}); 						
	});			
});
</script>
</body>
</html>
