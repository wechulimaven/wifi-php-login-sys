<?php
//session_start();
//if (!isset($_SESSION['loggedin'])) {
//    header("location: /user/login/");
//}
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="WifiYetu Hotspot">
    <meta name="author" content="Fabian Muema">

    <title>Marketing</title>


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116285755-10"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-116285755-10');
    </script>



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


        <li class="nav-item active">

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


        <li class="nav-item">

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
                <div class="row mb-3">
                    <div class="col-md-12">
                        <h1 class="text-center">Send Emails and Text Messages</h1>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <div class="card border-0 shadow mb-3">
                            <div class="card-header border-0 py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">
                                    <i class="fas fa-table"></i> Send email newsletter
                                </h6>
                            </div>
                            <div class="card-body">
                                <form action="/dashboard/send_email/" method="post" id="emails-form">
                                    <input type='hidden' name='csrfmiddlewaretoken' value='H5PruRmdUY95oHh5N16AhibclPGbRFT7cK6K5KtwX1t1U118qx2XXVbVCsgQIbWr' />
                                    <div class="md-form">
                                        <label>Email subject</label>
                                        <input type="text" name="subject" required="" maxlength="100" class="form-control" title="" id="id_subject">
                                    </div>
                                    <div class="md-form">
                                        <label>Content Head</label>
                                        <input type="text" name="content_head" required="" maxlength="100" class="form-control" title="" id="id_content_head">
                                    </div>
                                    <div class="md-form">
                                        <label>Content body</label>
                                        <textarea name="content_body" cols="40" rows="10" required="" class="form-control" title="" id="id_content_body"></textarea>
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="submit" id="send-email" class="btn btn-blue" value="Send">
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer small text-muted">Updated on 29th October 2020 07:41</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card border-0 shadow mb-3">
                            <div class="card-header border-0 py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">
                                    <i class="fas fa-table"></i> Send sms notifications
                                </h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="/dashboard/send_sms/" method="post" id="sms-form">
                                            <input type='hidden' name='csrfmiddlewaretoken' value='H5PruRmdUY95oHh5N16AhibclPGbRFT7cK6K5KtwX1t1U118qx2XXVbVCsgQIbWr' />
                                            <div class="md-form">
                                                <label>Content body</label>
                                                <textarea name="sms_body" cols="40" rows="7" required="" class="form-control" title="" id="id_sms_body"></textarea>
                                                <div id="charNum"></div>
                                            </div>
                                            <div class="form-group text-center">
                                                <input type="submit" id="send-sms" class="btn btn-blue" value="Send">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-12">
                                        <hr>
                                        <h3 class="text-center">Add phone number</h3>
                                        <form action="/dashboard/add_number/" method="post" id="phone-numbers-form" class="center-items">
                                            <input type='hidden' name='csrfmiddlewaretoken' value='H5PruRmdUY95oHh5N16AhibclPGbRFT7cK6K5KtwX1t1U118qx2XXVbVCsgQIbWr' />
                                            <div class="form-row">
                                                <div class="md-form">
                                                    <label>Phone numbers</label>
                                                    <input type="text" name="phone_number" required="" maxlength="100" class="form-control" title="" id="id_phone_number">
                                                </div>
                                                <div class="form-group text-center">
                                                    <input type="submit" id="add-phone" class="btn btn-blue" value="Add Phone Number">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-12">
                                        <hr>
                                        <h3 class="text-center"><span id="sms-numbers">Check phone numbers</span></h3>
                                        <div class="center-items">
                                            <a href="/dashboard/check_numbers/" class="btn btn-primary" id="check-numbers">Check numbers</a>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table" id="packages-table" width="100%" cellspacing="0">
                                                <thead>
                                                <tr>
                                                    <th>Phone Number</th>
                                                    <th>Delete</th>
                                                </tr>
                                                </thead>
                                                <tbody id="phone-list">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer small text-muted">Updated on 29th October 2020 07:41</div>
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

<script src="/static/js/jh-admin.min.1ada388fbe2a.js"></script>
<script>
    // Calculate SMS characters
    $('#id_sms_body').keyup(function(){
        var len = $(this).val().length;
        sms_count = len/160;
        count = Math.ceil(sms_count);
        var remaining = (160*count) - len;
        $('#charNum').text(`${remaining} characters. ${count} ${count==1?'Sms':'Smses'}`);
    });
    // Send sms
    $('form#sms-form').submit(function(e){
        e.preventDefault();
        form = $('form#sms-form');
        $('#send-sms').val('Sending...');

        $.ajax({
            "url": "/dashboard/send_sms/",
            'type': 'POST',
            'data': form.serialize(),
            'dataType': 'json',
            'success': function (data) {
                if (data['status']===200){
                    $('#send-sms').val('Sent !!');
                    $('#send-sms').removeClass('btn-blue btn-danger');
                    $('#send-sms').addClass('btn-success');
                } else {
                    $('#send-sms').val('Failed !!');
                    $('#send-sms').removeClass('btn-blue btn-success');
                    $('#send-sms').addClass('btn-danger');
                }
                console.log(data['status'])
                $('#payment-info-area').html(
                    `<p id='info'>${data['done']}</p>`
                );
                $('#payment-modal').modal('show');
                $('#check-credentials').hide();
            }
        })
        $('#charNum').text('');
        $('#id_sms_body').val('');
    });
    // Add phone number
    $('form#phone-numbers-form').submit(function(e){
        e.preventDefault();
        const phoneNumber = $('input#id_phone_number').val();
        if (phoneNumber.substring(0, 3) === '254' && phoneNumber.length === 12) {
            form = $('form#phone-numbers-form');
            $('#add-phone').val('Adding...');

            $.ajax({
                "url": "/dashboard/add_number/",
                'type': 'POST',
                'data': form.serialize(),
                'dataType': 'json',
                'success': function (data) {
                    if (data['status']===200){
                        $('#add-phone').val('Added !!');
                        $('#add-phone').removeClass('btn-blue btn-black');
                        $('#add-phone').addClass('btn-success');
                    } else {
                        $('#add-phone').val('Exists !!');
                        $('#add-phone').removeClass('btn-blue btn-success');
                        $('#add-phone').addClass('btn-black');
                    }
                }
            })
            $('#charNum').text('');
            $('#id_sms_body').val('');
        } else {
            $('#payment-info-area').html(
                "<p id='info'>Incomplete or Invalid phone number. Must follow this format 2547XXXXXXXX</p>" +
                "<p class='small text-muted'>Please try again</p>"
            );
            $('#payment-modal').modal('show');
            $('#check-credentials').hide();
        }
    });
    /// Check available numbers
    $('a#check-numbers').click(function(e){
        e.preventDefault();
        $('#check-numbers').html('Checking...');
        $('#phone-list').empty();
        dataa = {'csrfmiddlewaretoken':'H5PruRmdUY95oHh5N16AhibclPGbRFT7cK6K5KtwX1t1U118qx2XXVbVCsgQIbWr'}

        $.ajax({
            "url": "/dashboard/check_numbers/",
            'type': 'POST',
            'data': dataa,
            'dataType': 'json',
            'success': function (data) {
                if (data['status']===200){
                    var phoneList=data['numbers'];
                    $('#check-numbers').html('Check Numbers !!');
                    $('#sms-numbers').html(data['done']);
                    phoneList.map(phone => $('#phone-list').append(`<tr>
                        <td>+${phone}</td>
                        <td style="padding: 0.7rem 0;"> 
                            <a href="/dashboard/delete_number/${phone}/" id=${phone} role="button" class="btn btn-sm btn-danger delete-phone" data-toggle="popover-hover" title="Are you sure?" data-content="You cannot undo this action">Delete</a>
                        </td>
                        </tr>`
                    ));
                    $('[data-toggle="popover-hover"]').popover({
                        html: true,
                        trigger: 'hover',
                        placement: 'top'
                    });
                } else {
                    $('#check-numbers').html('Failed !!');
                }
            }
        });
    });
    let idNumber='';
    // Delete Phone Number
    $('a.delete-phone').click(function(e){
        e.preventDefault();
        dataa = {'csrfmiddlewaretoken':'H5PruRmdUY95oHh5N16AhibclPGbRFT7cK6K5KtwX1t1U118qx2XXVbVCsgQIbWr'};

        $.ajax({
            "url": `/dashboard/delete_number/${phone}/`,
            'type': 'POST',
            'data': dataa,
            'dataType': 'json',
            'success': function (data) {
                if (data['status']===200){
                    idNumber=data['id'];
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
    // Send emails
    $('form#emails-form').submit(function(e){
        e.preventDefault();
        form = $('form#emails-form');
        $('#send-email').val('Sending...');

        $.ajax({
            "url": "/dashboard/send_email/",
            'type': 'POST',
            'data': form.serialize(),
            'dataType': 'json',
            'success': function (data) {
                if (data['status']===200){
                    $('#send-email').val('Sent !!');
                    $('#send-email').removeClass('btn-blue');
                    $('#send-email').addClass('btn-success');
                } else {
                    $('#send-email').val('Failed !!');
                    $('#send-email').removeClass('btn-blue');
                    $('#send-email').addClass('btn-danger');
                }
                console.log(data['status'])
            }
        })
        $('#id_subject').val('');
        $('#id_content_head').val('');
        $('#id_content_body').val('');
    })
</script>


</body>

</html>