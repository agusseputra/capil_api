<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=(isset($title))?$title:'Pangkalan Data mahasiswa';?></title>
        <meta name="description" content="Sistem Informasi Pangkalan Data Mahasiswa Undiksha">
    <meta name="author" content="Ketut Agus Seputra - UPT TIK UNDIKSHA">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/limitless/assets/images/undiksha.png">
	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css_f/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css_f/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css_f/core.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css_f/components.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css_f/colors.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css_f/extras/animate.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core/libraries/jquery.min.js"></script>
	<div id="respon"> </div>

</head>
<body data-spy="scroll" data-target=".sidebar-fixed" class="navbar-bottom has-fixed-header pace-done navbar-top layout-boxed sidebar-opposite-visible">  <!-- pace-done navbar-top --> 

<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>

	<!-- Page header -->
	<div class="page-header page-header-default page-header-xs"> <!-- <div class="page-header page-header-default page-header-fixed">-->

		<!-- Main navbar -->    <!--default-->
		<div class="navbar navbar-inverse navbar-static-top navbar-fixed-top" id="navbar-main"> <!--navbar navbar-inverse navbar-transparent-->
			<div class="navbar-boxed">
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo base_url(); ?>">Bitconnect Transfer</a>
					<!-- <img src="<?php echo base_url(); ?>/assets/limitless/assets/images/logo_undiksha.png" alt="Undiksha"> -->
					<ul class="nav navbar-nav pull-right visible-xs-block">
						<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-grid3"></i></a></li>
					</ul>
				</div>

				<div class="navbar-collapse collapse" id="navbar-mobile">
					

					<div class="navbar-right">
						<ul class="nav navbar-nav navbar-nav-material">
							<li><a href="#"><i class="icon-user"></i> Yoga Jayantara</a></li> <!-- icon-lock5 icon-enter-->		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /main navbar -->


		<!-- Page header content -->
     
	</div>
	<!-- /page header -->

<div class="page-container">
    <div class="page-content">
<div class="panel panel-flat  border-top-info">
<div class="col-md-12 bg-blue-800 text-white" >
<div class="media-left media-middle" >
	<i class="icon-user-tie icon-2x"></i>
</div>

<div class="media-left">
	<h2 class=" ">
		<b >APLIKASI TRANSFER BITCONNECT</b>  
        <small class="display-block text-white  no-margin">Modul berfungsi untuk melakukan transfer wallet secara bersamaan sesuai data yang telah tersimpan.</small>
	</h2>
    
</div>
</div>
<div class="panel-body">
<div class="col-lg-12">
<hr /></div>
<table class="table table-striped table-xxs t_btc">
<thead>
<tr class="bg-info text-bold"><th >Nama</th><th width="50" >Jumlah</th><th>Adress</th><th width="100">Aksi</th></tr>
</thead>
<tbody>
<?php if($btc != NULL){$i=1; foreach($btc as $val){?>
<tr><td><input type="hidden" class="id" value="<?=$val['id']?>" />
<input type="text" class="form-control input-xs nama" value="<?=$val['nama']?>" /> </td>
<td><input type="text" class="form-control input-xs num" value="<?=$val['num']?>" /></td>
<td><input type="text" class="form-control input-xs address" value="<?=$val['address']?>" /></td>
<td><button class="up" title="update" ><i class="icon-floppy-disk"></i></button> <a title="delete" href="<?=site_url('data/delete_btc/'.$val['id'])?>" onclick="return confirm('Are you sure?')" ><i class="icon-trash"></i> </a> </td></tr>
    <?php $i++; }} ?>
</tbody>
<tfoot>
<tr class="border-top">
<td colspan="3">
<div class="text-warning">
<ul>
<li>Pastikan klik icon save <i class="icon-floppy-disk"></i> setiap perubahan data pada tabel.</li>
<li>Untuk menghapus data, klik tombol icon delete <i class="icon-trash"></i></li>
<li>Untuk melakukan transfer user terlebih dahulu harus login pada website <a href="https://bitconnect.co/">https://bitconnect.co/</a></li>
<li>Pastikan data telah tersimpan benar sesuai tabel diatas sebelum klik tombol <b class="text-danger">RUN</b></li>
</ul>
</div>
</td>
<td  align="right">
<button class="run btn btn-primary" >RUN</button>
</td></tr>
</tfoot>
</table>
<a  data-toggle="modal" data-target="#modal_theme_primary"><i class="icon-plus22"></i>TAMBAH DATA</a>
<div class="hide">
<form action="https://bitconnect.co/send_coin" method="post" accept-charset="utf-8" id="send-bitconnect-form" class="send-coin-form" autocomplete="off" onsubmit="return false" novalidate="novalidate"><div style="display:none">
<input type="hidden" name="ci_csrf_token" value="f5229c2e3fdeb99a1d94a1f46fa99c43">
</div> <div class="form-group">
<label class="control-label" for="to_coin_address">To address</label>
<div class="input-group">
<div class="input-group-btn vat">
<span class="btn btn-default w40px" disabled=""><i class="fa fa-chain"></i></span>
</div>

<input autocomplete="off" style="height:34px;" class="form-control" type="text" name="to_coin_address" id="send_to_coin_address" placeholder="BitConnect Address">
</div>
</div>
<div class="form-group">
<label class="control-label" for="to_coin_address">Quantity in BitConnect</label>
<div class="input-group">
<div class="input-group-btn vat">
<span class="btn btn-default w40px" disabled=""><i class="fa fa-bitcoin"></i></span>
</div>

<input autocomplete="off" style="height:34px;" class="form-control error" type="text" name="coin" id="send_amount_in_coin" placeholder="Quantity in BitConnect" aria-required="true" aria-invalid="true"><label for="send_amount_in_coin" class="error">Please enter a valid number.</label>
<div class="input-group-btn vat ">
<span class="btn btn-default mnw100 all_bcc_minus_fee_send">ALL</span>
</div>
</div>
<span class="text-black">Transaction Fee : 0.0001 BCC</span>
</div>
<input type="foobar" name="autocomplete_trap" id="autocomplete_trap" autocomplete="off" style="display: none;">
<div class="form-group">
<label class="control-label" for="to_coin_address">Password</label>
<div class="input-group">
<div class="input-group-btn vat">
<span class="btn btn-default w40px" disabled=""><i class="fa fa-key"></i></span>
</div>

<input autocomplete="off" style="height:34px;" class="form-control valid" type="password" name="password" id="send_password" placeholder="Enter your password" aria-required="true" aria-invalid="false">
</div>
</div>
<div class="form-group captcha-container" id="bitconnect-send-captcha-if-required"></div>
 <input type="hidden" value="BCC" name="currency" id="currency">
<input type="hidden" value="save" name="save">
<button type="submit" class="btn btn-primary send-bitconnect-submit"><i class="fa fa-bitcoin  progress-icon fa-lg" data-icon="fa-bitcoin" style="background-position: right;filter: brightness(0) invert(1)"></i> Withdraw from BCC wallet
</button>
</form>
</div>
</div>
</div>
</div>
</div>




	<!-- Footer -->
	<div class="navbar navbar-default navbar-fixed-bottom footer">
		
	</div>
    
 <div id="modal_theme_primary" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header bg-primary">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h6 class="modal-title"><i class="icon-truck position-left"></i> TAMBAH DATA</h6>
								</div>
                           
								<div class="modal-body">
                                    <form action="<?=site_url('data/save_btc')?>" class="f_save">
   	<div class="row col-lg-12">
    <table class="table table-xxs t_btc">
    <thead>
    <tr class="bg-info text-bold"><th >Nama</th><th width="50" >Jumlah</th><th>Adress</th></tr>
    </thead>
    <tbody>
    <tr><td><input type="hidden" class="id[]" value="" />
    <input type="text" name="nama[]" class="form-control input-xs nama" value=""/> </td>
    <td><input type="text" name="num[]" class="form-control input-xs num" value="" /></td>
    <td><input type="text" name="address[]" class="form-control input-xs address" value="" /></td>
    </tr>
    </tbody>
    <tfoot>
    <tr><td colspan="3"><a class="ad_tb">Tambah Data</a></td></tr>
    </tfoot>
    </table>
	</div>
    <div class="modal-footer">
	<button type="button" class="btn btn-link" data-dismiss="modal">Batal</button>
	<button type="submit" class="btn btn-primary btn-ladda btn-ladda-spinner" data-style="zoom-in">Simpan</button>
    </div>
     </form>
                                </div>
                        </div>
						</div>
					</div>
	<!-- /footer -->
<!-- Theme JS files -->	
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/ui/drilldown.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/ui/nicescroll.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/pages/components_buttons.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/plugins/buttons/spin.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/plugins/buttons/ladda.min.js"></script>
       <script type="text/javascript" src="<?= base_url() ?>assets/js/plugins/notifications/jgrowl.min.js"></script>
    
<script>
$('.run').on('click', function () {
    if (confirm('Anda Yakin Menjalankan Proses Transfer?')) {
      var obj = {
      "1": "inflammable",
      "2": "no duh"
    };   
    $.each( obj, function( key, value ) {
      $('#send_amount_in_coin').val(key);
                $('#send_to_coin_address').val('address'+value);
                $('.send-bitconnect-submit').click();
    });
    
    $.jGrowl.defaults.closer = false;
    $.jGrowl("Data Tersimpan, silakan cek laporan", {
                    header: "Sukses",
                    theme: 'alert-styled-left bg-success',
                    afterOpen: function() {
                            setTimeout(function(){
                                window.location.href = "<?=site_url('data/btc');?>";
                             }, 1500);
                    }
                });
    history.replaceState({pg:1}, "pg home", "?sukses=");
} else {
    // Do nothing!
}
  
});
$('.send-coin-form').on('submit', function () {
   console.log('oke');
    });
$('.up').on('click', function(){
        var id=$(this).closest('tr').find('.id').val();
        var nama=$(this).closest('tr').find('.nama').val();
        var num=$(this).closest('tr').find('.num').val();
        var address=$(this).closest('tr').find('.address').val();
        var tr=$(this);
            $.ajax({
				type: "POST",
   	            url: "<?=site_url('data/update_btc')?>",
				data: {nama:nama,num:num,address:address,id:id},
				dataType: 'json',
				success: function(result) {
					if(result.error){
					 $.jGrowl(result['msg'], {
							position: 'bottom-center',
							theme: 'alert-bordered alert-styled-left alert-warning',
                            header: 'PERHATIAN !',
						});
					}else{
						$.jGrowl(result['msg'], {
							position: 'bottom-center',
							theme: 'alert-bordered alert-styled-left alert-success',
                            header: 'SUKSES !',
						});
                      history.replaceState({pg:1}, "pg home", "?sukses");
					}
                }
     });
		
			return false;
    });
    
    $(".ad_tb").click(function(){
        var last_tr = $(".t_btc tbody tr:last");
        var add_tr = "<tr>"+last_tr.html()+"</tr>";
        $(".t_btc tbody").append(add_tr);
        $(".t_btc tbody tr:last input[type=text]").val("");
        $(".t_btc tbody tr:last input[type=text]:first").focus();
    });
    $.jGrowl.defaults.closer = false;   
$('.f_save').on('submit', function () {
     var l = Ladda.create(document.querySelector('.btn-ladda-spinner'));
            l.start();
      		var data = $(this).serialize();
			$.ajax({
				type: "POST",
   	url: $(this).attr("action"),
				data: data,
				dataType: 'json',
				success: function(result) {
					if(result.error){
					 $.jGrowl(result['msg'], {
							position: 'bottom-center',
							theme: 'alert-bordered alert-styled-left alert-warning',
                            header: 'PERHATIAN !',
						});
					}else{
						$.jGrowl(result['msg'], {
							position: 'bottom-center',
							theme: 'alert-bordered alert-styled-left alert-success',
                            header: 'SUKSES !',
						});
						setTimeout(function(){
							window.location.href =result['redirect'];
						}, 1000);
					}
                    l.stop();
				},
				error: function(jqXHR, textStatus, errorThrown) {
					 $.jGrowl(textStatus+': '+errorThrown, {
							position: 'bottom-center',
							theme: 'alert-bordered alert-styled-left alert-danger',
                            header: 'PERHATIAN !',
						});
					console.log(textStatus, errorThrown);
                    l.stop();
					//toastr.error(textStatus+': '+errorThrown);
					//$.jGrowl('I am a jGrowl notice!');
				}
			});
		
			return false;
    });
</script>