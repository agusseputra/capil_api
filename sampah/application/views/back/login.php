<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PDM - LOGIN</title>
    <link rel="shortcut icon" href="<?=base_url('assets/images/favicon.ico')?>">

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="<?=base_url('assets/css/icons/icomoon/styles.css')?>" rel="stylesheet" type="text/css">
    <link href="<?=base_url('assets/css/bootstrap.css" rel="stylesheet')?>" type="text/css">
    <link href="<?=base_url('assets/css/core.css" rel="stylesheet')?>" type="text/css">
    <link href="<?=base_url('assets/css/components.css')?>" rel="stylesheet" type="text/css">
    <link href="<?=base_url('assets/css/colors.css')?>" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="<?=base_url('assets/js/plugins/loaders/pace.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/core/libraries/jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/core/libraries/bootstrap.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/plugins/loaders/blockui.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/plugins/ui/nicescroll.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/plugins/ui/drilldown.js')?>"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="<?=base_url('assets/js/plugins/forms/validation/validate.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/plugins/forms/validation/localization/messages_id.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/plugins/buttons/spin.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/plugins/buttons/ladda.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/plugins/notifications/jgrowl.min.js')?>"></script>

    <script type="text/javascript" src="<?=base_url('assets/js/core/app.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/plugins/ui/ripple.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/ajax.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/validate.js')?>"></script>
    <!-- /theme JS files -->

</head>

<body class="login-container">

    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Simple login form -->
                <form class="form-ajax form-validate-jquery" action="<?=site_url('admin/login/auth')?>" method="post">
                    <div class="panel panel-body login-form">
                        <div class="text-center">
                            <img src="<?=base_url('assets/images/logoundiksha.png')?>" width="70%"/>
                            <h4 class="content-group">Sistem Informasi<br/> Sistem Pangkalan Data Mahasiswa </h4>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input type="text" class="form-control" placeholder="Username" name="post[username]" required>
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input type="password" class="form-control" placeholder="Password" name="post[password]" required>
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn bg-indigo btn-block btn-ladda btn-ladda-spinner" data-spinner-color="#fff" data-style="slide-right"><span class="ladda-label">log in <i class="icon-circle-right2 position-right"></i></span></button>
                        </div>

                        <div class="text-center">
                            <small><i class="icon-newspaper2 position-left text-muted"></i></small><a href="<?=site_url()?>">Kembali ke halaman muka</a>
                        </div>

                    </div>

                </form>
                <!-- /simple login form -->



            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->


	<!-- Footer -->
	<div class="footer text-muted text-center">
		&copy; 2017. <a href="http://undiksha.ac.id" target="_blank">Universitas Pendidikan Ganesha</a>
	</div>
	<!-- /footer -->

</body>
</html>
