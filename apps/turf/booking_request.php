<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_TURF_ID'];
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
		include('include/css.php');
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
        <div class="">
          <div class="">
            <div class="col-xs-12">
            
              <div class="box box-danger">            
                <div class="box-body no-padding">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                        	All Turf Details Update
                        </div>
                        <div class="panel-body">                            
                       <!-- Col Start -->
                       <?php
                        $result = $db->prepare("select * from trcart where SLog_Id='$Log_Id' and stats='Pending'");
                        $result->execute();
                        $row_count =  $result->rowcount();
                        for($i=0; $rows = $result->fetch(); $i++)
                        {
							$cart_id = $rows['cart_id'];
							?>
                           <div class="col-md-4">
                              <!-- Widget: user widget style 1 -->
                              <div class="box box-widget widget-user">
                                <!-- Add the bg color to the header using any of the bg-* classes -->
                                <div class="widget-user-header bg-aqua-active">
                                  <h3 class="widget-user-username"><?php echo $rows['name'];?></h3>
                                  <h5 class="widget-user-desc"><?php echo $rows['caddr'];?></h5>
                                   <h5 class="widget-user-desc"><?php echo $rows['ccntno'];?></h5>
                                   <h5 class="widget-user-desc"><?php echo $rows['stats'];?></h5>
                                </div>
                                <div class="widget-user-image">
                                  <img class="img-circle" src="../photo/<?php echo $rows['photo'];?>" alt="User Avatar">
                                </div>
                                <div class="box-footer">
                                  <div class="row">
                                    <div class="col-sm-4 border-right">
                                      <div class="description-block">
                                        <h5 class="description-header"><?php echo $rows['tot'];?></h5>
                                        <span class="description-text">AMOUNT</span>
                                      </div>
                                      <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 border-right">
                                      <div class="description-block">
                                        <h5 class="description-header"><?php echo $rows['qty'];?></h5>
                                        <span class="description-text">PEOPLE</span>
                                      </div>
                                      <!-- /.description-block -->
                                    </div>
                                    <!-- /.col -->
                                     <div class="col-sm-4">
                                          <div class="description-block">
                                          <a href="action/booking_accept.php<?php echo '?cart_id='.$cart_id; ?>" class="btn btn-block btn-success">Accept</a>
                                          <a href="action/booking_cancel.php<?php echo '?cart_id='.$cart_id; ?>" class="btn btn-block btn-danger">Cancel</a>
                                          </div>
                                          <!-- /.description-block -->
                                        </div>
                                    <!-- /.col -->
                                  </div>
                                  <!-- /.row -->
                                </div>
                              </div>
                              <!-- /.widget-user -->
                            </div>
                          <!-- Col End -->
                          <?php }?>  
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
        
		<?php
  			include("include/js.php");
		?>        
	</div>

</body>
</html>
