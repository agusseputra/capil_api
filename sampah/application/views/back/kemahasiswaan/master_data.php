<div class="navigasi hide"><li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="form_checkboxes_radios.html">Kemahasiswaan</a></li>
							<li class="active">Master Data</li></div>
<div class="sub-title hide"><i class="icon-search4 position-left"></i> Pencarian Mahasiswa</div>
				<div class="content">
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-flat">
			<div class="tabbable">
					<ul class="nav nav-tabs nav-tabs-top">
						<li class="<?=(isset($_GET['non_status'])||isset($_GET['detail'])||isset($_GET['kemahasiswaan'])||isset($_GET['ubah_status']))?'':'active';?> home2 t">
							<a href="#icon-only-tab1" data-toggle="tab" onclick='history.replaceState({pg:1}, "pg home", "?home");'>
								<i class="icon-search4"></i>
								<span class=" position-right">Pencarian</span>
							</a>
						</li>
                        <li class="<?=(isset($_GET['non_status']))?'active':'';?> non_status t">
							<a href="#non_status" data-toggle="tab" class="a_non_status" onclick=' history.replaceState({pg:1}, "pg home", "?non_status=");'>
								<i class="icon-user-plus"></i>
								<span class="position-right">Non Status</span>
							</a>
						</li>
                        <li class="<?=(isset($_GET['kemahasiswaan']))?'active':'';?> t ">
							<a href="#kemahasiswaan" data-toggle="tab" class="kemahasiswaan" >
								<i class="icon-user-tie"></i>
								<span class="position-right">Kemahasiswaan</span>
							</a>
						</li>	
                        <li class="<?=(isset($_GET['ubah_status']))?'active':'';?> t t_status">
							<a href="#ubah_status" data-toggle="tab" class="ubah_status" >
								<i class="icon-user-tie"></i>
								<span class="position-right">Ubah Status Mahasiswa</span>
							</a>
						</li>						
                    </ul>
					<div class="tab-content ">
						<div class="tab-pane <?=(isset($_GET['non_status']) || isset($_GET['detail']) ||isset($_GET['kemahasiswaan'])||isset($_GET['ubah_status']))?'':'active';?>" id="icon-only-tab1">
                        <div style="margin-left: 10px; margin-top: -10px;">
                        	<div class="media-left media-middle">
									<i class="text-indigo-400 icon-user-tie icon-2x"></i>
								</div>
								<div class="media-left">
									<h5 class=" no-margin">
										<b class="text-indigo-400">Pencarian Data Mahasiswa</b>  
                                        <small class="display-block no-margin">Masukkan NIM atau nama pada field yng telah disediakan.</small>
									</h5>
								</div>
                                </div>							
						<div class="panel-body">
				               <div class="input-group col-md-4">
									<input type="text"   class="form-control autocomplete" value="<?=(isset($_GET['cari']))?$_GET['cari']:'';?>"   placeholder="Masukan NIM Mahasiswa">
                                    <input type="hidden"   class="form-control nim " value="<?=(isset($_GET['cari']))?$_GET['cari']:'';?>" >
                                    <span class="input-group-btn"><button class="btn btn-info legitRipple icon-search4 b_cari" type="button"> Cari</button></span>								
							     </div> 
                            <hr />
                            <div class="col-md-12" id="search_content"></div>
						</div>
						</div>
						<div class="tab-pane <?=(isset($_GET['non_status']))?'active':'';?>" id="non_status">
                        <span class="is_non_status hide"></span>
					   <div style="margin-left: 10px; margin-top: -10px;">
<div class="media-left media-middle">
	<i class="text-indigo-400 icon-shield-notice icon-2x"></i>
</div>
<div class="media-left">
	<h5 class=" no-margin">
		<b class="text-indigo-400">Data Mahasiswa Non Status</b>  
        <small class="display-block no-margin">Mahasiswa berikut merupakan mahasiswa yang tidak memiliki status pada semester sekarang.</small>
	</h5>
</div>
<hr />
</div>
<div class="panel-body non_status_content">
</div>
</div>
      <div class="tab-pane <?=(isset($_GET['kemahasiswaan']))?'active':'';?>" id="kemahasiswaan">                        
      <div style="margin-left: 10px; margin-top: -10px;">
<div class="media-left media-middle">
	<i class="text-indigo-400 icon-user-tie icon-2x"></i>
</div>
<div class="media-left">
	<h5 class=" no-margin">
		<b class="text-indigo-400">Data Keadaan Mahasiswa</b>  
        <small class="display-block no-margin">Data keadaan mahasiswa per semester sesuai dengan filter berdasarkan angkatan, jurusan, tahun ajaran, serta semester.</small>
	</h5>
</div>
<hr />
</div>
<div class="panel-body ">
<?php $this->load->view('back/kemahasiswaan/kemahasiswaan'); ?>
</div>
						</div>
      <div class="tab-pane <?=(isset($_GET['ubah_status']))?'active':'';?>" id="ubah_status">                        
      <div style="margin-left: 10px; margin-top: -10px;">
<div class="media-left media-middle">
	<i class="text-indigo-400 icon-user-tie icon-2x"></i>
</div>
<div class="media-left">
	<h5 class=" no-margin">
		<b class="text-indigo-400">Ubah Status Mahasiswa TA <?=$setting['tahun_aktif'].'/'.$setting['semester_aktif']?></b>  
        <small class="display-block no-margin">Perubahan status mahasiswa pada Tahun Ajaran <?=$setting['tahun_aktif'].', semester '.$setting['semester_aktif']?></small>
	</h5>

</div>
</div>
<div class="panel-body  ">
<div class="input-group col-md-4">
									<input type="text"   class="form-control autocomplete_status" value="<?=(isset($_GET['ubah_status']))?$_GET['ubah_status']:'';?>"   placeholder="Masukan NIM Mahasiswa">
                                    <input type="hidden"   class="form-control nim_status " value="<?=(isset($_GET['ubah_status']))?$_GET['ubah_status']:'';?>" >
                                    <span class="input-group-btn"><button class="btn btn-info legitRipple icon-search4 b_cari_status" type="button"> Cari</button></span>								
							     </div> 
                            <hr />
                            <div class="col-md-12" id="ubah_status_content"></div>
</div>
						</div>
					</div>
				</div>
		</div>
	</div>						
</div>
</div>    
<script src="<?= base_url('assets/js/plugins/tables/datatables/extensions/fixed_header.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.autocomplete.js"></script>
<link href="<?=base_url();?>assets/js/jquery.autocomplete.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
   $('.autocomplete').autocomplete({
        serviceUrl: "<?=site_url('admin/kemahasiswaan/autocomplete_mhs')?>",
        width:568,
        onSelect: function (suggestion) {
            $('.autocomplete').val(''+suggestion.value); 
            $('.nim').val(suggestion.id); 
        }
    });
    $('.autocomplete_status').autocomplete({
        serviceUrl: "<?=site_url('admin/kemahasiswaan/autocomplete_mhs')?>",
        width:568,
        onSelect: function (suggestion) {
            $('.autocomplete_status').val(''+suggestion.value); 
            $('.nim_status').val(suggestion.id); 
        }
    });
<?php if(isset($_GET['cari'])){ ?>
cari("<?=$_GET['cari']?>");
<?php } ?>
<?php if(isset($_GET['ubah_status'])){ ?>
cari_status("<?=$_GET['ubah_status']?>");
<?php } ?>
<?php if(isset($_GET['non_status'])){ ?>
non_status();
<?php } ?>
$('.b_cari').on('click', function () {
         var s=$('.nim').val();
         cari(s);     
    });
$('.b_cari_status').on('click', function () {
         var s=$('.nim_status').val();
         cari_status(s);     
    });
$('.a_non_status').on('click', function () {
    if( $('.is_non_status').html()!='1'){
            non_status();     
         }
    });
function cari(s=null){
     $('#search_content').html("Mohon Menunggu...");
       $.ajax({ 
            url		: "<?=site_url('admin/kemahasiswaan/cari/');?>"+s,
			 success: function(response){
                $('.tab-pane').removeClass('active');
                $('#icon-only-tab1').addClass('active');
                $('.t').removeClass('active');
                $('.home2').addClass('active');
                $('#search_content').html(response);
               history.replaceState({pg:1}, "pg home", "?cari="+s);
            }
        });
    }
function non_status(){
    $('.non_status_content').html("Mohon Menunggu...");
       $.ajax({ 
            url		: "<?=site_url('admin/kemahasiswaan/mahasiswa_non_status/');?>",
			 success: function(response){
                $('.non_status_content').html(response);
                $('.tab-pane').removeClass('active');
                $('#non_status').addClass('active');
               $('.t').removeClass('active');
               $('.non_status').addClass('active');
               $('.is_non_status').html('1');
               history.replaceState({pg:1}, "pg home", "?non_status=");
    }
        });
    }
    function cari_status(s=null){
     $('#ubah_status_content').html("Mohon Menunggu...");
       $.ajax({ 
            url		: "<?=site_url('admin/kemahasiswaan/cari_status/');?>"+s,
			 success: function(response){
                $('.tab-pane').removeClass('active');
                $('#ubah_status').addClass('active');
                $('.t').removeClass('active');
                $('.t_status').addClass('active');
                $('#ubah_status_content').html(response);
               history.replaceState({pg:1}, "pg home", "?ubah_status="+s);
            }
        });
    }
</script>         