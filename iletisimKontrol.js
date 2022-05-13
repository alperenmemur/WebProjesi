function mailKontrol(mail) 
{

    // Mail kontrolü Aşağıdaki REGEX ile sağlıyorum
 if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(mail))
  {
    return (false)
  }
    return (true)
}
    //Form ilk olarak buraya geliyor BURADAN ÇIKAN SONUÇA GÖRE
    // YA İPTAL yada PHP ye gönderilcek
function formKontrol(form) {

    // Form verilerine rahat erişmek için onları değişkenlere atadım.
    var isim = form.ad.value;
    var soyisim = form.soyad.value;
    var bolum = form.bolum.value;
    var sinif = form.sinif.value;
    var cinsiyet = form.cinsiyet.value;
    var email = form.ePosta.value;
    var sifre = form.sifre.value;
    var mesaj = form.mesaj.value;

    // Kontrolü burada yapıyorum Onay verilmezse eğer
    // Web Browserların  özelliği olan ALERT yöntemiyle uyarı kutusu çıkartıyorum.

    if (isim=="" || soyisim=="" || bolum=="" || sinif=="0" || cinsiyet=="" || email == "" || sifre == "" || mesaj == "") {
        alert("Lütfen Boş Alanları Doldurunuz !!");
        return false;
    }
    // Onaylanırsa üstteki fonksiyona gönderme sağlıyorum kontrol için
    if (mailKontrol(email)) {
        alert("Mail Adresi Geçerli Değil !!");
        return false;
    }
    
    return true;
}
