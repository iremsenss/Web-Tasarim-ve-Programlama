<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "blogdb";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$sql = "SELECT id, baslik, metin, resim FROM fitness";
$result = $conn->query($sql);
$conn->close();

?>

<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="web_proje.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    
    <body>
        <div id="home">
            <div class="anasayfa">
                <nav>
                    <h1 class="logo"><span>Mac</span> fiteren</h1>
                    <div class="nav-links">
                        <ul id="menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li class="lessons-li">
                                <a href="#lessons">Lessons</a>
                            </li>
                            <li><a href="#Dietitian">Dietitian</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#content">Content</a></li>
                        </ul>
    
                        <div class="social">
                            <a href="#" onclick="showHideMenu()"><i class="fa-light fa-circle-xmark"></i></a>
                            <a href=""><i class="fa-brands fa-instagram"></i></a>
                            <a href=""><i class="fa-brands fa-x-twitter"></i></a>
                            <a href=""><i class="fa-brands fa-youtube"></i></a>
                            <a href="#" onclick="showHideMenu()"><i class="fa-solid fa-bars"></i></a>
    
                        </div>
                    </div>
                </nav>
                <div class="main">
    <h2>Welcome to</h2>
    <h1>Fitness Club</h1>
    <a href="" class="button">Learn More</a>
    <p><br><br><br><br> Your Body,Shape Your Future <br></p>
</div>
</div>
</div>
<main>
<section id="about">
<div class="about-text">

    <h1>Daha iyi, daha mutlu ve daha sağlıklı bir yaşam yaşamanıza yardımcı olmak için burdayız.</h1>

    <p>Gelir düzeyine veya spor salonuna erişime bakılmaksızın fitnessın herkes için, her yerde erişilebilir olması gerektiğine inanıyoruz.
         Bu nedenle yüzlerce ücretsiz, tam uzunlukta egzersiz videosu, web deki en etkili egzersiz programları, 
        yemek planları ve faydalı sağlık, beslenme ve fitness bilgileri sunuyoruz.</p>
</div>
<div id="about-card">

</div>
</section>
</main>
<div>
        <div id="lessons">
            <div id="lessons-text">
                <a href="fitnessDersleri.html">
                    <div id="card1">
                        <h2>Fitness Dersleri</h2>
                    </div>
                </a>
                <div id="card2">
                    <h2>Pilates Dersleri</h2>
                </div>
                <div id="card3">
                    <h2>Yoga Dersleri</h2>
                </div>
            </div>
        </div>
    </div>
    <div id="Dietitian">
    <div id="dietitian1">
        <p>Egzersiz Öncesi Beslenme Nasıl Olmalıdır?<br><br>
            Egzersiz öncesi beslenme vücudun yeterli enerjiyi sağlayabilmesi ve kas kaybını en aza indirgeyebilmesi
            için çok
            önemlidir. Spordan 2-3 saat önce ana öğün tüketilmelidir.
            Porsiyon büyüklükleri kişiye ve yaptığı egzersize göre farklılık göstermektedir. Beslenmede tek bir
            çeşit yoktur
            . Kişiye göre çeşitlilik sağlanmalıdır.
            Spordan ortalama 2 saat önce tüketilen ana öğünün içeriği yeterli miktarda karbonhidrat, protein
            yağ ve sıvı içermelidir. Örneğin Haşlanmış 150-200 gram tavuk göğsü,
            1 kase salata ve kişiye göre dilimi değişecek şekilde tam tahıllı ekmek tüketilebilir. Mü
            mkün olduğunca sindirimi kolay besinler ve gaz yapmayacak besinler tercih edilmelidir.
            Eğer 1 saat içerisinde egzersize başlanacaksa daha hafif ama glisemik indeksi daha yüksek bir şekilde
            yoğurt,
            meyve ve yulaf üçlüsünden oluşan karbonhidrat yoğunluğu daha yüksek ( özellikle performans sporlarında )
            bir öğün veya kuru meyveli, yağlı tohumlu bir protein bar tercih edilebilir.</p>
    </div>
    <div id="dietitian2">
        <p> Egzersiz Sonrası Beslenme Nasıl Olmalıdır? <br><br>
            Egzersiz sırasında kaslar karaciğerdeki glikojen deposunu ve kaslardaki proteinleri kullanır ve egzersiz
            sonrası bu depolar azalır.
            Spor sonrası beslenmede ilk amaç azalan depoları doldurmak ve vücudu onarmaktır.
            Bu amaçları yerine getirebilmek için yeterli protein, karbonhidrat ve yağdan oluşan bir öğün
            tüketilmelidir.
            Örnek olarak;
            Ton balıklı salata + tam tahıllı ekmek
            Izgara et/tavuk ızgara + bulgur pilavı + ayran + bol salata
            tüketilebilir.
            Spordan hemen sonra yemek yenilmiyorsa 1 saat gibi bir süre giriyorsa meyve-süt gibi özellikle yoğurt ,
            kefir gibi kaliteli kalsiyum ve protein kaynaklarından destek alınabilir.</p>
    </div>
    <div id="dietitian3">
        <p>
            Spor İçecekleri Ve Enerji İçecekleri Tercih Edilmeli Mi?<br><br>

            Profesyonel spor yapmayan ve egzersiz süresi 1 saati geçmeyen çoğu durumda spor içeceklerine ihtiyaç
            duyulmaz. Daha uzun ve yoğun egzersizler gerçekleştiriliyorsa kişiye uygun doğru sporcu içecekleri
            kullanılabilir.
            Enerji içecekleri ve spor içecekleri karıştırılsa da birbirinden çok farklı içeriklere sahiplerdir.
            Enerji içecekleri yüksek miktarda kafein, şeker ve uyarıcı etkiye sahip birçok içerik içerir. Dikkatsiz
            kullanımı sonucu kalp problemlerine sebep olabilir.
        </p>
    </div>
    <div id="dietitian4">
        <p>
            Su Tüketimi Ne Kadar Olmalı?<br><br>

            Egzersiz sırasında vücut ısısı yükselir ve vücut terleyerek geri soğumaya çalışır. Bu nedenle su kaybı
            gerçekleşir. Kaybedilen su yerine koyulmalıdır. Bol su içmek çok önemlidir.
            İnsan vücudu ağırlığının %2 si kadar sıvı kaybettiği zaman susama hissi gelişir. Bu çok büyük bir
            kayıptır, bu nedenle susama hissi gerçekleşmeden su içilmelidir.
        </p>
    </div>
    <div id="dietitian5">
        <p>Spor öncesi kafein tüketilmeli mi?<br><br>

            Yapılan çalışmalar egzersizden 30 dakika önce alınan kafeinin yağ yakımına yardımcı olabileceğini
            gösteriyor. Sade Türk Kahvesi veya filtre kahve gibi seçenekler egzersizden 30 dakika önce
            tüketilebilir. Kafeinin uyarıcı etkisi sebebiyle fazla miktarlarda tüketilmemesine de özen
            gösterilmelidir.</p>
    </div>
</div>


<section id="blog">
    <div class="container">

        <div class="row">

            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {       
            ?>
                    <div class="col-md-4 mb-4">
                        <div class="content">

                            <a class="grid-image">
                                <img width=420 decoding="async" src="<?php echo $row["resim"]; ?>" alt="Image">
                            </a>

                            <a class="text-white" href="<?php echo $row["id"]; ?>">
                                <?php echo $row["baslik"]; ?>
                            </a>

                            <p class="text-white" id="<?php echo $row["id"]; ?>">
                                <?php echo $row["metin"]; ?>
                            </p>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "<div class='col-12'>Kayıt bulunamadı.</div>";
            }
            ?>

        </div>
    </div>
</section>



<div>
        <div id="gallery">
            <div id="resim1"><img src="resim1.jpg" alt=""></div>
            <div id="resim2"><img src="resim2.jpg" alt=""></div>
            <div id="resim3"><img src="resim3.jpg" alt=""></div>
            <div id="resim4"><img src="rsim4.jpg" alt=""></div>
            <div id="resim5"><img src="resim5.jpg" alt=""></div>
            <div id="resim7"><img src="fitness6.jpg" alt=""></div>
            <div id="resim6"><img src="resim6.jpg" alt=""></div>
            <div id="resim8"><img src="fitness3.jpg" alt=""></div>
        </div>
     
 </div>


    <section id="content">
    <div class="container-1">
        <h3 id="h3iletisim">İletişim Formu</h3>

        <div id="iletisimopak">
            <div id="formgroup">
                <div id="solform">
                    <input type="text" name="isim" placeholder="Adı Soyadı" required class="form-control">
                    <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                </div>
                <div id="sagform">
                    <input type="email" name="mail" placeholder="Email" required class="form-control">
                    <input type="text" name="konu" placeholder="Konu Başlığı" required class="form-control">
                </div>
                <textarea name="mesaj" placeholder="Mesaj Giriniz" required class="form-control" cols="30"
                    rows="10"></textarea>
                <input type="submit" value="Gönder">
            </div>
            <div id="adres">
                <h4 id="adresbaslik">Adres :</h4>
                <p class="adresp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, dolore?</p>
                <p class="adresp">Lorem ipsum dolor sit.</p>
                <p class="adresp">Lorem ipsum dolor sit amet.</p>
                <p class="adresp">0212 389 99 99</p>
                <p class="adresp">Email:MacFiteren@gmail.com</p>
            </div>
        </div>
    </div>
</section>


<div class="footer_section">


            <div class="subscriber_head">
    
                <h1 id="free_daily_updates">Free Daily Updates</h1>
    
                
                <form action="" class="subscriber_search_box" method="get"  >
                    
                    <input class="subscriber_search_bar" type="text" placeholder="Search for datasets, APIs, ">
    
               
                    <button class="subscriber_button" type="submit" >Subscribe</button>
            </form>
    
            </div>
    
            
   
            <div class="subscriber_mid">
    
            <div class="first_para">
                <div class="footer_logo"><h1>MAC <span>FITEREN</span></h1></div>
                        <div class="footer_para">
                            
                            <h3 id="footer_first_head">Start Your Fitness Jounery Now</h3>
                            <br>
                   
                            <h5>MacFiteren@gmail.com</h5>
                            <h5>www.MacFiteren.com</h5>
                       
                        </div>
    
                   
                    </div>
              
                    
                 
                    <div class = "vertical2"></div>   <div class = "horizontal"></div> 
                    <div class="middle_para">
                    
                        <div class="footer_About">
                            <h4 class="footer_About_para"><a class="footer_About_head" href="#about">About</a></h5>
                        </div>
    
                        <div class="footer_About">
                                <h4 class="footer_About_para"><a class="footer_About_head" href="#lessons">Lessons</a></h5>
                        </div>
    
                        <div class="footer_About">
                            <h4 class="footer_About_para"><a class="footer_About_head" href="#Dietitian">Dietitian</a></h5>
                        </div>
    
                        <div class="footer_About">
                                <h4 class="footer_About_para"><a class="footer_About_head" href="#blog">Blog</a></h5>
                        </div>
    
                        <div class="footer_About">
                            <h4 class="footer_About_para"><a class="footer_About_head" href="#gallery">Gallery</a></h5>
                        </div>
    
                        <div class="footer_About">
                            <h4 class="footer_About_para"><a class="footer_About_head" href="#content">Content</a></h5>
                        </div>
    
    
                    </div>
    
     
                    <div class = "vertical"></div><div class = "horizontal2"></div> 
    
                <div class="last_para">
    
                    <div class="contacts">
                        <h4>  Connect:
    
                        </h4>
                        <div class="icon_section">
                        <a class="footer_mid_icons" href=""><i class="fab fa-twitter footer_mid_icons_inner"></i></a>
                        <a class="footer_mid_icons" href=""><i class="fab fa-instagram footer_mid_icons_inner"></i></a>
                        <a class="footer_mid_icons" href=""><i class="fab fa-linkedin footer_mid_icons_inner"></i></a>
                        <a class="footer_mid_icons" href=""><i class="fab fa-youtube footer_mid_icons_inner"></i></a>
                    </div>
                    </div>
    
                </div>
    
            </div>

        <div class="subscriber_last">
    
    
    
            <div class="footer_logo_last"><h1>MAC <span>FITEREN</span></h1></div>
            <div class = "vertical3"></div>
            <div class = "footer_last_mid_para"><p id="unleash">Unleash The Power Of Security And Development</p></div>
            <div class = "footer_last_last_para">
                <p class="copyright2">COPYRIGHT 2024 &copy; All right reserved</p>
                <p class="copyright2">ALL Trademark are registered to their respective owners bros</p>
            </div>
    
        </div>
    
    </div>

    </body>
</html>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>