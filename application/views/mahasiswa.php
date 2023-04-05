<html>

<head>
    <title>Data Mahasiswa</title>
</head>

<body>
    <legend>Data Mahasiswa</legend>
    <table width="40%" border="1">
        <thead>
            <tr>
                <td>No.</td>
                <td>NIM</td>
                <td>Nama</td>
                <td>Jurusan</td>
                <td>Alamat</td>
                <td>Action</td>
            </tr>
        </thead>
        <?php $no = 0;
        foreach ($mahasiswa as $row) :
            $no++; ?>
            <tr>
                <td>
                    <?php echo $no; ?>
                </td>
                <td>
                    <?php echo $row->nim; ?>
                </td>
                <td>
                    <?php echo $row->nama; ?>
                </td>
                <td>
                    <?php echo $row->jurusan; ?>
                </td>
                <td>
                    <?php echo $row->alamat; ?>
                </td>
                <td>
                    <a href="<?= base_url('index.php/mahasiswa/hapus/' . $row->nim); ?>">hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </Table>
    <form method="post" action="<?php echo site_url('mahasiswa/savingdata'); ?>">  
        <table>  
            <tr>  
                <td>NIM</td>  
                <td>:</td>  
                <td><input type="text" name="nim"></td>  
            </tr>  
            <tr>  
                <td>Nama</td>  
                <td>:</td>  
                <td><input type="text" name="nama"></td>  
            </tr>  
            <tr>  
                <td>Jurusan</td>  
                <td>:</td>  
                <td><input type="text" name="jurusan"></td>  
            </tr>  
            <tr>  
                <td>Alamat</td>  
                <td>:</td>  
                <td><input type="text" name="alamat"></td>  
            </tr><br><br>  
            <tr>  
            <td colspan="3"><input type="submit" name="submit" value="Tambah"></td>  
            </tr>  
        </table>  
    </form>  
</body>

</html>