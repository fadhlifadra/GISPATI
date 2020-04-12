<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>GIS Kota Pati | Sign Up</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" >
        <!-- Font Awesome Icons -->
        <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/css/AdminLTE.min.css'); ?>" rel="stylesheet">    
        <!-- iCheck -->
        <link href="<?php echo base_url('assets/js/plugins/iCheck/square/blue.css'); ?>" rel="stylesheet">
    </head>
    <body class="login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="#" ><b>GIS</b>Kota Pati</a>
            </div><!-- /.login-logo -->
            <div class="login-box-body">
                <p class="login-box-msg">Sign Up to start your journey </p>
                <form action="<?php echo site_url('login'); ?>" method="post">
                    <?php
                    if (validation_errors() || $this->session->flashdata('result_login')) {
                        ?>
                        <div class="alert alert-error">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Warning!</strong>
                            <?php echo validation_errors(); ?>
                            <?php echo $this->session->flashdata('result_login'); ?>
                        </div>
                    <?php } ?>
                    <label for="">Nama Lengkap</label>
                    <div class="form-group has-feedback">
                        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required=""/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <label for="">Username</label>
                    <div class="form-group has-feedback">
                        <input type="text" name="username" class="form-control" placeholder="Username" required=""/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <label for="">Password</label>
                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <label for="">Confirm Password</label>
                    <div class="form-group has-feedback">
                        <input type="password" name="password1" class="form-control" placeholder="Re-type Password" required=""/>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>

                    <div class="row">
                        <div class="col-xs-4">
                            
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign Up</button>
                        </div><!-- /.col -->
                    </div>
                    <a href="<?=base_url('login')?>">Back</a>
                </form>
        </div><!-- /.login-box -->
        <!-- jQuery 2.1.3 -->
        <script src="<?php echo base_url('assets/js/plugins/jQuery/jQuery-2.1.3.min.js'); ?>"></script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url('assets/js/plugins/iCheck/icheck.min.js'); ?>"></script>  
        <script>
            $(function () {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_square-blue',
                    radioClass: 'iradio_square-blue',
                    increaseArea: '20%' // optional
                });
            });
        </script>
    </body>
</html>