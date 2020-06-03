<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Biodata</title>
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

<!-- Kop surat -->
<div style="text-align: center">
    <p style="margin: 0px; font-weight: bold; font-size: 18px">SMAN 1 KESAMBEN</p>
    <label> Biodata Siswa</label>
    <hr>    
</div>

<div id="outtable">
    <table width="100%" border="0" style="font-size: 12px">
        <tr>
            <td width="20%">NISN</td>
            <td width="25%">: <?php echo $getDetailSiswa->id_siswa ?></td>
        </tr>
        <tr>
            <td width="20%">Nama Siswa</td>
            <td width="25%">: <?php echo $getDetailSiswa->nama ?></td>
        </tr>
        <tr>
            <td width="20%">Jurusan </td>
            <td width="25%">: <?php echo $getDetailSiswa->jurusan ?></td>
        </tr>
        <tr>
            <td width="20%">Umur </td>
            <td width="25%">: <?php echo $getDetailSiswa->umur ?></td>
        </tr>
        <tr>
            <td width="20%">Tanggal Lahir </td>
            <td width="25%">: <?php echo $getDetailSiswa->tgl_lahir ?></td>
        </tr>
        <tr>
            <td width="20%">Jurusan </td>
            <td width="25%">: <?php echo $getDetailSiswa->kelas ?></td>
        </tr>
        <tr>
            <td width="20%">Agama </td>
            <td width="25%">: <?php echo $getDetailSiswa->agama ?></td>
        </tr>
        <tr>
            <td width="20%">Nama Orang Tua  </td>
            <td width="25%">: <?php echo $getDetailSiswa->nama_ortu ?></td>
        </tr>
        <tr>
            <td width="20%">No Telepon  </td>
            <td width="25%">: <?php echo $getDetailSiswa->no_hp ?></td>
        </tr>
        <tr>
            <td width="20%">Kelas  </td>
            <td width="25%">: <?php echo $getDetailSiswa->kelas ?></td>
        </tr>
       
    </table>
</div>
</body>
</html>
