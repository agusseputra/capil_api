<div class="table-responsive">
<table class="table table-striped table-xxs   table-framed">
	<thead>
<tr class="bg-primary text-size-mini"><th>No</th><th>Fakultas/Jurusan</th>
<th>Januari</th><th>Februari</th><th>Maret</th><th>April</th><th>Mei</th>
<th>Juni</th><th>Juli</th><th>Agustus</th><th>September</th><th>Oktober</th>
<th>November</th><th>Desember</th>
<th>Total</th>
</tr>
</thead>
<tbody>
<?php $total=0;
for($i=1;$i<=12;$i++){
    $bulan[$i]=0;
}
 if($rekap != NULL){$no=1;foreach($rekap as $val){
     
     $tot=0;
    ?> 
<tr><td><?=$no;?></td><td class="<?=($tp=='fakultas')?'':'hide';?>"><?=$ref_fakultas[$val['id_fakultas']]['fakultas']?></td><td class="<?=($tp=='jurusan')?'':'hide';?>"><?=$ref_jurusan[$val['id_jurusan']]['nama_jurusan']?></td>
<?php for($i=1;$i<=12;$i++){
    $bulan[$i]+=$val['b_'.$i];
    $tot+=$val['b_'.$i];?>
    <td><?=$val['b_'.$i];?></td>
<?php } ?>
<td><?=$tot;?></td></tr>
<?php $no++;$total+=$tot; }} ?>

 </tbody>
 <tr class="active border-top text-bold"><td colspan="2"><h5>TOTAL</h5>  </td>
 <?php for($i=1;$i<=12;$i++){?>
    <td><?=$bulan[$i];?></td>
<?php }?>
 <td><h5><?=$total;?></h5></td></tr>
</table>
</div>
