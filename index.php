<?php
    include 'koneksi.php';
    
    $no = 1;
    $data = mysqli_query($kon,"select * from mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Akademik</title>
    <style>
        body {
            font-family: "Times New Roman", Times New Roman, Times New Roman, sans-serif;
        }
        #customers {
          font-family: "Times New Roman", Times New Roman, Times New Roman, sans-serif;
          border-collapse: collapse;
          width: 40%;
          margin-right: 50%;
        }

        #customers td, #customers th {
          border: 100x solid #cd2a45;
          padding: 6px;
        }

        #customers tr:nth-child(even){background-color: #9e1129;}

        #customers tr:hover 

        #customers th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: center;
          background-color: #c51155;
          color: white;
        }
        .tbedit {
            background-color: #e43279; /* Blue */
            border: none;
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            margin: 4px 2px;
            cursor: pointer;
            
        }
        .tbhapus {
            background-color: #bf3b3b; /* Red */
            border: none;
            color: white;
            padding: 5px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 13px;
            margin: 4px 2px;
            cursor: pointer;
            
        }

        .tbadd {
            background-color: #16a085; /* Red */
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            margin: 4px 2px;
            cursor: pointer;
            
        }
    </style>
</head>
<body>
    <h1>WEB SERVICE</h1>
    <center><h1>Nama : Shinta Triya Yuliana</h1></center>
    <center><h1>NIM  : 16.01.53.0085</h1></center>
    <hr>
    <h2>Data Mahasiswa</h2>
    <table id="customers" border="1">
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
        </tr>
        <?php while($d = mysqli_fetch_array($data)){?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$d['nim']?></td>
            <td><?=$d['nama']?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>