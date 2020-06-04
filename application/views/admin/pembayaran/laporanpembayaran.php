<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Laporan Pembayaran SPP</title>
	<style>
		#outtable {
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
<div style="text-align: center">
		<p style="margin: 0px; font-weight: bold; font-size: 18px">SMAN 1 KESAMBEN</p>
		<label> Rekap Laporan pembayaran SPP</label>
		<hr>
	</div>
	<div id="outtable">
		<table width="100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Nomer Transaksi</th>
					<th>NISN</th>
					<th>Nama Siswa</th>
					<th>Status</th>
					<th>Tanggal Bayar</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1;

                foreach ($transaksi as $kpw): ?>
				<tr>
					<td><?= $no++; ?></td>
					<td><?= $kpw->id_transaksi; ?></td>
					<td><?= $kpw->id_siswa;?></td>
					<td><?= $kpw->nama;?></td>
					<td><?= $kpw->status;?></td>
					<td><?= $kpw->tgl_bayar; ?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</body>

</html>
