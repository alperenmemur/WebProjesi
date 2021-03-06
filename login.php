<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-AU-Compatible" content="ie=edge">
  <title>Login</title>

  <!-- Bootstrap5  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous" defer>
  </script>  
  <!-- CSS vs Javascript dosyalarini bagladik -->
  <link rel="stylesheet" href="./style.css">

</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.html">Hakkında</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="./ilgialanlarım.html">İlgi Alanlarım</a>
                    <a class="nav-link" href="./sehrim.html">Şehrim</a>
                    <a class="nav-link" href="./mirasımız.html">Mirasımız</a>
                    <a class="nav-link" href="./cv.html">CV</a>
                    <a class="nav-link" href="./iletisim.php">İletişim</a>
                </div>
            </div>

            <a href="./login.php"><button class="btn btn-outline-dark" type="submit">Login</button></a>
        </div>
    </nav>

    <!-- CONTAİNER a style olarak 85 view height(vh) verdim. Daha düzgün gözüksün diye -->
  <div class="container" style="height:85vh;">
  <header>
		<div> 
			<h1>LOGIN</h1>
	  </div>
	</header>
  <main>
    <div>    
      <!-- FORMU BU SEFER önkontrolden geçirmektense direkt olarak phpye gönderiyorum -->
      <form action="Controllogin.php" method="POST" >
        <div>
          <label>Kullanıcı Adı</label>  
          <input type="text" name = "kullaniciadi" placeholder = "b201210390@sakarya.edu.tr" required> 
        </div>
        <div>
          <label>Şifre</label>  
          <input type="password" name = "password" placeholder = "b201210390" required> 
        </div>
        <div>
          <!-- Formu burdan submit ediyorum diğer sayfada buton ile etmiştim. Bu sayfada bu yöntemi deniyorum -->
          <input type="submit"> 
        </div>       
      </form>          
    </div>
  </main>
  </div>
    <!-- Footer -->
  <footer class="bg-light text-center ">
    <p>Copyright© by Doğan Alperen Memur 2022</p>
  </footer>

</body>
</html>