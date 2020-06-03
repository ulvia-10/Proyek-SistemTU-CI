<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Absensi</title>
    <style>
        #outtable{
            padding: 50px;
            border: 3px solid #e3e3e3;
            width: 600px;
            border-radius: 10px;
        }
        .short{
            width: 50px;
        }
        .normal{
            width: 150px;
        }
        table{
            border-collapse: collapse;
            font-family: arial;
            color: #5E5B5C;
        }
        thead th{
            text-align: left;
            padding: 10px;
        }
        tbody td{
            border-top: 3px solid #e3e3e3;
            padding: 10px;
        }
        tbody tr:nth-child even{
            background: #A6F5FA;
        }
        tbody tr:hover{
            background: #EAE9F5;
        }
    </style>
</head>
<body>
<div id="outtable">
			<center
				<h1>DAFTAR HADIR SISWA</h1>
				<h1>SMAN 1 KESAMBEN BLITAR   </h1>
			   </center>
        <table>
            <thead>
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Tanggal Absensi</th>
                <th>Kelas</th>
                <th>Hadir</th>
                <th>Izin</th>
                <th>Sakit</th>
            </tr>
            </thead>
            <tbody>
			<?php $no=1;
                foreach ($absensi as $kpw): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $kpw['id_siswa']; ?></td>
                <td><?= $kpw['tgl_absen'];?></td>
                <td><?= $kpw['kelas']; ?></td>
                <td><?= $kpw['hadir']; ?></td>
                <td><?= $kpw['izin']; ?></td>
                <td><?= $kpw['sakit'];?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>
</body>
</html>
