<?php
session_start();
if (isset($_SESSION['ip'])) {
    $ip = $_SESSION['ip'];
}
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Hotspot Portal </title>
    <link rel="stylesheet" href="../../static/mdb/css/bootstrap.min.04aca1f4cd3e.css">
    <script src="https://kit.fontawesome.com/441b163d2b.js"></script>
    <link rel="shortcut icon" href="../../static/images/favi.205757ede137.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../static/mdb/css/mdb.min.afd3556bfdb3.css">
    <link rel="stylesheet" href="../../static/css/styles.d515b3260f69.css"><!-- Set up google analytics --></head>
<body>
<div class="authentication">
    <div class="card shadow border-0" style="width: 24rem;">
        <div class="card-header info-color text-center py-4"><h3><a href="/"><span
                            class="highlight white-text ">Portal<strong>Login</strong></span></a></h3></div>
        <div class="card-body">
            <div class="row line-row">
                <div class="line"></div>
                <div class="line-text">Sign In</div>
                <div class="line"></div>
            </div>
            <h6 class="text-center text-danger">
                <?php
                if (isset($_SESSION['error'])) {
                  echo $_SESSION['error'];
                  unset($_SESSION['error']);
                }
                ?>
            </h6>
            <form action="login.php" method="POST" autocomplete="off"><input type='hidden' name='csrfmiddlewaretoken'
                                                                     value='VgJ4U7PUT4tHZRBavsktizqayXHn0VyW3WuTMus0pnae8096HLehCHmrwqNccYiz'/>
                <div class="md-form"><label for="id_username">Username</label><input type="text" name="username"
                                                                                     autofocus="" maxlength="254"
                                                                                     class="form-control" title=""
                                                                                     required="" id="id_username"
                                                                                     autocomplete="off"></div>
                <div class="md-form"><label for="id_password">Password</label><input type="password" name="password"
                                                                                     class="form-control" title=""
                                                                                     required="" id="id_password"
                                                                                     autocomplete="off"></div>
                <div class="form-group text-center"><input type="submit" class="btn btn-primary btn-long" value="Login">
                </div>
            </form>
            <p>Forgot password? <a href="../password/reset/">Reset</a></p>
            <p>Don't have an account? <a href="../register/">Register</a></p></div>
    </div>
</div>
<script src="../../static/mdb/js/jquery-3.3.1.min.a09e13ee94d5.js"></script>
<script src="../../static/mdb/js/popper.min.c055b8c12988.js"></script>
<script src="../../static/mdb/js/bootstrap.min.67176c242e1b.js"></script>
<script src="../../static/mdb/js/mdb.min.795c8edf10e5.js"></script>
</body>
</html>