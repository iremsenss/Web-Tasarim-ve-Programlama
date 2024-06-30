-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Oca 2024, 09:24:51
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blogdb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `fitness`
--

CREATE TABLE `fitness` (
  `id` int(11) NOT NULL,
  `baslik` varchar(1000) NOT NULL,
  `metin` text NOT NULL,
  `resim` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `fitness`
--

INSERT INTO `fitness` (`id`, `baslik`, `metin`, `resim`) VALUES
(4, 'Makro Besin Nedir? Makro Besinler Nelerdir?', 'Günlük beslenme alışkanlıklarının temelini oluşturan makro besinler, vücudun ihtiyaç duyduğu ana besin öğeleri arasında bulunur. Proteinler, karbonhidratlar ve yağlar olarak üç ana kategoride toplanan makro besinlerin her biri benzersiz roller üstlenirken, dengeli kombinasyon içerisinde tüketildiklerinde sağlıklı yaşamın temelini oluşturmaya yardımcı olur.', 'https://img-macfit.mncdn.com/mnresize/440/293/wp-content/uploads/2023/12/makro-besin.jpg'),
(5, 'Hayata Yer Aç: Japon Ma Felsefesi ve Yaşamın Buluştuğu Nokta', 'Kadim Japon kültürü, geçmişten bugüne uzanan anlayışlar barındırır. Bireylerin yaşam felsefesini belirleyen bu yaklaşımlar,\r\nmodern dünyanın dayattığı fikirlerden uzaklaşmayı mümkün kılar. Kişilere kendi çizdikleri yolda huzur, tatmin ve güven duygusuyla ilerleme fırsatı tanır. Bu yaklaşımlardan biri olan Ma … ', 'https://img-macfit.mncdn.com/mnresize/440/293/wp-content/uploads/2023/12/japon-ma-felsefesi.jpg'),
(6, 'Potasyum nedir? Potasyum Sporda Ne İşe Yarar?', 'Potasyum minerali çeşitli hücre ve sinir fonksiyonlarının yürütülmesinde etkin role sahip bir elektrolittir. Vücutta tüm dokularda ihtiyaç duyulan potasyum doğal olarak birçok besinde ve ticari olarak takviyelerde bulunur. Potasyum, hücre içi ve hücre dışı sıvıların normal seviyesi ve fonksiyonlarının korunmasında … ', 'https://img-macfit.mncdn.com/mnresize/440/293/wp-content/uploads/2023/12/potasyum.jpg'),
(7, 'Demir Eksikliği Nasıl Giderilir? Demir Hangi Besinlerde Bulunur?', 'Demir dünyada en yaygın halde bulunan kimyasal elementlerden biridir. Demir eksikliği, tüm vücut sistemini doğrudan etkileyen bir durumdur. Bu durum bir dizi sağlık sorununu beraberinde getirebilir. Aynı zamanda oldukça yaygın görülür. Demir vücutta enerji üretimi için kullanılır. Oksijenin dolaşımı bu mineral sayesinde desteklenir.Demir minerali vücudunuzda beklenenden az miktarda bulunuyorsa çeşitli sorunlar yaşamanız olasıdır. Demir eksikliğinin en büyük etkisi alyuvarların sayısının üretimini engellemesidir. Bu durum organlara ve kaslara oksijen taşınması durumunu da sekteye uğratır. Sonucunda ise vücutta halsizlik baş gösterebilir.Besinlerden alınan demir hem ve hem dışı şeklinde iki farklı formda bulunur. Hem demir hayvansal kaynaklı besinlerde yer alır. Hem dışı form ise bitkisel kaynaklıdır. Sebze ve tahıllar hem dışı demir açısından zengindir.', 'demir-eksikligi.jpg'),
(8, 'Kalsiyum Nedir? Sporcular Ne Kadar Kalsiyum Almalı?', 'Kalsiyum çoğunluğu kemiklerde depolanan, vücutta üretilmeyen ve dışarıdan alınması gereken bir mineraldir. Kemik oluşumu ve onarımında önemli role sahip kalsiyum, kalp fonksiyonları ve kanın pıhtılaşmasını etkileyebilir, sinir hücreleri ve diğer hücreler arası iletişimi sağlayabilir, kas kasılmasını ve hormon salgılanmasını uyarabilir. Özellikle büyüme çağında olan çocuklarda, sporcularda ve yaşlılarda kalsiyum metabolizmasının korunması kritik bir öneme sahiptir. ', 'kalsiyum.jpg'),
(9, 'Vakum Egzersizi Nedir? Vakum Egzersizi Nasıl Yapılır?', 'Vakum egzersizi çekirdek kaslardan olan karın kaslarını güçlendirmeyi hedefleyen bir egzersizdir. Çekirdek kasların geliştirilmesi, kişinin genel duruşunu iyileştirerek daha sağlıklı hareket etmesine katkı sağlar. Ayrıca sırt ağrısını azaltarak midenin sıkılaşmasına ve düzleşmesine yardımcı olabilir. Vakum egzersizi bu kasları, özellikle derinde bulunan core kaslarını çalıştırmak için etkili bir yöntemdir. Yapılan çalışmalar, vakum egzersizlerinin transversus abdominis, iç oblik ve dış oblik kasları aktif ve etkili bir şekilde çalıştırdığını göstermiştir. Ayrıca diyafram ve pelvik taban kaslarının da etkili bir şekilde çalışmasına yardımcı olur.', 'vakumegzersizi.jpg'),
(11, 'Sporda Ağırlık Kaldırırken Dikkat Edilmesi Gerekenler', 'Ağırlık kaldırma söz konusu olduğunda, belirli hedeflerinize ve vücudunuza uygun ağırlıkları seçmek önemlidir. Bunun nedeni, doğru ağırlığın yaralanma riskini azaltırken istediğiniz sonuçları elde etmenize yardımcı olabilmesidir. Kullandığınız ağırlıklar çok ağırsa, egzersizleri doğru bir şekilde tamamlayamayabilirsiniz, bu da formun bozulmasına ve yaralanma riskinin artmasına neden olabilir. Öte yandan, ağırlıklar çok hafifse, peşinde olduğunuz sonuçları göremeyebilir veya ilerlemeyi görecek kadar kendinizi zorlayabilirsiniz. Egzersizleri iyi bir formda yapmanıza ve aynı zamanda kendinizi sınırlarınıza kadar zorlamanıza izin veren bir ağırlık bulmanız önemlidir\r\n', 'resim9.jpg'),
(15, 'ahmet mehmet', 'çskadnçsm', 'resim1.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `fitness`
--
ALTER TABLE `fitness`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `fitness`
--
ALTER TABLE `fitness`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
