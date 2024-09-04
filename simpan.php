 <?php 
    include('koneksi.php');    
    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $kontak = $_POST['kontak'];
    $alamat = $_POST['alamat'];    
    mysqli_query($koneksi,"insert into user values(NULL,'$nama','$kelamin','$kontak','$alamat')");
    
?>