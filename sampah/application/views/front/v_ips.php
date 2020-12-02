<div class="table-responsive">
	<table class="table text-nowrap table-xxs table-framed table-striped">
		<thead>
			<tr class="alpha-indigo">
				<th width='10'>No</th>
				<th >Tahun</th>
				<th>Semester</th>
				<th >IPS</th>
				<th >SKS</th>
				<th >IPK</th>
				<th >SKS KOMULATIF</th>
			</tr>
		</thead>
		<tbody>
			<?php  $ipk=0; $sks_kom=0;if($ips != NULL){$no=1; foreach($ips as $val){
			 $ipk=$val['ipk'];$sks_kom=$val['sks_komulatif'];?>
			<tr>
				<td><?=$no;?></td>
				<td><?=$val['tahun'];?></td>
				<td><?=$val['semester'];?></td>
				<td><?=$val['ips'];?></td>
				<td> <?=$val['sks']?></td>
                <td><?=$val['ipk'];?></td>
				<td><?=$val['sks_komulatif']?></td>
			</tr>
			<?php $no++; } } ?>
		</tbody>
        <tfoot>
        <tr><td colspan="5" align="center"><b>IPK/SKS Komulatif</b></td><td><b><?=$ipk;?></b></td><td><b><?=$sks_kom;?></b></td></tr>
        </tfoot>
	</table>
</div>