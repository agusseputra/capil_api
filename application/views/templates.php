<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=(isset($title))?$title:'Pangkalan Data Mahasiswa';?></title>
    <meta name="description" content="Pangkalan Data Mahasiswa Undiksha">
    <meta name="author" content="upttik">
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico') ?>">
    <link href="<?=base_url();?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?=base_url();?>assets/css/colors.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="<?=base_url();?>assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/core/libraries/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
  <style type="text/css"> 
.table-xxs > thead > tr > th, .table-xxs > tbody > tr > th, .table-xxs > thead > tr > td, .table-xxs > tbody > tr > td {
    padding: 3px;
}
        .lo{background-color:rgba(0,0,0,0.2);height:100%;width:100%;position: fixed; z-index: 999;top: 0;left:0;}
        .lo img{top:50%;left:50%; position: absolute;}
        </style>   
    </head>
    <body>
    <div class="navbar navbar-default header-highlight">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="<?=base_url();?>assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>
		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
			<div class="navbar-right">
				<p class="navbar-text"><?=$this->session->userdata('name');?></p>
				<ul class="nav navbar-nav">	
                <li><a href="<?=site_url('logout/mahasiswa')?>">Logout</a></li>			
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-bell2"></i>
							<span class="visible-xs-inline-block position-right">Activity</span>
							<span class="status-mark border-pink-300"></span>
						</a>
						<div class="dropdown-menu dropdown-content">
							<div class="dropdown-content-heading">
								Activity
								<ul class="icons-list">
									<li><a href="#"><i class="icon-menu7"></i></a></li>
								</ul>
							</div>
							<ul class="media-list dropdown-content-body width-350">
								<li class="media">
									<div class="media-left">
										<a href="#" class="btn bg-success-400 btn-rounded btn-icon btn-xs"><i class="icon-mention"></i></a>
									</div>
									<div class="media-body">
										<a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and tricks"
										<div class="media-annotation">4 minutes ago</div>
									</div>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="page-container">
		<div class="page-content">
			<div class="sidebar sidebar-main">
				<?php $this->load->view($menu); ?>
                
			</div>
			<div class="content-wrapper">
            <div class="page-header">
					<div class="page-header-content">
						<div class="page-title">
							<h4 id="sub-title">.</h4>
						</div>
						<div class="heading-elements">
							<ul class="breadcrumb">							
						</ul>
						</div>
					</div>					
				</div>
            <?php $this->load->view($content);?>
          <div class="hide" align="center">{elapsed_time}</div>
			</div>
                       
		</div>
	</div>
    <div class="ll hide">
    <div class='lo'><img  src='<?=base_url()?>assets/images/facebook.gif'></div>
    </div>
</body>
	<script type="text/javascript" src="<?=base_url();?>assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/core/app.js"></script>   
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/bootstrap_select.min.js"></script>	
    <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/notifications/jgrowl.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/buttons/spin.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/buttons/ladda.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/plugins/forms/validation/validate.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/custom/ajax.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/custom/validate.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/notifications/sweet_alert.min.js"></script>
    
<script>
$('.<?=($this->uri->segment(3))?$this->uri->segment(3):'profile';?>').addClass('active');
$('.select2').select2();
$('.breadcrumb').html($('.navigasi').html());
$('#sub-title').html($('.sub-title').html());

</script>
</html>
