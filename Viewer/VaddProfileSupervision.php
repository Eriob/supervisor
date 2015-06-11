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
                                                                                                    echo "Non enregistré";
                                                                                                }?>" readonly>
							</div>
							<div class="form-group">
								<label for="public_com" class="control-label">Votre communauté publique:</label>
								<input type="public_com" name="public_com" id="public_com" class="form-control" required="required"/>
							</div>
			
							<div class="form-group">
								<label for="private_com" class="control-label">Votre communauté privée:</label>
								<input type="private_com" name="private_com" id="private_com" class="form-control" required="required"/>
							</div>
			
							<div class="form-group">
								<label for="syscontact" class="control-label">Votre adresse mail:</label>
								<input type="syscontact" name="syscontact" id="syscontact" class="form-control" required="required"/>
							</div>
			
							<div class="form-group">
								<label for="syslocation" class="control-label">Localisation de la machine:</label>
								<input type="syslocation" name="syslocation" id="syslocation" class="form-control" required="required"/>
							</div>
			
							<div class="form-group">
								<label for="service" class="control-label">Service à superviser:</label>
								<input type="service" name="service" id="service" class="form-control" required="required"/>
							</div>
			
							<div class="form-group">
								<label for="ins_max" class="control-label">Nombre d'instances minimum:</label>
								<input type="ins_max" name="ins_max" id="ins_max" class="form-control" required="required"/>
							</div>
			
							<div class="form-group">
								<label for="ins_min" class="control-label">Nombre d'instances maximum:</label>
								<input type="ins_min" name="ins_min" id="ins_min" class="form-control" required="required"/>
							</div>
			
							<div class="form-group">
								<label for="partition" class="control-label">Partition à superviser:</label>
								<input type="partition" name="partition" id="partition" class="form-control" required="required"/>
							</div>
			
							<div class="form-group">
								<label for="charge" class="control-label">Charge maximale (en ko ou pourcentage):</label>
								<input type="charge" name="charge" id="charge" class="form-control" required="required"/>
							</div>
			

                            <button type="submit" href="index.php?index=valid_contact" class="btn btn-primary pull-left">Valid profile</button>
                            </form>
                        </div>
                        </div>
                        <br><br><br><br><br><br><br><br><br>
                    </div>
                </div>