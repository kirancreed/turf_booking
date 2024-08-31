<?php
	include("auth.php");
	include('../connect/db.php');
	$CLog_Id=$_SESSION['SESS_USER_ID'];
	$result = $db->prepare("select * from customer where Log_Id='$CLog_Id'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$cname=$row["name"];
		$caddr=$row["addr"];
		$ccntno=$row["cntno"];	
	}
	$turfrid=$_GET["turfrid"];
	$result = $db->prepare("select * from turf_register where turfrid='$turfrid'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++)
	{
		$SLog_Id = $row['Log_Id'];
		$name = $row['name'];	
		$scntno = $row['cntno'];	
		$saddr = $row['addr'];						
		$rate= $row['amnt'];
		$qty = $row['capcty'];
		$photo = $row['photo'];
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
            <div class="col-xs-6">
            
              <div class="box box-danger">            
                <div class="box-body no-padding">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                        	All Turf Details Update
                        </div>
                        <div class="panel-body">                            
                       <!-- Col Start -->
                      <form method="post" action="action/book_turf.php" class="forms" autocomplete="off" enctype="multipart/form-data"> 
                          <div class="col-md-4 col-sm-4 col-xs-4">
                            <img src="../photo/<?php echo $photo;?>" width="100%" class="img-responsive img-rounded">
                        </div>                   
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <label>Name</label>
                                 <input type="hidden"  name="CLog_Id"  value="<?php echo $CLog_Id?>">
                                  <input type="hidden"  name="SLog_Id"  value="<?php echo $SLog_Id?>">
                                  
                                   <input type="hidden"  name="cname"  value="<?php echo $cname?>">
                                 <input type="hidden"  name="caddr"  value="<?php echo $caddr?>">
                                 <input type="hidden"  name="ccntno"  value="<?php echo $ccntno?>">
                                 
                                 <input type="hidden"  name="scntno"  value="<?php echo $scntno?>">
                                 <input type="hidden"  name="saddr"  value="<?php echo $saddr?>">
                                 <input type="hidden"  name="photo"  value="<?php echo $photo?>">                             
                                 <input type="text"  name="name"  class="form-control"  value="<?php echo $name?>" readonly>
                        </div>                       
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <label>Rate</label>
                                <input type="text"  name="rate"  class="form-control"  value="<?php echo $rate?>" readonly id="price">
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <label>People</label>
                                <input type="number"  name="qty"  class="form-control" id="bqty" min="0" onKeyUp="Give_Balance();" required>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4">
                            <label>Total</label>
                                <input type="number"  name="tot"  class="form-control" id="tot" readonly>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <label>Description</label>
                                <input type="text"  name="des"  class="form-control">
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <label>Date</label>
                                <input type="text"  name="dat"  class="form-control" value="<?php echo date("d/m/Y");?>" readonly>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <label>Time From</label>
                                <input type="time"  name="ftime"  class="form-control">
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <label>Time To</label>
                                <input type="time"  name="ttime"  class="form-control">
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12" style="float:right">
                         <div class="col-xs-6 pull-right">
                            <br>
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Book</button>
                        </div>                   
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <br>
                               <a type="button" class="btn btn-primary pull-right m_t_1"  href="turf_search.php">

                                            <i class="fa fa-backward"></i> Back
                            </a>
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
        
		<?php
  			include("include/js.php");
		?>        
	</div>
<script>
function Give_Balance() {
	
	var price = document.getElementById('price').value;
	var bqty = document.getElementById('bqty').value;
	var tot = document.getElementById('tot').value;	
	

	var gtot = (parseFloat(bqty)*parseFloat(price));
	
	
	if(bqty == ''){
		document.getElementById('tot').value = "";
	}
	else if (!isNaN(gtot)){
		document.getElementById('tot').value = gtot;	
	}
}

</script>
</body>
</html>
