<div class="col-md-6 no-padding">
<div class="panel panel-flat">
<div class="panel-body no-margin no-padding-top">
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
    <label class="text-bold no-margin no-padding">Jenis Kelamin</label>
		<div><i class="status-mark border-blue "></i> <?=($profile['jk']==1)?'Laki-Laki':'Perempuan';?></div>
        <hr class="no-margin" />
    </div>
    <div class="form-group">
    <label class="text-bold no-margin no-padding">Tempat, Tanggal Lahir</label>
		<div><i class="status-mark border-blue "></i> <?=$profile['tmp_lahir'].', '.@tgl_indo($profile['tgl_lahir']);?></div>
        <hr class="no-margin" />
    </div>
    <div class="form-group">
    <label class="text-bold no-margin no-padding">Agama</label>
		<div><i class="status-mark border-blue "></i> <?=$profile['agama']?></div>
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
    <label class="text-bold no-margin no-padding">Handphone/wa</label>
		<div> <i class="status-mark border-blue "></i> <?=$profile['hp'].'/'.$profile['wa']?></div>
        <hr class="no-margin" />
    </div>
    <div class="form-group">
    <label class="text-bold no-margin no-padding">Jurusan</label>
		<div> <i class="status-mark border-blue "></i> <?=$profile['nama_jurusan']?></div>
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
   <h6 class="text-bold"><i class="icon-quotes-right2"></i> Informasi Lainnya</h6>
                	<hr />
	<div class="col-sm-6">
			<div class="form-group">
                <label class="text-bold no-margin no-padding">NIK</label>
			    <div> <i class="status-mark border-blue "></i> <?=$profile['nik']?></div><hr class="no-margin" />
            </div>
           	<div class="form-group">
                <label class="text-bold no-margin no-padding">NISN</label>
			    <div> <i class="status-mark border-blue "></i> <?=$profile['nisn']?></div><hr class="no-margin" />
            </div>
            <div class="form-group">
                <label class="text-bold no-margin no-padding">SMA</label>
			    <div> <i class="status-mark border-blue "></i> <?=$profile['nisn']?></div><hr class="no-margin" />
            </div>
            
	</div>
    <div class="col-md-6">
    <div class="form-group">
                <label class="text-bold no-margin no-padding">Kewarganegaraan</label>
			    <div> <i class="status-mark border-blue "></i> <?=$profile['kewarganegaraan']?></div><hr class="no-margin" />
            </div>
            <div class="form-group">
                <label class="text-bold no-margin no-padding">Beasiswa</label>
			    <div > <i class="status-mark border-blue "></i> -</div><hr class="no-margin" />
            </div>
            <div class="form-group">
                <label class="text-bold no-margin no-padding">Tempat Kuliah</label>
			    <div > <i class="status-mark border-blue "></i> <?=$profile['tempatkuliah']?></div><hr class="no-margin" />
            </div>
    </div>
 <?php if($tugas_akhir != NULL){ ?>
 <h6 class="text-bold"><i class="icon-quotes-right2"></i> Informasi Tugas Akhir</h6>
        	<hr />
	<div class="form-group col-xs-12">
        <label class="text-bold no-margin no-padding">Judul Tugas Akhir</label>
	    <div > <i class="status-mark border-blue "></i> <?=$tugas_akhir['judul']?></div><hr class="no-margin" />
    </div>
   	<div class="form-group col-lg-6 col-md-12">
        <label class="text-bold no-margin no-padding">Pembimbing 1</label>
	    <div> <i class="status-mark border-blue "></i> <?=$tugas_akhir['pembimbing_1']?></div><hr class="no-margin" />
    </div>
    <div class="form-group col-lg-6 col-md-12">
        <label class="text-bold no-margin no-padding">Pembimbing 2</label>
	    <div> <i class="status-mark border-blue "></i> <?=$tugas_akhir['pembimbing_2']?></div><hr class="no-margin" />
    </div>
    <div class="form-group col-lg-6 col-md-12">
        <label class="text-bold no-margin no-padding">Tanggal Lulus</label>
	    <div > <i class="status-mark border-blue "></i> <?= $tugas_akhir['tgl_lulus']?></div><hr class="no-margin" />
    </div>
    <div class="form-group col-lg-6 col-md-12">
        <label class="text-bold no-margin no-padding">No Ijazah</label>
	    <div > <i class="status-mark border-blue "></i> <?= $tugas_akhir['no_ijazah']?></div><hr class="no-margin" />
    </div>
     <div class="form-group col-lg-6 col-md-12">
        <label class="text-bold no-margin no-padding">No TA Akademik</label>
	    <div > <i class="status-mark border-blue "></i> <?= $tugas_akhir['no_ta_akademik']?></div><hr class="no-margin" />
    </div>
    <div class="form-group col-lg-6 col-md-12">
        <label class="text-bold no-margin no-padding">No Akta</label>
	    <div > <i class="status-mark border-blue "></i> <?= $tugas_akhir['no_akta']?></div><hr class="no-margin" />
    </div>
 <?php } ?>
</div>
</div>
</div>
<div class="col-md-6">
<?php if($pendidikan != NULL){ ?>
<h6 class="text-bold"><i class="icon-user-check"></i> Penerimaan</h6>
	<hr />
<?php  $this->load->view('front/riwayat_pendidikan');?>
<hr />
<?php } ?>
<h6 class="text-bold"><i class="icon-user-check"></i> Status Mahasiswa</h6>
	<hr />
<?php $this->load->view('front/aktivitas_perkuliahan');?>
<hr />
<h6 class="text-bold"><i class="icon-users4"></i> Data Keluarga</h6>
	<hr />
			<table class="table table-framed table-striped table-xxs">
					<thead>
						<tr class="alpha-indigo">
							<th >Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Hubungan</th>
                            <th>Pendidikan/Pekerjaan</th>
                            <th>Alamat</th>
						</tr>
					</thead>
					<tbody>
						<?php if($keluarga != NULL){foreach($keluarga as $val){?>
                        <tr id="<?=$val['id_keluarga'];?>">
							<td><h5 class="no-margin"><?=$val['nama'];?></h5><div class="text-muted text-size-small"><?=$val['nik'];?></div></td>
                            <td><?=$val['tmp_lahir']?><span class="display-block text-muted"><?=tgl_indo($val['tgl_lahir']);?></span></td>
                            <td><?=$val['hubungan']?><div class="text-muted text-size-small "><span class="status-mark border-blue position-left"></span> Menikah</div></td>
                            <td><a href="#" class="text-default display-inline-block">
									<span class="text-semibold"><?=$val['pendidikan']?>/<?=$val['nama_pekerjaan'];?></span>
									<span class="display-block text-muted">Penghasilan : Rp. <?=number_format($val['pendapatan'],0);?></span>
								</a>
							</td>
                            <td><?=$val['alamat']?></td>
						</tr>
                        <?php }} ?>
                    </tbody>
				</table>
</div>