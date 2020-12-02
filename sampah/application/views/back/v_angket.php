<form action="<?=site_url('mahasiswa/kinerja/save_angket/');?>" class="form-ajax form-validate-jquery f_angket"  data-confirm="1" method="post">
<div class="col-md-6">
<label class="text-bold no-margin no-padding">Matakuliah</label>
<div class="form-control matkul">Matakuliah</div>
</div>

<div class="col-md-6">
<label class="text-bold no-margin no-padding">Dosen</label>
<select class="form-control select-clear " required name="id_dosen" >
<option  value="">Pilih Dosen</option>
<?php if($pengampu != NULL){ foreach($pengampu as $val){ ?>
<option  value="<?=$val['id_dosen']?>"><?=$val['nama']?></option>
<?php } }?>
</select>
</div>
<div class="col-md-12"><hr /></div>
<table class="table table-framed table-hover table-xxs tb">
<thead class="">
<tr class=" alpha-indigo"><th>KINERJA</th><?php if($ref_skala != NULL){ foreach($ref_skala as $val){?> <th><?=$val['keterangan'];?></th><?php }} ?></tr>
</thead>
<tbody>
<?php if($angket != NULL){foreach($angket[0] as $row){ ?>
<tr class="active text-bold"><td><?=$row['uraian']?></td> <td colspan="<?=count($ref_skala)?>"></td> </tr>
<?php if(isset($angket[$row['id_kinerja']])){ $no=1; foreach($angket[$row['id_kinerja']] as $butir2){ ?>
<tr><td><?='&nbsp;&nbsp;'.$no.'. '.$butir2['uraian']?></td> <?php if($ref_skala != NULL){ foreach($ref_skala as $val){?> <td align="center"><input type="radio" required name="radio[<?=$butir2['id_kinerja']?>]" value="<?=$val['nilai']?>" /></td><?php }} ?> </tr>
<?php  $no++; } } ?>
<?php } } ?>
</tbody>
</table>
<div class="col-lg-12" align="right">
<hr />
<button type="submit" class="btn bg-indigo btn-sm  btn-ladda btn-ladda-spinner" data-spinner-color="#fff" data-style="slide-right"><span class="ladda-label">SIMPAN <i class="icon-floppy-disk position-right"></i></span></button>
</div>
</form>
<script type="text/javascript" src="<?= base_url('assets/js/custom/validate.js') ?>"></script>  
<script>

</script>