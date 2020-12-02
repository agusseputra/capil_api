<div class="navigasi hide"><li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="form_checkboxes_radios.html">Kemahasiswaan</a></li>
							<li class="active">Master Data</li></div>
<div class="sub-title hide"><i class="  icon-user-block position-left"></i> Mahasiswa Aktif non KRS</div>
				<div class="content">
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-flat border-top-indigo">
        <div class="col-md-12" style="padding-top: 10px;">
        	<div class="media-left media-middle">
					<i class="text-indigo-400   icon-user-block icon-2x"></i>
				</div>
            <div class="media-left">
					<h5 class=" no-margin">
						<b class="text-indigo-400">Data Mahasiswa Aktif Belum KRS</b>  
                        <small class="display-block no-margin">Berikut ditampilkan data mahasiswa aktif/sudah bayar spp namun belum KRS-an.</small>
					</h5>
				</div>
                <hr />
        </div>
        <div class="panel-body">
<form action="<?=site_url('admin/akademik/non_krs')?>" method="GET">
<div class="col-md-2">
<label class="text-bold no-margin no-padding">Tahun Akademik</label>
<select class="form-control select-xs " name="tahun">
<?php for($i=2013;$i<=date('Y');$i++){ ?>
<option <?=(isset($_GET['tahun'])&&$_GET['tahun']==$i.'1')?'selected':'';?> value="<?=$i.'1'?>"><?=$i.'/GANJIL';?></option>
<option <?=(isset($_GET['tahun'])&&$_GET['tahun']==$i.'2')?'selected':'';?> value="<?=$i.'2'?>"><?=$i.'/GENAP';?></option>
<?php } ?>
</select>
</div>
<div class="col-md-3">
<label class="text-bold no-margin no-padding">Jurusan</label>
 <select class="form-control" name="jurusan" >
         <?php if($jurusan != NULL){ foreach($jurusan as $val){ ?>
         <option <?=(isset($_GET['jurusan']) && $_GET['jurusan']==$val['id_jurusan'])?'selected':'';?> value="<?=$val['id_jurusan']?>"><?=$val['nama_jurusan'];?> </option>
         <?php } } ?>
          <option <?=(isset($_GET['jurusan']) && $_GET['jurusan']=='all')?'selected':'';?> value="all">semua </option>
         </select>
</div>

<div class="col-md-7"><br />
<input type="hidden" name="kemahasiswaan" />
<input value="Tampilkan" type="submit" class="btn btn-primary btn-sm btn_cari" name="cari">
</div>
</form>
<div class="col-md-12">
<hr />
</div>
<div class="col-md-12">
<?php if($mahasiswa != NULL){?>
<table class="tb table table-xxs">
<thead>
<tr class="alpha-indigo"><th>NIM</th><th>Nama</th><th>Jurusan</th><th>Tahun</th><th>Semester</th></tr>
</thead>
<tbody>
<?php foreach($mahasiswa as $val){?>
<tr><td><a href="<?=site_url('admin/kemahasiswaan/data?cari='.$val['id_mahasiswa']);?>"> <?=$val['nim']?></a></td><td><?=$val['nama']?></td><td><?=$val['nama_jurusan']?></td><td><?=$val['tahun']?></td><td><?=$val['semester']?></td></tr>
<?php } ?>
</tbody>
</table>
<?php } ?>

</div>
</div></div></div></div></div>
<script type="text/javascript" src="<?= base_url();?>assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>
<script>
var a=0;
 $('.tb').DataTable({ 
    "pageLength": 25 ,
    "ordering": false,
    dom: '<"datatable-header"fBl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
     buttons: {
            dom: {
                button: {
                    className: 'btn btn-sm btn-default'
                }
            },
            buttons: [
                {extend: 'copy'},
                {extend: 'excel'},
                {extend: 'pdf'},
                {extend: 'print'}
            ]
        }
    });
</script>