<?php
	include("auth.php");
	include('../connect/db.php');
	$Log_Id=$_SESSION['SESS_TURF_ID'];
?>	
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" type="text/css" sizes="16x16" href="../images/logo.png">
	<title>Turf Finding</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<?php
	include("include/css.php");
	?>    
     <style>
		td{text-transform:uppercase;}
	</style>
    <link rel="stylesheet" href="../css/custom_style.css" />
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
        
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Feedback Reply</h3>
            </div>
            
            
         	  <div class="box-body no-padding">
				 <div class="box-body">
		  		  <div class="col-xs-12 table_div table-responsive">
		  		  <table id="example1" class="table table-bordered table-striped table-responsive">
                   <thead>
                    <tr>
                     <th>Name</th>
                     <th>Contact</th>
                     <th>Subject</th>
                     <th>Description</th>
                     <th>Date</th>
                     <th>Reply</th>
                     <th>Date</th>
                   </tr>
                  </thead>
                  <tbody>	
                	 <?php
						$result = $db->prepare("select * from feedback where Log_Id='$Log_Id' and stat!='Pending'");
						$result->execute();
						for($i=1; $row = $result->fetch(); $i++)
						{
						echo"<tr>";
							echo"<td>".$row["fname"]."</td>";
							echo"<td>".$row["contactno"]."</td>";
							echo"<td>".$row["subj"]."</td>";
							echo"<td>".$row["despc"]."</td>";	
							echo"<td>".$row["date"]."</td>";	
							echo"<td>".$row["reply"]."</td>";
							echo"<td>".$row["rdate"]."</td>";																												
					   echo"</tr>";
					   }						
				?>		
				</tbody>
              </table>
              </div>
              	<a href="message_view.php" style="float:right" class="btn btn-facebook btn-primary m_t_1">Back</a>
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
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

</body>
</html>
