<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=(isset($title))?$title:'MIGRASI Undiksha';?></title>
    <meta name="description" content="Angket ini bertujuan mengumpulkan informasi tentang kepuasan dosen terhadap sistem dan praktik pengelolaan sumber daya manusia di
     Universitas Pendidikan Ganesha. Angket ini terdiri atas dua jenis, yaitu angket tertutup dan angket terbuka.">
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
    <script type="text/javascript" src="<?= base_url();?>assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>
  <style type="text/css"> 
.table-xxs > thead > tr > th, .table-xxs > tbody > tr > th, .table-xxs > thead > tr > td, .table-xxs > tbody > tr > td {
    padding: 3px;
}
        .lo{background-color:rgba(0,0,0,0.2);height:100%;width:100%;position: fixed; z-index: 999;top: 0;left:0;}
        .lo img{top:50%;left:50%; position: absolute;}
        .lll{background-color:rgba(0,0,0,0.2);height:100%;width:100%;position: fixed; z-index: 999;top: 0;left:0;}
        .lll img{top:50%;left:50%; position: absolute;}
        </style>   
      
    </head>
    <body>
    <div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?=site_url();?>"><img src="<?=base_url();?>assets/images/logo_light.png" alt=""></a>
            <ul class="nav navbar-nav pull-right visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            </ul>
            <ul class="nav navbar-nav">
				<li  class="kuitansi"><a href="<?=site_url('ruh/kuitansi')?>" >Kuitansi (GUP)</a></li>
                <li class="spm" ><a href="<?=site_url('ruh/spm')?>" >SPM (SP2D)</a></li>
                <li class="bku"><a href="<?=site_url('bku')?>" > BKU</a></li>
                 <li class="dropdown  bios">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<span>BIOS IMPORT</span>
						<i class="caret"></i>
					</a>
                    <ul class="dropdown-menu ">
                        <li ><a href="<?=site_url('bios/aruskas')?>" >Arus Kas</a></li>
                        <li><a href="<?=site_url('bios/aruskas')?>" >Ekuitas</a></li>
                        <li ><a href="<?=site_url('bios/aruskas')?>" >Neraca</a></li>
                    </ul>
				</li>
             </ul>
		</div>
        <div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav navbar-right">
			     <li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<span><?=$this->session->userdata('name')?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
                        <li ><a  href="<?=site_url('login/logout')?>" > Keluar</a></li>
                    </ul>
				</li>
                
			</ul>
		</div>
	</div>
	<div class="page-container">
		<div class="page-content">
		<div class="content-wrapper">
        <?php if(!isset($_GET['print'])){?>
            <div class="page-header d-print-none">
					<div class="page-header-content ">
						<div class="page-title">
							<h4 id="sub-title">.</h4>
						</div>
						<div class="heading-elements">
							<ul class="breadcrumb">							
						</ul>
						</div>
					</div>					
				</div>
                <?php } ?>
            <?php $this->load->view($content);?>
          <div class="hide" align="center">{elapsed_time}</div>
			</div>
                       
		</div>
	</div>
    <div class="ll hide">
    <div class='lll'><img  src='<?=base_url()?>assets/images/facebook.gif'></div>
    </div>
</body>
	<script type="text/javascript" src="<?=base_url();?>assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/core/app.js"></script>   
    <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/notifications/jgrowl.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/buttons/spin.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/buttons/ladda.min.js"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/plugins/forms/validation/validate.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/custom/ajax.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/custom/validate.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/notifications/sweet_alert.min.js"></script>
   	<script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
    <script src="<?= base_url('assets/js/plugins/tables/datatables/extensions/fixed_header.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/pages/datatables_responsive.js"></script>
   

    
<script>

$('.<?=($this->uri->segment(3))?$this->uri->segment(3):'profile';?>').addClass('active');
$('.<?=($this->uri->segment(2))?$this->uri->segment(2):'profile';?>').addClass('active');
$('.<?=($this->uri->segment(1))?$this->uri->segment(1):'profile';?>').addClass('active');
$('.breadcrumb').html($('.navigasi').html());
$('#sub-title').html($('.sub-title').html());
</script>
</html>
