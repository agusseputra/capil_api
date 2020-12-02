<div class="table-responsive">
<table class="table table-striped table-xxs   table-framed">
	<thead>
<tr class="bg-primary text-size-mini"><th>No</th><th>Fakultas/Jurusan</th>
<th>00 < 2.0</th><th>2.0 < 2.5</th><th>2.5 < 3.0</th><th>3.0 < 3.5</th><th>3.5 < 4.0</th>
<th>Total</th>
</tr>
</thead>
<tbody>
<?php $total=0;$ipk_2=0;$ipk_25=0;$ipk_3=0;$ipk_35=0;$ipk_4=0; if($rekap != NULL){$no=1;foreach($rekap as $val){
    $tot=$val['ipk_2']+$val['ipk_25']+$val['ipk_3']+$val['ipk_35']+$val['ipk_4'];
    $ipk_2+=$val['ipk_2'];$ipk_25+=$val['ipk_25'];$ipk_3+=$val['ipk_3'];$ipk_35+=$val['ipk_35'];$ipk_4+=$val['ipk_4'];
    $total+=$tot;
    ?> 
<tr><td><?=$no;?></td><td class="<?=($tp=='fakultas')?'':'hide';?>"><?=$ref_fakultas[$val['id_fakultas']]['fakultas']?></td><td class="<?=($tp=='jurusan')?'':'hide';?>"><?=$ref_jurusan[$val['id_jurusan']]['nama_jurusan']?></td>
<td><?=$val['ipk_2']?></td><td><?=$val['ipk_25']?></td><td><?=$val['ipk_3']?></td><td><?=$val['ipk_35']?></td><td><?=$val['ipk_4']?></td>
<td><?=$tot;?></td></tr>
<?php $no++; }} ?>

 </tbody>
 <tr class="active border-top text-bold"><td colspan="2"><h5>TOTAL</h5>  </td><td><?=$ipk_2?></td><td><?=$ipk_25?></td><td><?=$ipk_3?></td><td><?=$ipk_35?></td><td><?=$ipk_4?></td><td><h5><?=$total;?></h5></td></tr>
</table>
</div>
