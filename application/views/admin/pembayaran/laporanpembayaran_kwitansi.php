<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Laporan Pembayaran SPP</title>
	<style>#outtable {
		padding: 50px;
		border: 3px solid #e3e3e3;
		width: 600px;
		border-radius: 10px;
	}

	.short {
		width: 50px;
	}

	.normal {
		width: 150px;
	}

	table {
		border-collapse: collapse;
		font-family: arial;
		color: #5E5B5C;
	}

	thead th {
		text-align: left;
		padding: 10px;
	}

	tbody td {
		border-top: 3px solid #e3e3e3;
		padding: 10px;
	}

	tbody tr:nth-child even {
		background: #A6F5FA;
	}

	tbody tr:hover {
		background: #EAE9F5;
	}

	</style>
</head>

<body>

	<!-- Kop surat -->
	<div style="text-align: center">
		<p style="margin: 0px; font-weight: bold; font-size: 18px">SMAN 1 KESAMBEN</p>
		<label>Laporan pembayaran SPP</label>
		<hr>
	</div>

	<div id="outtable">
		<table width="100%" border="0" style="font-size: 12px">
			<tr>
				<td width="20%">No. Transaksi</td>
				<td width="30%">: <?php echo $getDetailPembayaran->id_transaksi ?></td>
				<td width="25%"></td>
				<td width="20%">NIS</td>
				<td width="25%">: <?php echo $getDetailPembayaran->id_siswa ?></td>
			</tr>
			<tr>
				<td width="20%">Tanggal</td>
				<td width="30%">: <?php echo date('d/m/Y', strtotime( $getDetailPembayaran->tgl_bayar)) ?></td>
				<td width="25%"></td>
				<td width="20%">Nama</td>
				<td width="25%">: <?php echo $getDetailPembayaran->nama ?></td>
			</tr>

			<tr>
				<td width="20%">Waktu</td>
				<td width="30%">: <?php echo date('H:i A', strtotime( $getDetailPembayaran->tgl_bayar)) ?></td>
				<td width="25%"></td>
				<td width="20%">Kelas</td>
				<td width="25%">: <?php echo $getDetailPembayaran->jurusan.'-'.$getDetailPembayaran->kelas ?></td>
			</tr>
		</table>

		<hr>

		<p style="font-weight: bold; font-size: 12px">Rincian Pembayaran</p>
		<table width="100%" style="font-size: 12px">
			<tr>
				<th style="padding: 15px; width: 5%; border-bottom: 2px solid #4b4b4b; text-align: left">No</th>
				<th style="border-bottom: 2px solid #9e9e9e">Keterangan Pembayaran</th>
				<th align="right" style="margin-right: 15px; border-bottom: 2px solid #9e9e9e">Nominal</th>
			</tr>
			<?php 

            if ( $getDetailPembayaran->qty_spp > 1 ) {

                for ( $i = 1; $i <= $getDetailPembayaran->qty_spp; $i++ ) {

        ?>
			<tr>
				<td><?php echo $i ?></td>
				<td>Pembayaran SPP Sekolah - <?php echo $i ?></td>
				<td align="right">Rp. <?php echo number_format( $getDetailPembayaran->harga_spp , 2).',-' ?></td>
			</tr>
			<?php
                } // end looping
            } else {
        ?>
			<tr>
				<td>1</td>
				<td>Pembayaran SPP Sekolah - 1</td>
				<td align="right">Rp. <?php echo number_format(250000, 2).',-' ?></td>
			</tr>
			<?php } // end if ?>

			<tr>
				<td></td>
				<td style="text-align: right">
					<label for="" style="font-weight: bold">Total Keseluruhan</label>
				</td>
				<td style="text-align: right"><strong>Rp.
						<?php echo number_format($getDetailPembayaran->total_bayar,2).',-'?></strong></td>
			</tr>
			<tr>
				<td colspan="3">
					<small><strong>Status Pembayaran - <?php echo $getDetailPembayaran->status ?></strong></small>
				</td>
			</tr>
		</table>

		<br><br>
		<table width="100%">
			<tr>
				<td width="60%">
					<div style="font-size: 10px">
						<b>Catatan : </b><br>
						<label for="">1.Simpan kwitansi ini sebagai bukti pembayaran</label><br>
						<label for="">2.Jumlah uang yang dibayarkan tidak dapat di kembalikan</label>

					</div>
				</td>

				<td width="40%">
					<div style="font-size: 12px; text-align:center">
						<label for="">Blitar, <?php echo date('d F Y') ?></label><br>
						<label for="">Telah tertanda tangani</label>

						<br><br><br><br><br>

						<label>Teller</label>
					</div>
				</td>
			</tr>
		</table>
	</div>
</body>

</html>
