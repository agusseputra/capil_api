<div class="col-md-6">
<h6 class="text-bold"><i class="icon-profile"></i> Informasi Dasar</h6>
	<hr />
	<div class="form-group col-md-6">
    <label class="text-bold no-margin no-padding">Nama</label>
		<div> <i class="status-mark border-blue "></i> <?=$profile['nama']?></div>
        <hr class="no-margin" />
    </div>
    <div class="form-group col-md-6">
    <label class="text-bold no-margin no-padding">NIM</label>
		<div><i class="status-mark border-blue "></i> <?=$profile['nim']?></div>
        <hr class="no-margin" />
    </div>
    <div class="form-group col-md-6">
    <label class="text-bold no-margin no-padding">Jenis Kelamin</label>
		<div><i class="status-mark border-blue "></i> <?=($profile['jk']=='L')?'Laki-Laki':'Perempuan';?></div>
        <hr class="no-margin" />
    </div>
    <div class="form-group col-md-6">
    <label class="text-bold no-margin no-padding">Jurusan</label>
		<div><i class="status-mark border-blue "></i> <?=$profile['nama_jurusan']?></div>
        <hr class="no-margin" />
    </div>
    <div class="form-group col-md-6">
    <label class="text-bold no-margin no-padding">Tempat, Tanggal Lahir</label>
		<div><i class="status-mark border-blue "></i> <?=$profile['tmp_lahir'].', '.@tgl_indo($profile['tgl_lahir']);?></div>
        <hr class="no-margin" />
    </div>
     <div class="form-group col-md-6">
    <label class="text-bold no-margin no-padding">Email</label>
		<div> <i class="status-mark border-blue "></i> <?=$profile['email']?></div>
        <hr class="no-margin" />
    </div>
    <div class="form-group col-md-6">
    <label class="text-bold no-margin no-padding">Email Lainnya</label>
		<div> <i class="status-mark border-blue "></i> <?=$profile['email2']?></div>
        <hr class="no-margin" />
    </div>
    <div class="form-group col-md-6">
    <label class="text-bold no-margin no-padding">Telp</label>
		<div> <i class="status-mark border-blue "></i> <?=$profile['telp']?></div>
        <hr class="no-margin" />
    </div>
    <div class="form-group col-md-6">
    <label class="text-bold no-margin no-padding">Handphone</label>
		<div> <i class="status-mark border-blue "></i> <?=$profile['hp']?></div>
        <hr class="no-margin" />
    </div>
    <div class="form-group col-md-6">
    <label class="text-bold no-margin no-padding">WhatsApp</label>
		<div> <i class="status-mark border-blue "></i> <?=$profile['wa']?></div>
        <hr class="no-margin" />
    </div>  
        </div>
        <div class="col-md-6">
        <div class="alert alert-warning alert-styled-left col-xs-12">
			<button type="button" class="close" data-dismiss="alert">x</button>
			<span class="text-bold">Perhatian!</span>
            <ul>
                <li>Perhatikan kesesuaian data dengan ktp maupun ijazah terakhir mahasiswa.</li>
                <li>Perhatikan penulisan huruf pada nama, serta tempat lahir.</li>
                <li>Mohon ikuti format penulisan tanggal lahir yang telah ditetapkan oleh sistem, contoh 31/12/2017</li>
                <li>Semua text wajib diisi.</li>
            </ul>
	    </div>
        <h6 class="text-bold"><i class="icon-profile"></i> Update Biodata</h6>
    	   
        <div class="col-md-12">
        
        <form action="<?=site_url('admin/kemahasiswaan/save_update_nama/'.md5($profile['id_mahasiswa']));?>" data-confirm="1" class="form-ajax form-validate-jquery" method="post">
        <div class="form-group col-xs-12">
            <label class="text-bold no-margin no-padding">Nama Baru </label>
      		<input type="text" class="form-control" required name="nama" value="<?=$profile['nama']?>"  placeholder="contoh, I Gede Made Nyoman Ketut">
        </div>
        <div class="form-group col-xs-6">
            <label class="text-bold no-margin no-padding">Tempat Lahir</label>
      		<input type="text" class="form-control" required name="tmp_lahir" value="<?=$profile['tmp_lahir']?>"  placeholder="contoh, Singaraja">
        </div>
        <div class="form-group col-xs-6">
            <label class="text-bold no-margin no-padding">Tanggal Lahir </label> 
      		<input type="date" class="form-control"  required name="tgl_lahir"  value="<?=$profile['tgl_lahir']?>" placeholder="contoh, 31/12/1990">
        </div>
        <div class="form-group col-xs-6">
        <label class="text-bold no-margin no-padding">Jenis Kelamin </label>
      		<select class="form-control select-xs" required name="jk">
            <option value="">Pilih Jenis Kelamin</option>
            <option <?=($profile['jk']=='L')?'selected':'';?>  value="L">Laki-Laki</option> 
            <option <?=($profile['jk']=='P')?'selected':'';?> value="P">Perempuan</option> 
            </select>
        </div>
        <div class="form-group col-xs-6">
            <label class="text-bold no-margin no-padding">NIK </label>  
      		<input type="text" class="form-control" name="nik"  required value="<?=$profile['nik']?>" placeholder="contoh, 15080929910">
        </div>
        <div class="form-group col-xs-12">
        <button type="submit" class="btn bg-indigo btn-sm  btn-ladda btn-ladda-spinner" data-spinner-color="#fff" data-style="slide-right"><span class="ladda-label">SIMPAN <i class="icon-floppy-disk position-right"></i></span></button>
        </div>
       </form>   
              
        </div>
        
	
        <div class="col-md-12 hide">
        <div class="col-md-12"><hr /></div>
        <h6 class="text-bold"><i class="icon-lock2"></i> Update Password SIAK</h6>
        <form action="<?=site_url('admin/kemahasiswaan/save_update_psw/'.md5($profile['id_mahasiswa']));?>" class="form-ajax form-validate-jquery" method="post">
                <div class="form-group col-md-5">
    <label class="text-bold no-margin no-padding">Password Baru</label>
		<input type="password" class="form-control"  name="psw"  placeholder="******">
    </div>  
    <div class="form-group col-md-5">
    <label class="text-bold no-margin no-padding">Password Baru Kembali</label>
		<input type="password" name="psw2" class="form-control"   placeholder="*****">
    </div> 
    <div class="form-group col-md-2">
    <br />
		<button type="submit" class="btn bg-indigo btn-sm  btn-ladda btn-ladda-spinner" data-spinner-color="#fff" data-style="slide-right"><span class="ladda-label">SIMPAN <i class="icon-floppy-disk position-right"></i></span></button>
    </div>  
    </form> 
        </div>
        </div>
 <script type="text/javascript" src="<?= base_url('assets/js/custom/validate.js') ?>"></script> 