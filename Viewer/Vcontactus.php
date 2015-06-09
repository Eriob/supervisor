        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                <h3 class="page-title">
                Contact Us</h3>
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <span class="glyphicon glyphicon-home"></span>
                            <a href="./index.php?index=index">Home</a>
                            <span class="glyphicon glyphicon-chevron-right"></i>
                        </li>
                        <li>
                            <a href="index.php?index=contactus">Contact Us</a>
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
                                <label for="email" class="control-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required="required"/>
                            </div>

                            <div class="form-group">
                                <label for="firstname" class="control-label">First name</label>
                                <input type="text" name="firstname" id="firstname" class="form-control" required="required"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="lastname" class="control-label">Last name</label>
                                <input type="text" name="lastname" id="lastname" class="form-control" required="required"/>
                            </div>
                            
                            <div class="form-group">
                                <label for="message" class="control-label">Details</label>
                                <textarea name="message" id="message" class="form-control" rows="8" cols="60" placeholder="How can we help you ?" max-width="100" required="required"/></textarea>
                            </div>

                            <button type="submit" href="index.php?index=valid_contact" class="btn btn-primary pull-left">Soumettre le message</button>
                            </form>
                        </div>
                        </div>
                        <br><br><br><br><br><br><br><br><br>