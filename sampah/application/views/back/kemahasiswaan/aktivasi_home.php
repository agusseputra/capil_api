<div class="navigasi hide"><li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="form_checkboxes_radios.html">Kemahasiswaan</a></li>
							<li class="active">Data Mahasiswa</li></div>
<div class="sub-title hide"><i class="icon-user-check position-left"></i> Aktivasi Mahasiswa <?=$setting['tahun_aktif'].'/'.$setting['semester_aktif']?></div>
<div class="content">
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-flat border-top-indigo">
	    <div class="col-md-12" style="padding-top: 10px;">
        	<div class="media-left media-middle">
					<i class="text-indigo-400 icon-user-tie icon-2x"></i>
				</div>
            <div class="media-left">
					<h5 class=" no-margin">
						<b class="text-indigo-400">Pencarian Data Mahasiswa</b>  
                        <small class="display-block no-margin">Masukkan NIM pada text yang telah disediakan sesuai dengan slip pembayaran SPP.</small>
					</h5>
				</div>
                <hr />
        </div>
		<div class="panel-body">
         <div class="input-group col-md-12">
					<input type="text"   class="form-control autocomplete" value="<?=(isset($_GET['cari']))?$_GET['cari']:'';?>"   placeholder="Masukan NIM Mahasiswa">
                    <input type="hidden"   class="form-control nim " value="<?=(isset($_GET['cari']))?$_GET['cari']:'';?>" >
                    <span class="input-group-btn"><button class="btn btn-info legitRipple icon-search4 b_cari" type="button"> Cari</button> </span>
                    <span class="input-group-btn"><button class="btn btn-primary legitRipple  icon-file-excel b_cari" type="button"> Upload Excel</button> </span>								
			     </div> 
            <hr />
        <div class="col-md-12" id="search_content"></div>
        </div>						
		</div>
	</div>    			
    <div class="col-md-6">
		<div class="panel panel-flat border-top-indigo">
	    <div class="col-md-12" style="padding-top: 10px;">
        	<div class="media-left media-middle">
					<i class="text-indigo-400 icon-user-check icon-2x"></i>
				</div>
            <div class="media-left">
					<h5 class=" no-margin">
						<b class="text-indigo-400">Tampilkan Mahasiswa Teraktivasi TA <?=$setting['tahun_aktif'].'/'.$setting['semester_aktif']?></b>  
                        <small class="display-block no-margin">Filter berdasarkan Jurusan serta NIM</small>
					</h5>
				</div>
                <hr />
        </div>
		<div class="panel-body">
         <div class="col-md-6">
         <select class="form-control jurusan" >
         <?php if($jurusan != NULL){ foreach($jurusan as $val){ ?>
         <option value="<?=$val['id_jurusan']?>"><?=$val['nama_jurusan'];?> </option>
         <?php } } ?>
         </select>
         </div>          
         <div class="input-group col-md-6">
					<input type="text" class="form-control nim2"  placeholder="Masukan NIM Mahasiswa">
                    <span class="input-group-btn"><button class="btn btn-info legitRipple icon-search4 b_tampilkan" type="button"> Tampilkan</button></span>								
			     </div> 
            <hr />
        <div class="col-md-12" id="search_content_akivasi"></div>
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
<?php if(isset($_GET['cari'])){ ?>
cari("<?=$_GET['cari']?>");
<?php } ?>
$('.b_cari').on('click', function () {
         var s=$('.nim').val();
         cari(s);     
    });
function cari(s=null){
    $('#search_content').html("Mohon Menunggu...");
       $.ajax({ 
            url		: "<?=site_url('admin/kemahasiswaan/cari_mahasiswa_aktivasi/');?>"+s,
			 success: function(response){
                $('#search_content').html(response);
               history.replaceState({pg:1}, "pg home", "?cari="+s);
            }
        });
    }
$('.b_tampilkan').on('click', function () {
    $('#search_content_akivasi').html("Mohon Menunggu...");
    var nim=$('.nim2').val();
    var jurusan=$('.jurusan').val();
    var tahun_semester="<?=$setting['tahun_aktif'].$setting['semester_aktif'].'1';?>";
       $.ajax({ 
            type: "POST",
            data : {nim:nim,jurusan:jurusan,tahun_semester:tahun_semester},
            url		: "<?=site_url('admin/kemahasiswaan/tampilkan_aktivasi/');?>",
			 success: function(response){
                $('#search_content_akivasi').html(response);
            }
        });
    });
</script>     