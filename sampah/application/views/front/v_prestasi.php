<div class="table-responsive">
<table class="table table-framed table-striped table-xxs ">
		<thead>
            
			<tr class="alpha-indigo text-bold">
				<th  class="text-center">#</th>
                <th >Nama</th>
                <th >Kualifikasi</th>
                <th >Jenjang</th>
                <th  >Capaian</th>
                <th  >Tanggal</th>
			</tr>
           
		</thead>
		<tbody>
        <?php if($prestasi != NULL){ $no=1;foreach($prestasi as $val){ ?>
		<tr>
                <td class="text-center"><?=$no;?></td>
                <td><?=$val['prestasi']?></td>
                <td><?=$val['nama']?></td>
                <td > <?=$val['jenjang']?></td>
                <td ><?=$val['capaian']?></td>
                <td ><?=$val['tanggal']?></td>
        </tr>
        
        <?php $no++; } }?>
        </tbody>
	</table>
</div>
