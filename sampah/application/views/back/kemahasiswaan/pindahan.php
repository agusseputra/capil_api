<div class="navigasi hide"><li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="form_checkboxes_radios.html">Kemahasiswaan</a></li>
							<li class="active">Data Perpindahan Mahasiswa</li></div>
<div class="sub-title hide"><i class="icon-direction position-left"></i> Pindahan atau Alih Kredit Mahasiswa <?=$setting['tahun_aktif'].'/'.$setting['semester_aktif']?></div>
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
						<b class="text-indigo-400">Pencarian Data Mahasiswa Lama</b>  
                        <small class="display-block no-margin">Masukkan NIM pada text yang telah disediakan sesuai dengan slip pembayaran SPP untuk menampilkan data mahasiswa sebelumnya.</small>
					</h5>
				</div>
                <hr />
        </div>
		<div class="panel-body">
         <div class="input-group col-md-6">
					<input type="text" class="form-control nim" value="<?=(isset($_GET['cari']))?$_GET['cari']:'';?>"  placeholder="Masukan NIM Mahasiswa">
                    <span class="input-group-btn"><button class="btn btn-info legitRipple icon-search4 b_cari" type="button"> Cari</button></span>								
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
						<b class="text-indigo-400">Mahasiswa Alih Kredit / Pindahan</b>  
                        <small class="display-block no-margin">Menampilkan daftar mahasiswa alih kredit / pindahan tahun semester aktif</small>
					</h5>
				</div>
                <hr />
        </div>
		<div class="panel-body">
                  
          
            <hr />
        <div class="col-md-12" id="search_content_akivasi">
        <table class="table table-xxs table-striped table-framed t_kredit">
            <thead>
            <tr class="alpha-indigo"><td>NIM</td><td>NAMA</td><td>Jurusan</td></tr>
            </thead>
            <tbody>
            <?php if($mahasiswa != NULL){ foreach($mahasiswa as $val){  ?>
            <tr><td><a href="<?=site_url('admin/kemahasiswaan/data?cari='.$val['id_mahasiswa']);?>"> <?=$val['nim']?></a></td><td><?=$val['nama']?></td><td><?=$val['nama_jurusan']?></td> </tr>
            <?php }} ?>
            </tbody>
            </table>
        </div>
        </div>						
		</div>
	</div>						
</div>
</div>    
<script src="<?= base_url('assets/js/plugins/tables/datatables/extensions/fixed_header.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url();?>assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>
 <script type="text/javascript">
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
            url		: "<?=site_url('admin/kemahasiswaan/cari_mahasiswa_pindahan/');?>"+s,
			 success: function(response){
                $('#search_content').html(response);
               history.replaceState({pg:1}, "pg home", "?cari="+s);
            }
        });
    }

</script>     