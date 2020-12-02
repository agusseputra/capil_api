<div class="table-responsive">
<table class="table table-framed table-striped table-xxs tb">
										<thead>
                                            
											<tr class="alpha-indigo text-bold">
												<th rowspan="2" class="text-center">#</th>
                                                <th rowspan="2">Kode MK</th>
                                                <th rowspan="2">Nama MK</th>
                                                <th rowspan="2" class="text-center">SKS</th>
                                                <th colspan="2" class="text-center">NILAI</th>
                                                <th rowspan="2" class="text-center">N*I</th>
                                                <th rowspan="2" class="text-center">SM/TH</th>
											</tr>
                                            <tr class="alpha-indigo">
												
                                                <th class="text-center">Huruf</th>
                                                <th class="text-center">Indeks</th>
											</tr>
										</thead>
										<tbody>
                                        <?php if($nilai != NULL){ $no=1;foreach($nilai as $val){ ?>
										<tr>
                                                <td class="text-center"><?=$no;?></td>
                                                <td><?=$val['kode_mk']?></td>
                                                <td><?=$val['nama_mk']?></td>
                                                <td class="text-center"> <?=$val['sks_mk']?></td>
                                                <td class="text-center"><?=$val['nilai_huruf']?></td>
                                                <td class="text-center"><?=$val['point']?></td>
                                                <td class="text-center"><?=$val['point']*$val['sks_mk'];?></td>
                                                <td class="text-center"><?=$val['semester'].'/'.$val['tahun'];?></td>
                                        </tr>
                                        
                                        <?php $no++; } }?>
                                        </tbody>
									</table>
</div>
<script>
 $('.tb').DataTable({
    "pageLength": 25
 });
$('.dataTables_filter input[type=search]').attr('placeholder',' Ketik disini...');
$('.dataTables_length select').select2({
        minimumResultsForSearch: Infinity,
        width: 'auto'
    });
</script>