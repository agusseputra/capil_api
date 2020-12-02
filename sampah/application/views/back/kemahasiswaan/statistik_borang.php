<div class="navigasi hide"><li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="form_checkboxes_radios.html">Kemahasiswaan</a></li>
							<li class="active">Master Data</li></div>
<div class="sub-title hide"><i class=" icon-stats-bars2 position-left"></i> Statistik Mahasiswa Borang</div>
				<div class="content">
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-flat border-top-indigo">
        <div class="col-md-12" style="padding-top: 10px;">
        	<div class="media-left media-middle">
					<i class="text-indigo-400  icon-stats-bars2 icon-2x"></i>
				</div>
            <div class="media-left">
					<h5 class=" no-margin">
						<b class="text-indigo-400"><?=$title;?></b>  
                        <small class="display-block no-margin">Data statistik perbandingan rasion penerimaan dan mahasiswa aktif persemester berdasarkan tahun masuk.</small>
					</h5>
				</div>
                <hr />
        </div>
        <div class="panel-body">
<form action="<?=site_url('admin/kemahasiswaan/statistik_borang')?>" method="GET">
<div class="col-md-2">
<label class="text-bold no-margin no-padding">Tahun Akademik</label>
<select class="form-control select-xs " name="tahun">
<?php for($i=2013;$i<=date('Y');$i++){ ?>
<option <?=(isset($_GET['tahun'])&&$_GET['tahun']==$i)?'selected':'';?> value="<?=$i?>"><?=$i;?></option>
<?php } ?>
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

<div class="col-md-7"><br />
<input type="hidden" name="kemahasiswaan" />
<input value="Tampilkan Rasio Penerimaan" type="submit" class="btn btn-primary btn-sm btn_cari" name="cari">|<input value="Tampilkan Mahasiswa Reguler" type="submit" class="btn btn-sm btn-primary btn_cari" name="cari_reguler">
</div>
</form>
<div class="col-md-12">
<hr />
</div>
<div class="col-md-12">
<?php if(isset($borang)){ ?>
<table id="datatable-buttons" class="table table-striped table-bordered table-xxs tb">
<thead> 
<tr class="alpha-indigo">
<td rowspan="2" align="center">#</td>
<td rowspan="2" align="center" valign="middle">Tahun</td>
<td colspan="2" align="center">Seleksi Mahasiswa</td>
<td colspan="2" align="center">Mahasiswa Baru</td>
<td colspan="2" align="center">Mahasiswa Aktif</td>
</tr>
<tr class="alpha-indigo">
<td align="center">Pendaftar Pilihan 1</td>
<td align="center">Lulus</td>
<td align="center">Reguler</td>
<td align="center">Non Reguler</td>
<td align="center">Reguler</td>
<td align="center">Non Reguler</td>
</tr>
</thead>
<tbody>
<?php $i=1;
        foreach($borang as $val){
           echo  '<tr>
                                            <td>'.$i.'</td>
                                            <td>'.$val['tahun'].'</td>
                                            <td>'.$val['ikut_seleksi'].'</td>
                                            <td>'.$val['lulus'].'</td>
                                            <td>'.$val['reguler'].'</td>
                                            <td>'.$val['non_reguler'].'</td>
                                            <td>'.$val['jumlah_aktif_reguler'].'</td>
                                            <td>'.$val['jumlah_aktif_non_reguler'].'</td>
                                        </tr>';
            $i++;
        } ?>
</tbody>
</table>
            

<?php } ?>
<?php if(isset($borang2)){
    $angkatan=array();
$lulusan=array();
 foreach($borang2 as $val){
    $angkatan[$val['tahun_masuk']][$val['tahun']][$val['semester']]=$val['jumlah'];
    $lulusan[$val['tahun_masuk']]=(isset($lulusan[$val['tahun_masuk']]))?$lulusan[$val['tahun_masuk']]+$val['lulus']:$val['lulus'];
    }
    ?>
<table id="datatable-buttons" class="table table-striped table-bordered table-xxs tb">
    <thead> 
    <tr class="alpha-indigo"><td rowspan="2">Tahun Angkatan</td><?php for($i=$tahun-6;$i<=$tahun;$i++){ echo '<td colspan="2" align="center">'.$i.'</td>'; } ?><td rowspan="2">Lulusan sampai saat ini</td></tr>
    <tr class="alpha-indigo"><?php for($i=$tahun-6;$i<=$tahun;$i++){ echo '<td align="center">1</td><td align="center">2</td>'; } ?></tr>
    </thead>
    <tbody>
    <?php 
    foreach($angkatan as $th=>$ta_aktif){?>
    <tr><td><?=$th;?></td>
        <?php for($c=($tahun-6);$c<=$tahun;$c++){
            if(isset($ta_aktif[$c][1])){
                echo '<td>'.$ta_aktif[$c][1].'</td>';
            }else{
                echo '<td></td>';
            }
            if(isset($ta_aktif[$c][2])){
                echo '<td>'.$ta_aktif[$c][2].'</td>';
            }else{
                echo '<td></td>';
            }
            } ?><td><?=$lulusan[$th]?></td> </tr>
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