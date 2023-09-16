<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href = "https: //fonts.googleapis.com/css2?family= Nunito+Sans:opsz@6..12 & display=swap" rel= " stylesheet">
    <link rel = "preconnect" href = "https://fonts.googleapis.com"> <!-- Google Font -->
    <link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin> <!-- Google Font -->

    <script src="https://kit.fontawesome.com/bbaec3efc5.js" crossorigin="anonymous"></script> <!-- Fontawsome -->

    <link rel="stylesheet" href="owl/owl.carousel.min.css"> <!-- Owl Carousel -->
    <link rel="stylesheet" href="owl/owl.theme.default.min.css"> <!-- Owl Carousel -->

    <title>Kaan Web Yazılım</title> <!-- Site Başlığı -->

    <link rel="stylesheet" href="css/style.css"> <!-- Css dosya bağlantısı -->

</head>
<body>
    <section id="menu">
        <div id="logo">Kaan Web Yazılım</div>
        <nav>
            <a href=""><i class="fa-solid fa-house ikon" style="color: #003666;"></i>Anasayfa</a>
            <a href=""><i class="fa-solid fa-info ikon" style="color: #003666;"></i>Hakkımızda</a>
            <a href=""><i class="fa-solid fa-school ikon" style="color: #003666;"></i>Eğitimler</a>
            <a href=""><i class="fa-solid fa-people-group ikon" style="color: #003666;"></i>Ekip<a>
            <a href=""><i class="fa-solid fa-phone ikon" style="color: #003666;"></i>İletişim</a>    
        </nav>
    </section>

    <section id="anasayfa">
        <div id="black">

        </div>

        <div id="içerik">
            <h2>Paylaştıkça</h2>
            <hr width=300 align=left>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad eius doloremque minima, voluptate ullam ratione obcaecati enim doloribus. Tempore voluptates deleniti beatae officia neque aspernatur sunt enim consequuntur voluptatem dolores?
            Animi id, doloribus architecto accusamus doloremque illum iure iste quibusdam assumenda, quasi reprehenderit voluptatem cumque, nihil nulla ad modi ea aliquid illo repellendus laboriosam quia suscipit ab hic ipsam? Nesciunt!</p>
        </div>
    </section>

    <section id="hakkimizda">
        <h3>Hakkımızda</h3>

        <div class="container">
            <div id="sol">
                <h5 id="h5sol">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </h5>
            </div>

            <div id="sag">
                <span>L</span>
                <p id="psag">orem ipsum dolor sit amet consectetur adipisicing elit. Fugit laboriosam dolore distinctio voluptatum aspernatur quam deleniti, aliquam architecto repellat reprehenderit incidunt eius labore! Exercitationem in velit possimus, quibusdam ipsa iste?</p>
            </div>

            <img src="img/about.jpg" alt="" class="img-fluid mt100">

            <p id="paon">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed obcaecati itaque quasi quos. Cupiditate iste mollitia aspernatur dolorum a iure totam distinctio sed. Nam praesentium nemo dolorem perspiciatis placeat! Reiciendis!</p>
        </div>

    </section>

    <section id="egitimler">
        <div class="container">
           <h3>Eğitimler</h3>

           <div class="owl-carousel owl-theme">

            <div class="card item" data-merge=1.5>
                <img src="img/r2.jpg" alt="" class="img-fluid">
                <h5 class="baslikcard">HTML5 ve CSS3 Eğitimi</h5>
                <p class="cardp">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, architecto?</p>
            </div>

            <div class="card item" data-merge=1.5>
                <img src="img/r2.jpg" alt="" class="img-fluid">
                <h5 class="baslikcard">HTML5 ve CSS3 Eğitimi</h5>
                <p class="cardp">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, architecto?</p>
            </div>

            <div class="card item" data-merge=1.5>
                <img src="img/r2.jpg" alt="" class="img-fluid">
                <h5 class="baslikcard">HTML5 ve CSS3 Eğitimi</h5>
                <p class="cardp">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, architecto?</p>
            </div>
           
           </div>

        </div>

    </section>

    <section id="iletisim">
        <div class="container">

            <h3 id="h3iletisim">İletişim</h3>

            <form action="index.php" method="post"> <!-- İletişim bölümüne atama -->
            <div id="iletisimopak">
                <div id="formgroup">
                    <div id="solform">
                        <input type="text" name="isim" placeholder="Ad Soyad" required class="form-control">
                        <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                    </div>
                    <div id="sagform">
                        <input type="email" name="mail" placeholder="Email Adresiniz" required class="form-control">
                        <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                    </div>

                    <textarea name="mesaj" id="" cols="30" placeholder="Mesaj Giriniz" rows="10" required class="form-control"></textarea>

                    <input type="submit" value="Gönder">

                </div>

                <div id="adres"> 

                    <h4 id="adresbaslik">Adres :</h4>
                    <p class="adresp">Mehmet Akif Ersoy Mah</p>
                    <p class="adresp">Akyıldız Caddesi</p>
                    <p class="adresp">Oğuz Bey Sokak No:123</p>
                    <p class="adresp">0212 389 99 99</p>
                    <p class="adresp">Email: hajdnsj@gmail.com</p>

                </div>
            </div>
            </form>

            <footer>

               <div id="copyright">
                2023 Tüm Hakları Saklıdır
               </div>

               <div id="socialfooter">
                <a href="#"><i class="fa-brands fa-facebook-f social"></i></a>
                <a href="#"><i class="fa-brands fa-google-plus-g social"></i></a>
                <a href="#"><i class="fa-brands fa-twitter social"></i></a>
               </div>

               <a href="#menu"><i class="fa-solid fa-angle-up" id="up"></i></a>


            </footer>

        </div>
    </section>

    
    
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>
    <script src="owl/script.js"></script>
</body>
</html>

<?php /* Php kod satırı başlangıcı */

include ("baglanti.php");  /* Bağlantı için baglanti.php yolu izlenmiş */

if(isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"])) /* Veriyi hangi html alanlarına aktaracağımızı yazıyoruz */
{
    $adsoyad=$_POST["isim"] ;
    $telefon=$_POST["tel"] ;
    $email=$_POST["mail"] ;
    $konu=$_POST["konu"] ;
    $mesaj=$_POST["mesaj"] ; /* istediğimiz verinin nerede depolanacağını yazıyoruz */


    $ekle="INSERT INTO iletisim(adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."' ,'".$telefon."', '".$email."', '".$konu."', '".$mesaj."')" ;

    if($baglan->query($ekle)===TRUE)
    {
        echo "<script>alert('Mesajınız Başarı İle Gönderilmiştir')</script>";
    }

    else{
        echo "<script>alert('Mesajınız Gönderilirken Bir Hata Oluştu.')</script>";
    }
}


?>