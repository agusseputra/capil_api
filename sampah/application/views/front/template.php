<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=(isset($title))?$title:'Pangkalan Data mahasiswa';?></title>
    <meta name="author" content="UPT TIK UNDIKSHA">
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.ico') ?>">
    <meta name="descriptions" content="<?=(isset($meta))?strip_tags($meta):'Pangkalan Data Mahasiswa Undiksha'; ?>"/>
        <meta name="keywords" content="<?=(isset($meta))?strip_tags($meta):'Pangkalan Data Mahasiswa Undiksha'; ?>"/>
        <!-- open graph -->
        <meta property="og:site_name" content="SI Pangkalan Data Mahasiswa Undiksha"/>
        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?=(isset($title))?$title:'Pangkalan Data mahasiswa';?>" />
        <meta property="article:publisher" content="https://www.facebook.com/Agus-Seputra-1374658842748027/?ref=br_rs" />
        <?php if (isset($metaimage)) { ?>
            <meta property="og:image" content="<?php echo base_url() . $metaimage; ?>" />
            <meta property="og:image:width" content="600" />
            <meta property="og:image:height" content="315" />
       <?php } ?>
        <meta property="og:description" content="<?=(isset($meta))?strip_tags($meta):'Pangkalan Data Mahasiswa Undiksha'; ?>" />
        <meta property="og:url" content="<?=(isset($url))?$url:site_url(); ?>" />
        <link rel="canonical" href="<?=(isset($url))?$url:site_url(); ?>"/>
        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="<?=(isset($title))?$title:'Pangkalan Data mahasiswa';?>">
        <meta itemprop="description" content="<?=(isset($meta))?strip_tags($meta):'Pangkalan Data Mahasiswa Undiksha'; ?>">
        <?php if (isset($metaimage)) { ?>
            <meta itemprop="image" content="<?php echo base_url() . $metaimage; ?>">
        <?php } ?>
        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="SI Pangkalan Data Mahasiswa Undiksha">
        <meta name="twitter:title" content="<?=(isset($title))?$title:'Pangkalan Data mahasiswa';?>">
        <meta name="twitter:description" content="<?=(isset($meta))?strip_tags($meta):'Pangkalan Data Mahasiswa Undiksha'; ?>">
        <meta name="twitter:creator" content="upttik2017">
        <!-- Twitter summary card with large image must be at least 280x150px -->
        <?php if (isset($metaimage)) { ?>
            <meta name="twitter:image:src" content="<?php echo base_url() . $metaimage; ?>">
            <meta property="twitter:image:height" content="150" />
            <meta property="twitter:image:width" content="280" />
        <?php } ?>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css_f/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css_f/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css_f/core.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css_f/components.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css_f/colors.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css_f/extras/animate.min.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core/libraries/jquery.min.js"></script>
	<div id="respon"> </div>
</head>
<body data-spy="scroll" data-target=".sidebar-fixed" class="navbar-bottom has-fixed-header pace-done navbar-top layout-boxed sidebar-opposite-visible">  <!-- pace-done navbar-top --> 
<div id="fb-root"></div>
<div class="page-header page-header-default page-header-xs"> <!-- <div class="page-header page-header-default page-header-fixed">-->
<div class="navbar navbar-inverse navbar-static-top navbar-fixed-top" id="navbar-main"> <!--navbar navbar-inverse navbar-transparent-->
			<div class="navbar-boxed">
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo base_url(); ?>">MAHASISWA UNDIKSHA</a>
					<ul class="nav navbar-nav pull-right visible-xs-block">
						<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-grid3"></i></a></li>
					</ul>
				</div>
				<div class="navbar-collapse collapse" id="navbar-mobile">
					<ul class="nav navbar-nav"> <!--setting font upercase : navbar-nav-material-->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="icon-user-tie"></i> Data <span class="caret"></span>
							</a>
							<ul class="dropdown-menu width-200">
								<li><a href="<?=site_url('data/mahasiswa?semester='.date('Y').'1')?>"><i class="icon-list"></i> Mahasiswa Aktif</a></li>
								<li><a href=""><i class="icon-list3"></i> DUK Mahasiswa</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="icon-stats-bars2"></i> Statistik Mahasiswa<span class="caret"></span>
							</a>
							<ul class="dropdown-menu width-200">
								<li><a href="<?=site_url('data/mahasiswa_baru?angkatan='.date('Y'))?>"><i class="icon-user-tie"></i> Mahasiswa Baru</a></li>
								<li><a href="<?=site_url('data/mahasiswa_aktif?semester='.date('Y').'1')?>"><i class="icon-user-check"></i>Aktif berdasarkan Jalur</a></li>
                                <li><a href="<?=site_url('data/ipk_mahasiswa?status=1')?>"><i class="icon-spell-check"></i> Aktif berdasarkan IPK</a></li>
                                <li><a href="<?=site_url('data/lulusan')?>"><i class="icon-graduation"></i> Lulusan</a></li>
                                <li><a href="<?=site_url('data/ipk_mahasiswa?status=6')?>"><i class="icon-graduation"></i> IPK Lulusan</a></li>
							</ul>
						</li>
					</ul>
                    <div class="navbar-right">
						<ul class="nav navbar-nav navbar-nav-material">
							<li><a href="http://adminpdd.undiksha.ac.id/app/sso"><i class="icon-enter3"></i> Login</a></li> <!-- icon-lock5 icon-enter-->		
						</ul>
					</div>
				</div>
			</div>
		</div>
     <?php if(!isset($t_cari)){ ?>
		<div class="page-header-content">
			<div class="page-title" style="padding: 8px;">
            <form class="heading-form" action="<?=site_url('data/search')?>" method="get" class="main-search">
				<ul class="list-inline list-inline-condensed no-margin-bottom">
					<li ><div class="input-group">
								<div class="has-feedback has-feedback-left">
									<input type="text" class="form-control" name="mhs" placeholder="Masukan Nama atau NIM Mahasiswa">
									<div class="form-control-feedback">
										<i class="icon-search4 text-size-small text-muted"></i>
									</div>
								</div>
							</div>
					</li>
                </ul>
                </form>
			</div>
			<div class="heading-elements">
				<ul class="list-inline list-inline-condensed no-margin-bottom">
					<li><a  type="button"  data-toggle="collapse" href="#collapse-group2" aria-expanded="true"class="btn btn-link btn-sm collapsed"><i class="icon-menu7 position-left"></i> Pencarian Lanjutan</a></li>
				</ul>
			</div>
		</div>
		<ul class="fab-menu fab-menu-top-right" data-fab-toggle="click" data-fab-state="closed">
			<li>
				<a class="fab-menu-btn btn bg-blue btn-float btn-rounded btn-icon legitRipple">
					<i class="fab-icon-open icon-info3"></i>
					<i class="fab-icon-close icon-cross2"></i>
				</a>
				<ul class="fab-menu-inner">
					<li>
						<div class="fab-label-visible" data-fab-label="Web Undiksha">
							<a target="_blank" href="http://undiksha.ac.id/" class="btn btn-default btn-rounded btn-icon btn-float legitRipple">
								<i class="icon-store"></i>
							</a>
						</div>
					</li>
					<li>
						<div class="fab-label-visible" data-fab-label="Facebook Undiksha">
							<a target="_blank" href="https://www.facebook.com/groups/78930980887" class="btn btn-default btn-rounded btn-icon btn-float legitRipple">
								<i class="icon-facebook"></i>
							</a>
						</div>
					</li>
					<li>
						<div class="fab-label-visible" data-fab-label="Twitter Undiksha">
							<a target="_blank" href="https://twitter.com/undiksha?lang=en" class="btn btn-default btn-rounded btn-icon btn-float legitRipple">
								<i class="icon-twitter"></i>
							</a>
						</div>
					</li>
				</ul>
			</li>
		</ul>		
     <?php } ?>
	</div>
<div class="page-container no-padding-top no-padding-bottom no-margin-top" >

<div class="panel panel-flat border-left-warning-800 no-padding no-margin row panel-collapse collapse <?=(isset($t_cari))?'in':'';?>" id="collapse-group2">
<blockquote class="border-left-warning col-lg-12">
<form action="<?=site_url('data/search')?>"  method="get">
			 <div class="col-md-3 form-group">
            <input type="text" class="form-control" name="mhs" id="input_dosen_form2" placeholder="Masukan nim atau nama" />
            </div>      
            <div class="col-md-4 col-xs-12 form-group">
        <select class="form-control select-clear fakultas_cari" name="fakultas" >
<option <?=(isset($_GET['fakultas'])&&$_GET['fakultas']=='all')?'selected':'';?> value="all">Semua Fakultas</option>
<?php if($ref_fakultas != NULL){ foreach($ref_fakultas as $val){ ?>
<option <?=(isset($_GET['fakultas'])&&$_GET['fakultas']==$val['id_fakultas'])?'selected':'';?> value="<?=$val['id_fakultas']?>"><?=$val['fakultas']?></option>
<?php } }?>
</select>
</div>
<div class="col-md-4 col-xs-12 form-group">
<select class="form-control select-clear jurusan_cari" name="jurusan">
<option <?=(isset($_GET['jurusan'])&&$_GET['jurusan']=='all')?'selected':'';?> value="all" >Semua Jurusan</option>
</select>
            </div>
			<div class="col-xs-12 col-md-1">
				<div class="form-group row">
					<div class="text-center text">
                        <button  type="submit" class="btn btn-primary  btn-ladda-spinner"><i class="glyphicon glyphicon-search"></i> Cari</button>
					</div>
				</div>
			</div>

		</form>
</blockquote>
</div>
</div>
<?php 	
	$this->load->view($isi);
?>
	<div class="navbar navbar-default navbar-fixed-bottom footer">
		<div class="navbar-boxed">
			<ul class="nav navbar-nav visible-xs-block">
				<li><a class="text-center collapsed" data-toggle="collapse" data-target="#footer"><i class="icon-circle-up2"></i></a></li>
			</ul>

			<div class="navbar-collapse collapse" id="footer">
				<div class="navbar-text">
					&copy; 2017. <a target="_blank" href="http://undiksha.ac.id/" class="navbar-link">Universitas Pendidikan Ganesha</a>
				</div>
                <div class="navbar-right">
				</div>
			</div>
		</div>
	</div>
<?php if(isset($ref_jurusan) && $ref_jurusan != NULL){ foreach($ref_jurusan as $val){ ?>
<option class="hide op "  data-fakultas="<?=$val['id_fakultas']?>"  value="<?=$val['id_jurusan']?>"><?=$val['nama_jurusan']?></option>
<?php } }?>
</body>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/ui/drilldown.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/ui/fab.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/forms/styling/uniform.min.js"></script>	
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/forms/selects/bootstrap_select.min.js"></script>	
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/ui/nicescroll.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pages/form_multiselect.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pages/form_select2.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/ui/ripple.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pages/components_buttons.js"></script>
      <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
      <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/buttons/spin.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/plugins/buttons/ladda.min.js"></script>
		<script>
 $('.tb').DataTable({
    "pageLength": 25
 });
$('.dataTables_filter input[type=search]').attr('placeholder',' Ketik disini...');
$('.dataTables_length select').select2({
        minimumResultsForSearch: Infinity,
        width: 'auto'
    });
$('.fakultas_cari').on('change', function () {
     $('.jurusan_cari').find('option').remove();
     $('.jurusan_cari').append($("<option></option>").attr("value","all").text("Semua Jurusan")); 
     $(".op").each(function(){
        var id_fak=$(this).data('fakultas');
      //  alert(id_fak);
        if($('.fakultas_cari').val()==id_fak){
            $('.jurusan_cari').append($("<option></option>").attr("value",$(this).val()).text($(this).text())); 
        }
    });
    });	
</script>
</html>
