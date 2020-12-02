<form action="<?=site_url('mahasiswa/profile/save_keluarga/');?>" class="form-ajax form-validate-jquery" method="post">
<div class="col-lg-6 col-md-12">
<h6 class="no-margin text-bold"><i class="icon-vcard"></i> Informasi Dasar</h6>
<hr>
														<div class="col-md-6 form-group">
																<label class="text-bold no-margin">Nama :</label>
																<input type="text" class="form-control no-margin" name="nama" value="<?=(isset($keluarga))?$keluarga['nama']:''?>" placeholder="contoh, I Gede Kadek Komang" />
															</div>
                                                            <div class="col-md-6 form-group">
									                            <label class="text-bold no-margin">Status :</label>
									                            <select name="id_hubungankeluarga" class="select form-control">
                                                                <option value="">Pilih Status</option>
									                                <?php if($ref_hubungankeluarga != NULL){foreach($ref_hubungankeluarga as $val){ ?>
                                                                    <option value="<?=$val['id_hubungankeluarga']?>" <?=((isset($keluarga))&&$keluarga['id_hubungankeluarga']==$val['id_hubungankeluarga'])?'selected':'';?>><?=$val['hubungan']?></option> 
                                                                    <?php }} ?>
									                                
									                            </select>
															</div>
															 <div class="col-md-6  form-group">
																<label class="text-bold no-margin">Jenis Kelamin :</label>
																<select name="jk" class="select  selec2 form-control">
									                                <option value="1" <?=((isset($keluarga))&&$keluarga['jk']=='1')?'selected':''?> >Laki-laki</option> 
									                                <option value="2" <?=((isset($keluarga))&&$keluarga['jk']=='2')?'selected':''?>>Perempuan</option> 
									                                
									                            </select>
															</div>
															<div class="col-md-6 form-group">
																<label class="text-bold no-margin">NIK :</label>
															<input type="text" name="nik" class="form-control" value="<?=(isset($keluarga))?$keluarga['nik']:'';?>" placeholder="contoh, 1029930293993039" />
															</div>
															<div class="col-md-6 form-group">
																<label class="text-bold no-margin">Tempat Lahir :</label>
																<input type="text" name="tmp_lahir"  value="Singaraja" class="form-control" placeholder="contoh, Singaraja" value="<?=(isset($keluarga))?$keluarga['tmp_lahir']:'';?>">
															</div>
															<div class="col-md-6 form-group">
									                            <label class="text-bold no-margin">Tanggal Lahir :</label>
									                            <input type="date" name="tgl_lahir"  value="<?=(isset($keluarga))?$keluarga['tgl_lahir']:'';?>" placeholder="contoh, 31/12/2000" class="form-control">
															</div>

                                                       <div class="col-md-6 form-group">
																<label class="text-bold no-margin">Pendidikan Terakhir :</label>
																<select name="id_pendidikan" class="select selec2 form-control">
									                                <option value="">Pilih Pendidikan</option> 
									                               <?php if($ref_pendidikan != NULL){foreach($ref_pendidikan as $val){ ?>
                                                                    <option value="<?=$val['id_pendidikan']?>" <?=((isset($keluarga))&&$keluarga['id_pendidikan']==$val['id_pendidikan'])?'selected':'';?>><?=$val['pendidikan']?></option> 
                                                                    <?php }} ?>
									                                
									                            </select>
															</div>
															<div class="col-md-6 form-group">
																<label class="text-bold no-margin">Pekerjaan :</label>
																<select name="id_pekerjaan" class="select selec2 form-control">
									                                 <option value="">Pilih Pekerjaan</option> 
									                               <?php if($ref_pekerjaan != NULL){foreach($ref_pekerjaan as $val){ ?>
                                                                    <option value="<?=$val['id_pekerjaan']?>" <?=((isset($keluarga))&&$keluarga['id_pekerjaan']==$val['id_pekerjaan'])?'selected':'';?>><?=$val['nama_pekerjaan']?></option> 
                                                                    <?php }} ?>
									                            </select>
															</div>
                                                            <div class="col-md-6 form-group">
																<label class="text-bold no-margin">Pendapatan :</label>
																<input type="number" name="pendapatan" value="<?=(isset($keluarga))?$keluarga['pendapatan']:'';?>" placeholder="contoh, 2500000" class="form-control">
															</div>
                                                            <div class="col-md-6 form-group">
																<label class="text-bold no-margin">HP :</label>
																<input type="text"  name="hp"value="<?=(isset($keluarga))?$keluarga['hp']:'';?>" placeholder="contoh, 0829282892829" class="form-control">
															</div>
                                                            <div class="col-md-6 form-group">
									                            <label class="text-bold no-margin">Status :</label>
									                            <select name="status" class="select form-control">
                                                                <option value="">Pilih Status</option>
									                                <?php if($ref_status != NULL){foreach($ref_status as $val){ ?>
                                                                    <option value="<?=$val['kode_status']?>" <?=((isset($keluarga))&&$keluarga['status']==$val['kode_status'])?'selected':'';?>><?=$val['status']?></option> 
                                                                    <?php }} ?>
									                                
									                            </select>
															</div>

</div>
<div class="col-lg-6 col-md-12">

                                                    
<h6 class="no-margin text-bold"><i class=" icon-location4"></i> Alamat</h6>
								                    <hr>
                                                    
                                                      <div class="col-md-6 form-group">
																<label class="text-bold no-margin">Kewarganegaraan :</label>
																<input type="text" name="kewarganegaraan"  value="<?=(isset($keluarga))?$keluarga['kewarganegaraan']:'';?>" placeholder="contoh, Indonesia" class="form-control">
															</div>
															<div class="col-md-6 form-group ">
																<label class="text-bold no-margin">Provinsi :</label>
																<select name="kode_provinsi" required class="select2 form-control select-xs provinsi" >
                                                                 <option value="">Pilih Provinsi</option>
                                                                    <?php if($ref_provinsi != NULL){foreach($ref_provinsi as $val){?>
                                                                    <option value="<?=$val['kode_provinsi']?>" <?=((isset($keluarga)) && $keluarga['kode_provinsi']==$val['kode_provinsi'])?'selected':'';?>><?=$val['provinsi']?></option>
                                                                    <?php }} ?>
                                                                </select>
															</div>
                                                    		<div class="col-md-6 form-group">
									                            <label class="text-bold no-margin">Kabupaten :</label>
									                             <select name="kode_kabupaten" required class="select2 form-control select-xs kabupaten">
                                                                 <option value="">Pilih Kabupaten</option>
                                                                </select>
															</div>
                                                            <div class="col-md-6 form-group">
									                            <label class="text-bold no-margin">Kecamatan :</label>
									                            <select name="kode_kecamatan" required class="select2 form-control select-xs kecamatan" >
                                                                 <option value="">Pilih Kecamatan</option>
                                                                </select>
															</div>
                                                    <div class="form-group col-md-12">
                                                    <label class="text-bold no-margin">Alamat :</label>
                                                    <textarea class="form-control" name="alamat" rows="1"><?=(isset($keluarga))?$keluarga['alamat']:'';?></textarea>
                                                    </div>
</div>

                                                <div class="col-md-12 col-lg-12 col-xs-12 text-right">
                                                <hr />
							                        	<button type="submit" class="btn bg-indigo btn-sm  btn-ladda btn-ladda-spinner" data-spinner-color="#fff" data-style="slide-right"><span class="ladda-label">SIMPAN <i class="icon-floppy-disk position-right"></i></span></button>
                                                </div>
                                                <input type="hidden" name="id" value="<?=(isset($keluarga))?$keluarga['id_keluarga']:'';?>" />
</form>
<!--COMBO KABUPATEN-->
<?php if($ref_kabupaten != NULL){foreach($ref_kabupaten as $val){?>
    <option class="hide kab id_<?=$val['kode_kabupaten']?>" data-provinsi="<?=$val['kode_provinsi']?>" value="<?=$val['kode_kabupaten']?>" ><?=$val['kabupaten']?></option>
<?php }} ?>
<!--COMBO KECAMATAN-->
<?php if($ref_kecamatan != NULL){foreach($ref_kecamatan as $val){?>
<option class="hide kec k_<?=$val['kode_kecamatan']?>" data-kabupaten="<?=$val['kode_kabupaten']?>" value="<?=$val['kode_kecamatan']?>"><?=$val['kecamatan']?></option>
<?php }} ?>
<script type="text/javascript" src="<?= base_url('assets/js/custom/validate.js') ?>"></script>  
<script>
$('.kabupaten').append($("<option selected></option>").attr("value",$('.id_<?=(isset($keluarga))?$keluarga['kode_kabupaten']:'';?>').val()).text($('.id_<?=(isset($keluarga))?$keluarga['kode_kabupaten']:'';?>').text()));
$('.kecamatan').append($("<option selected></option>").attr("value",$('.k_<?=(isset($keluarga))?$keluarga['kode_kecamatan']:'';?>').val()).text($('.k_<?=(isset($keluarga))?$keluarga['kode_kecamatan']:'';?>').text()));       
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
</script>