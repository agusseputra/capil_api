<div class="form-group">
<form action="<?=site_url('admin/kemahasiswaan/data')?>" method="GET">
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
<div class="col-md-2">
<label class="text-bold no-margin no-padding">TA</label>
<select class="form-control select-xs " name="tahun">
<?php for($i=2012;$i<=date('Y');$i++){ ?>
<option  <?=(isset($_GET['tahun'])&&$_GET['tahun']==$i)?'selected':'';?> value="<?=$i?>"><?=$i;?></option>
<?php } ?>
</select>
</div>
<div class="col-md-2">
<label class="text-bold no-margin no-padding">Semester</label>
<select class="form-control select-xs " name="semester">
<option <?=(isset($_GET['semester']) && $_GET['semester']=='1')?'selected':'';?> value="1">Ganjil</option>
<option <?=(isset($_GET['semester']) && $_GET['semester']=='2')?'selected':'';?> value="2">Genap</option>
</select>
</div>
<div class="col-md-2"><br />
<input type="hidden" name="kemahasiswaan" />
<button type="submit" class="btn btn-primary btn_cari">Cari</button>
</div>
</form>
</div>
<div class="col-md-12">
<hr />
<?php  if(isset($mahasiswa)){?>
    <table class="table tb table-xxs text-nowrap  table-striped table-bordered table-framed ">
    <thead><tr class="alpha-indigo"><td rowspan="2">NIM</td><td rowspan="2">NAMA</td><td rowspan="2" >JK</td><td colspan="17" align="center">Semester</td><td rowspan="2">Status</td><td rowspan="2">SM</td><td rowspan="2">TA</td></tr>
    <tr class="alpha-indigo"><?php for($i=0;$i<17;$i++){ echo '<td>'.($i+1).'</td>'; } ?> </tr>
    </thead>
    <tbody>
    <?php foreach($mahasiswa['mahasiswa'] as $in=>$val){
        $sm=0;?>
    <tr>
    <td><?=$val['nim'];?></td><td><?=$val['nama'];?></td><td><?=($val['jk']=='1')?'L':'P';?></td><?php for($i=0;$i<17;$i++){ ?> 
    <td>
    <?php
        if(isset($mahasiswa['status'][$in][$i])){
            if((isset($mahasiswa['status'][$in][($i-1)]) && $mahasiswa['status'][$in][($i-1)]['ta']!=$mahasiswa['status'][$in][$i]['ta']) || $i==0){
               echo  $ref_status[$mahasiswa['status'][$in][$i]['id_status']]['singkatan'];$sm++;
            }
            if((isset($mahasiswa['status'][$in][($i+1)]) && $mahasiswa['status'][$in][($i+1)]['ta']==$mahasiswa['status'][$in][$i]['ta']) ){
                echo ','.$ref_status[$mahasiswa['status'][$in][$i+1]['id_status']]['singkatan'];
            }
        }
     ?></td> <?php  } ?>
     <td><?=$ref_status[substr($val['last_status'],-1)]['status'];?></td>
     <td><?=$sm;?></td>
     <td><?=substr($val['last_status'],0,5);?></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
<?php }?>

</div>
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