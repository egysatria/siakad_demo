<?php

session_start();
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Login | SD N BENDUNGAN 2 KARANGMOJO</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../assets/plugins/animate-css/animate.css" rel="stylesheet" />
        <!-- Bootstrap Select Css -->
    <link href="../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">GURU</a>
            <small>SD N Bendungan 2 Karangmojo</small>
        </div>
        <div class="card">
            <div class="body">
                <form action="p_login.php" method="POST">
                    <div class="image" align="center" style="margin-bottom:20px;">
                        <img src="../assets/images/unnamed.png" width="90" alt="User" />
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="nip" placeholder="NIP" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-xs-6">
                            <button class="btn btn-block bg-blue waves-effect" name="login" type="submit">SIGN IN</button>
                        </div>
                        <div class="col-xs-6">
                            <a href="../index.php" class="btn btn-block bg-red waves-effect">Kembali</a>
                        </div>
                    </div>
                </form>
                <?php
                if (isset($_SESSION['pesan'])) 
                {
                    echo $_SESSION['pesan'];
                    unset($_SESSION['pesan']);
                }

                ?>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../assets/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../assets/plugins/jquery-validation/jquery.validate.js"></script>
     <!-- Select Plugin Js -->
    <script src="../assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Custom Js -->
    <script src="../assets/js/admin.js"></script>
    <script src="../assets/js/pages/forms/basic-form-elements.js"></script>
    <script src="../assets/js/pages/examples/sign-in.js"></script>
</body>

</html>