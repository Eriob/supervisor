	 <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                <h3 class="page-title">
                Add Profile</h3>
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <span class="glyphicon glyphicon-home"></span>
                            <a href="./index.php?index=index">Home</a>
                            <span class="glyphicon glyphicon-chevron-right"></i>
                        </li>
                        <li>
                            <a href="index.php?index=addProfileSupervision">Add Profile</a>
                        </li>
                    </ul>
                    <div class="page-toolbar">
                    </div>
                </div>
                <!-- END PAGE HEADER-->
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-xs-3"></div>
                    <div class="col-lg-6 col-md-6 col-xs-6">
                        <form class="form-horizontal" name="register_form" method="POST" action="index.php?index=valid_contact">
                            
                            <div class="form-group">
                                <label for="name" class="control-label">Login</label> 
                                <input type="text" name="name" class="form-control" value="<?php if(isset($_SESSION['name'])){
                                                                                                    echo $_SESSION['name'];
                                                                                                }else{
                                                                                                    echo "Unregistered";
                                                                                                }?>" readonly>
							</div>
							<div class="form-group">
								<label for="public_com" class="control-label">Your public community:</label>
								<input type="text" name="public_com" id="public_com" class="form-control" required="required"/>
							</div>
			
							<div class="form-group">
								<label for="private_com" class="control-label">Your private community:</label>
								<input type="text" name="private_com" id="private_com" class="form-control" required="required"/>
							</div>
			
							<div class="form-group">
								<label for="syscontact" class="control-label">System admin's mail:</label>
								<input type="text" name="syscontact" id="syscontact" class="form-control" required="required"/>
							</div>
			
							<div class="form-group">
								<label for="syslocation" class="control-label">System location:</label>
								<input type="text" name="syslocation" id="syslocation" class="form-control" required="required"/>
							</div>

							<div class="form-group" >
								<label for="service" class="control-label">Process to supervise:</label>
								<input id="service" type="text" name="service" class="form-control" />
							</div>

							<div class="form-group" >
								<label for="ins_min" class="control-label">Maximum instances:</label>
								<input id="ins_min" type="text" name="ins_min" class="form-control" />
							</div>
								
							<div class="form-group" >
								<label for="ins_max" class="control-label">Minimum instances:</label>
								<input id="ins_max" type="text" name="ins_max" class="form-control"/>
							</div>
							
							<div class="form-group" >
								<br><label for="partition" class="control-label">Name of the disk to supervise:</label>
								<input id="partition" type="text" name="partition" class="form-control" />
							</div>
								
							<div class="form-group" >
								<br><label for="charge" class="control-label">Maximum load:</label>
								<input id="charge" type="text" name="charge" class="form-control" />
							</div>
		
                            <button type="submit" href="index.php?addProfileSupervision" class="btn btn-primary pull-left">Valid profile</button>
                        </div>
                        <br><br><br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>