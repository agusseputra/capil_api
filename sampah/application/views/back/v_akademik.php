<div class="navigasi hide"><li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="form_checkboxes_radios.html">Akademik</a></li>
							<li class="active">Data Akademik</li></div>
<div class="sub-title hide"><i class="icon-books position-left"></i> Informasi Akademik</div>
				<div class="content">

					<!-- User profile -->
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-flat">
								<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-top">
											<li class="t <?=(isset($_GET['pendidikan'])||isset($_GET['nilai']) ||isset($_GET['ips']))?'':'active';?>">
												<a href="#icon-only-tab1" data-toggle="tab" onclick='history.replaceState({pg:1}, "pg home", "?home");'>
													<i class="icon-user-check"></i>
													<span class=" position-right">Informasi Registrasi</span>
												</a>
											</li>
                                            <li class="t <?=(isset($_GET['ips']))?'active':'';?> li_ips">
												<a href="#ips" data-toggle="tab" class="a_ips" >
													<i class="icon-file-check"></i>
													<span class=" position-right">Informasi Indeks Prestasi Semester</span>
												</a>
											</li>
                                            <li class="t <?=(isset($_GET['pendidikan']))?'active':'';?> li_nilai">
												<a href="#icon-only-tab3" data-toggle="tab" class="a_nilai">
													<i class=" icon-book3"></i>
													<span class="position-right">Daftar Nilai</span>
												</a>
											</li>
                                            <li class="t li_pendidikan <?=(isset($_GET['pendidikan']))?'active':'';?>">
												<a href="#icon-only-tab4" class="a_pendidikan" data-toggle="tab">
													<i class=" icon-direction"></i>
													<span class="position-right">Riwayat Pendidikan</span>
												</a>
											</li>
											
                                        </ul>

										<div class="tab-content">
											<div class="tab-pane <?=(isset($_GET['pendidikan'])||isset($_GET['nilai'])||isset($_GET['ips']))?'':'active';?>" id="icon-only-tab1">
                                            <div style="margin-left: 10px; margin-top: -10px;">
                                            	<div class="media-left media-middle">
														<i class="text-indigo-400 icon-quotes-right2 icon-2x"></i>
													</div>

													<div class="media-left">
														<h5 class=" no-margin">
															<b class="text-indigo-400">Informasi Registrasi Semester</b>  
                                                            <small class="display-block no-margin">Informasi registrasi mahasiswa sesuai pembayaran SPP per semester selama menempuh pendidikan di Undiksha. </small>
														</h5>
													</div>
                                                    </div>
												
											<div class="panel-body">
									<?php $this->load->view('front/aktivitas_perkuliahan');?>
											</div>
											</div>

											
                                            <div class="tab-pane <?=(isset($_GET['nilai']))?'active':'';?>" id="icon-only-tab3">
											<div style="margin-left: 10px; margin-top: -10px;">
<div class="media-left media-middle">
	<i class="text-indigo-400 icon-quotes-right2 icon-2x"></i>
</div>

<div class="media-left">
	<h5 class=" no-margin">
		<b class="text-indigo-400">Informasi Nilai Mata Kuliah</b>  
        <small class="display-block no-margin">Informasi pengambilan matakuliah dan nilai mahasiswa persemester selama menempuh pendidikan di Undiksha </small>
	</h5>
</div>
</div>

<div class="panel-body content_nilai">
mohon menunggu ...
</div>
											</div>
                                            <div class="tab-pane  <?=(isset($_GET['pendidikan']))?'active':'';?>" id="icon-only-tab4">
                                            <div style="margin-left: 10px; margin-top: -10px;">
<div class="media-left media-middle">
	<i class="text-indigo-400  icon-alignment-unalign icon-2x"></i>
</div>

<div class="media-left">
	<h5 class=" no-margin">
		<b class="text-indigo-400">Riwayat Pendidikan</b>  
        <small class="display-block no-margin">Informasi riwayat masuk serta perpindahan mahasiswa selama menempuh pendidikan di Undiksha </small>
	</h5>
</div>
</div>

<div class="panel-body content_pendidikan">
mohon menunggu ...
</div>
											</div>
                                            <div class="tab-pane  <?=(isset($_GET['ips']))?'active':'';?>" id="ips">
                                            <div style="margin-left: 10px; margin-top: -10px;">
<div class="media-left media-middle">
	<i class="text-indigo-400  icon-file-check icon-2x"></i>
</div>

<div class="media-left">
	<h5 class=" no-margin">
		<b class="text-indigo-400">Indeks Prestasi Semester</b>  
        <small class="display-block no-margin">Informasi raihan indeks prestasi mahasiswa per semester. </small>
	</h5>
</div>
</div>

<div class="panel-body content_ips">
mohon menunggu ...
</div>
											</div>
                                        </div>
									</div>
							</div>
						</div>						
					</div>
					</div>
<script type="text/javascript">
<?php if(isset($_GET['pendidikan'])){ ?>
pendidikan();
<?php } ?>
<?php if(isset($_GET['nilai'])){ ?>
nilai();
<?php } ?>
<?php if(isset($_GET['ips'])){ ?>
ips();
<?php } ?>
function pendidikan(){
       $.ajax({ 
            url		: "<?=site_url('mahasiswa/profile/riwayat_pendidikan');?>",
			 success: function(response){
                $('.tab-pane').removeClass('active');
                $('#icon-only-tab4').addClass('active');
               $('.content_pendidikan').html(response);
               $('.t').removeClass('active');
               $('.li_pendidikan').addClass('active');
               history.replaceState({pg:1}, "pg home", "?pendidikan");
               $('.a_pendidikan').removeClass('a_pendidikan');
            }
        });
    }
function nilai(){
       $.ajax({ 
            url		: "<?=site_url('mahasiswa/profile/nilai');?>",
			 success: function(response){
                $('.tab-pane').removeClass('active');
                $('#icon-only-tab3').addClass('active');
               $('.content_nilai').html(response);
               $('.t').removeClass('active');
               $('.li_nilai').addClass('active');
               history.replaceState({pg:1}, "pg home", "?nilai");
               $('.a_nilai').removeClass('a_nilai');
            }
        });
    }
    function ips(){
       $.ajax({ 
            url		: "<?=site_url('mahasiswa/profile/ips');?>",
			 success: function(response){
                $('.tab-pane').removeClass('active');
                $('#ips').addClass('active');
               $('.content_ips').html(response);
               $('.t').removeClass('active');
               $('.li_ips').addClass('active');
               history.replaceState({pg:1}, "pg home", "?ips");
               $('.a_ips').removeClass('a_nilai');
            }
        });
    }
    $('.a_pendidikan').on('click', function () {
        pendidikan();
    });
    $('.a_ips').on('click', function () {
        ips();
    });
    $('.a_nilai').on('click', function () {
        nilai();
    });
</script>                