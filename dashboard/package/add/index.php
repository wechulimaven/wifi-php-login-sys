<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Package</title>


    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" rel="stylesheet">
    <script src="https://kit.fontawesome.com/441b163d2b.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="/static/mdb/css/mdb.min.afd3556bfdb3.css">
    <link href="/static/css/jh-admin.min.8963020a2474.css" rel="stylesheet">



    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116285755-10"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-116285755-10');
    </script>
    <style>
        .form-control{
            color: black;
        }
    </style>

</head>
<body>

<div class="card border-0 shadow m-4">
    <div class="card-header border-0 py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">
            <i class="fas fa-user"></i> New Package
        </h6>
    </div>
    <div class="card-body">
        <form action="#" method="post" id="package">
            <input type='hidden' name='csrfmiddlewaretoken' value='maa0lJY2toedFiDlieJERypuoFqYeyJ6RPrjWC5lwry9bCnoVKF1xbpdFi0D54Mq' />
            <div class="form-group">
                <label for="id_title">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" title="
            E.g. 1 Hour
            " required id="id_title" />


                <small class="form-text text-muted">
                    <p>E.g. 1 Hour</p>
                </small>

            </div>
            <div class="form-group"><label for="id_speed">Speed</label><input type="text" name="speed" class="form-control" placeholder="Speed" title="
            E.g. Up to 5mbps
            " required id="id_speed" />


                <small class="form-text text-muted">
                    <p>E.g. Up to 5mbps</p>
                </small>

            </div>
            <div class="form-group"><label for="id_downloads">Downloads</label><input type="text" name="downloads" class="form-control" placeholder="Downloads" title="
            E.g. Unlimited! or 1000000000 (for 1Gb) or 10000000000 (for 10Gb)
            " required id="id_downloads" />


                <small class="form-text text-muted">
                    <p>E.g. Unlimited! or 1000000000 (for 1Gb) or 10000000000 (for 10Gb)</p>
                </small>

            </div>
            <div class="form-group"><label for="id_validity">Validity</label><input type="text" name="validity" class="form-control" placeholder="Validity" title="
            E.g. 1 hour
            " required id="id_validity" />


                <small class="form-text text-muted">
                    <p>E.g. 1 hour</p>
                </small>

            </div>
            <div class="form-group"><label for="id_price">Price</label><input type="number" name="price" class="form-control" placeholder="Price" title="
            E.g. 100
            " required id="id_price" />


                <small class="form-text text-muted">
                    <p>E.g. 100</p>
                </small>

            </div>
            <div class="form-group"><label for="id_time_seconds">Time seconds</label><input type="number" name="time_seconds" class="form-control" placeholder="Time seconds" title="
            E.g. 86400 (for 24 hours)
            " required id="id_time_seconds" />


                <small class="form-text text-muted">
                    <p>E.g. 86400 (for 24 hours)</p>
                </small>

            </div>
            <div class="form-group"><div class="form-check"><input type="checkbox" name="voucher" class="form-check-input" id="id_voucher" /><label class="form-check-label" for="id_voucher" title="
            Tick if package should be seen by voucher users and subscribers. If not ticked, it will be visible to subscribers only
            ">Voucher</label>


                    <small class="form-text text-muted">
                        <p>Tick if package should be seen by voucher users and subscribers. If not ticked, it will be visible to subscribers only</p>
                    </small>

                </div></div>
            <div class="form-group"><div class="form-check"><input type="checkbox" name="data" class="form-check-input" id="id_data" /><label class="form-check-label" for="id_data">Data</label></div></div>
            <div class="form-group"><label for="id_user_profile">User profile</label><input type="text" name="user_profile" value="default" class="form-control" placeholder="User profile" title="
            Set the name of user profile as they appear on the mikrotik
            " required id="id_user_profile" />


                <small class="form-text text-muted">
                    <p>Set the name of user profile as they appear on the mikrotik</p>
                </small>

            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>
</div>


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





<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script crossorigin="anonymous" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script crossorigin="anonymous" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="/static/mdb/js/mdb.min.795c8edf10e5.js"></script>

<script>
    $('form#package').submit(function(e){
        e.preventDefault();
        let form = $('form#package');
        $('#info-area').html(
            "<p id='info'>Processing...</p>" +
            "<p class='small text-muted'>Hold on a sec...</p>" +
            '<button type="button" class="btn btn-secondary text-right" data-dismiss="modal">Close</button>'
        );
        $('#info-modal').modal('show');


        $.ajax({
            'url': 'add.php',
            'type': 'POST',
            'data': form.serialize(),
            'dataType': 'json',
            'success': function(data){
                if (data.status === 200 ){
                    window.close();
                } else {
                    $('#info-area').html(
                        "<p id='info'>" + data.error + "</p>" +
                        "<p class='small text-muted'>An error occurred. Try again</p>" +
                        '<button type="button" class="btn btn-secondary text-right" data-dismiss="modal">Close</button>'
                    );
                    $('#info-modal').modal('show');
                }
            }
        })
    });
</script>

</body>
</html>