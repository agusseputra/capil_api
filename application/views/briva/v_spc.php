<div class="navigasi hide">
    <li><a href="<?= site_url(); ?>"><i class="icon-home2 position-left"></i> Home</a></li>
    <li class="active">daftar spc</li>
</div>
<div class="sub-title hide"><i class="  icon-list position-left icon-2x"></i> DAFTAR BRIVA</div>
<div class="content" style="margin-top:-20px;">
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-flat border-top-lg border-top-primary">
                <div class="panel-body ">
                    <blockquote class=" col-md-12 ">
                        <h3 class="no-margin">Tambah Briva</h3>
                        <hr class="no-margin" />
                    </blockquote>
                    <form action="<?= site_url('briva/save'); ?>" class="form-ajax form-validate-jquery" method="post">
                        <div class="form-group row">
                            <div class="col-xs-10">
                                <label>Nama Customer</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" />
                            </div>
                            <div class="col-xs-2">
                                <label>Jumlah</label>
                                <input type="number" name="jml" class="form-control" value="1" min="1" max="10" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Layanan</label>
                            <select class="form-control layanan" name="id_layanan">
                                <option>Silakan Pilih Layanan</option>
                                <?php foreach ($layanan as $val) { ?>
                                    <option value="<?= $val['id_layanan'] ?>" data-nama_layanan="<?= $val['nama_layanan'] ?>" data-nominal="<?= $val['nominal'] ?>"><?= $val['nama_layanan']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-7">
                                <label>Jumlah Pembayaran</label>
                                <input type="text" name="amount" class="form-control amount" placeholder="Jumlah pembayaran" />
                            </div>
                            <div class="col-xs-5">
                                <label>Masa Berlaku (hari)</label>
                                <input type="number" name="expiredDate" class="form-control" value="2" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label>keterangan</label>
                            <textarea class="form-control keterangan" name="keterangan"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn bg-pink-400 btn-block btn-ladda btn-ladda-spinner" data-spinner-color="#fff" data-style="slide-right"><span class="ladda-label"> SIMPAN <i class="icon-circle-right2 position-right"></i></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-6">
            <div class="panel panel-flat border-top-lg border-top-primary">
                <div class="panel-body ">
                    <blockquote class=" col-md-12 ">
                        <h3 class="no-margin">Daftar Briva</h3>
                        <small>Data secara periodik akan dikirim ke BRI setiap 30 menit. Data dapat diubah atau dihapus jika masih status pending.</small>
                    </blockquote>
                    <div class="v_spc">
                        <?php $this->load->view('briva/table_spc'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal_large" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Detail #<span id="cus"></span></h5>
            </div>
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.layanan').change(function() {
        var amount = $(this).find(':selected').data('nominal');
        var keterangan = "<?= $this->session->userdata('nama') ?>" + ", " + $(this).find(':selected').data('nama_layanan');
        $('.amount').val(amount);
        $('.keterangan').val(keterangan);
    });

    function detail(id, cust) {
        $.ajax({
            type: "GET",
            url: "<?= site_url('briva/detail/') ?>" + id,
            success: function(response) {
                $('.modal-body').html(response);
                $('#cus').html(cust);
                $('#modal_large').modal('show');
            }
        });
    }
    function kirim(id) {
        $('#msg_').html('load...');
        $.ajax({
            type: "GET",
            url: "<?= site_url('briva/create_briva/') ?>" + id+'?err',
            success: function(response) {
                $('#msg_').html(response);
            }
        });
    }
    function report(id) {
        $('#msg_').html('load...');
        $.ajax({
            type: "GET",
            url: "<?= site_url('briva/get_report/') ?>" + id,
            success: function(response) {
                $('#msg_').html(response);
            }
        });
    }
</script>