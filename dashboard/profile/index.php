<?php
session_start();
if (isset($_SESSION['admin'])) {
    $admin = $_SESSION['admin'];
}

include "../../includes/db_conf.php";
$conn = database();
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wifi Yetu Hotspot">
    <meta name="author" content="Fabian Muema">

    <title>Wifi Yetu - Settings</title>

    <link href="/static/datatables/dataTables.bootstrap4.73bd54551128.js" rel="stylesheet">
    <style>
        .switch label {
            cursor: pointer;
        }
        .switch label input[type=checkbox] {
            opacity: 0;
            width: 0;
            height: 0;
        }
        [type=checkbox]:checked, [type=checkbox]:not(:checked) {
            position: absolute;
            opacity: 0;
            pointer-events: none;
        }
        input[type=checkbox], input[type=radio] {
            box-sizing: border-box;
            padding: 0;
        }
        .switch label input[type=checkbox]:checked+.lever {
            background-color: #dccfe2;
        }
        .switch label .lever {
            content: "";
            display: inline-block;
            position: relative;
            background-color: #818181;
            -webkit-border-radius: .9375rem;
            border-radius: .9375rem;
            margin-right: .625rem;
            vertical-align: middle;
            margin: 0 1rem;
            width: 2.5rem;
            height: .9375rem;
            -webkit-transition: background .3s ease;
            -o-transition: background .3s ease;
            transition: background .3s ease;
        }
        .switch label input[type=checkbox]:checked+.lever:after {
            background-color: #a6c;
            left: 1.5rem;
        }
        .switch label .lever:after {
            content: "";
            position: absolute;
            display: inline-block;
            background-color: #f1f1f1;
            -webkit-border-radius: 1.3125rem;
            border-radius: 1.3125rem;
            left: -.3125rem;
            top: -.1875rem;
            -webkit-box-shadow: 0 0.0625rem 0.1875rem 0.0625rem rgba(0,0,0,.4);
            box-shadow: 0 0.0625rem 0.1875rem 0.0625rem rgba(0,0,0,.4);
            width: 1.3125rem;
            height: 1.3125rem;
            -webkit-transition: left .3s ease,background .3s ease,-webkit-box-shadow 1s ease;
            transition: left .3s ease,background .3s ease,-webkit-box-shadow 1s ease;
            -o-transition: left .3s ease,background .3s ease,box-shadow 1s ease;
            transition: left .3s ease,background .3s ease,box-shadow 1s ease;
            transition: left .3s ease,background .3s ease,box-shadow 1s ease,-webkit-box-shadow 1s ease;
        }
        .remove{
            display: none !important;
        }
        li.result{
            padding-left: 0.8rem;
        }
        @media(min-width: 768px) {
            .left-section::after{
                content:"";
                position: absolute;
                z-index: 2;
                top: 5%;
                bottom: 0;
                height: 90%;
                left: 100%;
                border-left: 0.5px solid #80808075;
                transform: translate(-50%);
            }
        }
    </style>



    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" rel="stylesheet">
    <script src="https://kit.fontawesome.com/441b163d2b.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="/static/mdb/css/mdb.min.afd3556bfdb3.css">
    <link href="/static/css/jh-admin.min.8963020a2474.css" rel="stylesheet">
    <style>
        .center-items {
            display: flex;
            justify-content: center;
        }
        .space-between{
            display: flex;
            justify-content: space-between;
        }
        td{
            color:#0a0a0a;
        }
        .link-btn{
            color:#007bff!important;
            -webkit-box-shadow: none;
            box-shadow: none;
            background-color: transparent;
            padding: 0;
            margin: 0;
        }
        .link-btn:hover{
            color: #0050a7!important;
            -webkit-box-shadow: none!important;
            box-shadow: none!important;
            background-color: transparent;
            text-decoration: none;
            -webkit-transition: all .2s ease-in-out;
            -o-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
        }

        a.btn.btn-floating i.fa {
            display: inline-block;
            width: inherit;
            text-align: center;
            color: #fff;
            font-size: 1.25rem!important;
            line-height: 47px;
        }
        .btn-floating {
            box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
            width: 47px;
            height: 47px;
            position: relative;
            z-index: 1;
            vertical-align: middle;
            display: inline-block;
            overflow: hidden;
            transition: all .2s ease-in-out;
            margin: 10px;
            border-radius: 50%;
            padding: 0;
            cursor: pointer;
        }
        .Ripple {
            position: absolute;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            opacity: 1;
            transform: scale(0);
        }
        .Ripple-parent {
            position: relative;
            overflow: hidden;
            touch-action: none;
        }
        .btn-floating i {
            font-size: 1.25rem;
            line-height: 47px;
            display: inline-block;
            width: inherit;
            text-align: center;
            color: #fff;
        }
        .btn-floating.btn-lg i {
            font-size: 1.625rem;
            /* line-height: 61.1px; */
        }
    </style>


</head>

<body id="page-top" class="sidebar-toggled">
<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar toggled sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard/">
            <div class="sidebar-brand-icon">
                <i class="fas fa-crown"></i>
            </div>
            <div class="sidebar-brand-text mx-3">WifiYetu <sup>Admin</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Dashboards Accordion Menu -->

        <li class="nav-item">

            <a class="nav-link" href="/dashboard/">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Statistics
        </div>

        <!-- Nav Item - Charts -->

        <li class="nav-item">

            <a class="nav-link" href="/dashboard/charts/">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Charts</span>
            </a>
        </li>

        <!-- Nav Item - Tables -->

        <li class="nav-item">

            <a class="nav-link" href="/dashboard/datatables/">
                <i class="fas fa-fw fa-table"></i>
                <span>Tables</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Online Marketing
        </div>


        <li class="nav-item">

            <a class="nav-link" href="/dashboard/marketing/">
                <i class="far fa-envelope-open"></i>
                <span>Messaging</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Settings
        </div>


        <li class="nav-item active">

            <a class="nav-link" href="/dashboard/profile/">
                <i class="fas fa-cog"> </i>
                <span>Settings</span>
            </a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav mr-3 ml-md-auto" style="width:100%;justify-content:flex-end;">
                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="/">
                                <i class="fas fa-user-astronaut fa-sm fa-fw mr-2 text-gray-400"></i>
                                Client Area
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/user/logout/">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="text-center">Settings</h2>
                    </div>
                </div>
                <!-- Packages Table -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow mb-4">
                            <div class="card-header border-0 py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">
                                    <i class="fas fa-table"></i> Packages
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table" id="packages-table" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Speed</th>
                                            <th>Downloads</th>
                                            <th>Valid for</th>
                                            <th>Price</th>
                                            <th>Valid for(in Seconds)</th>
                                            <th>User Profile</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sql = "SELECT * FROM packages";
                                        $result = mysqli_query($conn, $sql);
                                        $rows = mysqli_num_rows($result);
                                        if ($rows > 0) {
                                            while($packages = mysqli_fetch_assoc($result)) {

                                        ?>
                                        <tr>
                                            <td>
                                                <button id="1" class="btn link-btn" onclick="window.open('/dashboard/package/edit/', 'openWindow', 'width=650,height=830');"><?php echo $packages['title']; ?></button>
                                            </td>
                                            <td><?php echo $packages['speed']; ?></td>
                                            <td><?php echo $packages['downloads']; ?></td>
                                            <td><?php echo $packages['valid_for']; ?></td>
                                            <td><?php echo $packages['price']; ?></td>
                                            <td><?php echo $packages['valid_for']; ?></td>
                                            <td><?php echo $packages['user_profile']; ?></td>
                                            <td style="padding: 0.7rem 0;" class="center-items">
                                                <a href="/dashboard/package/delete/<?php echo $packages['id']; ?>/" id="<?php echo $packages['id']; ?>" class="btn btn-sm btn-danger delete-package">Delete</a>
                                            </td>
                                        </tr>
                                        <?php }
                                        } ?>

                                        <tr>
                                            <td>
                                                <button id="0" class="btn link-btn" onclick="window.open('/dashboard/package/add/', 'openWindow', 'width=650,height=830');">New Package</button>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <?php
                            $dat = $packages['updated'];
                            $updated = date('d M Y H:i');
 ?>
                            <div class="card-footer small text-muted">Updated on <?php echo $updated; ?></div>
                        </div>
                    </div>
                </div>
                <!-- Profile Settings -->
                <div class="row center-items">
                    <div class="col-md-12">
                        <div class="card my-3 border-0 shadow">
                            <div class="card-header border-0 flex-row align-items-center justify-content-between">
                                <h5 class="m-0 font-weight-bold text-primary"> <i class="fas fa-cogs"> </i> Profile Settings</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 left-section px-4">
                                        <?php
                                        $sql = "SELECT * FROM mikrotik_settings WHERE id=1";
                                        $result = mysqli_query($conn, $sql);
                                        $mikrotik_setting = mysqli_fetch_assoc($result);
                                        ?>
                                        <form action="#" method="post" id="mikrotik-form">
                                            <input type='hidden' name='csrfmiddlewaretoken' value='crpdxksO0B82hkhT9Eo3ehstdGwMehQPH6Gw8dz73EsYNE1WMakqUUscuj6r5NT9' />
                                            <h3>Mikrotik Settings</h3>
                                            <div class="md-form">
                                                <label for="id_ddns_name">Mikrotik DDNS Name</label>
                                                <input type="text" name="ddns_name" value="<?php echo $mikrotik_setting['ddns_name']; ?>" maxlength="100" class="form-control" title="" id="id_ddns_name">
                                            </div>
                                            <div class="md-form">
                                                <label for="id_m_port">Mikrotik Port</label>
                                                <input type="number" name="m_port" value="<?php echo $mikrotik_setting['port']; ?>" maxlength="100" class="form-control" title="" id="id_m_port">
                                            </div>
                                            <div class="md-form">
                                                <label for="id_m_username">Mikrotik Username</label>
                                                <input type="text" name="m_username" value="<?php echo $mikrotik_setting['mikrotik_username']; ?>" maxlength="100" class="form-control" title="" id="id_m_username">
                                            </div>
                                            <div class="md-form">
                                                <label for="id_m_password">Mikrotik Password</label>
                                                <input type="password" name="m_password" value="<?php echo $mikrotik_setting['mikrotik_password']; ?>" maxlength="100" class="form-control" title="" id="id_m_password">
                                            </div>
                                            <div class="md-form">
                                                <label for="id_hotspot_address">Hotspot Address</label>
                                                <input type="text" name="hotspot_address" value="<?php echo $mikrotik_setting['hotspot_address']; ?>" maxlength="100" class="form-control" title="" id="id_hotspot_address">
                                            </div>
                                            <div class="md-form text-center">
                                                <input type="submit" value="Save" class="btn btn-primary waves-effect">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6 px-4">
                                        <h3 class="text-center">Check connection to your Mikrotik Router</h3>
                                        <p class="text-center"><a tabindex="0" role="button" id="connection" class="btn btn-elegant Ripple-parent ml-4">Test Connection</a></p>
                                        <div id="results" class="remove">
                                            <ul id="connection-results" class="list-unstyled note">
                                            </ul>
                                            <p class="small text-center" id="help-text">Hotspot User profiles available in your Router</p>
                                            <ul id="user-profiles" class="list-unstyled note">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row my-5">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Active Users List</h3>
                                        <div class="table-responsive" id="active-users">
                                            <p class="text-center">Active users</p>
                                            <table class="table" id="active-users-table" width="100%" cellspacing="0">
                                                <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Login Method</th>
                                                    <th>Ip Address</th>
                                                    <th>Uptime</th>
                                                    <th>Idle Time</th>
                                                    <th>Downloaded</th>
                                                    <th>Uploaded</th>
                                                </tr>
                                                </thead>
                                                <tbody id="active-body">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row my-5">
                                    <div class="col-md-6 left-section px-4">
                                        <?php
                                        $sql = "SELECT * FROM branding_settings where id = 1";
                                        $result = mysqli_query($conn, $sql);
                                        $branding = mysqli_fetch_assoc($result);
                                        ?>
                                        <form action="#" method="post" id="branding-form">
                                            <input type='hidden' name='csrfmiddlewaretoken' value='crpdxksO0B82hkhT9Eo3ehstdGwMehQPH6Gw8dz73EsYNE1WMakqUUscuj6r5NT9' />
                                            <h3>Branding Settings</h3>
                                            <div class="md-form">
                                                <label for="id_first_brand_name">First brand name</label>
                                                <input type="text" name="first_brand_name" value="<?php echo $branding['first_brand_name']; ?>" maxlength="20" class="form-control"
                                                       title="" required="" id="id_first_brand_name">
                                            </div>
                                            <div class="md-form">
                                                <label for="id_second_brand_name">Second brand name</label>
                                                <input type="text" name="second_brand_name" value="<?php echo $branding['second_brand_name']; ?>" maxlength="20" class="form-control"
                                                       title="" required="" id="id_second_brand_name">
                                            </div>
                                            <div class="md-form">
                                                <label for="id_phone_number">Phone Number</label>
                                                <input type="text" name="phone_number" value="<?php echo $branding['phone_number']; ?>" class="form-control" title="Start with 2547XXXXXXXX Unlock your phone before clicking pay."
                                                       required="" id="id_phone_number">
                                                <small class="form-text text-muted">
                                                    <li>Start with 2547XXXXXXXX</li>
                                                </small>
                                            </div>
                                            <div class="md-form">
                                                <label for="id_facebook">Facebook</label>
                                                <input type="text" name="facebook" value="<?php echo $branding['facebook']; ?>" maxlength="100" class="form-control" title="" id="id_facebook">
                                            </div>
                                            <div class="md-form">
                                                <label for="id_instagram">Instagram</label>
                                                <input type="text" name="instagram" value="<?php echo $branding['instagram']; ?>" maxlength="100" class="form-control" title="" id="id_instagram">
                                            </div>
                                            <div class="md-form">
                                                <label for="id_twitter">Twitter</label>
                                                <input type="text" name="twitter" value="<?php echo $branding['twitter']; ?>" maxlength="100" class="form-control" title="" id="id_twitter">
                                            </div>
                                            <div class="md-form">
                                                <label for="id_email_address">Email Address</label>
                                                <input type="text" name="email_address"
                                                       value="<?php echo $branding['email_address']; ?>" maxlength="100"
                                                       class="form-control" title="" required="" id="id_email_address">
                                                <small class="text-muted">Used when someone makes contact, or getting
                                                    notifications after payment has been received</small>
                                            </div>
                                            <div class="md-form text-center">
                                                <input type="submit" value="Save" class="btn btn-primary waves-effect">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6 px-4">
                                        <?php
                                        $sql = "SELECT * FROM sms_settings where id=1";
                                        $result = mysqli_query($conn, $sql);
                                        $sms = mysqli_fetch_assoc($result);
                                        ?>
                                        <form action="/dashboard/sms/settings/" method="post" id="sms-form">
                                            <input type='hidden' name='csrfmiddlewaretoken'
                                                   value='crpdxksO0B82hkhT9Eo3ehstdGwMehQPH6Gw8dz73EsYNE1WMakqUUscuj6r5NT9'/>
                                            <h3>SMS Settings</h3>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="africastalking"
                                                       name="africastalking" checked>
                                                <label class="custom-control-label" for="africastalking">Africa's
                                                    Talking</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" id="mspace"
                                                       name="mspace">
                                                <label class="custom-control-label" for="mspace">MSpace</label>
                                            </div>
                                            <div id="africastalking-section">
                                                <div class="md-form">
                                                    <label for="id_sms_username">Africas Talking Username</label>
                                                    <input type="text" name="sms_username"
                                                           value="<?php echo $sms['username']; ?>" maxlength="100"
                                                           class="form-control" title="" id="id_sms_username">
                                                </div>
                                                <div class="md-form">
                                                    <label for="id_sms_key">Africas Talking Api Key</label>
                                                    <input type="text" name="sms_key"
                                                           value="<?php echo $sms['api_key']; ?>" maxlength="100"
                                                           class="form-control" title="" id="id_sms_key">
                                                </div>
                                                <div class="md-form">
                                                    <label for="id_africastlkn_sender">Africas Talking SenderID</label>
                                                    <input type="text" name="africastlkn_sender"
                                                           value="<?php echo $sms['sender_id']; ?>" maxlength="100"
                                                           class="form-control" title="" id="id_africastlkn_sender">
                                                </div>
                                            </div>
                                            <div id="mspace-section">
                                                <div class="md-form">
                                                    <label for="id_sms_username">Mspace Username</label>
                                                    <input type="text" name="mspace_username" value="" maxlength="100"
                                                           class="form-control" title="" id="id_mspace_username">
                                                </div>
                                                <div class="md-form">
                                                    <label for="id_mspace_password">Mspace Password</label>
                                                    <input type="password" name="mspace_password" value=""
                                                           maxlength="100" class="form-control" title=""
                                                           id="id_mspace_password">
                                                </div>
                                                <div class="md-form">
                                                    <label for="id_mspace_sender_id">Mspace Sender Id</label>
                                                    <input type="text" name="mspace_sender_id" value="" maxlength="100"
                                                           class="form-control" title="" id="id_mspace_sender_id">
                                                </div>
                                            </div>
                                            <div class="switch">
                                                <label>

                                                    <input type="checkbox"
                                                           checked name="transaction_sms" id="id_transaction_sms">

                                                    <span class="lever"></span>
                                                    Transaction SMS
                                                </label>
                                            </div>
                                            <small class="text-muted">Send SMS to customer when a transaction is
                                                completed</small>
                                            <div class="switch">
                                                <label>
                                                    <input type="checkbox" name="reminder_sms" id="id_reminder_sms">

                                                    <span class="lever"></span>
                                                    Reminder SMS
                                                </label>
                                            </div>
                                            <small class="text-muted">Remind subscribers when their subscriptions are about to expire. Make sure your connection to the router is on before switching this part on</small>
                                            <div class="form-group">
                                                <label for="id_reminder_frequency">Time to expiration</label>
                                                <select name="reminder_frequency" value="24" class="form-control" id="id_reminder_frequency">

                                                    <option value="24" selected>Within 24 hours</option>

                                                    <option value="48">Within 48 hours</option>

                                                </select>
                                            </div>
                                            <div class="md-form text-center">

                                                <input type="submit" value="Save" class="btn btn-primary waves-effect">

                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <hr>
                                <div class="row my-5">
                                    <div class="col-md-6 left-section px-4">
                                        <form action="/dashboard/payment_settings/" method="post" id="payment-form">
                                            <input type='hidden' name='csrfmiddlewaretoken' value='crpdxksO0B82hkhT9Eo3ehstdGwMehQPH6Gw8dz73EsYNE1WMakqUUscuj6r5NT9' />
                                            <h3>Payment Settings</h3>
                                            <div class="switch">
                                                <label>

                                                    <input type="checkbox" name="trxn_cost" id="id_trxn_cost">

                                                    <span class="lever"></span>
                                                    Transaction Cost
                                                </label>
                                            </div>
                                            <small class="text-muted">Check this if you pay a transaction fee on payments received to get an accurate balance on the dashboard.</small>
                                            <div class="switch">
                                                <label>

                                                    <input type="checkbox" checked name="get_pay" id="id_get_pay">

                                                    <span class="lever"></span>
                                                    Get payments
                                                </label>
                                            </div>
                                            <small class="text-muted">Check this to accept payments.</small>
                                            <div class="md-form text-center">

                                                <input type="submit" value="Save" class="btn btn-primary waves-effect">

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User and Password forms -->
                <div class="row center-items">
                    <!-- User form -->
                    <div class="col-md-5 mr-3">
                        <div class="card my-3 border-0 shadow">
                            <div class="card-header border-0 flex-row align-items-center justify-content-between">
                                <h5 class="m-0 font-weight-bold text-primary"> <i class="fas fa-cogs"> </i> User Settings</h5>
                            </div>
                            <div class="card-body">
                                <form action="/dashboard/user_update/" method="post" id="user-form">
                                    <input type='hidden' name='csrfmiddlewaretoken' value='crpdxksO0B82hkhT9Eo3ehstdGwMehQPH6Gw8dz73EsYNE1WMakqUUscuj6r5NT9' />
                                    <div class="md-form">
                                        <label for="id_username">Username</label>
                                        <input type="text" name="username" value="dande" maxlength="150" class="form-control" title="Required. 150 characters or fewer. Letters, digits and @/./+/-/_ only." required="" id="id_username">
                                    </div>
                                    <div class="md-form">
                                        <label for="id_first_name">First name</label>
                                        <input type="text" name="first_name" value="" maxlength="30" class="form-control" title="" id="id_first_name">
                                    </div>
                                    <div class="md-form">
                                        <label for="id_last_name">Last name</label>
                                        <input type="text" name="last_name" value="" maxlength="30" class="form-control" title="" id="id_last_name">
                                    </div>
                                    <div class="md-form">
                                        <label for="id_email">Email address</label>
                                        <input type="email" name="email" value="mdande358@gmail.com" maxlength="254" class="form-control" title="" id="id_email">
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="submit" class="btn btn-primary" value="Save">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Password Form -->
                    <div class="col-md-5 mr-3">
                        <div class="card my-3 border-0 shadow">
                            <div class="card-header border-0 flex-row align-items-center justify-content-between">
                                <h5 class="m-0 font-weight-bold text-primary"> <i class="fas fa-unlock"> </i> Change Password</h5>
                            </div>
                            <div class="card-body">
                                <form action="." method="post">
                                    <input type='hidden' name='csrfmiddlewaretoken' value='crpdxksO0B82hkhT9Eo3ehstdGwMehQPH6Gw8dz73EsYNE1WMakqUUscuj6r5NT9' />


                                    <div class="md-form">
                                        <label for="id_old_password">Old password</label>
                                        <input type="password" name="old_password" class="form-control" title="" required="" id="id_old_password" autocomplete="off">
                                    </div>
                                    <div class="md-form">
                                        <label for="id_new_password1">New password</label>
                                        <input type="password" name="new_password1" class="form-control" title="" required=""  id="id_new_password1">
                                    </div>
                                    <div class="md-form">
                                        <label for="id_new_password2">New password confirmation</label>
                                        <input type="password" name="new_password2" class="form-control" title="" required="" id="id_new_password2">
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="submit" value="Change Password" class="btn btn-success">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End of Main Content -->

        <!-- Delete Modal -->
        <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="Delete Modal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-loading">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 text-center" id="delete-info-area">
                                <p id="delete-item"></p>
                                <a href="." class="btn btn-danger confirm" id="confirm">Yes</a>
                                <button class="btn btn-light confirm" id="reject" data-dismiss="modal">No</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="info-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-loading">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 text-center" id="info-area">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="payment-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-loading">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 text-center" id="payment-info-area">
                            </div>
                            <div class="col-md-12 text-center">
                                <button id='check-credentials' class='btn btn-info'>Check Status</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="packages-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content modal-loading">
                    <div class="modal-body">

                    </div>
                </div>
            </div>
        </div>



        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>&copy; 2020 WifiYetu-Hotspot | All Rights Reserved</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="/static/js/bootstrap/bootstrap.bundle.min.4c723f3a80b9.js"></script>

<script src="/static/js/jquery.easing.min.e2d41e5c8fed.js"></script>
<script src="/static/mdb/js/mdb.min.795c8edf10e5.js"></script>

<script src="/static/datatables/jquery.dataTables.2ead29c9d185.js"></script>
<script src="/static/datatables/dataTables.bootstrap4.73bd54551128.js"></script>
<script src="/static/js/jh-admin.min.1ada388fbe2a.js"></script>
<script>
    let idPackage='';
    $('#africastalking').click(function(e){
        africastalking = $('#africastalking').prop('checked');
        mspace = $('#mspace').prop('checked', false);
        $('#mspace-section').hide();
        $('#africastalking-section').show();
    });
    $('#mspace').click(function(e){
        africastalking = $('#africastalking').prop('checked', false);
        mspace = $('#mspace').prop('checked');
        $('#africastalking-section').hide();
        $('#mspace-section').show();
    });
    if ($('#mspace').prop('checked') == true){
        $('#africastalking-section').hide();
        $('#mspace-section').show();
    } else {
        $('#africastalking-section').show();
        $('#mspace-section').hide();
    }

    // Submit user form
    $('form#user-form').submit(function (event) {
        event.preventDefault();
        form = $('form#user-form');

        $.ajax({
            "url": "/dashboard/user_update/",
            'type': 'POST',
            'data': form.serialize(),
            'dataType': 'json',
            'success': function (data) {
                // alert(data['success']);
                if (data['success']==='Update Successful'){
                    $('#info-area').html(
                        '<p id="info">Profile details updated successfully.</p>'
                    );
                    $('#info-modal').modal('show');
                    setTimeout(function () {
                        $('#info-modal').modal('hide')
                    }, 4000)
                } else {
                    $('#info-area').html(
                        "<p id='info'>"+ data['success'] +"</p>"+
                        "<button type='button' class='btn btn-secondary text-center' data-dismiss='modal'>Close</button>"
                    );
                    $('#info-modal').modal({
                        backdrop: 'static',
                        keyboard: false
                    })
                    $('id_username').val('');
                }
            }
        })
    })
    // Submit Mikrotik form
    $('form#mikrotik-form').submit(function (event) {
        event.preventDefault()
        form = $('form#mikrotik-form')

        $.ajax({
            "url": "/dashboard/mikrotik/settings/edit.php",
            'type': 'POST',
            'data': form.serialize(),
            'dataType': 'json',
            'success': function (data) {
                alert(data.status);
                if (data.status == 200){
                    $('#info-area').text(
                        '<p id="info">Mikrotik details updated successfully.</p>'
                    );
                    $('#info-modal').modal('show');
                    setTimeout(function () {
                        $('#info-modal').modal('hide');
                        location.reload(true);
                    }, 3000);
                } else {
                    $('#info-area').html(
                        "<p id='info'>"+ data.error +"</p>"+
                        "<button type='button' class='btn btn-secondary text-center' data-dismiss='modal'>Close</button>"
                    );
                    $('#info-modal').modal({
                        backdrop: 'static',
                        keyboard: false
                    })
                }
            }
        })
    })
    // Submit Branding form
    $('form#branding-form').submit(function (event) {
        event.preventDefault()
        form = $('form#branding-form')

        $.ajax({
            "url": "/dashboard/branding/settings/edit.php",
            'type': 'POST',
            'data': form.serialize(),
            'dataType': 'json',
            'success': function (data) {
                // alert(data['success']);
                if (data['success']==='Update Successful'){
                    $('#info-area').html(
                        '<p id="info">Branding details updated successfully.</p>'
                    );
                    $('#info-modal').modal('show');
                    setTimeout(function () {
                        $('#info-modal').modal('hide')
                    }, 4000)
                } else {
                    $('#info-area').html(
                        "<p id='info'>"+ data['success'] +"</p>"+
                        "<button type='button' class='btn btn-secondary text-center' data-dismiss='modal'>Close</button>"
                    );
                    $('#info-modal').modal({
                        backdrop: 'static',
                        keyboard: false
                    })
                }
            }
        })
    })
    // Submit SMS form
    $('form#sms-form').submit(function (event) {
        event.preventDefault()
        let form = $('form#sms-form')

        $.ajax({
            "url": "/dashboard/sms/settings/edit.php",
            'type': 'POST',
            'data': form.serialize(),
            'dataType': 'json',
            'success': function (data) {
                // alert(data['success']);
                if (data.status == 200) {
                    $('#info-area').html(
                        '<p id="info">SMS details updated successfully.</p>'
                    );
                    $('#info-modal').modal('show');
                    setTimeout(function () {
                        $('#info-modal').modal('hide')
                    }, 4000)
                } else {
                    $('#info-area').html(
                        "<p id='info'>" + data.error + "</p>" +
                        "<button type='button' class='btn btn-secondary text-center' data-dismiss='modal'>Close</button>"
                    );
                    $('#info-modal').modal({
                        backdrop: 'static',
                        keyboard: false
                    })
                }
            }
        })
    })
    // Submit Payment form
    $('form#payment-form').submit(function (event) {
        event.preventDefault()
        form = $('form#payment-form')

        $.ajax({
            "url": "/dashboard/payment_settings/",
            'type': 'POST',
            'data': form.serialize(),
            'dataType': 'json',
            'success': function (data) {
                // alert(data['success']);
                if (data['success']==='Update Successful'){
                    $('#info-area').html(
                        '<p id="info">Payment details updated successfully.</p>'
                    );
                    $('#info-modal').modal('show');
                    setTimeout(function () {
                        $('#info-modal').modal('hide')
                    }, 4000)
                } else {
                    $('#info-area').html(
                        "<p id='info'>"+ data['success'] +"</p>"+
                        "<button type='button' class='btn btn-secondary text-center' data-dismiss='modal'>Close</button>"
                    );
                    $('#info-modal').modal({
                        backdrop: 'static',
                        keyboard: false
                    })
                }
            }
        })
    })
    // Get Mikrotik connections
    $('a#connection').click(function () {
        $('#connection').html('Connecting...');
        $('ul#connection-results').empty();
        $('ul#user-profiles').empty();
        $('#active-body').empty();
        $('#results').removeClass('remove');
        // $('#active-users').removeClass('remove');
        dataa = {'csrfmiddlewaretoken':'crpdxksO0B82hkhT9Eo3ehstdGwMehQPH6Gw8dz73EsYNE1WMakqUUscuj6r5NT9'}

        $.ajax({
            "url": "/dashboard/connection/check.php",
            'type': 'POST',
            'data': dataa,
            'dataType': 'json',
            'success': function (data) {
                // alert(data['success']);
                console.log(data.result);
                if (data.status == 200){
                    $('#connection').html('Connected !!');
                    $('#help-text').removeClass('remove');
                    $('ul#connection-results').addClass('note-success').removeClass('note-danger');
                    $('ul#user-profiles').addClass('note-success').removeClass('note-danger').removeClass('remove');
                    $('ul#connection-results').append(
                        "<li class='result'> Board Name =>  "+data.boardName+"</li>"+
                        "<li class='result'> DNS Name =>  "+data.dnsName+"</li>"+
                        "<li class='result'> Firmware Type =>  "+data.firmwaretype+"</li>"+
                        "<li class='result'> Model =>  "+data.model+"</li>"+
                        "<li class='result'> Public Address =>  "+data.publicAddress+"</li>"+
                        "<li class='result'> Serial Number =>  "+data.serialNumber+"</li>"
                    );
                    let profiles = data.profiles;
                    console.log(profiles);
                    let content = '';
                    profiles.forEach(profile => {
                        content = `${content} <li class='result'> ${profile}</li>`
                    });
                    $('ul#user-profiles').append(content);
                    // get active users
                    let activeUsers = data.active_users;
                    console.log(data.active_users)
                    let activeContent = '';
                    activeUsers.forEach(active =>{
                        activeContent = `${activeContent} 
                        <tr>
                            <td>${active['user']}</td>
                            <td>${active['login_by']}</td>
                            <td>${active['address']}</td>
                            <td>${active['uptime']}</td>
                            <td>${active['idletime']}</td>
                            <td>${active['downloaded']}</td>
                            <td>${active['uploaded']}</td>
                        </tr>
                        `
                    });
                    $('tbody#active-body').append(activeContent);
                } else if (data.status != 200){
                    $('#connection').html('Failed !!');
                    $('#connection-results').addClass('note-danger').removeClass('note-success');
                    $('#user-profiles').addClass('note-danger').removeClass('note-success');
                    $('ul#connection-results').append(
                        "<li class='result'> Unable to connect to router.</li>"+
                        "<li class='result'>1: Is it turned on?</li>"+
                        "<li class='result'>2: Is DDNS enabled?</li>"+
                        "<li class='result'>3: Is the public ip the same as cloud ip? (Happens when your public Ip is dynamic) </li>"
                    );
                    $('ul#user-profiles').addClass('remove');
                    // $('#active-users').addClass('remove');
                    $('#help-text').addClass('remove');
                }
            }
        })
    })
    // Delete Package
    $('a.delete-package').click(function(e){
        e.preventDefault();
        dataa = {'csrfmiddlewaretoken':'crpdxksO0B82hkhT9Eo3ehstdGwMehQPH6Gw8dz73EsYNE1WMakqUUscuj6r5NT9'};
        var packageId = $(this).attr('id');

        $.ajax({
            "url": `/dashboard/package_delete/${packageId}/`,
            'type': 'POST',
            'data': dataa,
            'dataType': 'json',
            'success': function (data) {
                console.log(data);
                if (data['status']===200){
                    idPackage=data['id'];
                    $('#delete-item').html(data['done']);
                    $('#delete-modal').modal({
                        backdrop: 'static',
                        keyboard: false
                    });
                } else if (data['status']===400){
                    $('#info-area').html(
                        "<p id='info'>"+ data['done'] +"</p>"
                    )
                    $('#info-modal').modal({
                        backdrop: 'static',
                        keyboard: false
                    });
                }
            }
        });
    });
    $('a#confirm').click(function(){
        dataa = {'csrfmiddlewaretoken':'crpdxksO0B82hkhT9Eo3ehstdGwMehQPH6Gw8dz73EsYNE1WMakqUUscuj6r5NT9'};
        $("#info-modal").modal("hide");
        $("#delete-modal").modal("hide");

        $.ajax({
            "url": `/dashboard/confirm_package_delete/${idPackage}/`,
            'type': 'POST',
            'data': dataa,
            'dataType': 'json',
            'success': function (data) {
            }
        });
    })
</script>
<script>
    $('#packages-table').DataTable({
        "aaSorting": []
    });
    // $('#active-users-table').DataTable({
    //     "aaSorting": []
    // });
    var openWindow;
    $('.package').click(function(e){
        e.preventDefault();
        openWindow = window.open(`/dashboard/package/${e.target.id}/`, 'openWindow', "width=700,height=730");
    });

    // $('.package').click(function(e){
    //     e.preventDefault();
    //     openWindow = window.open(`/dashboard/package/${e.target.id}/`, 'openWindow', "width=700,height=730");
    // });
</script>


</body>

</html>