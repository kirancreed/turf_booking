<!-- /.Row Start -->
<div class="row">
	
    
    <!-- /.Doctors Start -->
    <div class="col-md-6">
    	<!-- USERS LIST -->
   		<div class="box box-danger">
   		 	<div class="box-header with-border">
      			<h3 class="box-title">Latest Turf</h3>
          		<div class="box-tools pull-right">
                    <span class="label label-danger">8 New Members</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
          		</div>
    		</div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <ul class="users-list clearfix">
               <?php
				$result = $db->prepare("select * from  turf limit 4");
				$result->execute();
				for($i=1; $row = $result->fetch(); $i++)
					{
					?>
                <li>
                  <img src="../photo/<?php echo $row["photo"];?>" alt="User Image" style="width:120px; height:120px;">
                  <a class="users-list-name" href="#"><?php echo $row["name"];?></a>
                  <span class="users-list-date"><?php echo $row["date"];?></span>
                </li>
				<?php
					}
              ?> 
              </ul>
            </div>
            <!-- /.box-body -->
            
        <!-- /.box-footer -->
        </div>
    	<!--/.box -->
    </div>
    <!-- /.Doctors End-->
    
    
    <!-- /.Doctors Start -->
        <!-- /.Doctors End-->
</div>
<!-- /.Row-->

<div class="row">	    
    <div class="col-md-12">
    	<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Request</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">              
                   <table id="example1" class="table table-bordered table-striped table-responsive">
                   <thead>
                    <tr>
                     <th>Sl No</th>
                     <th>Name</th>
                     <th>Contact</th>
                     <th>Subject</th>
                     <th>Description</th>
                     <th>Starting Date</th>
                     <th>Dead Line</th>
                   </tr>
                  </thead>
                  <tbody>	                
                    <?php
							$result = $db->prepare("select * from notification limit 3");
							$result->execute();
							for($i=1; $row = $result->fetch(); $i++)
							{
							echo"<tr>";
								echo"<td>".$i."</td>";	
								echo"<td>".$row["name"]."</td>";	
								echo"<td>".$row["contno"]."</td>";
								echo"<td>".$row["subj"]."</td>";	
								echo"<td>".$row["descprt"]."</td>";	
								echo"<td>".$row["sdate"]."</td>";
								echo"<td>".$row["ddate"]."</td>";
								
						   echo"</tr>";
						   }						
				 	?>				
				</tbody>
              </table>
                </div>
            </div>
            <!--
            <div class="box-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">All Booking</a>
            </div>
            -->
    	</div>  
	</div>           
</div>  
