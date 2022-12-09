<DOCTYPE html>
    <html>
        <head>
            <title>CRUD - SEDERHANA</title>
    </head>

   <?php
            // koneksi database
            include 'koneksi.php';
            // menangkap data yg dikirim dari form
            if( !empty($_POST[ 'save' ]) )
            {
                $diskon = $_POST['diskon'];
                $id_level = $_POST['id_level'];
                // menginput data ke database
                $query=mysqli_query($koneksi,"insert into diskon values('','$diskon','$id_level')");

                if($query)

                {
                    //mengalihkan halaman kembali
                    header("location:diskon.php");
                }
                else
                {
                    echo mysqli_error($koneksi);
                }
            }
            
            $querylevel  = "SELECT * FROM level";
            $resultlevel  = "mysql_query ($koneksi,$querylevel);
            ?>
        <body>
            <h2>MODULE LEVEL</h2>
             <br/>
             <a href="level.php">KEMBALI</a>
            <br/>
            <br/>
            <html>
            <head>
            <title>CRUD - SEDERHANA</title>
            </head>
            <body>
            <h2>MODUL DISKON</h2>
                <br/>
                <table border="1"
                    </tr>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    $query = mysql_query($koneksi,"SELECT * FROM diskon
                                                    LEFT JOIN level onlevel.id_level =diskon.id_level
                                                    ");
                    while($data = mysql_fetch_array($query))
                    {
                ?>
                <tr>
                        <td>?php</td> echo $no++;?></td>
                        <td>?php</td> echo $data['diskon'];?></td>
                        <td>?php</td> echo $data['nama_level'];?></td>
                    </td>
                        <a href="edit_kategori.php?id=<?php echo $data['id'];?>">EDIT</a>
                        <a href="HAPUS_kategori.php?id=<?php echo $data['id'];?>">HAPUS</a>
                    <td>       
                    </tr>
                    <?php
                    }
                    ?>
            </table>
        </form>
    </body>
</html>