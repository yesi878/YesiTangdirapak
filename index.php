<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>DRAMA ANIME</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
            $url = 'http://www.omdbapi.com/?apikey=45f49812&s="'.$judul.'"';

           //Akses API dengan CURL
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);

            // var_dump($output);
            $data = json_decode($output, TRUE);
            // $data = $data['Search'];
            
            foreach ($data['Search'] as $movie) {
                
                echo "\n <p>Judul: ".$movie["Title"]."</p>";
                echo "<p>Tahun: ".$movie["Year"]."</p>";
                echo '<img src= "'.$movie['Poster'].'">';
            }    
        }

        ?> 
        
  <header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <h3>DRAMA ANIME</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="pencarian" name="cari"></input>
     
    </form>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>
</header>
<div class="container">
<div class="row mt-3 text-center">
  <div class="col">
<h1>Anime</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="Scum's Wish.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Scum's Wish</h5>
        <p class="card-text">Scum's Wish, adalah seri manga Jepang yang ditulis dan diilustrasikan oleh Mengo Yokoyari. 
            Manga ini dimuat di majalah manga seinen milik Square Enix, 
            Big Gangan, edisi September 2012 hingga edisi Maret 2017 dan telah diterbitkan menjadi delapan volume tankōbon.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Violet Evergarden.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Violet Evergaerden</h5>
        <p class="card-text">Nama gadis itu, yang menulis surat mewakili orang-orang lain, adalah Violet Evergarden.
             Beberapa tahun telah berlalu sejak berakhirnya perang yang banyak memakan korban. Dunia berangsur damai, 
             kehidupan berubah seiring berkembangnya teknlogi, dan semua orang melangkah ke depan.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Mobile Suit.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Mobile Suit Gundam</h5>
        <p class="card-text">Mobile Suit Gundam atau yang lebih dikenal dengan sebutan First Gundam atau Gundam 
            '79 adalah seri anime mecha yang diciptakan oleh Yoshiyuki Tomino serta Hajime Yatake dan diproduksi 
            oleh studio Sunrise Inc.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Space.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Space Battleship Yamato</h5>
        <p class="card-text">Space Battleship Yamat (Uchū Senkan Yamato) adalah serial drama animasi 
            Jepang yang diproduksi oleh Leiji Matsumoto dan pertama ditayangkan mulai tanggal 6 Oktober 
            1974 sampai dengan tanggal 30 Maret 1975 dan berjumlah 26 episode.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Aldnoah.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Aldnoah Zero</h5>
        <p class="card-text">Kartun yang disutradarai oleh Ei Aoki dan ceritanya dibuat oleh Gen Urobuchi bisa dibilang 
            ‘WAH’. Bagaimana tidak? Kartun ini menyajikan konflik, robot-robotan, dan latar yang dibuat dengan apik. 
            Sekaligus menyuruh kita untuk mengasah otak secara tidak langsung.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Code.jpeg" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Code Geass</h5>
        <p class="card-text">Geass (Giasu) adalah kemampuan misterius yang didapat setelah mengikat kontrak dengan penyihir abadi 
            (kata itu sendiri berpotensi sebagai sebuah korupsi yang disengaja atau geas geis, jenis magis kontrak di mitologi Irlandia).</p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>