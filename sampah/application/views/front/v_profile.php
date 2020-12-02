
<div class="page-container">
    <div class="page-content">
            <div class="content-wrapper">
            <div class="profile-cover">
					<div class="profile-cover-img" style="background-image: url(<?php echo base_url(); ?>assets/images/login_cover.jpg);height:150px;"></div>
					<div class="media">
                    <?php if(file_exists('media/photo/'.$profile['foto'])){?>
						<div class="media-left">
		                        <a href="#"  class="profile-thumb">
		                            <img src="<?php echo base_url('media/photo/'.$profile['foto']); ?>" class="img-circle" alt="">
      		                  </a>
                        </div>
                        <?php } ?>
                        <div class="media-body" style="padding-top: 10px;">
				    		<h1 class="no-margin"><?=$profile['nama']?> </h1><h3 class="no-margin"> - <?=$profile['nama_jurusan']?></h3>
						</div>
                    </div>
				</div>
				<!-- /cover area -->
				<div class="navbar navbar-default navbar-xs navbar-component no-border-radius-top" style="margin-bottom: 10px;">
					<ul class="nav navbar-nav visible-xs-block">
						<li class="full-width text-center"><a data-toggle="collapse" data-target="#navbar-filter"><i class="icon-menu7"></i></a></li>
					</ul>
					<div class="navbar-collapse collapse" id="navbar-filter">
						<ul class="nav navbar-nav">
							<li class="<?=(isset($_GET) && $_GET != NULL)?'':'active';?> t_a t"><a href="#profile" class="r_profil" data-toggle="tab"><i class="icon-menu7 "></i> Profil</a></li>
							<li class="<?=(isset($_GET['pendidikan']))?'active':'';?> t_rp t"><a href="#riwayat_pendidikan" class="r_pendidikan" data-toggle="tab"><i class="icon-graduation2 "></i> Riwayat Pendidikan</a></li>
							<li class="<?=(isset($_GET['perkuliahan']))?'active':'';?> t_ap t"><a href="#aktivitas_perkuliahan" class="r_ap" data-toggle="tab"><i class="icon-file-stats2 "></i> Aktivitas Perkuliahan</a></li>
							<li class="hide <?=(isset($_GET['studi']))?'active':'';?> t_rs t"><a href="#riwayat_studi" class="r_rs" data-toggle="tab"><i class="icon-book2 "></i> Riwayat Studi</a></li>
                            <li class=" <?=(isset($_GET['prestasi']))?'active':'';?> t_pr t"><a href="#prestasi" class="r_pr" data-toggle="tab"><i class="icon-medal "></i> Prestasi</a></li>
							<li class="hide <?=(isset($_GET['beasiswa']))?'active':'';?> t_jb t"><a href="#jenis_beasiswa" class="r_jb" data-toggle="tab"><i class="icon-archive "></i> Jenis Beasiswa</a></li>
						</ul>
						<div class="navbar-right">
							<ul class="nav navbar-nav">
								
								<li><a href="#" type="button" data-toggle="modal" data-target="#modal_theme_info"><i class="icon-share3 "></i> Bagikan Profil</a></li>
								
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
                <div class="col-lg-9">
							<div class="tab-content">
								<div class="tab-pane <?=(isset($_GET) && $_GET != NULL)?'':'fade in active';?> " id="profile">

									<div class="col-lg-12">
									<!-- Timeline -->
										<div class="timeline timeline-left content-group mt-5">
											<div class="timeline-container">

												<div class="timeline-row">
													<div class="timeline-icon">
														<div class="bg-info-400">
															<i class="icon-profile"></i>
														</div>
													</div>

													<div class="panel panel-flat timeline-content">
														<div class="panel-body">
                                                        <h6 class="text-semibold"><i class="icon-profile"></i> Informasi Dasar</h6>
															<hr />
                                                        <div class="col-md-6">
															
															<div class="form-group">
                                                            <label class="text-bold no-margin no-padding">Nama</label>
																<div> <i class="status-mark border-blue "></i> <?=$profile['nama']?></div>
                                                                <hr class="no-margin" />
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                            <label class="text-bold no-margin no-padding">Jenis Kelamin</label>
																<div><i class="status-mark border-blue "></i> <?=($profile['jk']==1)?'Laki-Laki':'Perempuan';?></div>
                                                                <hr class="no-margin" />
                                                            </div>
                                                            <div class="form-group">
                                                            <label class="text-bold no-margin no-padding">Tempat, Tanggal Lahir</label>
																<div><i class="status-mark border-blue "></i> <?=$profile['tmp_lahir'].', '.@tgl_indo($profile['tgl_lahir']);?></div>
                                                                <hr class="no-margin" />
                                                            </div>
                                                            
                                                            
                                                            </div>
                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                            <label class="text-bold no-margin no-padding">Agama</label>
																<div><i class="status-mark border-blue "></i> <?=$profile['agama']?></div>
                                                                <hr class="no-margin" />
                                                            </div>
                                                            <div class="form-group">
                                                            <label class="text-bold no-margin no-padding">Email</label>
																<div> <i class="status-mark border-blue "></i> <?=$profile['email']?></div>
                                                                <hr class="no-margin" />
                                                            </div>
                                                            <div class="form-group">
                                                            <label class="text-bold no-margin no-padding">Email Lainnya</label>
																<div> <i class="status-mark border-blue "></i> <?=$profile['email2']?></div>
                                                                <hr class="no-margin" />
                                                            </div>
                                                            </div>
                                                            <div class="form-group col-md-12">
                                                            <label class="text-bold no-margin no-padding">Alamat</label>
																<div> <i class="status-mark border-blue "></i> <?=$profile['alamat'];?>
                                                                <?=($profile['rt']!='')?' ,RT. '.$profile['rt'].' ,RW. '.$profile['rw']:'';?>
                                                                <?=($profile['kelurahan']!='')?' ,Kelurahan '.$profile['kelurahan']:'';?>
                                                                <?=($profile['kecamatan']!='')?' ,Kecamatan '.$profile['kecamatan']:'';?>
                                                                <?=($profile['kode_pos']!='')?' ,Kode Pos '.$profile['kode_pos']:'';?>
                                                                <?=($profile['kabupaten']!='')?' ,Kabupaten '.$profile['kabupaten']:'';?>
                                                                <?=($profile['provinsi']!='')?' ,Provinsi '.$profile['provinsi']:'';?>
                                                                </div>
                                                                <hr class="no-margin" />
                                                            </div>
                                                        </div>
													</div>
												</div>

												<div class="timeline-row">
													<div class="timeline-icon">
														<div class="bg-info-400">
															<i class="icon-quotes-right2"></i>
														</div>
													</div>

													<div class="panel panel-flat timeline-content">
														<div class="panel-body">
															  <h6 class="text-bold"><i class="icon-quotes-right2"></i> Informasi Lainnya</h6>
                                                                    	<hr />
														<div class="col-sm-6">
																
                                                               	<div class="form-group">
                                                                    <label class="text-bold no-margin no-padding">NISN</label>
																    <div> <i class="status-mark border-blue "></i> <?=$profile['nisn']?></div><hr class="no-margin" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="text-bold no-margin no-padding">SMA</label>
																    <div> <i class="status-mark border-blue "></i> <?=$profile['nisn']?></div><hr class="no-margin" />
                                                                </div>
                                                                
														</div>
                                                        <div class="col-sm-6">
                                                        <div class="form-group">
                                                                    <label class="text-bold no-margin no-padding">Kewarganegaraan</label>
																    <div> <i class="status-mark border-blue "></i> <?=$profile['kewarganegaraan']?></div><hr class="no-margin" />
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="text-bold no-margin no-padding">Beasiswa</label>
																    <div > <i class="status-mark border-blue "></i> -</div><hr class="no-margin" />
                                                                </div>
                                                                
                                                        </div>

																
														</div>
													</div>
												</div>
                                                <?php if(isset($tugas_akhir) && $tugas_akhir != NULL){ ?>
                                            <div class="timeline-row">
													<div class="timeline-icon">
														<div class="bg-info-400">
															<i class="icon-book3"></i>
														</div>
													</div>

													<div class="panel panel-flat timeline-content">
														<div class="panel-body">
															  <h6 class="text-bold"><i class="icon-quotes-right2"></i> Informasi Tugas Akhir</h6>
                                                                    	<hr />
																<div class="form-group col-xs-12">
                                                                    <label class="text-bold no-margin no-padding">Judul Tugas Akhir</label>
																    <div > <i class="status-mark border-blue "></i> <?=$tugas_akhir['judul']?></div><hr class="no-margin" />
                                                                </div>
                                                               	<div class="form-group col-xs-6">
                                                                    <label class="text-bold no-margin no-padding">Pembimbing 1</label>
																    <div> <i class="status-mark border-blue "></i> <?=$tugas_akhir['pembimbing_1']?></div>
                                                                </div>
                                                                <div class="form-group col-xs-6">
                                                                    <label class="text-bold no-margin no-padding">Pembimbing 2</label>
																    <div> <i class="status-mark border-blue "></i> <?=$tugas_akhir['pembimbing_2']?></div><hr class="no-margin" />
                                                                </div>
                                                                <div class="form-group col-xs-12">
                                                                    <label class="text-bold no-margin no-padding">Tanggal Lulus</label>
																    <div > <i class="status-mark border-blue "></i> <?= $tugas_akhir['tgl_lulus']?></div><hr class="no-margin" />
                                                                </div>
													

																
														</div>
													</div>
												</div>
                                                <?php } ?>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane " id="riwayat_pendidikan">
									 <div class="panel panel-flat border-top-info">
                                    	<div class="col-md-12" >
                                        <div class="media-left media-middle" >
                                        	<i class="text-indigo-400 icon-quotes-right2 icon-2x"></i>
                                        </div>
                                        
                                        <div class="media-left">
                                        	<h5 class=" no-margin">
                                        		<b class="text-indigo-400">Informasi Riwayat Pendidikan</b>  
                                                <small class="display-block no-margin">Informasi riwayat pendidikan mahasiswa selama menempuh pendidikan di Undiksha </small>
                                        	</h5>
                                            
                                        </div>
                                        <hr style="margin-bottom: 0px;" />
                                        </div>
                                        <div class="panel-body table-responsive c_rp">
                                        </div>
                                        <div class="panel-footer"><a class="heading-elements-toggle"><i class="icon-more"></i></a>
                                    		<div class="heading-elements"></div>
                                    	</div>
                                    </div>

								</div>

								<div class="tab-pane <?=(isset($_GET['perkuliahan']))?'active':'';?>" id="aktivitas_perkuliahan">
									<div class="panel panel-flat border-top-info">
                                    	<div class="col-md-12" >
                                        <div class="media-left media-middle" >
                                        	<i class="text-indigo-400 icon-quotes-right2 icon-2x"></i>
                                        </div>
                                        
                                        <div class="media-left">
                                        	<h5 class=" no-margin">
                                        		<b class="text-indigo-400">Informasi Status Perkuliahan</b>  
                                                <small class="display-block no-margin">Informasi status aktif mahasiswa serta pengambilan matakuliah selama menempuh pendidikan di Undiksha </small>
                                        	</h5>
                                            
                                        </div>
                                        <hr style="margin-bottom: 0px;" />
                                        </div>
                                        <div class="panel-body table-responsive c_ap " >
                                        mohon menunggu ...
                                        </div>
                                        <div class="panel-footer"><a class="heading-elements-toggle"><i class="icon-more"></i></a>
                                    		<div class="heading-elements"></div>
                                    	</div>
                                    </div>
								</div>



								<div class="tab-pane <?=(isset($_GET['studi']))?'active':'';?>" id="riwayat_studi">
									<div class="panel panel-flat  border-top-info">
                                    	<div class="col-md-12" >
                                        <div class="media-left media-middle" >
                                        	<i class="text-indigo-400 icon-quotes-right2 icon-2x"></i>
                                        </div>
                                        
                                        <div class="media-left">
                                        	<h5 class=" no-margin">
                                        		<b class="text-indigo-400">Informasi Nilai Mata Kuliah</b>  
                                                <small class="display-block no-margin">Informasi riwayat pengambilan  serta nilai matakuliah selama menempuh pendidikan di Undiksha </small>
                                        	</h5>
                                            
                                        </div>
                                        <hr style="margin-bottom: 0px;" />
                                        </div>
                                        <div class="panel-body table-responsive c_rs">
                                        mohon menunggu ...
                                        </div>
                                        <div class="panel-footer"><a class="heading-elements-toggle"><i class="icon-more"></i></a>
                                    		<div class="heading-elements"></div>
                                    	</div>
                                    </div>
								</div>



								<div class="tab-pane <?=(isset($_GET['prestasi']))?'active':'';?>" id="prestasi">
								<div class="panel panel-flat  border-top-info">
                                    	<div class="col-md-12" >
                                        <div class="media-left media-middle" >
                                        	<i class="text-indigo-400 icon-quotes-right2 icon-2x"></i>
                                        </div>
                                        
                                        <div class="media-left">
                                        	<h5 class=" no-margin">
                                        		<b class="text-indigo-400">Informasi Prestasi Mahasiswa</b>  
                                                <small class="display-block no-margin">Informasi riwayat prestasi mahasiswa selama menempuh pendidikan di Undiksha </small>
                                        	</h5>
                                            
                                        </div>
                                        <hr style="margin-bottom: 0px;" />
                                        </div>
                                        <div class="panel-body table-responsive c_pr">
                                        mohon menunggu ...
                                        </div>
                                        <div class="panel-footer"><a class="heading-elements-toggle"><i class="icon-more"></i></a>
                                    		<div class="heading-elements"></div>
                                    	</div>
                                    </div>	
                                    
								</div>


							</div>
                        </div>
					<div class="col-lg-3">

							<!-- User thumbnail -->
							
					    	<!-- /user thumbnail -->


							<!-- Navigation -->
                            <div class="panel panel-body border-top-danger">
								<h6 class="no-margin text-semibold"><i class="icon-clipboard5"></i> Status Mahasiswa</h6>
								<p class="content-group-sm text-muted">Status Perkuliahan TA. <?=substr($profile['last_status'],0,4).'/'.(substr($profile['last_status'],0,4)+1);?></p>
								
								<hr>
                                <?php $id_mahasiswa=substr($profile['last_status'],-1);$color="text-success"; ?>    
			                    <ul class="media-list">
                                <li class="media">
								<div class="media-left">
                                <?php if($id_mahasiswa==1){ ?>
									<span  class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-user-check"></i></span>
                                <?php }elseif($id_mahasiswa==2){ $color="text-warning"; ?>
                                    <span  class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-user-lock"></i></span>
                                <?php }elseif($id_mahasiswa==3){ $color="text-warning"; ?>
                                <span  class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-user-block"></i></span>
                                <?php }elseif($id_mahasiswa==4){ $color="text-danger"; ?>
                                <span  class="btn border-danger text-danger btn-flat btn-rounded btn-icon btn-sm"><i class="icon-user-cancel"></i></span>
                                <?php }elseif($id_mahasiswa==5){ $color="text-danger"; ?>
                                <span  class="btn border-danger text-danger btn-flat btn-rounded btn-icon btn-sm"><i class="icon-user-cancel"></i></span>
                                <?php }elseif($id_mahasiswa==6){ $color="text-info"; ?>
                                <span  class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-graduation2"></i></span>
                                <?php }elseif($id_mahasiswa==7){  $color="text-info";?>
                                <span  class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-user-minus"></i></span>
                                <?php } ?>
								</div>
								
								<div class="media-body">
									<span class="<?=$color;?>"><?=(isset($ref_status[$id_mahasiswa]['status']))?$ref_status[$id_mahasiswa]['status']:'';?></span>
									<div class="media-annotation">Semester <?=substr($profile['last_status'],4,1)?>, TA. <?=substr($profile['last_status'],0,4).'/'.(substr($profile['last_status'],0,4)+1);?></div>
								</div>
							</li>
                            <?php if(isset($sks) && $sks != NULL && $id_mahasiswa!= 6){ ?>
							<li class="media">
								<div class="media-left">
									<span class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-checkmark4"></i></span>
								</div>

								<div class="media-body">
									<span class="text-primary">Teregistrasi</span>
									<div class="media-annotation"><?=$sks['tahun'].'/'.$sks['semester'].', Pengambilan '.$sks['sks'];?> SKS</div>
								</div>
							</li>
                            <?php } ?>

							
						</ul>
							</div>
					    	<div class="panel panel-body border-top-primary">
								<h6 class="no-margin text-semibold"><i class="icon-graduation2"></i> Informasi Akademik</h6>
								<p class="content-group-sm text-muted">Informasi Akademik Mahasiswa</p>
								
								<hr>

			                    <blockquote class="no-margin">
									Jurusan
									<footer><?=$profile['nama_jurusan']?></footer>
								</blockquote>
                                <hr />
                                <blockquote class="no-margin">
									Pembimbing Akademik
									<footer><?=$profile['nama_dosen'];?></footer>
								</blockquote>
                                
							</div>
						</div>
				</div>
				<!-- /user profile -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
<div id="modal_theme_info" class="modal fade">
					<div class="modal-dialog modal-sm">
						<div class="modal-content">
							<div class="modal-header bg-info">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h6 class="modal-title"><i class="icon-share3 "></i> Bagikan Profil</h6>
							</div>

							<div class="modal-body">
								<!-- <h6 class="text-semibold"><i class="icon-share3 "></i></h6> -->
								<p>Pilih sosial media yang digunakan untuk membagikan profil anda kepada teman-teman yang terhubung kepada anda.</p>
								<hr>
								<h6 class="text-semibold">Via</h6>
								<!-- <p>tes</p> -->
								<div class="text-center content-group">
									<div class="fb-share-button" data-href="" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" 
                                    href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fdosen.undiksha.ac.id%2Fprofile%2F&amp;src=sdkpreparse">Bagikan</a></div>
							
								</div>	
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<!-- <button type="button" class="btn btn-info">Save changes</button> -->
							</div>
						</div>
					</div>
				</div>
                
                
<script type="text/javascript">
       $('.r_pendidikan').on('click', function () {
        $.ajax({ 
                    url		: "<?=site_url($profile['id_mahasiswa'].'/profile/riwayat_pendidikan');?>",
        			 success: function(response){
                        $('.tab-pane').removeClass('active');
                        $('#riwayat_pendidikan').addClass('active');
                       $('.c_rp').html(response);
                       $('.t').removeClass('active');
                       $('.t_rp').addClass('active');
                       history.replaceState({pg:1}, "pg home", "?pendidikan");
                        $('.r_pendidikan').removeClass('r_pendidikan');
                    }
                });
    });
    $('.r_ap').on('click', function () {
        $.ajax({ 
                    url		: "<?=site_url($profile['id_mahasiswa'].'/profile/aktivitas_perkuliahan');?>",
        			 success: function(response){
                        $('.tab-pane').removeClass('active');
                        $('#aktivitas_perkuliahan').addClass('active');
                       $('.c_ap').html(response);
                       $('.t').removeClass('active');
                       $('.t_ap').addClass('active');
                       history.replaceState({pg:1}, "pg home", "?perkuliahan");
                       $('.r_ap').removeClass('r_ap');
                    }
                });
    });	
    $('.r_rs').on('click', function () {
        $.ajax({ 
                    url		: "<?=site_url($profile['id_mahasiswa'].'/profile/riwayat_studi');?>",
        			 success: function(response){
                        $('.tab-pane').removeClass('active');
                        $('#riwayat_studi').addClass('active');
                       $('.c_rs').html(response);
                       $('.t').removeClass('active');
                       $('.t_rs').addClass('active');
                       history.replaceState({pg:1}, "pg home", "?studi");
                       $('.r_rs').removeClass('r_rs');
                    }
                });
    });	
    $('.r_pr').on('click', function () {
        $.ajax({ 
                    url		: "<?=site_url($profile['id_mahasiswa'].'/profile/prestasi');?>",
        			 success: function(response){
                        $('.tab-pane').removeClass('active');
                        $('#prestasi').addClass('active');
                       $('.c_pr').html(response);
                       $('.t').removeClass('active');
                       $('.t_pr').addClass('active');
                       history.replaceState({pg:1}, "pg home", "?prestasi");
                       $('.r_pr').removeClass('r_pr');
                    }
                });
    });	
    $('.r_profil').on('click', function () {
        $('.tab-pane').removeClass('active fade');
        $('.t').removeClass('active');
        $('#profile').addClass('active');
         $('.t_a').addClass('active');
         history.replaceState({pg:1}, "pg home", "?");
    });
    <?php if(isset($_GET['pendidikan'])){?>
    $('.r_pendidikan').click();
   <?php } ?>
   <?php if(isset($_GET['perkuliahan'])){?>
    $('.r_ap').click();
   <?php } ?>
   <?php if(isset($_GET['studi'])){?>
    $('.r_rs').click();
   <?php } ?>
   <?php if(isset($_GET['prestasi'])){?>
    $('.r_pr').click();
   <?php } ?>
</script>	