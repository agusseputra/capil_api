<table class="table  tb table-xs  table-bordered ">

    <thead>
        <tr>
            <th>#</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Nominal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        if ($layanan != NULL) {
            foreach ($layanan as $in => $val) { ?>
                <tr id="<?=md5($val['id_layanan']);?>">
                    <td><?= $no; ?></td>
                    <td class="kode_layanan"><?=$val['kode_layanan']; ?></td>
                    <td class="nama_layanan"><?=$val['nama_layanan']; ?></td>
                    <td class="nominal"><?=$val['nominal']; ?></td>
                    <td><a class="edit" data-id_layanan="<?=md5($val['id_layanan']);?>"><i class="icon-pencil"></i></a> </td>
                </tr>
                <?php $no++;
            }
        } ?>
    </tbody>
</table>
<script type="text/javascript" src="<?= base_url() ?>assets/js/pages/datatables_responsive.js"></script>
<script type="text/javascript">
     $('.edit').on('click', function () {
        var id = $(this).data('id_layanan');
        $('#id_layanan').val(id);
        $('#nama_layanan').val($(this).closest('tr').find('.nama_layanan').html());
        $('#kode_layanan').val($(this).closest('tr').find('.kode_layanan').html());
        $('#nominal').val($(this).closest('tr').find('.nominal').html());
    });
</script>