<div class="col-md-12 no-padding">
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
 <div class="col-md-12"> 
 <h6 class="text-bold"><i class="icon-user-check"></i> Prosedur Pindahan</h6>
 </div>
 <form action="<?=site_url('admin/kemahasiswaan/cek_nim/');?>" class="form_pindah"  data-confirm="1" method="post">
	<div class="form-group col-md-6">
    <label class="text-bold no-margin no-padding">Jurusan dituju</label>
    <input type="hidden" value="<?=$profile['nim']?>" name="nim" /> 
		<select class="form-control jurusan " name="jurusan">
        <option value="">Pilih Jurusan</option>
         <?php if($jurusan != NULL){ foreach($jurusan as $val){ ?>
         <option value="<?=$val['id_jurusan']?>"><?=$val['nama_jurusan'];?> </option>
         <?php } } ?>
         </select>
    </div>
<div class="form-group col-md-6">
    <label class="text-bold no-margin no-padding">Jenis Pindahan</label>
		<select class="form-control jurusan " name="pindahan">
        <option value="">Pilih Jenis Pindahan</option>
         <option value="pindah">Pindahan </option>
         <option value="kredit">Alih Kredit </option>
         </select>
    </div>
    <div class="form-group col-md-6">
    <label class="text-bold no-margin no-padding">Semester Masuk</label>
		<select class="form-control jurusan " name="semester">
        <option value="">Pilih Semester </option>
        <option value="1">1</option>
         <option value="3">3</option>
         <option value="5">5</option>
         <option value="7">7</option>
         <option value="9">9</option>
         </select>
    </div>
    <div class="form-group col-md-6">
    <label class="text-bold no-margin no-padding">Status Aktivasi</label>
    	<label class="form-control"><input type="checkbox" value="1" name="aktivasi" />&nbsp;&nbsp;&nbsp;centang jika sudah melakukan pembayaran SPP </label>
    </div>
    <div class="form-group col-md-6">
    <label class="text-bold no-margin no-padding">UKT Baru</label>
		<select class="form-control jurusan " name="ukt">
        <?php if($ref_spp != NULL){ foreach($ref_spp as $val){ ?>
        <option value="<?=$val['Kode_SPPMahasiswa']?>"><?=$val['Tipe'];?></option>
        <?php } } ?>
         </select>
    </div>
<div class="col-md-12" align="right">
<hr /> 
<input type="hidden" name="id" value="<?=$profile['id_mahasiswa']?>" />
<button type="submit" class="btn bg-indigo btn-sm  btn-ladda btn-ladda-spinner" data-spinner-color="#fff" data-style="slide-right"><span class="ladda-label">PROSES <i class="icon-floppy-disk position-right"></i></span></button>
</div>
</form>
</div>
<script type="text/javascript" src="<?= base_url('assets/js/custom/validate.js') ?>"></script> 
<script>
$.jGrowl.defaults.closer = false;   
$('.form_pindah').on('submit', function () {
     var l = Ladda.create(document.querySelector('.btn-ladda-spinner'));
     url =$(this).attr("action");
            l.start();
      		var data = $(this).serialize();
			$.ajax({
				type: "POST",
   	            url: $(this).attr("action"),
				data: data,
				dataType: 'json',
				success: function(result) {
				    if(result.error){
				        $.jGrowl(result['msg_body'], {
							position: 'bottom-center',
							theme: 'alert-bordered alert-styled-left alert-warning',
                            header: 'PERHATIAN !',
						});
                        l.stop();
                    }else{
                        swal({
                            title: "Anda Yakin?",
                            text: result.msg_body,
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#EF5350",
                            confirmButtonText: "Ya, Simpan!",
                            cancelButtonText: "Tidak, Batalkan!",
                            closeOnConfirm: true,
                            closeOnCancel: true
                        },
                        function (isConfirm) {
                            if (isConfirm) {
                               			$.ajax({
                            				type: "POST",
                               	            url: url+'?exc',
                            				data: data,
                            				dataType: 'json',
                            				success: function(result) {
                            					if(result.error){
                            					 $.jGrowl(result['msg_body'], {
                            							position: 'bottom-center',
                            							theme: 'alert-bordered alert-styled-left alert-warning',
                                                        header: 'PERHATIAN !',
                            						});
                                                    l.stop();
                            					}else{
                            						$.jGrowl(result['msg_body'], {
                            							position: 'bottom-center',
                            							theme: 'alert-bordered alert-styled-left alert-success',
                                                        header: 'SUKSES !',
                            						});
                                                    $(".t_kredit tbody").append(result['tr']);
                                                    l.stop();
                            					}                                               
                            				},
                            				error: function(jqXHR, textStatus, errorThrown) {
                            					 $.jGrowl(textStatus+': '+errorThrown, {
                            							position: 'bottom-center',
                            							theme: 'alert-bordered alert-styled-left alert-danger',
                                                        header: 'PERHATIAN !',
                            						});
                            					console.log(textStatus, errorThrown);
                                                l.stop();                            					
                            				}
                            			});                              
                             }else{
                                 l.stop();
                             }
                        });
                }
				},
				error: function(jqXHR, textStatus, errorThrown) {
					 $.jGrowl(textStatus+': '+errorThrown, {
							position: 'bottom-center',
							theme: 'alert-bordered alert-styled-left alert-danger',
                            header: 'PERHATIAN !',
						});
					console.log(textStatus, errorThrown);
                    l.stop();
				}
			});		
			return false;
    });

</script> 