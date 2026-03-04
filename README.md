Kullanılacak Teknolojiler
Arka Plan (Backend) & Veritabanı: Zorunlu tutulduğu üzere PHP ve MySQL kullanacaksınız.
Ön Yüz (Frontend): HTML, CSS ve JavaScript. İşleri hızlandırmak için hazır bir tema da kullanabilirsiniz, hocanız buna izin veriyor.
Yayınlama (Hosting): Siteyi internete açmanız gerekecek. Ücretsiz olan GoogieHost, Verinex veya öğrenci destekli Pekasoft gibi firmaları kullanabilirsiniz.

Görev Dağılımı (3 Kişi)
Hocanız herkesin aktif rol almasını ve bunun raporda açıkça belirtilmesini istiyor. Ekibi şu şekilde bölebiliriz:
TUANA (Backend & Etkileşimli Koltuklar): Veritabanı mimarisini kurma, PHP ile uçuş/koltuk verilerini çekme ve koltukların JavaScript ile tıklanabilir, etkileşimli hale getirilmesi senin sorumluluğunda olsun. Arka plan mantığını toparlamak ve veritabanıyla oynamak sana çok uygun

MUSTAFA (Frontend & Kullanıcı Deneyimi): Sitenin vitrini onda. Hazır bir tema bulup onu PHP'ye entegre etme ve "Kullanıcı" katmanının tamamen çalışır durumda olmasını sağlamak onun görevi olsun.

ALİ (Admin Paneli & Sistem Güvenliği): Uçuş ekleme, yorum onaylama gibi işlemler için "Yönetici" (admin) panelinin kodlanması. Güvenli giriş (login) sistemi ve Session tabanlı yetkilendirme işlemleri bu arkadaşta olsun.

İlerleme Şeması (Zaman Çizelgesi)
Projeyi sıfırdan ve "Aşama 1 + Aşama 2" şeklinde ilerletmek zorundasınız.
1. Aşama - Temel Uygulama (Son Tarih: 13-19 Nisan 2026) : İlk olarak veritabanı (MySQL) tasarlanıp PHP ile bağlantısı kurulmalı. Kullanıcı arayüzü ayağa kalkmalı ve bilet/koltuk içerikleri veritabanından çekilip ekranda gösterilmeli.
2. Aşama - Yönetim (Son Tarih: 18 Mayıs - 5 Haziran 2026) : Sitenin arka tarafına Admin paneli ve Login sistemi entegre edilmeli. Ekipteki herkesin CRUD (veri ekle/sil/güncelle/listele) işlemlerini sorunsuz çalıştırdığından emin olmalısınız.
3. Yayınlama ve Raporlama (Son Teslim: 18 Mayıs 2026) : Proje web ortamında yayınlanmalı ve ödev yazım kılavuzuna uygun, içinde ekran görüntüleri ve görev dağılımı olan detaylı bir rapor hazırlanmalı.
Raporda veritabanı tasarımını gösteren bir ER diyagramı olması zorunlu. Önemli Bir Uyarı: Sunum günü raporunuzu LMS sistemine yüklemiş olmanız şart, aksi halde proje değerlendirilmiyor. Ayrıca sunumda tüm grup üyeleri projenin her yerine hâkim olmak zorunda

İlk hafta görev dağılımı:
1. TUANA (Veritabanı ve Arka Plan)
İlk hafta senin için tamamen inşaatın temelini atmakla geçecek.
Veritabanı Tasarımı: Hangi tabloların olacağını belirle ve bir kâğıda veya dijital ortama kabaca çiz. Bu çizim, ileride teslim edeceğiniz proje raporunda istenen ER diyagramı için de şimdiden hazır olmuş olur.
MySQL Tabloları: ucuslar, koltuklar, kullanicilar ve degerlendirmeler (yorumlar) tablolarını oluştur. Sisteminizin en can alıcı noktası koltuklar olduğu için, bu tabloda fiyat ve koltuk durumu (cam kenarı, arızalı, rahat vb.) için özel sütunlar açmayı unutma.
Bağlantı Testi: PHP ile veritabanı bağlantısı kurmak projenin zorunlu şartlarından biri. Sorunsuz bir şekilde veritabanına bağlandığını test eden temel baglanti.php dosyanı yaz.
2. MUSTAFA (Ön Yüz ve Kullanıcı Deneyimi)
Sitenin tatlı görünmesi ve müşteriyi (veya hocayı) etkilemesi tamamen bu arkadaşın ilk hafta yapacağı işlere bağlı.
Tema Seçimi: Yönergeye göre hazır tema kullanabiliyorsunuz. Uçak bileti rezervasyon konseptine en uygun, modern ve sade bir HTML/CSS teması bulsun.
Klasör Düzeni: Temayı indirip içindeki gereksiz kodları temizlesin ve projenin ana klasör yapısını (örneğin; css, js, img klasörleri) düzenlesin.
Arayüz Hazırlığı: Özellikle uçağın içindeki koltuk dizilimini göstereceğiniz ekranın statik (henüz PHP ile beslenmemiş, sadece görsel) HTML yapısını hazırlayıp, sana "Kanka verileri buradaki div'lerin içine çekeceğiz" diyecek duruma getirsin. Kullanıcı arayüzünün (frontend) çalışır durumda olması birinci aşamanın zorunluluklarından.

3. ALİ (Yönetici Paneli ve Organizasyon)
Admin paneli, projenin 2. aşaması olan Geliştirme & Yönetim kısmına ait olsa da, bu arkadaşın ilk haftadan sisteme dahil olması gerekiyor.
Admin Teması: Yönetici paneli için temiz ve kullanımı kolay (tercihen Bootstrap tabanlı) ücretsiz bir admin dashboard teması bulsun.
Geleceğe Yatırım: İkinci aşamada kendisinden istenen session ve temel yetkilendirme işlemleri için PHP'de güvenli login/logout sistemlerinin mantığını araştırmaya başlasın.
