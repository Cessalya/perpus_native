<?php include './koneksi.php' ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Daftar Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
    *{
        font-family: 'Poppins';
        padding-left: 10px;
        padding-right: 10px;
        
    }
    h1{
        font-family: 'Poppins';
        text-align: center;
        margin-top: 10px;
        margin-bottom: 0px;
    }
    .action a{
        color: black;
        text-decoration: none;
    }
    
</style>
</head>

<body>
    
<h1 class="fw-bold p-3 mb-2 bg-primary text-white" >DAFTAR SISWA</h1>
<p style="margin-top: 20px;"> Berikut data lengkap siswa : </p>    
<hr>

    <?php
        $sql = 'select * from siswa';
        $result = mysqli_query($conn, $sql);
    ?>
    <table class="table" border="1" cellpadding="10" cellspacing="">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAMA SISWA</th>
                <th>TANGGAL LAHIR</th>
                <th>ALAMAT</th>
                <th>STATUS</th>
                <th>GENDER</th>
                <th>USERNAME</th>
                <th>KEHADIRAN</th>
                <th>AKSI</th>
                
                

            </tr>
        </thead> 
        <tbody>
            <?php while($data = mysqli_fetch_assoc($result) ){ ?>

            <tr>
                <td><?php echo $data ['ID'];?></td>
                <td><?php echo $data['NAMA SISWA'];?></td>
                <td><?php echo $data ['TANGGAL LAHIR'];?>
                <td><?php echo $data['ALAMAT'];?></td>
                <td><?php echo $data['GENDER'];?></td>
                <td><?php echo $data['USERNAME'];?></td>
                <td><?php echo $data['KELAS'];?></td>
                <td><?php echo $data['kehadiran'] === date('Y-m-d')? '✅':'❎' ?></td> 
                <!-- kalau (===) memperhatikan nilai dan tipe datanya -->
                <td>
                    <div class="action">
                    <button type="button" class="btn btn-sm btn-success">
                    <a href="check-in.php?id=<?php echo $data['id']?>">Check-In</a>
                    </button>
                    <button type="button" class="btn btn-sm btn-secondary">
                    <a href="check-out.php?id=<?php echo $data['id']?>"  onClick="return confirm('yakin?');">Check-Out</a>
                    </button>
                    </div>
                </td>

                <td>
                    <div class="action">
                    <button type="button" class="btn btn-sm btn-info">
                    <a href="update-siswa.php?id=<?php echo $data['id']?>">Edit</a>
                    </button>
                    <button type="button" class="btn btn-sm btn-danger">
                    <a href="hapus-siswa.php?id=<?php echo $data['id']?>" onClick="return confirm('yakin?');">Hapus</a>
                    </button>
                    </div>
                </td>

            </tr>
            <?php } ?>
        </tbody>
    </table>
    <div class="d-grid gap-2">
    <button type="button" class="btn btn-outline-primary">
        <a href="tambah_siswa.php" class="text-decoration-none text-black">Tambah Data</a>
    </button>
    </div>


</body>