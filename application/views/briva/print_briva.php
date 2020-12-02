<page backleft="0mm" backtop="30mm" backright="0mm" backbottom="5mm">
    <style type="text/css">
        <!--
        div,
        table.page_header,
        table.page_footer {
            font-family: Times;
            font-size: 12px;
        }

        table.page_header {
            width: 100%;
            border: none;
            border-bottom: 3px double #000000;
            padding: 1mm;
            font-size: 20px;
            font-weight: bold;
        }

        table.page_footer {
            width: 100%;
            border: none;
            border-top: 3px double #000000;
            padding: 1mm;
        }

        .page_item {
            width: 100%;
            border: none;
            border-bottom: 1px dashed #000000;
            padding: 10px 0;
        }

        div.note {
            border: solid 1mm #DDDDDD;
            background-color: #EEEEEE;
            padding: 2mm;
            border-radius: 2mm;
            width: 100%;
        }

        ul.main {
            width: 95%;
            list-style-type: square;
        }

        ul.main li {
            padding-bottom: 2mm;
        }

        h1 {
            text-align: center;
            font-size: 20mm
        }

        h3 {
            text-align: center;
            font-size: 14mm
        }

        table.data {
            border-collapse: collapse;
        }

        table.data td {
            padding: 5px;
        }

        table.data th {
            padding: 5px;
            border-bottom: 1px solid #333;
            vertical-align: bottom;
        }

        .text1 {
            writing-mode: tb-rl;
            -webkit-transform: rotate(-90deg);
            -moz-transform: rotate(-90deg);
            -o-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            transform: rotate(180deg);
            white-space: nowrap;
            float: left;
        }
        -->
    </style>
    <div style="width: 99%; padding: 5px;border: 1px double #000000; ">
        <page_header>
            <table class="page_header">
                <tr>
                    <td style="width: 10%; text-align: left; vertical-align: top;">
                        <img src="<?= base_url('assets/images/undiksha.png') ?>" width="80" />
                    </td>
                    <td style="width: 90%; text-align: center; vertical-align: top;">
                        <p style="font-weight: bold; margin: 0; padding-bottom: 10px;">
                            <span style="font-size: 20px;">KEMENTERIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI</span><br>
                            <span style="font-size: 32px;">UNIVERSITAS PENDIDIKAN GANESHA</span>
                        </p>
                    </td>
                </tr>
            </table>
        </page_header>
        <div align="center">
            <hr />
            <span style="font-size: 16px;"><b>SLIP PEMBAYARAN</b></span>
            <hr />
            <br />
        </div>
        <table style="width: 100%; font-size: 14px;" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td>BRIVA</td>
                <td width="5">:</td>
                <td style="width: 80%;"><b><?= $print['brivaNo'] . $print['custCode']; ?></b></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td width="5">:</td>
                <td style="width: 80%;"><b><?= $print['nama']; ?></b></td>
            </tr>
            <tr>
                <td>Jumlah Uang</td>
                <td>:</td>
                <td><b><b style="font-size: 18px;">Rp. <?= number_format($print['amount'], 0); ?></b></td>
            </tr>
            <tr>
                <td>Terbilang</td>
                <td>:</td>
                <td><?= terbilang($print['amount']); ?></td>
            </tr>
            <tr>
                <td style="vertical-align: top;">keterangan</td>
                <td style="vertical-align: top;">:</td>
                <td><?= $print['keterangan']; ?></td>
            </tr>
            
        </table>
        Silakan melakukan pembayaran sebelum <?= $print['expiredDate']; ?> melalui atm, internet banking, bri link, atau mobile BRI.

    </div>
    </div>
</page>
<script>
    window.print();
</script>