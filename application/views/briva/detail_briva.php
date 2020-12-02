<table class="table">
    <tr>
        <td width="150">BRIVANO</td>
        <td width="5">:</td>
        <td><?= $briva['brivaNo'] . $briva['custCode'] ?></td>
    </tr>
    <tr>
        <td>Customer</td>
        <td>:</td>
        <td><?= $briva['nama'] ?></td>
    </tr>
    <tr>
        <td>Amount</td>
        <td>:</td>
        <td><?= $briva['amount'] ?></td>
    </tr>
    <tr>
        <td>Keterangan</td>
        <td>:</td>
        <td><?= $briva['keterangan'] ?></td>
    </tr>
    <tr>
        <td>Berlaku</td>
        <td>:</td>
        <td><?= $briva['expiredDate'] ?></td>
    </tr>
    <tr>
        <td>Status</td>
        <td>:</td>
        <td><span id="msg"><?= $briva['status'] ?></span>
            <?php if ($briva['status'] == 'pending') { ?>
                <a title="kirim" onclick="kirim('<?= md5($briva['id']); ?>')"><i class="icon-upload"></i></a>
            <?php } ?><?php if ($briva['status'] != 'pending') { ?> <a title="cek status" onclick="report('<?= md5($briva['id']); ?>')"><i class="icon-file-text"></i></a><?php } ?>
        </td>
    </tr>
    <tr>
        <td>Tanggal Bayar</td>
        <td>:</td>
        <td><?= $briva['paymentDate'] ?></td>
    </tr>
    <tr>
        <td>Pesan</td>
        <td>:</td>
        <td id="msg_"><?= $briva['msg'] ?></td>
    </tr>


</table>