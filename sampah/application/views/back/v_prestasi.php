<div class="navigasi hide"><li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="form_checkboxes_radios.html">Prestasi</a></li>
							<li class="active">Data Prestasi</li></div>
<div class="sub-title hide"><i class="icon-bookmarks position-left"></i> Data Prestasi</div>
				<div class="content">
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-flat">
								<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-top">
											<li class="<?=(isset($_GET['detail']))?'':'active';?> t">
												<a href="#icon-only-tab1" data-toggle="tab">
													<i class="icon-bookmarks"></i>
													<span class=" position-right">Data Prestasi</span>
												</a>
											</li>
                                            <li class="<?=(isset($_GET['detail']))?'active':'';?> tambah_prestasi t">
												<a href="#icon-only-tab2" data-toggle="tab" class="a_tambah">
													<i class=" icon-bookmark3"></i>
													<span class="position-right">Tambah Prestasi</span>
												</a>
											</li>
											
                                        </ul>
										<div class="tab-content">
											<div class="tab-pane <?=(isset($_GET['detail']))?'':'active';?>" id="icon-only-tab1">
                                            <div style="margin-left: 10px; margin-top: -10px;">
                                            	<div class="media-left media-middle">
														<i class="text-indigo-400 icon-bookmarks icon-2x"></i>
													</div>
													<div class="media-left">
														<h5 class=" no-margin">
															<b class="text-indigo-400">Informasi Raihan Prestasi</b>  
                                                            <small class="display-block no-margin">Informasi data prestasi dan penghargaan selama  menempuh pendidikan di Undiksha sebagai syarat penerbitan SKPI. </small>
														</h5>
													</div>
                                                    </div>												
											<div class="panel-body">
									<table class="table table-framed table-striped table-xxs">
										<thead>
											<tr class="alpha-indigo">
												<th >Nama</th>
                                                <th >Capaian</th>
                                                <th>Jenjang</th>
                                                <th>Kualifikasi</th>
                                                <th>Tanggal</th>
                                                <th>Semester/Tahun</th>
												<th class="text-center" >Aksi</th>
											</tr>
										</thead>
										<tbody>
                                        <?php foreach($prestasi as $val){ ?>
										<tr id="<?=$val['id_prestasi'];?>">
                                                <td><?=$val['nama'];?></td>
                                                <td><?=$val['capaian'];?></td>
                                                <td><?=($val['jenjang_prestasi']!=NULL)?$val['jenjang_prestasi']:$val['jenjang'];?></td>
                                                <td><?=$val['kualifikasi'];?></td>
                                                <td><?=tgl_indo($val['tanggal']);?></td>
                                                <td><?=$val['semester'].'/'.$val['tahun'];?></td>
												<td class="text-center">
												<a class="text-primary ed_pres"  data-id="<?=$val['id_prestasi']?>">[ubah]</a>	
                                                <a class="text-danger del_pres" data-id="<?=$val['id_prestasi']?>">[hapus]</a>
												</td>
											</tr>
                                        <?php } ?>
                                        </tbody>
									</table>
											</div>
											</div>
											<div class="tab-pane <?=(isset($_GET['detail']))?'active':'';?>" id="icon-only-tab2">
											<div style="margin-left: 10px; margin-top: -10px;">
                                            <div class="media-left media-middle">
                                            	<i class="text-indigo-400 icon-shield-notice icon-2x"></i>
                                            </div>
                                            <div class="media-left">
                                            	<h5 class=" no-margin">
                                            		<b class="text-indigo-400">Tambahkan Data Prestasi</b>  
                                                    <small class="display-block no-margin">*Wajib untuk menambahkan prestasi sebagai syarat penerbitan SKPI.</small>
                                            	</h5>
                                            </div>
                                            <hr />
                                            </div>
                                            <div class="panel-body tambah_content">
                                            </div>
											</div>
                                        </div>
									</div>
							</div>
						</div>						
					</div>
				</div>    
<script type="text/javascript">
<?php if(isset($_GET['detail'])){ ?>
detail("<?=$_GET['detail']?>");
<?php } ?>
      $('.ed_pres').on('click', function () {
         var id=$(this).data('id');
         detail(id);
       
    });
    $('.a_tambah').on('click', function () {
         detail();
     });
    function detail(id=null){
       $.ajax({ 
            url		: "<?=site_url('mahasiswa/profile/tambah_prestasi/');?>"+id,
			 success: function(response){
                $('.tab-pane').removeClass('active');
                $('#icon-only-tab2').addClass('active');
               $('.tambah_content').html(response);
               $('.t').removeClass('active');
               $('.tambah_prestasi').addClass('active');
               history.replaceState({pg:1}, "pg home", "?detail="+id);
            }
        });
    }
     $('.del_pres').on('click', function () {
        del("<?=site_url('mahasiswa/profile/delete_prestasi')?>", $(this).data('id'));      
    });
</script>            