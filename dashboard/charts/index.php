<?php
session_start();
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

    <title>Charts</title>


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

        <li class="nav-item active">

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

                <!-- package preference pie -->

                <div class="card border-0 shadow mb-4">
                    <div class="card-header border-0 py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Package Preference pie chart</h6>
                    </div>
                    <div class="card-body">
                        <div class="chart-pie">
                            <canvas id="packagePie"></canvas>
                        </div>
                    </div>
                </div>
                <!-- Daily earnings area Chart -->
                <div class="card border-0 shadow mb-4">
                    <div class="card-header border-0 py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Earnings Overview for the last 12 days</h6>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                            <canvas id="dayEarnings"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Monthly earnings bar Chart -->
                <div class="card border-0 shadow mb-4">
                    <div class="card-header border-0 py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Daily statistics</h6>
                    </div>
                    <div class="card-body">
                        <div class="chart-bar">
                            <canvas id="dailyStatistics"></canvas>
                        </div>
                    </div>
                </div>
                <hr>
                <h2 class="text-center">Monthly Data</h2>
                <!-- Monthly earnings bar Chart -->
                <div class="card border-0 shadow mb-4">
                    <div class="card-header border-0 py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Monthly Earnings for the last 12 months</h6>
                    </div>
                    <div class="card-body">
                        <div class="chart-bar">
                            <canvas id="monthEarnings"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Monthly earnings bar Chart -->
                <div class="card border-0 shadow mb-4">
                    <div class="card-header border-0 py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Number of Payments per month</h6>
                    </div>
                    <div class="card-body">
                        <div class="chart-bar">
                            <canvas id="monthPaymentsNo"></canvas>
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

<script src="/static/js/chart.js/Chart.bundle.min.20611fc0031b.js"></script>
<script src="/static/js/chart.js/Chart.min.97fc24605ac8.js"></script>
<script src="/static/js/jh-admin.min.1ada388fbe2a.js"></script>
<!-- Script to plot daily earnings -->
<script>
    labell = '[&#39;Thur 29&#39;, &#39;Wed 28&#39;, &#39;Tue 27&#39;, &#39;Mon 26&#39;, &#39;Sun 25&#39;, &#39;Sat 24&#39;, &#39;Fri 23&#39;, &#39;Thur 22&#39;, &#39;Wed 21&#39;, &#39;Tue 20&#39;, &#39;Mon 19&#39;, &#39;Sun 18&#39;]'.replace(/&#39;/g, "").replace("[", '').replace("]", '').split(', ');
    dataa = JSON.parse("[" + '[61.0, 1095.0, 1008.0, 850.0, 606.0, 504.0, 186.0, 775.0, 738.0, 1122.0, 762.0, 554.0]'.replace("[", '').replace("]", '') + "]");

    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';

    function number_format(number, decimals, dec_point, thousands_sep) {
        number = (number + '').replace(',', '').replace(' ', '');
        var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
            dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
            s = '',
            toFixedFix = function (n, prec) {
                var k = Math.pow(10, prec);
                return '' + Math.round(n * k) / k;
            };
        // Fix for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        if ((s[1] || '').length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1).join('0');
        }
        return s.join(dec);
    }

    // Area Chart Example
    var ctx = document.getElementById("dayEarnings");
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: labell,
            datasets: [{
                label: "Earnings",
                lineTension: 0.3,
                backgroundColor: "rgba(78, 115, 223, 0.05)",
                borderColor: "rgba(78, 115, 223, 1)",
                pointRadius: 3,
                pointBackgroundColor: "rgba(78, 115, 223, 1)",
                pointBorderColor: "rgba(78, 115, 223, 1)",
                pointHoverRadius: 3,
                pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                pointHitRadius: 10,
                pointBorderWidth: 2,
                data: dataa,
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: 0,
                    right: 25,
                    top: 25,
                    bottom: 25
                }
            },
            scales: {
                xAxes: [{
                    time: {
                        unit: 'date'
                    },
                    gridLines: {
                        display: false,
                        drawBorder: false
                    },
                    ticks: {
                        maxTicksLimit: 7
                    }
                }],
                yAxes: [{
                    ticks: {
                        maxTicksLimit: 5,
                        padding: 10,
                        // Include a dollar sign in the ticks
                        callback: function (value, index, values) {
                            return 'Kes ' + number_format(value);
                        }
                    },
                    gridLines: {
                        color: "rgb(234, 236, 244)",
                        zeroLineColor: "rgb(234, 236, 244)",
                        drawBorder: false,
                        borderDash: [2],
                        zeroLineBorderDash: [2]
                    }
                }],
            },
            legend: {
                display: false
            },
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                titleMarginBottom: 10,
                titleFontColor: '#6e707e',
                titleFontSize: 14,
                borderColor: '#dddfeb',
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                intersect: false,
                mode: 'index',
                caretPadding: 10,
                callbacks: {
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ': Kes ' + number_format(tooltipItem.yLabel);
                    }
                }
            }
        }
    });

    console.log('[4.0, 38.0, 55.0, 37.0, 28.0, 22.0, 15.0, 39.0, 36.0, 63.0, 41.0, 39.0]');
    let daily_payments = JSON.parse("[" + '[4.0, 38.0, 55.0, 37.0, 28.0, 22.0, 15.0, 39.0, 36.0, 63.0, 41.0, 39.0]'.replace("[", '').replace("]", '') + "]");
    let daily_vouchers = JSON.parse("[" + '[4.0, 59.0, 75.0, 62.0, 38.0, 31.0, 19.0, 58.0, 51.0, 85.0, 72.0, 58.0]'.replace("[", '').replace("]", '') + "]");
    var color = Chart.helpers.color;

    // Bar Graph for number of payments and number of attempts made in a Day
    var dailyStatistics = {
        labels: labell,
        datasets: [{
            label: 'Payments attempts made',
            backgroundColor: color("rgb(34, 74, 190)").alpha(0.8).rgbString(),
            borderColor: "rgb(34, 74, 190)",
            borderWidth: 1,
            data: daily_vouchers
        },{
            label: 'Number of Payments Completed',
            backgroundColor: color("rgb(255, 0, 38)").alpha(0.8).rgbString(),
            borderColor: "rgb(255, 0, 38)",
            borderWidth: 1,
            data: daily_payments
        }]
    };
    var ctx = document.getElementById('dailyStatistics').getContext('2d');
    window.myBar = new Chart(ctx, {
        type: 'bar',
        data: dailyStatistics,
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Daily Earnings'
            }
        }
    });
</script>
<!-- Second script for plotting Monthly earnings -->
<script>
    let months = '[&#39;October&#39;, &#39;September&#39;, &#39;July&#39;, &#39;June&#39;, &#39;May&#39;, &#39;April&#39;]'.replace(/&#39;/g, "").replace("[", '').replace("]", '').split(', ');
    let month_data = JSON.parse("[" + '[19427.0, 12187.0, 7583.0, 18293.0, 408.0, 2445.0]'.replace("[", '').replace("]", '') + "]");
    let month_payments = JSON.parse("[" + '[966.0, 747.0, 546.0, 2047.0, 57.0, 198.0]'.replace("[", '').replace("]", '') + "]");
    let month_vouchers = JSON.parse("[" + '[1436.0, 1074.0, 868.0, 3251.0, 112.0, 311.0]'.replace("[", '').replace("]", '') + "]");

    var color = Chart.helpers.color;

    // Bar chart for amount earned per month
    var barChartData = {
        labels: months,
        datasets: [{
            label: 'Monthly Earnings',
            backgroundColor: color("rgb(34, 74, 190)").alpha(0.8).rgbString(),
            borderColor: "rgb(34, 74, 190)",
            borderWidth: 1,
            data: month_data
        }]
    };
    var ctx = document.getElementById('monthEarnings').getContext('2d');
    window.myBar = new Chart(ctx, {
        type: 'bar',
        data: barChartData,
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Monthly Earnings'
            }
        }
    });

    // Bar Graph for number of payments and number of attempts made in a month
    var monthlyPaymentData = {
        labels: months,
        datasets: [{
            label: 'Payments attempts made',
            backgroundColor: color("rgb(34, 74, 190)").alpha(0.8).rgbString(),
            borderColor: "rgb(34, 74, 190)",
            borderWidth: 1,
            data: month_vouchers
        },{
            label: 'Number of Payments Completed',
            backgroundColor: color("rgb(255, 0, 38)").alpha(0.8).rgbString(),
            borderColor: "rgb(255, 0, 38)",
            borderWidth: 1,
            data: month_payments
        }]
    };
    var ctx = document.getElementById('monthPaymentsNo').getContext('2d');
    window.myBar = new Chart(ctx, {
        type: 'bar',
        data: monthlyPaymentData,
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Monthly Earnings'
            }
        }
    });
</script>
<script>
    let count = JSON.parse("[" + '[4245.0, 720.0, 1972.0, 115.0]'.replace("[", '').replace("]", '') + "]");
    let package_label = '[&#39;24hrs&#39;, &#39;Try&#39;, &#39;12HRS&#39;, &#39;1 Week&#39;]'.replace(/&#39;/g, "").replace("[", '').replace("]", '').split(', ');
    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: count,
                backgroundColor: [
                    'rgb(169, 14, 0)',
                    'rgb(108, 1, 135)',
                    'rgb(218, 221, 8)',
                    'rgb(1, 135, 41)',
                    'rgb(0, 5, 170)',
                    'rgb(0, 0, 0)'
                ],
                label: 'Package preference'
            }],
            labels: package_label
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Package Preference'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };
    var ctx = document.getElementById('packagePie').getContext('2d');
    window.myDoughnut = new Chart(ctx, config);
</script>


</body>

</html>