<div class="table-responsive">
<table class="table table-striped table-xxs   table-framed">
	<thead>
<tr class="bg-primary text-size-mini"><th>No</th><th>Fakultas/Jurusan</th>
<?php if($ref_jalur != NULL){foreach($ref_jalur as $val){$tot[$val['kode_jalur']]=0; ?><th><?=substr($val['jalur'],0,6);?></th> <?php } } ?>
<th>Total</th>
</tr>
</thead>
<tbody>
<?php $total=0; if($rekap != NULL){$no=1;foreach($rekap as $val){ 
    $total+=(isset($val['total']))?$val['total']:0;?> 
<tr><td><?=$no;?></td><td><?=$val['jurusan']?></td>
<?php if($ref_jalur != NULL){foreach($ref_jalur as $val2){?><td><?=(isset($val['jalur'][$val2['kode_jalur']]))?$val['jalur'][$val2['kode_jalur']]:0;?></td> <?php  $tot[$val2['kode_jalur']]+=(isset($val['jalur'][$val2['kode_jalur']]))?$val['jalur'][$val2['kode_jalur']]:0;  } } ?>
<td><?=(isset($val['total']))?$val['total']:0;?></td></tr>
<?php $no++; }} ?>

 </tbody>
 <tr class="active border-top text-bold"><td colspan="2"><h5>TOTAL</h5></td>
 <?php if($ref_jalur != NULL){foreach($ref_jalur as $val){ ?><td><?=$tot[$val['kode_jalur']]?></td> <?php } } ?>
 <td><h5><?=$total;?></h5></td></tr>
</table>
</div>
