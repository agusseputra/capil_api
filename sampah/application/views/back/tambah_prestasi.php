<form action="<?=site_url('mahasiswa/profile/save_prestasi/');?>" class="form-ajax form-validate-jquery" method="post">
		<div class="col-md-6 form-group">
				<label class="text-bold no-margin">Nama :</label>
				<input type="text" class="form-control" placeholder="contoh, Mahasiswa Berprestasi" value="<?=(isset($prestasi['nama']))?$prestasi['nama']:'';?>"  name="nama"/>
			</div>
            <div class="col-md-6 form-group">
				<label class="text-bold no-margin">Dalam Inggris :</label>
				<input type="text" class="form-control" placeholder="contoh, Mahasiswa Berprestasi" value="<?=(isset($prestasi['nama_eng']))?$prestasi['nama_eng']:'';?>" name="nama_eng" />
			</div>           
			<div class="col-md-6 col-lg-3 form-group">
				<label class="text-bold no-margin">Tanggal :</label>
				<input type="date" class="form-control" placeholder="contoh, 31/12/2000" value="<?=(isset($prestasi['tanggal']))?$prestasi['tanggal']:'';?>" name="tanggal" />
			</div>
            <div class="col-md-6 col-lg-3 form-group">
				<label class="text-bold no-margin">Capaian :</label>
				<input type="text" class="form-control" placeholder="contoh, Juara I" value="<?=(isset($prestasi['capaian']))?$prestasi['capaian']:'';?>"  name="capaian" />
			</div>
            <div class="col-md-6 col-lg-3 form-group">
				<label class="text-bold no-margin">Jenjang :</label>
				<select class="select selec2 form-control" name="jenjang" class="jenjang">
                <option value="">Pilih Jenjang</option>
                <?php if($ref_jenjang != NULL){foreach($ref_jenjang as $val){ ?>
                <option value="<?=$val['id_jenjang']?>" <?=(isset($prestasi)&&($prestasi['jenjang']==$val['nama'] || $prestasi['jenjang']==$val['id_jenjang']))?'selected':'';?> ><?=$val['nama']?></option>
                <?php }} ?>                     
                </select>
			</div>
			<div class="col-md-6 col-lg-3 form-group">
				<label class="text-bold no-margin">Kualifikasi :</label>
                <select class="select selec2 form-control" name="id_kualifikasi">
                <option value="">Pilih Kualifikasi</option>
                <?php if($ref_kualifikasi != NULL){foreach($ref_kualifikasi as $val){ ?>
                <option value="<?=$val['id_kualifikasi']?>" <?=(isset($prestasi)&&($prestasi['id_kualifikasi']==$val['id_kualifikasi']))?'selected':'';?> ><?=$val['nama']?></option>
                <?php }} ?>     
                </select>
			</div>
    		<div class="col-md-6 col-lg-2 form-group">
                <label class="text-bold no-margin">Semester :</label>
                <input type="text" placeholder="contoh, 2"  value="<?=(isset($prestasi['semester']))?$prestasi['semester']:'';?>" name="semester" class="form-control">
			</div>
            <div class="col-md-6 col-lg-2 form-group">
                <label class="text-bold no-margin">Tahun :</label>
                <input type="text" placeholder="contoh, 2016"  value="<?=(isset($prestasi['tahun']))?$prestasi['tahun']:'';?>" name="tahun" class="form-control">
			</div>
            <div class="col-md-6 col-lg-2 form-group">
                <label class="text-bold no-margin">Tempat :</label>
                <input type="text" placeholder="contoh, Singaraja"  value="<?=(isset($prestasi['tempat']))?$prestasi['tempat']:'';?>" name="tempat" class="form-control">
			</div>
            <div class="col-md-6 form-group">
                <label class="text-bold no-margin">Keterangan :</label>
                <textarea class="form-control" name="keterangan" rows="1"><?=(isset($prestasi['keterangan']))?$prestasi['keterangan']:'';?></textarea>
			</div>
	<div class="text-right col-md-12">
    <hr />
    <input type="hidden" name="id" value="<?=(isset($prestasi))?$prestasi['id_prestasi']:'';?>" />
    	<button type="submit" class="btn bg-indigo btn-sm  btn-ladda btn-ladda-spinner" data-spinner-color="#fff" data-style="slide-right"><span class="ladda-label">SIMPAN <i class="icon-floppy-disk position-right"></i></span></button>
    </div>
</form>
<script type="text/javascript" src="<?= base_url('assets/js/custom/validate.js') ?>"></script>  