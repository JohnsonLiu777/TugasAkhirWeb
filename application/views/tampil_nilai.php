<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
</head>
<body>
    <!--Mengambil data dari controler-->
    <h1><?= $title; ?></h1> 

    <table border='2'>
        <tr>
            <td>Nama</td>
            <td>NIM</td>


        </tr>   

        <tr>
            <td><?= $mahasiswa; ?></td>
            <td><?= $nilai; ?></td>


        </tr>   
    </table>
    
</body>
</html>