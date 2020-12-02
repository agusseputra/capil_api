<div class="table-responsive">
	<table class="table text-nowrap table-xxs table-framed table-striped">
		<thead>
			<tr class="alpha-indigo">
				<th width='10'>No</th>
				<th >Tahun/Semester</th>
				<th>Status</th>
				<th >Status Krs</th>
				<th >SKS</th>												
			</tr>
		</thead>
		<tbody>
			<?php  if($status != NULL){$no=1; foreach($status as $in=> $val){ 
			 if((isset($status[($in - 1 )]['id_status']) && $status[($in - 1 )]['tahun'].$status[($in - 1 )]['semester'] != $val['tahun'].$val['semester']) || $in==0 ){				     
             ?>
			<tr>
				<td><?=$no;?></td>
				<td><?=$val['tahun'].'/'.$val['semester'];?></td>
				<td>
                <?php if($val['id_status']==1){ ?>
                <span class="text-success"><i class="icon-user-check"></i> <?=$val['status']?></span>
                <?php }elseif($val['id_status']==2){ ?>
                <span class="text-warning"><i class=" icon-user-lock"></i> <?=$val['status']?></span>
                <?php }elseif($val['id_status']==3){ ?>
                <span class="text-warning"><i class="icon-user-block"></i> <?=$val['status']?></span>
                <?php }elseif($val['id_status']==4){ ?>
                 <span class="text-danger"><i class="icon-user-cancel"></i> <?=$val['status']?></span>
                <?php }elseif($val['id_status']==5){ ?>
                <span class="text-danger"><i class="icon-user-cancel"></i> <?=$val['status']?></span>
                <?php }elseif($val['id_status']==6){ ?>
                <span class="text-primary"><i class="icon-graduation2"></i> <?=$val['status']?></span>
                <?php }elseif($val['id_status']==7){ ?>
                <span class="text-info"><i class="icon-user-minus"></i> <?=$val['status']?></span>
                <?php }else{ ?>
                <?php } ?>
                <?php  if((isset($status[($in + 1 )]['id_status']) && $status[($in + 1 )]['tahun'].$status[($in + 1 )]['semester'] == $val['tahun'].$val['semester'])){ 
                    echo ', <span class="text-primary"><i class="icon-graduation2"></i> ' .$status[($in + 1 )]['status']. '</span>'; }?>
                </td>
				<td><?=($val['id_status_registrasi'] != NULL)?'<span class="text-success"><i class="icon-checkmark4"></i> registrasi</span>':'';?></td>
				<td> <b><?=$val['sks']?></b></td>												
			</tr>
			<?php $no++; } } } ?>
		</tbody>
	</table>
</div>