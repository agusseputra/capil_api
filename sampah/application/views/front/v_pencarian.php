<div class="page-container">
    <div class="page-content">
<div class="panel panel-flat  border-top-info">
<div class="col-md-12 bg-blue-800 text-white" >
<div class="media-left media-middle" >
	<i class="icon-search4 icon-2x"></i>
</div>

<div class="media-left">
	<h2 class=" ">
		<b >Hasil Pencarian Mahasiswa</b>  
        <small class="display-block text-white  no-margin">Modul ini akan menampilkan data mahasiswa baru(sudah memiliki NPM) di 
        Universitas Pendidikan Ganesha. Terdapat 4 pilihan untuk melakukan filter data yang diinginkan yaitu tahun, jenjang, fakultas dan prodi. 
        Data disajikan dalam bentuk chart dan tabel. 
        Pengguna juga dapat melakukan ekstrak data dalam format XLS.</small>
	</h2>
    
</div>
</div>
<div class="panel-body">
<div class=" col-md-12 tab_isi" style="margin-top: 15px;">
<table class="table text-nowrap table-xxs table-framed table-striped table-responsive">
										<thead>
											<tr class="text-size-large">
												<th ><b>Nama</b></th>
                                                <th><b>NIM</b></th>
												<th><b>Fakultas/Jurusan</b></th>
												
											</tr>
										</thead>
										<tbody>
                                        <?php if($mahasiswa != NULL){foreach($mahasiswa as $val){?>
                                        <tr>
												<td>
													<div class="media-left media-middle">
														<a href="#"><img src="<?=base_url()?>assets/images/placeholder.jpg" class="img-rounded img-xs" alt=""></a>
													</div>

													<div class="media-body">
														<a href="<?=site_url($val['permalink'])?>" class="display-inline-block text-default text-semibold letter-icon-title"><h4 class="no-margin"><?=$val['nama']?></h4></a>
                                                        
													</div>
												</td>
                                                <td>
                                                <span class="display-inline-block text-default text-semibold letter-icon-title"><?=$val['nim']?></span>
														<div class="text-muted text-size-small"><span class="status-mark border-blue position-left"></span> <?=(isset($ref_status[substr($val['last_status'],-1)]))?$ref_status[substr($val['last_status'],-1)]['singkatan']:'';?> | <?=substr($val['last_status'],0,4);?></div></td>
												<td>
														<span class="text-semibold"><?=$ref_fakultas[$ref_jurusan[$val['id_jurusan']]['id_fakultas']]['fakultas']?></span>
														<span class="display-block text-muted"><?=$ref_jurusan[$val['id_jurusan']]['nama_jurusan']?></span>
												</td>
												
											</tr>
                                            <?php }}  ?>
                                        </tbody>
									</table>
</div>
</div>
<div class="panel-footer"><a class="heading-elements-toggle"><i class="icon-more"></i></a>
	<div class="heading-elements"></div>
</div>
</div>
</div></div>