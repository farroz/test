<!DOCTYPE html>
<html>
<head>
  <title>Membuat Halaman Web Dinamis Dengan PHP | X PPLG - SMKN 1 DEPOK</title>
  <!-- menghubungkan dengan file css -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- menghubungkan dengan file jquery -->
  <script type="text/javascript" src="jquery.js"></script>
</head>
<body>

<div class="content">
 
  <header>  
    <h1 class="judul">PRM Community</h1>
    <h3 class="deskripsi">Komunitas yang membahas tentang game bernama Project Re Mont(PRM)</h3>
  </header>

  <div class="menu">
    <ul>
      <li><a href="index.php?page=home">HOME</a></li>
      <li><a href="index.php?page=tentang">TENTANG</a></li>
      <li><a href="index.php?page=peraturan">PERATURAN</a></li>
      <li><a href="index.php?page=galeri">GALERI</a></li>
      <li><a href="index.php?page=form_daftar">FORM PENDAFTARAN</a></li>
     </ul>
  </div>

  <div class="badan">
 
 
  <?php 
  if(isset($_GET['page'])){
    $page = $_GET['page'];
 
    switch ($page) {
      case 'home':
        include "halaman/home.php";
        break;
      case 'tentang':
        include "halaman/tentang.php";
        break;
      case 'peraturan':
        include "halaman/peraturan.php";
        break; 
     case 'galeri':
        include "halaman/galeri.php";
        break; 
   
      case 'form_daftar':
        include "halaman/form_daftar.php";
        break; 
            
      default:
        echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
        break;
    }
  }else{
    include "halaman/home.php";
  }
 
   ?>
 
  </div>
</div>
</body>
</html>