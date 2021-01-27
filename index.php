<!--

=========================================================
* Volt - Bootstrap 5 Admin Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2020 Themesberg (https://www.themesberg.com)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<?php
define('DOC_ROOT', dirname(__FILE__).'/');
require dirname(__FILE__).'/includes/config.php';
require dirname(__FILE__).'/includes/functions.php';
require dirname(__FILE__).'/includes/data_validation.php';
    $pager_data = "action=search&rec_per_page=" . (int)$filter['rec_per_page'] . "&ip=" . htmlentities($filter['ip']) . "&port=" . (int)$filter['port'] . "&state=" . htmlentities($filter['state']) . "&protocol=" . htmlentities($filter['protocol']) . "&service=" . htmlentities($filter['service']) . "&banner=" . htmlentities($filter['banner']) . "&text=" . htmlentities($filter['text']) . "&exact-match=" . $filter['exact-match'] . "&page=";
    $rpp_data = "action=search&ip=" . htmlentities($filter['ip']) . "&port=" . (int)$filter['port'] . "&state=" . htmlentities($filter['state']) . "&protocol=" . htmlentities($filter['protocol']) . "&service=" . htmlentities($filter['service']) . "&banner=" . htmlentities($filter['banner']) . "&text=" . htmlentities($filter['text']) . "&exact-match=" . $filter['exact-match'] . "&page=1&rec_per_page=";
    $data_prev = "action=search&rec_per_page=" . (int)$filter['rec_per_page'] . "&ip=" . htmlentities($filter['ip']) . "&port=" . (int)$filter['port'] . "&state=" . htmlentities($filter['state']) . "&protocol=" . htmlentities($filter['protocol']) . "&service=" . htmlentities($filter['service']) . "&banner=" . htmlentities($filter['banner']) . "&text=" . htmlentities($filter['text']) . "&exact-match=" . $filter['exact-match'] . "&page=" . ($results['pagination']['page'] - 1);
    $data_next = "action=search&rec_per_page=" . (int)$filter['rec_per_page'] . "&ip=" . htmlentities($filter['ip']) . "&port=" . (int)$filter['port'] . "&state=" . htmlentities($filter['state']) . "&protocol=" . htmlentities($filter['protocol']) . "&service=" . htmlentities($filter['service']) . "&banner=" . htmlentities($filter['banner']) . "&text=" . htmlentities($filter['text']) . "&exact-match=" . $filter['exact-match'] . "&page=" . ($results['pagination']['page'] + 1);
    $data_search = "action=search&rec_per_page=" . (int)$filter['rec_per_page'] . "&ip=" . htmlentities($filter['ip']) . "&port=" . (int)$filter['port'] . "&state=" . htmlentities($filter['state']) . "&protocol=" . htmlentities($filter['protocol']) . "&service=" . htmlentities($filter['service']) . "&page=1&banner=" . htmlentities($filter['banner']) . "&exact-match=" . $filter['exact-match'] . "&text=";
?>

<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Volt Bootstrap 5 Dashboard - Bootstrap Tables</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Volt Bootstrap 5 Dashboard - Bootstrap Tables">
<meta name="author" content="Themesberg">
<meta name="description" content="Volt is a free and open source Bootstrap 5 Admin Dashboard featuring 11 example pages, 100 components and 3 plugins with Vanilla JS.">
<meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, free bootstrap 5 dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
<link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="./assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="./assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="./assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Fontawesome -->
<link type="text/css" href="./vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

<!-- Notyf -->
<link type="text/css" href="./vendor/notyf/notyf.min.css" rel="stylesheet">

<!-- Volt CSS -->
<link type="text/css" href="./css/volt.css" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>

        <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
    <a class="navbar-brand mr-lg-5" href="./index.html">
        <img class="navbar-brand-dark" src="./assets/img/brand/light.svg" alt="Volt logo" /> <img class="navbar-brand-light" src="./assets/img/brand/dark.svg" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

        <nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
      <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
        <div class="d-flex align-items-center">
          <div class="user-avatar lg-avatar mr-4">
            <img src="./assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white" alt="Bonnie Green">
          </div>
          <div class="d-block">
            <h2 class="h6">Hi, Jane</h2>
            <a href="./pages/examples/sign-in.html" class="btn btn-secondary text-dark btn-xs"><span class="mr-2"><span class="fas fa-sign-out-alt"></span></span>Sign Out</a>
          </div>
        </div>
        <div class="collapse-close d-md-none">
            <a href="#sidebarMenu" class="fas fa-times" data-toggle="collapse"
                data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                aria-label="Toggle navigation"></a>
        </div>
      </div>
      <ul class="nav flex-column">
        <li class="nav-item ">
          <a href="./pages/dashboard/dashboard.html" class="nav-link">
            <span class="sidebar-icon"><span class="fas fa-chart-pie"></span></span>
            <span>Overview</span>
          </a>
        </li>
        <li class="nav-item ">
          <a href="./pages/settings.html" class="nav-link">
              <span class="sidebar-icon"><span class="fas fa-cog"></span></span>
              <span>Settings</span>
          </a>
        </li>
        <li class="nav-item">
          <span class="nav-link  d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#submenu-app">
            <span>
              <span class="sidebar-icon"><span class="fas fa-table"></span></span> 
              Tables
            </span>
            <span class="link-arrow"><span class="fas fa-chevron-right"></span></span> 
          </span>
          <div class="multi-level collapse  show " role="list" id="submenu-app" aria-expanded="false">
              <ul class="flex-column nav">
                  <li class="nav-item  active "><a class="nav-link" href="./pages/tables/bootstrap-tables.html"><span>Bootstrap Tables</span></a></li>
              </ul>
          </div>
        </li>
        <li class="nav-item">
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#submenu-pages">
            <span>
              <span class="sidebar-icon"><span class="far fa-file-alt"></span></span> 
              Page examples
            </span>
            <span class="link-arrow"><span class="fas fa-chevron-right"></span></span> 
          </span>
          <div class="multi-level collapse " role="list" id="submenu-pages" aria-expanded="false">
              <ul class="flex-column nav">
                  <li class="nav-item"><a class="nav-link" href="./pages/examples/sign-in.html"><span>Sign In</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="./pages/examples/sign-up.html"><span>Sign Up</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="./pages/examples/forgot-password.html"><span>Forgot password</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="./pages/examples/reset-password.html"><span>Reset password</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="./pages/examples/404.html"><span>404 Not Found</span></a></li>
                  <li class="nav-item"><a class="nav-link" href="./pages/examples/500.html"><span>500 Server Error</span></a></li>
              </ul>
          </div>
        </li>
        <li class="nav-item">
          <span class="nav-link  collapsed  d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#submenu-components">
            <span>
              <span class="sidebar-icon"><span class="fas fa-box-open"></span></span> 
              Components
            </span>
            <span class="link-arrow"><span class="fas fa-chevron-right"></span></span> 
          </span>
          <div class="multi-level collapse " role="list" id="submenu-components" aria-expanded="false">
              <ul class="flex-column nav">
                  <li class="nav-item "><a class="nav-link" href="./pages/components/notifications.html"><span>Notifications</span></a></li>
                  <li class="nav-item "><a class="nav-link" href="./pages/components/forms.html"><span>Forms</span></a></li>
                  <li class="nav-item "><a class="nav-link" href="./pages/components/modals.html"><span>Modals</span></a></li>
              </ul>
          </div>
        </li>
        <li role="separator" class="dropdown-divider mt-4 mb-3 border-black"></li>
        <li class="nav-item">
          <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/quick-start/" target="_blank" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon"><span class="fas fa-book"></span></span>
            <span>Quick Start</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://nmap.world" target="_blank" class="nav-link d-flex align-items-center">
            <span class="sidebar-icon">
              <img src="./assets/img/themesberg.svg" height="20" width="20" alt="NMap World Logo">
            </span>
            <span>NMap World</span>
          </a>
        </li>
      </ul>
    </div>
</nav>


        <main class="content">

            <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
    <div class="container-fluid px-0">
      <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
        <div class="d-flex">
          <!-- Search form -->
          <form class="navbar-search form-inline" id="navbar-search-main">
            <div class="input-group input-group-merge search-bar">
                <span class="input-group-text" id="topbar-addon"><span class="fas fa-search"></span></span>
                <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
            </div>
          </form>
        </div>
        <!-- Navbar links -->
        <ul class="navbar-nav align-items-center">
          <li class="nav-item dropdown">
            <a class="nav-link text-dark mr-lg-3 icon-notifications" data-unread-notifications="true" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="icon icon-sm">
                <span class="fas fa-bell bell-shake"></span>
                <span class="icon-badge rounded-circle unread-notifications"></span>
              </span>
            </a>
            <div class="dropdown-menu dashboard-dropdown dropdown-menu-lg dropdown-menu-center mt-2 py-0">
              <div class="list-group list-group-flush">
                <a href="#" class="text-center text-primary font-weight-bold border-bottom border-light py-3">Notifications</a>
                <a href="./pages/calendar.html" class="list-group-item list-group-item-action border-bottom border-light">
                  <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="./assets/img/team/profile-picture-1.jpg" class="user-avatar lg-avatar rounded-circle">
                      </div>
                      <div class="col pl-0 ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                              <h4 class="h6 mb-0 text-small">Jose Leos</h4>
                            </div>
                            <div class="text-right">
                              <small class="text-danger">a few moments ago</small>
                            </div>
                        </div>
                        <p class="font-small mt-1 mb-0">Added you to an event "Project stand-up" tomorrow at 12:30 AM.</p>
                      </div>
                  </div>
                </a>
                <a href="./pages/tasks.html" class="list-group-item list-group-item-action border-bottom border-light">
                  <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="./assets/img/team/profile-picture-3.jpg" class="user-avatar lg-avatar rounded-circle">
                      </div>
                      <div class="col pl-0 ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                              <h4 class="h6 mb-0 text-small">Roberta Casas</h4>
                            </div>
                            <div class="text-right">
                              <small>5 hrs ago</small>
                            </div>
                        </div>
                        <p class="font-small mt-1 mb-0">Tagged you in a document called "First quarter financial plans",</p>
                      </div>
                  </div>
                </a>
                <a href="#" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media d-flex align-items-center">
                <img class="user-avatar md-avatar rounded-circle" alt="Image placeholder" src="./assets/img/team/profile-picture-3.jpg">
                <div class="media-body ml-2 text-dark align-items-center d-none d-lg-block">
                  <span class="mb-0 font-small font-weight-bold">Bonnie Green</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-2">
              <a class="dropdown-item font-weight-bold" href="#"><span class="far fa-user-circle"></span>My Profile</a>
              <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-cog"></span>Settings</a>
              <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-envelope-open-text"></span>Messages</a>
              <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-user-shield"></span>Support</a>
              <div role="separator" class="dropdown-divider"></div>
              <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-sign-out-alt text-danger"></span>Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
</nav>

            <div class="py-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                        <li class="breadcrumb-item"><a href="#"><span class="fas fa-home"></span></a></li>
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Bootstrap tables</li>
                    </ol>
                </nav>
				
				<!-- Added this code for testing -->
				
				<div class="row">
    <div class="col-md-6">
        <form class="form-inline">
            <label>
                <select class="form-control" size="1" name="rec_per_page" onchange="searchData('<?php echo $rpp_data; ?>' + this.value)">
                    <option value="10"<?php if ($filter['rec_per_page'] == 10): echo ' selected="selected"'; endif; ?>>10</option>
                    <option value="20"<?php if ($filter['rec_per_page'] == 20): echo ' selected="selected"'; endif; ?>>20</option>
                    <option value="30"<?php if ($filter['rec_per_page'] == 30): echo ' selected="selected"'; endif; ?>>30</option>
                    <option value="50"<?php if ($filter['rec_per_page'] == 50): echo ' selected="selected"'; endif; ?>>50</option>
                    <option value="100"<?php if ($filter['rec_per_page'] == 100): echo ' selected="selected"'; endif; ?>>100</option>
                </select>
                records per page
            </label>
        </form>
    </div> <!-- end of col-md-6 -->

    <div class="col-md-6 text-right">

        <form class="form-inline">
            <div class="form-group">
                <span class="ajax-throbber-wrapper"><img src="./assets/img/ajax-loader.gif" alt="Loading..." title="Loading..." id="ajax-loader" /></span>
                <label>Search:</label>
                <input class="form-control input-sm"  type="text" onkeyup="searchDataText('<?php echo $data_search; ?>'+this.value);" value="<?php echo htmlentities($filter['text']); ?>">
            </div>
        </form>
    </div> <!-- end of col-md-6 -->
</div> <!-- end of .row -->
				
				<!-- /End testing code -->
				
				<!-- Added this code for testing -->
				
				    <div class="row">
        <!-- BEGIN FORM CONTENT-->
         <div class="panel panel-default margin">
             <div style="display:block;" class="panel-heading clearfix" data-toggle="collapse show" href="#collapse">
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
				
				    <div class="panel-heading" >
        <h4><i class="glyphicon glyphicon-globe"></i> Results</h4>
        <div class="btn-group pull-right ">
            <button class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown">Save <i class="glyphicon glyphicon-chevron-down"></i></button>
            <ul class="dropdown-menu">
                <li><a href="javascript:void(0);" onclick="return exportResultsToXML('<?php echo http_build_query($filter);?>');" style="margin-left:10px;" id="export-link">Export to XML</a></li>
                <li><a href="export-csv.php" style="margin-left:10px;" id="export-link">Export to CSV</a></li>
            </ul>
        </div>
    </div> <!-- end of .panel-heading-->
				

				<!-- /End this code for testing -->
				
                <div class="d-flex justify-content-between w-100 flex-wrap">
                    <div class="mb-3 mb-lg-0">
                        <h1 class="h4">Bootstrap tables</h1>
                        <p class="mb-0">Dozens of reusable components built to provide buttons, alerts, popovers, and more.</p>
                    </div>
                    <div>
                        <a href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/components/tables/" class="btn btn-outline-gray"><i class="far fa-question-circle mr-1"></i> Bootstrap Tables Docs</a>
                    </div>
                </div>
            </div>

            <div class="card border-light shadow-sm">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0 rounded">
                            <thead class="thead-light">
                                <tr>
                                    <th class="border-0">IP Address</th>
                                    <th class="border-0">Banner / Title</th>
                                    <th class="border-0">Port</th>
                                    <th class="border-0">Service</th>
                                    <th class="border-0">Protocol</th>
                                    <th class="border-0">Information</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Item -->
                                <?php if (!empty($results['data'])): ?>
        <?php foreach ($results['data'] as $k => $r):?>
            <tr>
                <td class="ip"><a href="javascript:void(0);" onclick="return showIpHistory('<?php echo long2ip($r['ipaddress']); ?>', '<?php echo $r['ipaddress']; ?>')"><?php echo long2ip($r['ipaddress']); ?></a></td>
                <td class="banner">
                    <?php if (!empty($r['banner'])): ?>
                        <strong>Banner:</strong> <?php echo htmlentities($r['banner']); ?>
                    <?php endif; ?>
                    <?php if (!empty($r['title'])): ?>
                        <strong>Title:</strong> <?php echo htmlentities($r['title']); ?>
                    <?php endif; ?>
                </td>
                <td class="port"><?php echo $r['port_id']; ?></td>
                <td class="service">
                    <?php if ($r['service'] !== 'title'): ?>
                        <?php echo htmlentities($r['service']); ?>
                        <?php if ($r['service'] == 'http'): ?>
                        <a href="http://<?php echo long2ip($r['ipaddress'])?><?php echo ((int) $r['port_id'] > 0 && (int) $r['port_id'] !== 80)   ? ':'.$r['port_id']   :   '';?>" target="_blank"><i class="glyphicon glyphicon-new-window"></i></a><?php
                        endif; ?>
                    <?php endif; ?>
                </td>
                <td class="protocol"><?php echo htmlentities($r['protocol']); ?></td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="5" class="text-center">
                <p class="alert alert-danger">No results</p>
            </td>
        </tr>
    <?php endif; ?>
                                <!-- End of Item -->

                            </tbody>
                        </table>
						
						<!-- Added this ocde for testing -->
						
						<?php if ($results['pagination']['records'] > 0):?>
    <div class="row pagination-container">
        <div class="col-md-6">
            <p>Showing <?php echo $results['pagination']['from']; ?> to <?php echo $results['pagination']['to']; ?> of <?php echo $results['pagination']['records']; ?> entries</p>
        </div> <!-- end of col-md-6 -->
        <div class="col-md-6 text-right">

            <nav class="pull-right">
                <ul class="pagination pagination-sm">
                    <li class="prev<?php if ($results['pagination']['page'] == 1): echo " disabled"; endif; ?>">
                        <a href="javascript:void(0);" onclick="searchData('<?php echo $data_prev; ?>', 'ajax-loader-pagination');">&laquo; Prev</a>
                    </li>
                    <?php for ($i = 1; $i <= $results['pagination']['pages']; $i++): ?>
                        <?php if ((($results['pagination']['page'] - 3) < $i) && (($results['pagination']['page'] + 3) > $i)): ?>
                            <li class="<?php if ($results['pagination']['page'] == $i): echo "active"; endif; ?>">
                                <a href="javascript:void(0);" onclick="searchData('<?php echo $pager_data . $i; ?>', 'ajax-loader-pagination');"><?php echo (int)$i; ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endfor; ?>
                    <li class="next<?php if ($results['pagination']['page'] == $results['pagination']['pages']): echo " disabled"; endif; ?>">
                        <a href="javascript:void(0);" onclick="searchData('<?php echo $data_next; ?>');">Next  &raquo;</a>
                    </li>
                </ul>
            </nav>
            <img src="./assets/img/ajax-loader.gif" alt="Loading..." title="Loading..." id="ajax-loader-pagination" class="pull-right">
        </div> <!-- end of col-md-6 -->
    </div> <!-- end of .row -->
<?php endif;?>
						
						
						<!-- START MODAL-->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document" style="width:90%; margin:50px 5% 0; left:0;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 id="myModalLabel"></h3>
            </div>
            <div class="modal-body">
                <p></p>
            </div>
        </div>
    </div>
</div>
<!-- END MODAL-->
						<!-- /End code for testing here -->
						
						
                    </div>
                </div>
            </div>
            <footer class="footer section py-5">
    <div class="row">
        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <p class="mb-0 text-center text-xl-left">Copyright © 2019-<span class="current-year"></span> <a class="text-primary font-weight-normal" href="https://themesberg.com" target="_blank">Themesberg</a></p>
        </div>

        <div class="col-12 col-lg-6">
            <ul class="list-inline list-group-flush list-group-borderless text-center text-xl-right mb-0">
                <li class="list-inline-item px-0 px-sm-2">
                    <a href="https://themesberg.com/about">About</a>
                </li>
                <li class="list-inline-item px-0 px-sm-2">
                    <a href="https://themesberg.com/themes">Themes</a>
                </li>
                <li class="list-inline-item px-0 px-sm-2">
                    <a href="https://themesberg.com/blog">Blog</a>
                </li>
                <li class="list-inline-item px-0 px-sm-2">
                    <a href="https://themesberg.com/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
        </main>

    <!-- Core -->
<script src="./vendor/popper.js/dist/umd/popper.min.js"></script>
<script src="./vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Vendor JS -->
<script src="./vendor/onscreen/dist/on-screen.umd.min.js"></script>

<!-- Slider -->
<script src="./vendor/nouislider/distribute/nouislider.min.js"></script>

<!-- Jarallax -->
<script src="./vendor/jarallax/dist/jarallax.min.js"></script>

<!-- Smooth scroll -->
<script src="./vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Count up -->
<script src="./vendor/countup.js/dist/countUp.umd.js"></script>

<!-- Notyf -->
<script src="./vendor/notyf/notyf.min.js"></script>

<!-- Charts -->
<script src="./vendor/chartist/dist/chartist.min.js"></script>
<script src="./vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

<!-- Datepicker -->
<script src="./vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Simplebar -->
<script src="./vendor/simplebar/dist/simplebar.min.js"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="./assets/js/volt.js"></script>

    
</body>

</html>
