        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                <h3 class="page-title">
                New User</h3>
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <span class="glyphicon glyphicon-home"></span>
                            <a href="./index.php?index=index">Home</a>
                            <span class="glyphicon glyphicon-chevron-right"></i>
                        </li>
                        <li>
                            <a href="index.php?index=createUser">New User</a>
                        </li>
                    </ul>
                    <div class="page-toolbar">
                    </div>
                </div>
                <!-- END PAGE HEADER-->
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-xs-3"></div>
                    <div class="col-lg-6 col-md-6 col-xs-6">
                        <form class="form-horizontal" name="register_form" method="POST" action="index.php?index=validNewUser">
                            
                            <div class="form-group">
                                <label for="name" class="control-label">Login</label> 
                                <input type="text" name="username" class="form-control" value="">
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
                                <label for="email" class="control-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control" required="required"/>
                            </div>


                            <div class="form-group">
                                <label for="password" class="control-label">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" id="password" class="form-control" required="required"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password2" class="control-label">Password Again</label>
                                <div class="input-group">
                                    <input type="password" name="password2" id="password2" class="form-control" required="required"/>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-left">Create New User</button>
                            </form>


                    </div>
                    </div>
                    <br><br><br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>