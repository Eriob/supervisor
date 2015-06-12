        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                <h3 class="page-title">
                To Do</h3>
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <span class="glyphicon glyphicon-home"></span>
                            <a href="./index.php?index=index">Home</a>
                            <span class="glyphicon glyphicon-chevron-right"></i>
                        </li>
                        <li>
                            <a href="index.php?index=ToDo">To Do</a>
                        </li>
                    </ul>
                    <div class="page-toolbar">
                    </div>
                </div>
                <!-- END PAGE HEADER-->
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-xs-2"></div>
                    <div class="col-lg-6 col-md-6 col-xs-6">
                        <strong><h2>First Step</h2></strong>    
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-xs-1"></div>
                    <div class="col-lg-6 col-md-6 col-xs-6">
                        <h4>Install SNMP on the machine you wish to monitor.</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-xs-2"></div>
                    <div class="col-lg-6 col-md-6 col-xs-6">
                        <strong><h2>Second Step</h2></strong>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-xs-1"></div>
                    <div class="col-lg-9 col-md-9 col-xs-9">
                        <h4><p>Fill in the form below:</p>
                        <p>Public community and Private community: A community in snmp is a group of users which has access to your snmp module and your MIB. The public community is only allowed to read, and the private community can read and write. These community names are used as passwords, choose wisely.</p>
                        <p>Your mail address (or the machine’s admin’s mail address)</p>
                        <p>The localization of the machine: which is used especially to find the machine more easier if you have many</p>
                        <p>The services you want to supervise: You have to put in the exact name of the process, that you can get for exemple with ps –aux</p>
                        <p>The minimum and maximum instances running: These are the counts of processes accepted for the service. Under the minimum level and over the maximum level, a trap will be sent and the service will be restarted.</p>
                        <p>Disk to supervise: With Supervisor you can supervise disks. Just fill this with the disk’s name</p>
                        <p>Charge: Here you want to write the minimum space you want to be free, in  Kb or in %. If you choose the percentage, don’t forget the % sign.</p></h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-xs-2"></div>
                    <div class="col-lg-6 col-md-6 col-xs-6">
                        <strong><h2>Third Step</h2></strong>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-xs-1"></div>
                    <div class="col-lg-9 col-md-9 col-xs-9">
                        <h4>Download the file offered to you, then go to your /etc/snmp and rename snmpd.conf to snmpd.conf.old, and insert there the file you just downloaded.</h4>
                    </div>
                </div>
                <br><br><br><br><br><br><br><br><br>
                </div>
            </div>
        </div>