<table class="table  tb table-xs  table-bordered ">
    <thead>
        <tr>
            <th>#</th>
            <th>BRIVA NO</th>
            <th>Nama</th>
            <th>Nominal</th>
            <th>Keterangan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        if ($briva != NULL) {
            foreach ($briva as $in => $val) { ?>
                <tr id="<?= md5($val['id']); ?>">
                    <td><?= $no; ?></td>
                    <td><a onclick="detail('<?= md5($val['id']); ?>','<?= $val['brivaNo'] . $val['custCode']; ?>')"> <?= $val['brivaNo'] . $val['custCode']; ?></a></td>
                    <td><?= $val['nama']; ?></td>
                    <td align="right"><?= number_format($val['amount'], 0); ?></td>
                    <td><?= $val['keterangan']; ?></td>
                    <td><?= $val['status']; ?></td>
                    <td><a onclick="window.open('<?= site_url('briva/print_briva/' . md5($val['id'])) ?>', 'window name', 'window settings');"><i class="icon-printer"></i></a>
                        <?php if ($val['status'] == 'pending') { ?> | <a onclick="del('<?= site_url('briva/briva_delete') ?>','<?= md5($val['id']); ?>')"><i class="icon-trash"></i></a> <?php  } ?> </td>
                </tr>
                <?php $no++;
            }
        } ?>
    </tbody>
</table>
<script type="text/javascript" src="<?= base_url() ?>assets/js/pages/datatables_responsive.js"></script>
<script>

</script>