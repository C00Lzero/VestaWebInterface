***REMOVED***

session_start();

    if (file_exists( '../includes/config.php' )) { require( '../includes/config.php'); ***REMOVED***  else { header( 'Location: ../install' );***REMOVED***;

    if(base64_decode($_SESSION['loggedin']) == 'true') {***REMOVED***
      else { header('Location: ../login.php'); ***REMOVED***

    $postvars = array(
      array('user' => $vst_username,'password' => $vst_password,'cmd' => 'v-list-user','arg1' => $username,'arg2' => 'json'),
      array('user' => $vst_username,'password' => $vst_password,'cmd' => 'v-list-database','arg1' => $username,'arg2' => $requestdb, 'arg3' => 'json'),
      array('user' => $vst_username,'password' => $vst_password,'cmd' => 'v-list-database-types', 'arg1' => 'json'),
      array('user' => $vst_username,'password' => $vst_password,'cmd' => 'v-list-database-hosts', 'arg1' => 'json'));

    $curl0 = curl_init();
    $curl1 = curl_init();
    $curl2 = curl_init();
    $curl3 = curl_init();
    $curlstart = 0; 

    while($curlstart <= 3) {
        curl_setopt(${'curl' . $curlstart***REMOVED***, CURLOPT_URL, $vst_url);
        curl_setopt(${'curl' . $curlstart***REMOVED***, CURLOPT_RETURNTRANSFER,true);
        curl_setopt(${'curl' . $curlstart***REMOVED***, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt(${'curl' . $curlstart***REMOVED***, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt(${'curl' . $curlstart***REMOVED***, CURLOPT_POST, true);
        curl_setopt(${'curl' . $curlstart***REMOVED***, CURLOPT_POSTFIELDS, http_build_query($postvars[$curlstart]));
        $curlstart++;
    ***REMOVED*** 

    $admindata = json_decode(curl_exec($curl0), true)[$username];
    $useremail = $admindata['CONTACT'];
    $dbname = array_keys(json_decode(curl_exec($curl1), true));
    $dbdata = array_values(json_decode(curl_exec($curl1), true));
    $dbtypes = array_values(json_decode(curl_exec($curl2), true));
    $dbhosts = array_values(json_decode(curl_exec($curl3), true));
    if(isset($admindata['LANGUAGE'])){ $locale = $ulang[$admindata['LANGUAGE']]; ***REMOVED***
    setlocale(LC_CTYPE, $locale); setlocale(LC_MESSAGES, $locale);
    bindtextdomain('messages', '../locale');
    textdomain('messages');

***REMOVED***

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/ico" href="../plugins/images/favicon.ico">
    <title>***REMOVED*** echo $sitetitle; ***REMOVED*** - ***REMOVED*** echo _("Database"); ***REMOVED***</title>
    <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/footable/css/footable.bootstrap.css" rel="stylesheet">
    <link href="../plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link href="../css/colors/***REMOVED*** if(isset($_COOKIE['theme'])) { echo base64_decode($_COOKIE['theme']); ***REMOVED*** else {echo $themecolor; ***REMOVED*** ***REMOVED***" id="theme" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.5/sweetalert2.min.css" />
    ***REMOVED*** if(isset(GOOGLE_ANALYTICS_ID)){ echo "<script async src='https://www.googletagmanager.com/gtag/js?id=" . GOOGLE_ANALYTICS_ID . "'></script>
    <script>window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);***REMOVED*** gtag('js', new Date()); gtag('config', '" . GOOGLE_ANALYTICS_ID . "');</script>"; ***REMOVED*** 
    <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
       <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> 
        </svg>
    </div>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="../index.php">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="../plugins/images/admin-logo.png" alt="home" class="logo-1 dark-logo" /><!--This is light logo icon--><img src="../plugins/images/admin-logo-dark.png" alt="home" class="logo-1 light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="../plugins/images/admin-text.png" alt="home" class="hidden-xs dark-logo" /><!--This is light logo text--><img src="../plugins/images/admin-text-dark.png" alt="home" class="hidden-xs light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left">
                    <li><a href="javascript:void(0)" class="open-close waves-effect waves-light visible-xs"><i class="ti-close ti-menu"></i></a></li>      
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">

                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"><b class="hidden-xs">***REMOVED*** print_r($uname); ***REMOVED***</b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-text">
                                        <h4>***REMOVED*** print_r($uname); ***REMOVED***</h4>
                                        <p class="text-muted">***REMOVED*** print_r($useremail); ***REMOVED***</p></div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../profile.php"><i class="ti-home"></i> ***REMOVED*** echo _("My Account"); ***REMOVED***</a></li>
                            <li><a href="../profile.php?settings=open"><i class="ti-settings"></i> ***REMOVED*** echo _("Account Settings"); ***REMOVED***</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../process/logout.php"><i class="fa fa-power-off"></i> ***REMOVED*** echo _("Logout"); ***REMOVED***</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3>
                        <span class="fa-fw open-close">
                            <i class="ti-menu hidden-xs"></i>
                            <i class="ti-close visible-xs"></i>
                        </span> 
                        <span class="hide-menu">***REMOVED*** echo _("Navigation"); ***REMOVED***</span>
                    </h3>  
                </div>
               <ul class="nav" id="side-menu">
                            <li> 
                                <a href="../index.php" class="waves-effect">
                                    <i class="mdi mdi-home fa-fw"></i> <span class="hide-menu">***REMOVED*** echo _("Dashboard"); ***REMOVED***</span>
                                </a> 
                            </li>

                            <li class="devider"></li>
                            <li>
                                <a href="#" class="waves-effect"><i  class="ti-user fa-fw"></i><span class="hide-menu"> ***REMOVED*** print_r($uname); ***REMOVED***<span class="fa arrow"></span></span>
                                </a>
                                <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
                                    <li> <a href="../profile.php"><i class="ti-home fa-fw"></i> <span class="hide-menu"> ***REMOVED*** echo _("My Account"); ***REMOVED***</span></a></li>
                                    <li> <a href="../profile.php?settings=open"><i class="ti-settings fa-fw"></i> <span class="hide-menu"> ***REMOVED*** echo _("Account Settings"); ***REMOVED***</span></a></li>
                                </ul>
                            </li>
                        ***REMOVED*** if ($webenabled == 'true' || $dnsenabled == 'true' || $mailenabled == 'true' || $dbenabled == 'true') { echo '<li class="devider"></li>
                            <li class="active"> <a href="#" class="waves-effect"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu">'. _("Management") . '<span class="fa arrow"></span> </span></a>
                                <ul class="nav nav-second-level">'; ***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($webenabled == 'true') { echo '<li> <a href="../list/web.php"><i class="ti-world fa-fw"></i><span class="hide-menu">' . _("Web") . '</span></a> </li>'; ***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($dnsenabled == 'true') { echo '<li> <a href="../list/dns.php"><i class="fa fa-sitemap fa-fw"></i><span class="hide-menu">' . _("DNS") . '</span></a> </li>'; ***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($mailenabled == 'true') { echo '<li> <a href="../list/mail.php"><i class="fa fa-envelope fa-fw"></i><span class="hide-menu">' . _("Mail") . '</span></a> </li>'; ***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($dbenabled == 'true') { echo '<li> <a href="../list/db.php" class="active"><i class="fa fa-database fa-fw"></i><span class="hide-menu">' . _("Database") . '</span></a> </li>'; ***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($webenabled == 'true' || $dnsenabled == 'true' || $mailenabled == 'true' || $dbenabled == 'true') { echo '</ul>
                            </li>'; ***REMOVED*** ***REMOVED***
                        <li> <a href="../list/cron.php" class="waves-effect"><i  class="mdi mdi-settings fa-fw"></i> <span class="hide-menu">***REMOVED*** echo _("Cron Jobs"); ***REMOVED***</span></a> </li>
                        <li> <a href="../list/backups.php" class="waves-effect"><i  class="fa fa-cloud-upload fa-fw"></i> <span class="hide-menu">***REMOVED*** echo _("Backups"); ***REMOVED***</span></a> </li>
                        ***REMOVED*** if ($ftpurl == '' && $webmailurl == '' && $phpmyadmin == '' && $phppgadmin == '') {***REMOVED*** else { echo '<li class="devider"></li>
                            <li><a href="#" class="waves-effect"><i class="mdi mdi-apps fa-fw"></i> <span class="hide-menu">' . _("Apps") . '<span class="fa arrow"></span></span></a>
                                <ul class="nav nav-second-level">'; ***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($ftpurl != '') { echo '<li><a href="' . $ftpurl . '" target="_blank"><i class="fa fa-file-code-o fa-fw"></i><span class="hide-menu">' . _("FTP") . '</span></a></li>';***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($webmailurl != '') { echo '<li><a href="' . $webmailurl . '" target="_blank"><i class="fa fa-envelope-o fa-fw"></i><span class="hide-menu">' . _("Webmail") . '</span></a></li>';***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($phpmyadmin != '') { echo '<li><a href="' . $phpmyadmin . '" target="_blank"><i class="fa fa-edit fa-fw"></i><span class="hide-menu">' . _("phpMyAdmin") . '</span></a></li>';***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($phppgadmin != '') { echo '<li><a href="' . $phppgadmin . '" target="_blank"><i class="fa fa-edit fa-fw"></i><span class="hide-menu">' . _("phpPgAdmin") . '</span></a></li>';***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($ftpurl == '' && $webmailurl == '' && $phpmyadmin == '' && $phppgadmin == '') {***REMOVED*** else { echo '</ul></li>';***REMOVED*** ***REMOVED***
                        <li class="devider"></li>
                        <li><a href="../process/logout.php" class="waves-effect"><i class="mdi mdi-logout fa-fw"></i> <span class="hide-menu">***REMOVED*** echo _("Log out"); ***REMOVED***</span></a></li>
                        ***REMOVED*** if ($oldcpurl == '' || $supporturl == '') {***REMOVED*** else { echo '<li class="devider"></li>'; ***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($oldcpurl != '') { echo '<li><a href="' . $oldcpurl . '" class="waves-effect"> <i class="fa fa-tachometer fa-fw"></i> <span class="hide-menu"> ' . _("Control Panel v1") . '</span></a></li>'; ***REMOVED*** ***REMOVED***
                        ***REMOVED*** if ($supporturl != '') { echo '<li><a href="' . $supporturl . '" class="waves-effect" target="_blank"> <i class="fa fa-life-ring fa-fw"></i> <span class="hide-menu">' . _("Support") . '</span></a></li>'; ***REMOVED*** ***REMOVED***
                        </ul>
            </div>
        </div>
        <div id="page-wrapper">
           <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">***REMOVED*** echo _("Add Database"); ***REMOVED***</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" autocomplete="off" method="post" action="../create/database.php">
                                <div class="form-group">
                                    <label class="col-md-12">***REMOVED*** echo _("Database"); ***REMOVED***</label>
                                    <div class="col-md-12">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon">***REMOVED*** print_r($uname); ***REMOVED***_</div>
                                            <input type="text" class="form-control" name="v_database" style="padding-left: 0.5%;">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">***REMOVED*** echo _("Username"); ***REMOVED***</label>
                                    <div class="col-md-12">
                                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                            <div class="input-group-addon">***REMOVED*** print_r($uname); ***REMOVED***_</div>
                                            <input type="text" class="form-control" autocomplete="new-password" name="v_dbuser" style="padding-left: 0.5%;">    
                                        </div>
                                        <small class="form-text text-muted">***REMOVED*** echo _("Max Length 16 Characters Including Prefix"); ***REMOVED***</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-12">***REMOVED*** echo _("Password"); ***REMOVED*** / <a style="cursor:pointer" onclick="generatePassword(10)"> ***REMOVED*** echo _("Generate"); ***REMOVED***</a></label>
                                    <div class="col-md-12 input-group" style="padding-left: 15px;">
                                        <input type="password" pattern=".{6,***REMOVED***" autocomplete="new-password" class="form-control form-control-line" name="password" id="password">                                    <span class="input-group-btn"> 
                                        <button class="btn btn-info" style="margin-right: 15px;" name="Show" onclick="toggler(this)" id="tg" type="button"><i class="ti-eye"></i></button> 
                                        </span>  </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">***REMOVED*** echo _("Type"); ***REMOVED***</label>
                                    <div class="col-md-12">
                                        <select class="form-control" name="v_type">
                                            ***REMOVED***
                                            if($dbtypes[0] != '') {
                                                $x2 = 0; 

                                                do {
                                                    echo '<option value="' . $dbtypes[$x2] . '">' . $dbtypes[$x2] . '</option>';
                                                    $x2++;
                                                ***REMOVED*** while ($dbtypes[$x2] != ''); ***REMOVED***

                                            ***REMOVED***
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">***REMOVED*** echo _("Hosts"); ***REMOVED***</label>
                                    <div class="col-md-12">
                                        <select class="form-control" name="v_host">
                                            ***REMOVED***
                                            if($dbhosts[0] != '') {
                                                $x3 = 0; 

                                                do {
                                                    echo '<option value="' . $dbhosts[$x3]['HOST'] . '">' . $dbhosts[$x3]['HOST'] . '</option>';
                                                    $x3++;
                                                ***REMOVED*** while ($dbhosts[$x3] != ''); ***REMOVED***

                                            ***REMOVED***
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">***REMOVED*** echo _("Charset"); ***REMOVED***</label>
                                    <div class="col-md-12">
                                        <select class="form-control" name="v_charset">
                                        <option value="big5">big5</option>
                                        <option value="dec8">dec8</option>
                                        <option value="cp850">cp850</option>
                                        <option value="hp8">hp8</option>
                                        <option value="koi8r">koi8r</option>
                                        <option value="latin1">latin1</option>
                                        <option value="latin2">latin2</option>
                                        <option value="swe7">swe7</option>
                                        <option value="ascii">ascii</option>
                                        <option value="ujis">ujis</option>
                                        <option value="sjis">sjis</option>
                                        <option value="hebrew">hebrew</option>
                                        <option value="tis620">tis620</option>
                                        <option value="euckr">euckr</option>
                                        <option value="koi8u">koi8u</option>
                                        <option value="gb2312">gb2312</option>
                                        <option value="greek">greek</option>
                                        <option value="cp1250">cp1250</option>
                                        <option value="gbk">gbk</option>
                                        <option value="latin5">latin5</option>
                                        <option value="armscii8">armscii8</option>
                                        <option value="utf8" selected>utf8</option>
                                        <option value="ucs2">ucs2</option>
                                        <option value="cp866">cp866</option>
                                        <option value="keybcs2">keybcs2</option>
                                        <option value="macce">macce</option>
                                        <option value="macroman">macroman</option>
                                        <option value="cp852">cp852</option>
                                        <option value="latin7">latin7</option>
                                        <option value="cp1251">cp1251</option>
                                        <option value="cp1256">cp1256</option>
                                        <option value="cp1257">cp1257</option>
                                        <option value="binary">binary</option>
                                        <option value="geostd8">geostd8</option>
                                        <option value="cp932">cp932</option>
                                        <option value="eucjpms">eucjpms</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button class="btn btn-success">***REMOVED*** echo _("Add Database"); ***REMOVED***</button> &nbsp;
                                            <a href="../list/db.php" style="color: inherit;text-decoration: inherit;"><button class="btn btn-muted" type="button">***REMOVED*** echo _("Back"); ***REMOVED***</button></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           <footer class="footer text-center">&copy; ***REMOVED*** echo _("Copyright"); ***REMOVED*** ***REMOVED*** echo date("Y") . ' ' . $sitetitle; ***REMOVED***. ***REMOVED*** echo _("All Rights Reserved. Vesta Web Interface"); ***REMOVED*** ***REMOVED*** require '../includes/versioncheck.php'; ***REMOVED*** ***REMOVED*** echo _("by CDG Web Services"); ***REMOVED***.</footer>
    </div>
    </div>
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <script src="../js/jquery.slimscroll.js"></script>
    <script src="../js/waves.js"></script>
    <script src="../plugins/bower_components/moment/moment.js"></script>
    <script src="../plugins/bower_components/footable/js/footable.min.js"></script>
    <script src="../plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
    <script src="../plugins/bower_components/custom-select/custom-select.min.js"></script>
    <script src="../js/footable-init.js"></script>
    <script src="../js/custom.js"></script>
    <script src="../js/dashboard1.js"></script>
    <script src="../js/cbpFWTabs.js"></script>
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.5/sweetalert2.all.js"></script>
    <script type="text/javascript">
        (function () {
                [].slice.call(document.querySelectorAll('.sttabs')).forEach(function (el) {
                new CBPFWTabs(el);
            ***REMOVED***);
        ***REMOVED***)();
        function toggler(e) {
            if( e.name == 'Hide' ) {
                e.name = 'Show'
                document.getElementById('password').type="password";
            ***REMOVED*** else {
                e.name = 'Hide'
                document.getElementById('password').type="text";
            ***REMOVED***
        ***REMOVED***
        function generatePassword(length) {
            var password = '', character; 
            while (length > password.length) {
                if (password.indexOf(character = String.fromCharCode(Math.floor(Math.random() * 94) + 33), Math.floor(password.length / 94) * 94) < 0) {
                    password += character;
                ***REMOVED***
            ***REMOVED***
            document.getElementById('password').value = password;
            document.getElementById('tg').name='Hide';
            document.getElementById('password').type="text";
        ***REMOVED***
        jQuery(function($){
            $('.footable').footable();
        ***REMOVED***);
    </script>
</body>

</html>