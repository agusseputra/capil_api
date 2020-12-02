<style type="text/css">
label{
    margin:0px;padding: 0px;
}
</style>
<div class="navigasi hide"><li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="form_checkboxes_radios.html">Profil</a></li>
							<li class="active">Biodata</li></div>
<div class="sub-title hide"><i class=" icon-profile position-left"></i> Data Biodata</div>
				<div class="content">

					<!-- User profile -->
					<div class="row">
						<div class="col-lg-9">
							<div class="panel panel-flat">
								<div class="tabbable">
										<ul class="nav nav-tabs nav-tabs-top">
											<li class="<?=(isset($_GET['kesehatan'])||isset($_GET['personalisasi'])||isset($_GET['akun']))?'':'active'?>">
												<a href="#icon-only-tab1" data-toggle="tab" onclick='history.replaceState({pg:1}, "pg home", "?home");'>
													<i class="icon-profile"></i>
													<span class=" position-right">Biodata</span>
												</a>
											</li>
                                            <li class="<?=(isset($_GET['kesehatan']))?'active':''?>">
												<a href="#icon-only-tab2" data-toggle="tab" onclick='history.replaceState({pg:1}, "pg home", "?kesehatan");'>
													<i class="icon-aid-kit"></i>
													<span class="position-right">Kesehatan</span>
												</a>
											</li>
											
                                            <li class="hide">
												<a href="#icon-only-tab4" data-toggle="tab">
													<i class="icon-user-lock"></i>
													<span class="position-right">Akun Login</span>
												</a>
											</li>
                                        </ul>

										<div class="tab-content">
											<div class="tab-pane <?=(isset($_GET['kesehatan'])||isset($_GET['personalisasi'])||isset($_GET['akun']))?'':'active'?>" id="icon-only-tab1">
                                            <div style="margin-left: 10px; margin-top: -10px;">
                                            	<div class="media-left media-middle">
														<i class="text-indigo-400 icon-user-tie icon-2x"></i>
													</div>

													<div class="media-left">
														<h5 class=" no-margin">
															<b class="text-indigo-400">Informasi Dasar</b>  
                                                            <small class="display-block no-margin">informasi yang ditampilkan adalah informasi mendasar dari sistem kepada mahasiswa.</small>
														</h5>
													</div>
                                                    <hr />
                                                    </div>
												
											<div class="panel-body">
											<form action="<?=site_url('mahasiswa/profile/update_profile/');?>" class="form-ajax form-validate-jquery" data-confirm='1' method="post">
                                                <div class="col-md-12 col-lg-6 col-xs-12">
                                                  <h6 class="no-margin text-bold"><i class="icon-vcard"></i> Informasi Dasar</h6>
								                    <hr>
                                                <div class="form-group row">
															<div class="col-md-6 ">
																<label class="text-bold ">Nama :</label>
																<input type="text" required class="form-control" value="<?=($profile!=NULL)?$profile['nama']:'';?>" name="nama">
                                                                <small class="text-danger">sesuai ijazah terakhir</small>
                                                             </div>
															<div class="col-md-6">
																<label class="text-bold">NIM :</label>
                                                                <input type="text" readonly="readonly" value="<?=($profile!=NULL)?$profile['nim']:'';?>" class="form-control">
															</div>
													</div>
                                                <div class="form-group row">
														
															<div class="col-md-6 ">
																<label class="text-bold">NISN :</label>
																<input type="text" required value="<?=($profile!=NULL)?$profile['nisn']:'';?>" class="form-control" name="nisn">
															</div>
                                                            <div class="col-md-6">
																<label class="text-bold">NIK :</label>
																<input type="text" required value="<?=($profile!=NULL)?$profile['nik']:'';?>" class="form-control" name="nik">
															</div>
													</div>
                                                <div class="form-group row">
                                                        <div class="col-md-6 ">
																<label class="text-bold">Jenis Kelamin :</label>
																<select required class="select selec2 form-control" name="jk">
									                                <option <?=($profile!=NULL && $profile['jk']=='L')?'selected':'';?> value="L" selected="selected">Laki-laki</option> 
									                                <option <?=($profile!=NULL && $profile['jk']=='P')?'selected':'';?> value="P">Perempuan</option> 
									                                
									                            </select>
															</div>
															
                                                            <div class="col-md-6">
																<label class="text-bold">Sekolah :</label>
															<select required class="form-control input-xs select2" name="npsn_sekolah">
                                                            <option value="">Pilih Sekolah</option>
                                                            <?php if($ref_sekolah != NULL){foreach($ref_sekolah as $val){?>
                                                                <option value="<?=$val['npsn']?>" <?=($profile!=NULL && $profile['npsn_sekolah']==$val['npsn'])?'selected':'';?>><?=$val['nama_sekolah']?></option>
                                                           <?php }}?>
                                                             </select>
															</div>
													</div>
                                                   <div class="form-group row">
															<div class="col-md-6 ">
																<label class="text-bold">Tempat Lahir :</label>
																<input required type="text"  value="<?=($profile!=NULL)?$profile['tmp_lahir']:'';?>" class="form-control" name="tmp_lahir">
                                                                <small class="text-danger">sesuai ijazah terakhir</small>
															</div>
															<div class="col-md-6 ">
									                            <label class="text-bold">Tanggal Lahir :</label>
									                            <input required type="date"  value="<?=($profile!=NULL)?$profile['tgl_lahir']:'';?>" class="form-control" name="tgl_lahir">
                                                                <small class="text-danger">sesuai ijazah terakhir</small>
															</div>
                                                    </div>
                                                    <div class="form-group row">
														<div class="col-md-6 ">
									                            <label class="text-bold">Agama :</label>
									                            <select required class="select form-control" name="id_agama">
									                                <?php if($ref_agama != NULL){ foreach($ref_agama as $val){?>
                                                                        <option value="<?=$val['id_agama']?>" <?=($profile != NULL && $profile['id_agama']==$val['id_agama'])?'selected':'';?>><?=$val['agama']?></option>
                                                                    <?php }} ?> 
									                            </select>
															</div>
                                                            <div class="col-md-6">
									                            <label class="text-bold">Nama gadis Ibu Kandung :</label>
									                            <input required type="text" name="nama_gadis_ibu_kandung"  value="<?=($profile!=NULL)?$profile['nama_gadis_ibu_kandung']:'';?>" class="form-control">
															</div>
													</div>
                                                    <h6 class="text-bold"><i class="icon-phone"></i> Kontak</h6>
								                    <hr>
                                                    <div class="form-group row">
															<div class="col-md-6 ">
																<label class="text-bold">Hand Phone :</label>
																<input required type="text" name="hp"  value="<?=($profile!=NULL)?$profile['hp']:'';?>" class="form-control">
															</div>
															<div class="col-md-6">
									                            <label class="text-bold">WhatsApp :</label>
									                            <input type="text" name="wa" value="<?=($profile!=NULL)?$profile['wa']:'';?>" class="form-control">
															</div>
                                                    </div>
                                                    <div class="form-group row">
													    <div class="col-md-6">
									                            <label class="text-bold">Telp :</label>
									                            <input type="text"  name="telp" value="<?=($profile!=NULL)?$profile['telp']:'';?>" class="form-control">
															</div>
                                                            <div class="col-md-6 ">
																<label class="text-bold">Email Undiksha :</label>
																<input type="text" name="email" readonly="readonly" value="<?=($profile!=NULL)?$profile['email']:'';?>" class="form-control">
															</div>
													</div>
                                                </div>
                                                <div class="col-md-12 col-lg-6 col-xs-12">
                                                <h6 class="no-margin text-bold"><i class=" icon-location4"></i> Alamat</h6>
								                    <hr>
                                                    <div class="form-group row">
															<div class="col-md-6">
																<label class="text-bold">Provinsi :</label>
																 <select required class="select2 form-control select-xs provinsi" name="kode_provinsi">
                                                                 <option value="">Pilih Provinsi</option>
                                                                    <?php if($ref_provinsi != NULL){foreach($ref_provinsi as $val){?>
                                                                    <option value="<?=$val['kode_provinsi']?>" <?=($profile != NULL && $profile['kode_provinsi']==$val['kode_provinsi'])?'selected':'';?>><?=$val['provinsi']?></option>
                                                                    <?php }} ?>
                                                                </select>
															</div>
															<div class="col-md-6">
									                            <label class="text-bold">Kabupaten :</label>
									                           <select required class="select2 form-control select-xs kabupaten" name="kode_kabupaten">
                                                                 <option value="">Pilih Kabupaten</option>
                                                                </select>
															</div>
													</div>
                                                    <div class="form-group row">
															<div class="col-md-6">
									                            <label class="text-bold">Kecamatan :</label>
									                            <select required class="select2 form-control select-xs kecamatan" name="kode_kecamatan">
                                                                 <option value="">Pilih Kecamatan</option>
                                                                </select>
															</div>
                                                            <div class="col-md-6">
									                            <label class="text-bold">Kelurahan :</label>
									                            	<input type="text" value="<?=($profile!=NULL)?$profile['kelurahan']:'';?>"name="kelurahan" class="form-control">
															</div>
													</div>
                                                    <div class="form-group row">
															<div class="col-md-6 col-lg-4 ">
																<label class="text-bold">RT :</label>
																<input type="text" value="<?=($profile!=NULL)?$profile['rt']:'';?>" name="rt" class="form-control">
															</div>
															<div class="col-md-6 col-lg-4">
									                            <label class="text-bold">RW :</label>
									                            <input type="text"  value="<?=($profile!=NULL)?$profile['rw']:'';?>" name="rw" class="form-control">
															</div>
                                                            <div class="col-md-6 col-lg-4 ">
																<label class="text-bold">KODE POS :</label>
																<input type="text" value="<?=($profile!=NULL)?$profile['kode_pos']:'';?>" name="kode_pos" class="form-control">
															</div>
													</div>
                                                    <div class="form-group row">
															<div class="col-md-12">
									                            <label class="text-bold">Alamat :</label>
									                            <textarea required class="form-control" name="alamat" rows="1"><?=($profile!=NULL)?$profile['alamat']:'';?></textarea>
															</div>
													</div>
                                                    <h6 class="no-margin text-bold"><i class="  icon-flag7"></i> Lain - Lain</h6>
								                    <hr>
                                                    <div class="form-group row">
							                        		<div class="col-md-6">
																<label class="text-bold">Kewarganegaraan :</label>
																<input required type="text" name="kewarganegaraan" value="<?=($profile!=NULL)?$profile['kewarganegaraan']:'';?>" class="form-control">
													       </div>

															<div class="col-md-6" >
																<label class="text-bold">Alat Transportasi :</label>
							                                    <select required class="form-control select-xs" name="id_alat_transportasi">
                                                                 <option value="">Alat Transportasi</option>
                                                                    <?php if($ref_alat_transportasi != NULL){foreach($ref_alat_transportasi as $val){?>
                                                                    <option value="<?=$val['id_alat_transportasi']?>" <?=($profile != NULL && $profile['id_alat_transportasi']==$val['id_alat_transportasi'])?'selected':'';?>><?=$val['alat_transportasi']?></option>
                                                                    <?php }} ?>
                                                                </select>
															</div>
							                        </div>
                                                    <div class="form-group row">
							                        		<div class="col-md-6 col-lg-6">
																<label class="text-bold"><input value="1" name="penerima_kps" type="checkbox" <?=($profile != NULL && $profile['penerima_kps']==1)?'checked':'';?> />  Penerima KPS :</label>
																<input type="text" name="no_kps" value="<?=($profile != NULL )?$profile['no_kps']:'';?>" placeholder="No KPS" class="form-control">
																
							                        		</div>
                                                            <div class="col-md-6 col-lg-6">
																	<label class="text-bold">Status Asuh :</label>
							                                   <select required class="form-control select-xs" name="id_status_asuh">
                                                                 <option value="">Status Asuh</option>
                                                                    <?php if($ref_status_asuh != NULL){foreach($ref_status_asuh as $val){?>
                                                                    <option value="<?=$val['id_status_asuh']?>" <?=($profile != NULL && $profile['id_status_asuh']==$val['id_status_asuh'])?'selected':'';?>><?=$val['status_asuh']?></option>
                                                                    <?php }} ?>
                                                                </select>
							                        		</div>
							                        </div>
                                                    <div class="form-group row">
							                        		<div class="col-md-12">
																	<label class="text-bold">Permalink Profil :</label>
							                                   <div class="input-group">
												<span class="input-group-addon"><?=base_url();?><br /></span>
												<input type="text" class="form-control" value="<?=$profile['permalink']?>" placeholder="ketutgede" name="permalink"><small class="text-danger">tanpa spasi hanya huruf kecil (lowercase)</small>
											</div>
							                        		</div>
							                        </div>
                                                </div>
                                                <div class="col-lg-12"><hr /></div>
                                                <?php if($profile['validasi']!='valid'){?>
                                                <div class="col-md-6">
                                                <label><input type="checkbox" name="validasi" value="valid" required  /><b class="text-warning"> <i class="icon-warning"></i> Dengan ini saya menyatakan data yang saya masukan adalah benar.</b></label>
                                                </div>
                                                <div class="col-md-6 text-right">
                                               <button type="submit" class="btn bg-indigo btn-sm  btn-ladda btn-ladda-spinner" data-spinner-color="#fff" data-style="slide-right"><span class="ladda-label">SIMPAN <i class="icon-floppy-disk position-right"></i></span></button>
                                                </div>
                                                <?php }else{
                                                    echo '<div class="col-lg-12"><b class="text-warning"> <i class="icon-warning"></i> Data valid tidak dapat dilakukan perubahan kembali. Untuk melakukan perubahan, silakan hubungi kasubag kemahasiswaan.</b></div>';
                                                } ?>
                                                </form>
											</div>
											</div>

											<div class="tab-pane <?=(isset($_GET['kesehatan']))?'active':''?>" id="icon-only-tab2">
											<?php $this->load->view('back/v_medis'); ?>
											</div>

											<div class="tab-pane <?=(isset($_GET['personalisasi']))?'active':''?>" id="icon-only-tab3">
												DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg whatever.
											</div>

											<div class="tab-pane" id="icon-only-tab4">
												Aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthet.
											</div>
										</div>
									</div>
							</div>
						</div>

						<div class="col-lg-3">

							<!-- User thumbnail -->
							<div class="thumbnail">
								<div class="thumb thumb-slide pp" align="center">
									<img src="<?=(file_exists('media/photo/'.$profile['foto']))?base_url('media/photo/'.$profile['foto']):base_url('media/photo/no-user.png');?>" style="width: 200px;" alt="">
									<div class="caption">
										<span>
                                        <button class="btn border-indigo btn-xs" onclick="$('.up').removeClass('hide');"> <i class="icon-pencil"></i> Edit </button>
										</span>
									</div>
								</div>
                              
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin"><?=($profile!=NULL)?$profile['nama']:'';?><small class="display-block"><?=($profile!=NULL)?$profile['nim']:'';?> | <?=($profile!=NULL)?$profile['email']:'';?></small></h6>
					    			
						    	</div>
					    	</div>
					    	<!-- /user thumbnail -->
                            <div class="panel panel-body up hide  border-top-success up" >
                            <form action="<?=site_url('mahasiswa/profile/upload_photo/');?>" class="form-ajax form-validate-jquery" method="post">
                            <div class="form-group" align="center" style="min-height: 300px; " >
                            
										<input type="file" style="float: bottom;" class="file-input-extensions" name="userfile" data-show-caption="false" data-show-upload="true">
							</div>
                            </form>
                            </div>
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
									<span class="<?=$color;?>"><?=(isset($ref_status['status']))?$ref_status['status']:'';?></span>
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
				</div>   
<!--COMBO KABUPATEN-->

<?php if($ref_kabupaten != NULL){foreach($ref_kabupaten as $val){?>
    <option class="hide kab id_<?=$val['kode_kabupaten']?>" data-provinsi="<?=$val['kode_provinsi']?>" value="<?=$val['kode_kabupaten']?>" <?=($profile != NULL && $profile['kode_kabupaten']==$val['kode_kabupaten'])?'selected':'';?>><?=$val['kabupaten']?></option>
<?php }} ?>
<!--COMBO KECAMATAN-->
<?php if($ref_kecamatan != NULL){foreach($ref_kecamatan as $val){?>
<option class="hide kec k_<?=$val['kode_kecamatan']?>" data-kabupaten="<?=$val['kode_kabupaten']?>" value="<?=$val['kode_kecamatan']?>" <?=($profile != NULL && $profile['kode_kecamatan']==$val['kode_kecamatan'])?'selected':'';?>><?=$val['kecamatan']?></option>
<?php }} ?>
	<script type="text/javascript" src="<?=base_url();?>assets/js/plugins/uploaders/fileinput.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/pages/uploader_bootstrap.js"></script>
<script>
   
 $('.kabupaten').append($("<option selected></option>").attr("value",$('.id_<?=$profile['kode_kabupaten']?>').val()).text($('.id_<?=$profile['kode_kabupaten']?>').text()));
 $('.kecamatan').append($("<option selected></option>").attr("value",$('.k_<?=$profile['kode_kecamatan']?>').val()).text($('.k_<?=$profile['kode_kecamatan']?>').text()));       
      $('.a_kesehatan').on('click', function () {
        $.ajax({ 
            url		: "<?=site_url('mahasiswa/profile/kesehatan');?>",
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
$('.provinsi').on('change', function () {
     $('.kabupaten').find('option').remove();
     $('.kabupaten').append($("<option></option>").attr("value","").text("Pilih Kabupaten")); 
     $(".kab").each(function(){
        var id_prov=$(this).data('provinsi');
      //  alert(id_fak);
        if($('.provinsi').val()==id_prov){
            $('.kabupaten').append($("<option></option>").attr("value",$(this).val()).text($(this).text())); 
        }
    });
    });
$('.kabupaten').on('change', function () {
     $('.kecamatan').find('option').remove();
     $('.kecamatan').append($("<option></option>").attr("value","").text("Pilih Kecamatan")); 
     $(".kec").each(function(){
        var id_kab=$(this).data('kabupaten');
      //  alert(id_fak);
        if($('.kabupaten').val()==id_kab){
            $('.kecamatan').append($("<option></option>").attr("value",$(this).val()).text($(this).text())); 
        }
    });
    });
        $(".file-input-extensions").fileinput({
        browseLabel: 'Browse',
        browseClass: 'btn btn-primary',
        uploadClass: 'btn btn-default',
        browseIcon: '<i class="icon-file-plus"></i>',
        uploadIcon: '<i class="icon-file-upload2"></i>',
        removeIcon: '<i class="icon-cross3"></i>',
        layoutTemplates: {
            icon: '<i class="icon-file-check"></i>',
            modal: modalTemplate
        },
        maxFilesNum: 10,
        allowedFileExtensions: ["jpg", "gif", "png", "txt"],
        initialCaption: "No file selected",
        previewZoomButtonClasses: previewZoomButtonClasses,
        previewZoomButtonIcons: previewZoomButtonIcons,
        fileActionSettings: fileActionSettings
    });
</script>