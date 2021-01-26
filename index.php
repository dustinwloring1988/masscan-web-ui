<?php
define('DOC_ROOT', dirname(__FILE__).'/');
require dirname(__FILE__).'/config.php';
require dirname(__FILE__).'/includes/functions.php';
require dirname(__FILE__).'/includes/data_validation.php';
include dirname(__FILE__).'/includes/header.php';
?>

<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Dashboard</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form_upload.html">Form Upload</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="plain_page.html">Plain Page</a></li>
                    </ul>
                  </li>                
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/img.jpg" alt="">John Doe
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                      <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
  
                  <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">6</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                          <span>
                            <span>John Smith</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

<!-- page content -->
        <div class="right_col" role="main">
          <div class='col-sm-12'>
            <div class="page-title">
              <div class="title_left">
                <h3>Search <small>data</small></h3>
              </div>
			</div>
		  </div>


<!-- Start of search -->
            <div class="title-center">

                <div class='col-sm-8'>
                    IP Address
                    <div class="form-group">
                        <div class='input-group date' id='ipAddress'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>

                <div class='col-sm-4'>
                    Port Number
                    <div class="form-group">
                        <div class='input-group date' id='portN'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                
                 <div class='col-sm-4'>
                    State
                    <div class="form-group">
                        <div class='input-group date' id='serviceState'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class='col-sm-4'>
                    Protocol
                    <div class="form-group">
                        <div class='input-group date' id='pProtocol'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                
                 <div class='col-sm-4'>
                    Service
                    <div class="form-group">
                        <div class='input-group date' id='pService'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class='col-sm-8'>
                    Service Banner / Title
                    <div class="form-group">
                        <div class='input-group date' id='pBanner'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
				<div class='col-sm-2'>
                    
                    <div class="form-group">
                        <div class='input-group date' id='eMatch'>
                            <label class="checkbox-inline">
                              <input type="checkbox" name="exact-match" checked>
                              Exact Match
                            </label>
                        </div>
                    </div>
                </div>
                
            </div>
                <div class='col-sm-2'>
                  <div class="input-group">
                    <div class="col-md-9 col-sm-9  offset-md-3">
						<button type="reset" class="btn btn-primary">Reset</button>
						<button type="submit" class="btn btn-success">Submit</button>
					</div>
                  </div>
				</div>


<!-- End of search -->

            <div class="clearfix"></div>
























<!-- BEGIN PAGE CONTENT -->
<div class="container-fluid">
    <div class="row">
        <!-- BEGIN FORM CONTENT-->
         <div class="panel panel-default margin">
             <div style="display:block;" class="panel-heading clearfix" data-toggle="collapse" href="#collapse">
                 <h4 class="pull-left"><i class="glyphicon glyphicon-search"></i> Search</h4>
                 <div id="search-params" class="pull-left"></div>
                 <a data-toggle="collapse" href="#collapse" style="display:block;" class="pull-right glyphicon glyphicon-minus"></a>
             </div>
             <div id="collapse" class="panel-collapse collapse in">
                 <div class="panel-body">
                     <form action="./index.php" class="horizontal-form" onsubmit="return submitSearchForm();" id="form">
                         <input type="hidden" name="action" value="search"/>
                         <div class="row">
                             <div class="col-md-2">
                                 <div class="form-group">
                                     <label for="ipAddress">IP Address</label>
                                     <input type="text" class="form-control input-sm" id="ipAddress" name="ip" value="<?php echo htmlentities($filter['ip']); ?>" placeholder="xxx.xxx.xxx.xxx">
                                 </div>
                             </div>
                             <div class="col-md-2">
                                 <div class="form-group">
                                     <label for="portN">Port Number</label>
                                     <input type="text" class="form-control input-sm" id="portN" name="port" value="<?php if ($filter['port'] > 0):echo (int)$filter['port'];endif; ?>" placeholder="1-65535">
                                 </div>
                             </div>
                             <div class="col-md-2">
                                 <div class="form-group">
                                     <label for="serviceState">State</label>
                                     <input type="text" class="form-control input-sm" id="serviceState" name="state" value="<?php echo htmlentities($filter['state']); ?>" placeholder="open/closed">

                                 </div>
                             </div>
                             <div class="col-md-3">
                                 <div class="form-group">
                                     <label for="pProtocol">Protocol</label>
                                     <input type="text" class="form-control input-sm" id="pProtocol" name="protocol" value="<?php echo htmlentities($filter['protocol']); ?>" placeholder="tcp/udp">
                                 </div>
                             </div>
                             <div class="col-md-3">
                                 <div class="form-group">
                                     <label for="pService">Service</label>
                                     <input type="text" class="form-control input-sm" id="pService" name="service" value="<?php echo htmlentities($filter['service']); ?>" placeholder="ftp/msrpc/smtp">
                                 </div>
                             </div>
                         </div> <!-- end of .row-->
                         <div class="row">
                             <div class="col-md-7">
                                 <div class="form-group">
                                     <label for="pBanner">Service Banner/Title</label>
                                     <input type="text" class="form-control input-sm" id="pBanner" name="banner" value="<?php echo htmlentities($filter['banner']); ?>" placeholder="IIS/Apache/ESMTP">
                                 </div>
                             </div>
                             <div class="col-md-2">
                                 <br>
                                 <div class="checkbox">
                                     <label><input type="checkbox" name="exact-match" value="1"<?php if ($filter['exact-match'] === 1): echo ' checked'; endif; ?>>Exact match</label>
                                 </div>
                             </div>
                             <div class="col-md-3">
                                 <br>
                                 <button type="submit" class="btn btn-primary btn-sm" style="width:100px;"><i class="glyphicon glyphicon-ok"></i> Go</button>
                                 <span class="ajax-throbber-wrapper-form"><img src="./assets/img/ajax-loader.gif" alt="Loading..." title="Loading..." id="ajax-loader-form"/></span>
                             </div>
                         </div> <!-- end of .row-->
                     </form>
                 </div>
             </div>
         </div>
         <!-- END FORM CONTENT-->
     </div> <!--end of .row -->

    <div class="row" id="ajax-search-container">
        <?php require dirname(__FILE__).'/includes/res-wrapper.php'; ?>
        <?php if (empty($results['data'])): ?>
            <p class="text-right import-help">How to import data? Click <a href="javascript:void(0);" onclick="showImportHelp();">here</a> for more info.</p>
        <?php endif;?>
    </div>
</div> <!-- end of .container-fluid -->
<!-- END PAGE CONTENT -->
<?php
include dirname(__FILE__).'/includes/footer.php';
