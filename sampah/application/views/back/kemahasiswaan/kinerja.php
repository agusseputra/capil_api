<div class="navigasi hide"><li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="form_checkboxes_radios.html">Kemahasiswaan</a></li>
							<li class="active">Master Data</li></div>
<div class="sub-title hide"><i class="icon-comments position-left"></i> Kinerja Dosen</div>
				<div class="content">
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-flat border-top-indigo">
        <div class="col-md-12" style="padding-top: 10px;">
        	<div class="media-left media-middle">
					<i class="text-indigo-400 icon-comments icon-2x"></i>
				</div>
            <div class="media-left">
					<h5 class=" no-margin">
						<b class="text-indigo-400"><?=$title;?></b>  
                        <small class="display-block no-margin">Berikut ditampilkan data rekapitulasi penilaian mahasiswa terhadap kinerja mengajar dosen berdasarkan tahun semester, dan mata kuliah.</small>
					</h5>
				</div>
                <hr />
        </div>
        <div class="panel-body">
<form action="<?=site_url('admin/kemahasiswaan/kinerja')?>" method="GET">
<div class="col-md-2">
<label class="text-bold no-margin no-padding">Tahun Akademik</label>
<select class="form-control select-xs " name="tahun">
<?php for($i=2013;$i<=date('Y');$i++){ ?>
<option <?=(isset($_GET['tahun'])&&$_GET['tahun']==$i)?'selected':'';?> value="<?=$i?>"><?=$i;?></option>
<?php } ?>
<option <?=(isset($_GET['tahun']) && $_GET['tahun']=='all')?'selected':'';?> value="all">Semua</option>
</select>
</div>
<div class="col-md-2">
<label class="text-bold no-margin no-padding">Semester </label>
<select class="form-control select-xs " name="semester">
<option <?=(isset($_GET['semester']) && $_GET['semester']=='1')?'selected':'';?> value="1">Ganjil</option>
<option <?=(isset($_GET['semester']) && $_GET['semester']=='2')?'selected':'';?> value="2">Genap</option>
<option <?=(isset($_GET['semester']) && $_GET['semester']=='all')?'selected':'';?> value="all">Semua</option>
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

<div class="col-md-5"><br />
<input value="Tampilkan " type="submit" class="btn btn-primary btn-sm " name="cari">
</div>
</form>
<div class="col-md-12">
<hr />
</div>
<div class="col-md-12">
<?php if(isset($kinerja)){ ?>
<table id="datatable-buttons" class="table table-striped table-bordered table-xxs tb">
<thead> 
<tr class="alpha-indigo">
<td rowspan="2" align="center">#</td>
<td rowspan="2" align="center">Dosen</td>
<td rowspan="2" align="center">Kode Matakuliah</td>
<td rowspan="2" align="center">Nama Matakuliah</td>
<td rowspan="2" align="center" valign="middle">Tahun/Semester</td>
<td colspan="5">Nilai</td>
</tr>
<tr class="alpha-indigo">
<?php if($ref_skala != NULL){ foreach($ref_skala as $val){?>
<td align="center"><?=$val['singkatan']?></td>
<?php } }?>
</tr>
</thead>
<tbody>
<?php $i=1;
        foreach($kinerja as $val){
           echo  '<tr>
                                            <td>'.$i.'</td>
                                            <td>'.$val['nama_dosen'].'</td>
                                            <td>'.$val['kode_mk'].'</td>
                                            <td>'.$val['nama_mk'].'</td>
                                            <td>'.$val['tahun'].'/'.$val['semester'].'</td>
                                            <td>'.$val['jum_1'].'</td>
                                            <td>'.$val['jum_2'].'</td>
                                            <td>'.$val['jum_3'].'</td>
                                            <td>'.$val['jum_4'].'</td>
                                            <td>'.$val['jum_5'].'</td>
                                        </tr>';
            $i++;
        } ?>
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
    dom: '<"datatable-header"fBl><"datatable-scroll-wraps"t><"datatable-footer"ip>',
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