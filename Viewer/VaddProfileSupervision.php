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
								<input type="public_com" name="public_com" id="public_com" class="form-control"value="<?php if(isset($superv_id['public_com'])){echo $superv_id['public_com'];}?>" required="required"/>
							</div>
			
							<div class="form-group">
								<label for="private_com" class="control-label">Your private community:</label>
								<input type="private_com" name="private_com" id="private_com" class="form-control" <?php if(isset($superv_id['private_com'])){echo $superv_id['private_com'];}?> required="required"/>
							</div>
			
							<div class="form-group">
								<label for="syscontact" class="control-label">System admin's mail:</label>
								<input type="syscontact" name="syscontact" id="syscontact" class="form-control" <?php if(isset($superv_id['admin_mail'])){echo $superv_id['admin_mail'];}?>required="required"/>
							</div>
			
							<div class="form-group">
								<label for="syslocation" class="control-label">System location:</label>
								<input type="syslocation" name="syslocation" id="syslocation" class="form-control" <?php if(isset($superv_id['syslocation'])){echo $superv_id['syslocation'];}?>required="required"/>
							</div>
							
						
							<form name="addService">
								<div class="form-group" >
								<br><label for="nom" class="control-label">Process to supervise:</label>
								<input id="nom" type="text" name="nom" />
								</div>

								<div class="form-group" >
								<br><label for="nom" class="control-label">Maximum instances:</label>
								<input id="minimum" type="text" name="minimum" />
								</div>
								
								<div class="form-group" >
								<br><label for="nom" class="control-label">Minimum instances:</label>
								<input id="maximum" type="text" name="maximum" />
								</div>
								<br>
							</form>
							<button type="button" id="btnAddForm" onclick="CloneForm('addService');">Add another process</button>
							<br>	
			
							<div class="form-group" >
							<form name="addDisk">
								<div class="form-group" >
								<br><label for="nom" class="control-label">Name of the disk to supervise:</label>
								<input id="nom" type="text" name="nom" />
								</div>
								
								<div class="form-group" >
								<br><label for="nom" class="control-label">Maximum load:</label>
								<input id="minimum" type="text" name="minimum" />
								<br></div>
							</form>
							<button type="button" id="btnAddForm" onclick="CloneForm('addDisk');">Add another disk</button>
							<br>	
			

                            <button type="submit" href="index.php?index=valid_contact" class="btn btn-primary pull-left">Valid profile</button>
                        </div>
                        <br><br><br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>