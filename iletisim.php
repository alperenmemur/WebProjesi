<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous" defer>
    </script>

    <link rel="stylesheet" href="./iletisim.css">
    <script src="iletisimKontrol.js"></script>
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
    <main class="container">
        <div class="row">
            <h2 id="baslik">İletişim</h2>
        </div>
        <div class="row">
            <form action="iletisimGoruntule.php" method="POST" onsubmit="return formKontrol(this);">
                    <div id="add">
                        <input type="text" name="ad" placeholder="Adınız...">
                    </div>
                    <div id="soyadd">
                        <input type="text" name="soyad" placeholder="Soyadınız...">
                    </div>
                
                    <div id="listee">
                        <input type="list" name="bolum" list="bolumler" placeholder="Bölüm Seçiniz...">
                        <datalist id="bolumler">
                            <option value="Bilgisayar Mühendisliği"></option>
                            <option value="Bilişim Sistemleri Mühendisliği"></option>
                            <option value="Yazılım Mühendisliği"></option>
                        </datalist>
                    </div>
                    <div id="siniff">
                        <select name="sinif">
                            <option value="0" selected>Sınıf Seçiniz...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>

                    <div id="cinsiyett">
                        
                            <label>Cinsiyet : </label>
                            <input type="radio" name="cinsiyet" value="Erkek"> Erkek 
                            <input type="radio" name="cinsiyet" value="Kadın"> Kadın 
                       
                    </div>

                    <div id="dillerr">
                        
                            <label>Bilinen Diller : </label><br>
                            <input type="checkbox" name="dil[]" value="Türkçe" >Türkçe <br>
                            <input type="checkbox" name="dil[]" value="İngilizce">İngilizce <br>
                            <input type="checkbox" name="dil[]" value="Almanca ">Almanca <br>
                            <input type="checkbox" name="dil[]" value="Çince">Çince <br>
                            <input type="checkbox" name="dil[]" value="İspanyolca">İspanyolca <br>
                            <input type="checkbox" name="dil[]" value="Fransızca">Fransızca
                       
                    </div>
                    
                    <div id="dosyaa">
                        <input type="file" name="dosya">
                    </div>

                    <div id="epostaa">
                        <input type="text" name="ePosta" placeholder="E-posta">
                    </div>
                    <div id=sifree>
                        <input type="password" name="sifre" placeholder="Şifre">
                    </div>

                    <div id="mesajj">
                        <textarea name="mesaj" placeholder="Mesajınız..."></textarea>
                    </div>
                    <div id="butonn">
                        <button type="submit">Gönder</button>
                        <button type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-light text-center ">
        <p>Copyright© by Doğan Alperen Memur 2022</p>
    </footer>
</body>
</html>