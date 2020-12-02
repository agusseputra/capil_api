<div class="col-md-8 no-padding">
<div class="panel-body no-margin no-padding-top">
<div class="form-group col-md-6">
    <label class="text-bold no-margin no-padding">Nama</label>
		<span class="form-control"><?=$mahasiswa['nama']?></span>
    </div>
    <div class="form-group col-md-6">
    <label class="text-bold no-margin no-padding">NIM</label>
		<span class="form-control"><?=$mahasiswa['nim']?></span>
    </div>
    <div class="form-group col-md-6">
    <label class="text-bold no-margin no-padding">Jurusan</label>
		<span class="form-control"><?=$mahasiswa['nama_jurusan']?></span>
    </div>
<div class="form-group col-md-6">
    <label class="text-bold no-margin no-padding">Status Saat ini</label>
		<span class="form-control"><?=$ref_status[substr($mahasiswa['last_status'],-1)]['status'].', tahun '.substr($mahasiswa['last_status'],0,4).', semester '.substr($mahasiswa['last_status'],5,1);?></span>
    </div> 
 <h6 class="text-bold"><i class="icon-user-check"></i> Riwayat Perkuliahan</h6>
	<hr />
<?php $this->load->view('front/aktivitas_perkuliahan');?>
</div>

</div>
<div class="col-md-4 no-padding">
<div class="panel panel-body border-top-danger">
								<h6 class="no-margin text-bold">Ubah Status</h6>
								<p class="text-muted content-group-sm">Status akan dirubah sesuai tahun semester aktif yakni <b><?=$setting['tahun_aktif'].'/'.$setting['semester_aktif'];?></b>. Mohon cek data mahasiswa terlebih dahulu,</p>
                                <form action="<?=site_url('admin/kemahasiswaan/ubah_status/');?>" class="form-ajax form-validate-jquery" method="post" data-confirm="1">
                                <div class="input-group">
                                				<select class="form-control select-xs" name="status">
                                                <option value="">Pilih Status</option>
                                                <?php foreach($ref_status as $val){?>
                                                    <option value="<?=$val['id_status'];?>"><?=$val['status'];?></option>
                                                <?php } ?>
                                                </select>
												<span class="input-group-btn">
													<button type="submit" class="btn bg-indigo btn-sm  btn-ladda btn-ladda-spinner" data-spinner-color="#fff" data-style="slide-right"><span class="ladda-label">SIMPAN <i class="icon-floppy-disk position-right"></i></span></button>
												</span>
                                </div>
                                <input type="hidden" value="<?=md5($mahasiswa['id_mahasiswa']);?>" name="id" />
                                            </form>
							</div>
</div>
<script type="text/javascript" src="<?= base_url('assets/js/custom/validate.js') ?>"></script>