<div class="navigasi hide"><li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="form_checkboxes_radios.html">Kemahasiswaan</a></li>
							<li class="active">Master Data</li></div>
<div class="sub-title hide"><i class="icon-search4 position-left"></i> Cetak Data Mahasiswa</div>
				<div class="content">
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-flat border-top-indigo">
        <div class="col-md-12" style="padding-top: 10px;">
        	<div class="media-left media-middle">
					<i class="text-indigo-400 icon-user-tie icon-2x"></i>
				</div>
            <div class="media-left">
					<h5 class=" no-margin">
						<b class="text-indigo-400">Cetak Data Mahasiswa</b>  
                        <small class="display-block no-margin">Cetak data mahasiswa berdasarkan angkatan, jurusan serta beberapa data tambahan sesuai dengan yang dicentang.</small>
					</h5>
				</div>
                <hr />
        </div>
        <div class="panel-body">
<form action="<?=site_url('admin/kemahasiswaan/data_mahasiswa')?>" method="GET">
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
         </select>
</div>
<div class="col-md-6">
<label class="text-bold no-margin no-padding">Pilih Data Tambahan</label>
<div class="form-control">
<label><input type="checkbox" <?=(isset($_GET['kec']))?'checked':'';?> value="1" name="kec"> Kecamatan</label>&nbsp;&nbsp;&nbsp;
<label><input type="checkbox" <?=(isset($_GET['kab']))?'checked':'';?> value="1" name="kab"> Kabupaten</label>&nbsp;&nbsp;&nbsp;
<label><input type="checkbox" <?=(isset($_GET['prov']))?'checked':'';?> value="1" name="prov"> Provinsi</label>&nbsp;&nbsp;&nbsp;
<label><input type="checkbox" <?=(isset($_GET['agama']))?'checked':'';?> value="1" name="agama"> Agama</label>&nbsp;&nbsp;&nbsp;
<label><input type="checkbox" <?=(isset($_GET['jalur']))?'checked':'';?> value="1" name="jalur"> Jalur Penerimaan</label>&nbsp;&nbsp;&nbsp;
<label><input type="checkbox" <?=(isset($_GET['ayah']))?'checked':'';?> value="1" name="ayah"> Ayah</label>&nbsp;&nbsp;&nbsp;
<label><input type="checkbox" <?=(isset($_GET['ibu']))?'checked':'';?> value="1" name="ibu"> Ibu</label>&nbsp;&nbsp;&nbsp; </div>
</div>
<div class="col-md-1"><br />
<input type="hidden" name="kemahasiswaan" />
<button type="submit" class="btn btn-primary btn_cari">Tampilkan</button>
</div>
</form>
<div class="col-md-12">
<?php if(isset($mahasiswa)){ ?>
<table class="table table-striped table-xxs tb text-nowrap table-framed">
<thead> <tr class="alpha-indigo">
<th>NIM</th><th>NAMA</th><th>NISN</th><th>JK</th><th>T.Lahir</th><th>Tgl.Lahir</th><th>Telp/WA/Hp</th><th>Email</th><th>St.Akd</th><th>Jurusan</th><th>Alamat</th>
<?php if(isset($_GET['prov'])){
    echo '<th>Provinsi</th>';
} if(isset($_GET['kab'])){
    echo '<th>Kabupaten</th>';
} if(isset($_GET['kec'])){
    echo '<th>Kecamatan</th>';
}if(isset($_GET['agama'])){
    echo '<th>Agama</th>';
}if(isset($_GET['jalur'])){
    echo '<th>Jalur</th>';
}if(isset($_GET['ayah'])){
    echo '<th>Nama Ayah</th><th>Pekerjaan Ayah</th><th>Penghasilan Ayah</th>';
}if(isset($_GET['ibu'])){
    echo '<th>Nama Ibu</th><th>Pekerjaan Ibu</th><th>Penghasilan Ibu</th>';
}?></tr>
</thead>
<tbody>
<?php if($mahasiswa != NULL){ foreach($mahasiswa as $val){ ?>
    <tr >
    <td><?=$val['nim'];?></td><td><?=$val['nama'];?></td><td><?=$val['nisn'];?></td><td><?=$val['jk'];?></td><td><?=$val['tmp_lahir'];?></td><td><?=$val['tgl_lahir'];?></td>
    <td><?=$val['telp'];?></td><td><?=$val['email'];?></td><td><?=$val['last_status'];?></td><td><?=$val['nama_jurusan'];?></td><td><?=$val['alamat'];?></td>
    <?php if(isset($_GET['prov'])){
    echo '<td>'.$val['provinsi'].'</td>';
    } if(isset($_GET['kab'])){
         echo '<td>'.$val['kabupaten'].'</td>';
    } if(isset($_GET['kec'])){
         echo '<td>'.$val['kecamatan'].'</td>';
    }if(isset($_GET['agama'])){
         echo '<td>'.$val['agama'].'</td>';
    }if(isset($_GET['jalur'])){
         echo '<td>'.$val['jalur'].'</td>';
    }if(isset($_GET['ayah'])){
    echo '<th>'.$val['ayah'].'</th><th>'.$val['pekerjaan_ayah'].'</th><th>'.$val['pendapatan_ayah'].'</th>';
    }if(isset($_GET['ibu'])){
    echo '<th>'.$val['ibu'].'</th><th>'.$val['pekerjaan_ibu'].'</th><th>'.$val['pendapatan_ibu'].'</th>';
    }?>
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