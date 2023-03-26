<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >
    <title>HORROR MOVIES</title>
   
</head>
<body>
<?php
        if(isset($_POST['cari'])){
            $judul = $_POST['judul'];
            echo "<h1>Hasil Pencarian</h1>";
            $url = 'http://www.omdbapi.com/?i=tt3896198&apikey=4ae21724&s"'.$judul.'"';

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

  <h3>HORROR MOVIES</h3>
    <form method="post" action="index.php">
        <input type="text" name="judul"></input>
        <input type="submit" value="Pencarian" name="cari"></input>
     
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
<h1>The Series</h1>
</div>
</div>

    
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="Gambar1.jfif" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">SCARY MOVIE</h5>
        <p class="card-text">Menceritakan kisah sepasang suami dan istri yang memiliki hubungan rumah tangga yang harmonis. Mereka berdua dapat dikatakan memiliki kehidupan yang sempurna .</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Gambar2.jfif" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Children OF The Corn</h5>
        <p class="card-text"> Film ini berfungsi sebagai konsep ulang dan merupakan angsuran kesebelas dari waralaba film panjang "Children of the Corn". Itu disebut menjadi film horor yang kurang matang dan tidak fokus, di mana tidak memiliki ketegangan, sensasi, dan ketakutan yang nyata.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Gambar3.jfif" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Wake Up</h5>
        <p class="card-text">Wake Up adalah game pelarian horor dengan suasana menyeramkan yang mengharuskan kamu untuk mencari dan menyelesaikan apa pun yang diperlukan untuk melarikan diri!.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Gambar4.jfif" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">Evil Dead Rise</h5>
        <p class="card-text"> Film Evil Dead Rise berkisah tentang munculnya Necronomicon (kitab orang mati). Kitab tersebut ditemukan Danny, satu dari tiga anak Ellie.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Gambar5.jfif" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">WINNIE THE POOH</h5>
        <p class="card-text">Winnie The Pooh: Blood and Honey akan menceritakan tentang teror mengerikan yang dibuat oleh Winnie The Pooh.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Gambar6.jfif" class="card-img-top" height="400px">
      <div class="card-body">
        <h5 class="card-title">DEAD SILENCE</h5>
        <p class="card-text">Dead Silence menggunakan formula horor klasik, dimana objek boneka, dan arwah sesosok wanita tua menjadi momok yang paling menakutkan.</p>
      </div>
    </div>
  </div>
  
    </div>
   
   
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>