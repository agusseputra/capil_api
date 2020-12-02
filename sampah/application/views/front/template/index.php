<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistem Infor">
    <meta name="author" content="Dewa Nyoman Adi Sista, I Nyoman Yoga Setyawan, Ketut Agus Seputra">
    <title>Simpapamama Undiksha</title>

    <link rel="shortcut icon" href="<?=base_url('assets/images/favicon.ico')?>">

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="<?=base_url('assets/css/icons/icomoon/styles.css')?>" rel="stylesheet" type="text/css">
    <link href="<?=base_url('assets/css/bootstrap.css')?>" rel="stylesheet" type="text/css">
    <link href="<?=base_url('assets/css/core.css')?>" rel="stylesheet" type="text/css">
    <link href="<?=base_url('assets/css/components.css')?>" rel="stylesheet" type="text/css">
    <link href="<?=base_url('assets/css/colors.css')?>" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="<?=base_url('assets/js/core/libraries/jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/core/libraries/bootstrap.min.js')?>"></script>

    <!-- /core JS files -->

  

</head>

<body class="layout-boxed navbar-top">

<!-- Main navbar -->
<div class="navbar navbar-inverse navbar-fixed-top bg-indigo-800">
    <div class="navbar-boxed">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?=site_url();?>">
                SIMPAPAMAMA UNDIKSHA
            </a>
            <ul class="nav navbar-nav pull-right visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-three-bars"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav">
                <li><a href="<?=site_url();?>"> Home</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Data Pengusul <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu width-250">
                        <li>
                            <a href="<?=site_url('pengusul/penelitian');?>"><i class="icon-quill4"></i> Penelitian</a>
                        </li>
                        <li>
                            <a href="<?=site_url('pengusul/pengabdian');?>"><i class="icon-quill4"></i> Pengabdian Pada Masyarakat</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Data Pelaksana <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu width-250">
                        <li>
                            <a href="<?=site_url('pelaksana/penelitian');?>"><i class="icon-quill4"></i> Penelitian</a>
                        </li>
                        <li>
                            <a href="<?=site_url('pelaksana/pengabdian');?>"><i class="icon-quill4"></i> Pengabdian Pada Masyarakat</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Statistik <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu width-250">
                        <li>
                            <a href="#"><i class="icon-quill4"></i> Penelitian</a>
                        </li>
                        <li>
                            <a href="#"><i class="icon-quill4"></i> Pengabdian Pada Masyarakat</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?=site_url('login');?>"><i class="icon-enter3"></i> LOGIN</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /main navbar -->

<script type="text/javascript">
    menu_aktif('<?=current_url()?>');
</script>

<!-- Page container -->
<div class="page-container mt-20">

    <!-- Page content -->
    <div class="page-content">
        <?=$content_?>
    </div>
    <!-- /page content -->

</div>
<!-- /page container -->


<!-- Footer -->
<div class="footer footer-boxed text-muted">
    &copy; 2017. <a href="http://undiksha.ac.id" target="_blank">Universitas Pendidikan Ganesha</a> by <a href="http://upttik.undiksha.ac.id" target="_blank">UPT TIK</a>
</div>
<!-- /footer -->

</body>
  <!-- Theme JS files -->
        <script type="text/javascript" src="<?=base_url('assets/js/plugins/ui/nicescroll.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/plugins/ui/drilldown.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/plugins/ui/headroom/headroom.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/plugins/ui/headroom/headroom_jquery.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/plugins/tables/datatables/datatables.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/plugins/tables/datatables/extensions/responsive.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/plugins/tables/datatables/extensions/buttons.min.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/plugins/forms/selects/select2.min.js')?>"></script>

    <script type="text/javascript" src="<?=base_url('assets/js/core/app.js')?>"></script>
    <script type="text/javascript" src="<?=base_url('assets/js/custom/mine.js')?>"></script>
    <!-- /theme JS files -->
</html>
