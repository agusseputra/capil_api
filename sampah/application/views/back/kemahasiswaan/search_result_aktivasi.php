<div class="col-md-12 no-padding">
<h6 class="text-bold"><i class="icon-profile"></i> Informasi Dasar</h6>
	<hr />
<div class="col-md-6">	
	<div class="form-group">
    <label class="text-bold no-margin no-padding">Nama</label>
		<div> <i class="status-mark border-blue "></i> <?=$profile['nama']?></div>
        <hr class="no-margin" />
    </div>
    <div class="form-group">
    <label class="text-bold no-margin no-padding">NIM</label>
		<div><i class="status-mark border-blue "></i> <?=$profile['nim']?></div>
        <hr class="no-margin" />
    </div>
    <div class="form-group">
    <label class="text-bold no-margin no-padding">Jurusan</label>
		<div><i class="status-mark border-blue "></i> <?=$profile['nama_jurusan']?></div>
        <hr class="no-margin" />
    </div>
    <div class="form-group">
    <label class="text-bold no-margin no-padding">Tempat, Tanggal Lahir</label>
		<div><i class="status-mark border-blue "></i> <?=$profile['tmp_lahir'].', '.@tgl_indo($profile['tgl_lahir']);?></div>
        <hr class="no-margin" />
    </div>
    <div class="form-group">
    <label class="text-bold no-margin no-padding">Jenis Kelamin</label>
		<div><i class="status-mark border-blue "></i> <?=($profile['jk']==1)?'Laki-Laki':'Perempuan';?></div>
        <hr class="no-margin" />
    </div>
    </div>
    <div class="col-md-6">
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
    <div class="form-group">
    <label class="text-bold no-margin no-padding">Telp</label>
		<div> <i class="status-mark border-blue "></i> <?=$profile['telp']?></div>
        <hr class="no-margin" />
    </div>
    <div class="form-group">
    <label class="text-bold no-margin no-padding">Handphone</label>
		<div> <i class="status-mark border-blue "></i> <?=$profile['hp']?></div>
        <hr class="no-margin" />
    </div>
   <div class="form-group">
    <label class="text-bold no-margin no-padding">Last Status</label>
		<div> <i class="status-mark border-blue "></i> <?=$profile['last_status']?></div>
        <hr class="no-margin" />
    </div>
    </div>
 <h6 class="text-bold"><i class="icon-user-check"></i> Riwayat Perkuliahan</h6>
	<hr />
<?php $this->load->view('front/aktivitas_perkuliahan');?>
<hr />
<div class="col-md-12" align="right"> 
<form action="<?=site_url('admin/kemahasiswaan/save_aktivasi/');?>" class="form-ajax form-validate-jquery" method="post" data-confirm="1">
<input type="hidden" name="id" value="<?=md5($profile['id_mahasiswa'])?>" />
<button type="submit" class="btn bg-indigo btn-sm  btn-ladda btn-ladda-spinner" data-spinner-color="#fff" data-style="slide-right"><span class="ladda-label">AKTIVASI <i class="icon-floppy-disk position-right"></i></span></button>
</form>
</div>
</div>
<script type="text/javascript" src="<?= base_url('assets/js/custom/validate.js') ?>"></script>  