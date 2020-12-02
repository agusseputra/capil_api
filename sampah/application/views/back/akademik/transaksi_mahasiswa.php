<div class="navigasi hide"><li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="form_checkboxes_radios.html">Akademik</a></li>
							<li class="active">Data Transaksi Mahasiswa</li></div>
<div class="sub-title hide"><i class="icon-stats-growth position-left"></i> Data Transaksi Mahasiswa per Semester</div>
				<div class="content">
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-flat border-top-indigo">
        <div class="col-md-12" style="padding-top: 10px;">
        	<div class="media-left media-middle">
					<i class="text-indigo-400 icon-stats-growth position-left icon-2x"></i>
				</div>
            <div class="media-left">
					<h5 class=" no-margin">
						<b class="text-indigo-400">Cetak Data Raihan Indeks Prestasi Mahasiswa</b>  
                        <small class="display-block no-margin">Cetak data raihan indeks prestasi mahasiswa berdasarkan angkatan, jurusan, tahun serta semester.</small>
					</h5>
				</div>
                <hr />
        </div>
        <div class="panel-body">
<form action="<?=site_url('admin/akademik/transaksi_mahasiswa')?>" method="GET">
<div class="col-md-2">
<label class="text-bold no-margin no-padding">Angkatan</label>
<select class="form-control select-xs " name="angkatan">
<?php for($i=2009;$i<=date('Y');$i++){ ?>
<option <?=(isset($_GET['angkatan'])&&$_GET['angkatan']==$i)?'selected':'';?> value="<?=$i?>"><?=$i;?></option>
<?php } ?>
<option value="all" <?=(isset($_GET['angkatan'])&&$_GET['angkatan']=='all')?'selected':'';?>>semua</option>
</select>
</div>
<div class="col-md-3">
<label class="text-bold no-margin no-padding">Jurusan</label>
 <select class="form-control" name="jurusan" >
         <?php if($jurusan != NULL){ foreach($jurusan as $val){ ?>
         <option <?=(isset($_GET['jurusan']) && $_GET['jurusan']==$val['id_jurusan'])?'selected':'';?> value="<?=$val['id_jurusan']?>"><?=$val['nama_jurusan'];?> </option>
         <?php } } ?>
         <option value="all" <?=(isset($_GET['jurusan'])&&$_GET['jurusan']=='all')?'selected':'';?>>semua</option>
         </select>
</div>
<div class="col-md-2">
<label class="text-bold no-margin no-padding">TA</label>
<select class="form-control select-xs " name="tahun">
<?php for($i=2009;$i<=date('Y');$i++){ ?>
<option  <?=(isset($_GET['tahun'])&&$_GET['tahun']==$i)?'selected':'';?> value="<?=$i?>"><?=$i;?></option>
<?php } ?>
<option  <?=(isset($_GET['tahun'])&&$_GET['tahun']=='all')?'selected':'';?> value="all">Semua</option>
</select>
</div>
<div class="col-md-2">
<label class="text-bold no-margin no-padding">Semester</label>
<select class="form-control select-xs " name="semester">
<option <?=(isset($_GET['semester']) && $_GET['semester']=='1')?'selected':'';?> value="1">Ganjil</option>
<option <?=(isset($_GET['semester']) && $_GET['semester']=='2')?'selected':'';?> value="2">Genap</option>
<option <?=(isset($_GET['semester']) && $_GET['semester']=='all')?'selected':'';?> value="all">Semua</option>
</select>
</div>
<div class="col-md-2"><br />
<input type="hidden" name="kemahasiswaan" />
<button type="submit" class="btn btn-primary btn_cari">Cari</button>
</div>
</form>
<div class="col-md-12">
<?php if(isset($mahasiswa)){ ?>
<table class="table table-striped table-xxs tb text-nowrap table-framed">
<thead> <tr class="alpha-indigo">
<th>NIM</th><th>NAMA</th><th>Jurusan</th><th>Tahun</th><th>Semester</th><th>IPS</th><th>SKS</th><th>IPK</th><th>SKS KOMULATIF</th>
</tr>
</thead>
<tbody>
<?php if($mahasiswa != NULL){ foreach($mahasiswa as $val){ ?>
    <tr >
    <td><?=$val['nim'];?></td><td><?=$val['nama'];?></td><td><?=$val['nama_jurusan'];?></td><td><?=$val['tahun'];?></td>
    <td><?=$val['semester'];?></td><td><?=$val['ips'];?></td><td><?=$val['sks'];?></td><td><?=$val['ipk'];?></td><td><?=$val['sks_komulatif'];?></td>
   </tr>
<?php } } ?>
</tbody>
</table>
<?php } ?>
</div>
</div></div></div></div></div>
<script src="<?= base_url('assets/js/plugins/tables/datatables/extensions/fixed_header.min.js') ?>"></script>
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
        },
    "fixedHeader": {
              header: !0, headerOffset: a
        }
    });
</script>