<?php 
session_start();
    if(isset($_SESSION['nama']) && isset($_SESSION['level']))
    {

    }
    else
    {
	echo ("<script type='text/javascript'>alert('Anda harus login');document.location='index.php';</script>");
    }
?>
<?php if($_SESSION['level']=='1'){?>
        <center><a href="barang.php">Barang</a></center>
        <center><a href="member.php">member</a></center>
        <center><a href="tipe.php">tipe</a></center>
        <center><a href="logout.php">Logout</a></center>
<?php }else if($_SESSION['level']=='2'){ ?>
        <center><a href="dosen.php">Menu dosen</a></center>
<?php }else{?>
        <center><a href="mahasiswa.php">Menu Mahasiswa</a></center>
<?php } 

?>