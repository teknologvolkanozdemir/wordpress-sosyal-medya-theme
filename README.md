# Sosyal Medya — WordPress teması

BuddyPress uyumlu, PHP tabanlı, duyarlı bir klasik WordPress teması. Derleme adımı,
harici yazı tipi, JavaScript veya ek kütüphane gerektirmez.

## Kurulum

1. WordPress 6.4 veya üzeri ve PHP 7.4 veya üzeri kullanın.
2. Bu dizini `wp-content/themes/sosyal-medya` konumuna kopyalayın. `style.css` ve
   `index.php` doğrudan bu dizinde olmalıdır.
3. **Görünüm → Temalar** bölümünde **Sosyal Medya** temasını etkinleştirin.
4. Sosyal özellikler için WordPress sürümünüzle uyumlu güncel BuddyPress eklentisini
   kurup etkinleştirin. **Ayarlar → BuddyPress** bölümünde istediğiniz bileşenleri
   ve eklentinin yönlendirdiği dizin/kalıcı bağlantı ayarlarını yapılandırın.
5. **Görünüm → Menüler** bölümünde ana ve alt menüleri, **Bileşenler** bölümünde
   kenar çubuğunu ve **Özelleştir → Site kimliği** bölümünde logoyu ayarlayın.

Menü atanmamışsa ana sayfa ve etkin BuddyPress bileşenlerinin (etkinlik, üyeler,
gruplar) bağlantıları gösterilir. Menüler tek seviyelidir; mobilde gizlenmez.
Özel menü atandığında topluluk bağlantılarını bu menüye kendiniz ekleyin.
BuddyPress yokken blog, sayfalar, arama ve yorumlar çalışmaya devam eder.
Profil, arkadaşlık, özel mesaj, üyelik ve grup işlevleri tema tarafından yeniden
yazılmaz; etkinleştirdiğiniz BuddyPress bileşenleri tarafından sağlanır.

## BuddyPress uyumluluğu

`buddypress.php`, WordPress döngüsü ve `the_content()` üzerinden BuddyPress'in
tema uyumluluk katmanını kullanır. Eklentinin bileşen şablonları kopyalanmaz ve bu
katmanı devre dışı bırakan `add_theme_support( 'buddypress' )` bildirimi yapılmaz.
Varsayılan Nouveau şablon paketiyle başlayın. Eklenti stilleri ve betikleri normal
WordPress kancalarıyla yüklenir.

## Erişilebilirlik

Tema; içeriğe geç bağlantısı, anlamsal bölgeler, görünür klavye odağı, etiketli
arama alanları, benzersiz form kimlikleri, altı çizili bağlantılar, yüksek kontrastlı
tema renkleri, duyarlı yerleşim ve azaltılmış hareket tercihi desteği sağlar.
Metinler `sosyal-medya` metin alanıyla çeviriye hazırdır; varsayılan dil Türkçedir.
Temel gezinme JavaScript olmadan kullanılabilir.

Hedef WCAG 2.2 AA'dır; bu tema tek başına tüm sitenin uygunluğunu garanti etmez
ve bağımsız erişilebilirlik sertifikasına sahip değildir. BuddyPress, diğer
eklentiler, kullanıcı içerikleri, yüklenen görseller ve yönetici özelleştirmeleri
ayrıca denetlenmelidir. Görsellere anlamlı alternatif metin ekleyin, içeriklerde
başlık sırasını koruyun, videolara altyazı sağlayın ve menü bağlantılarına açıklayıcı
adlar verin.

### Etkinleştirme sonrası kontrol listesi

- BuddyPress kapalıyken ana sayfa, tekil yazı, sayfa, arşiv, boş/dolu arama ve 404'ü açın.
- Yorum gönderme, yanıt verme ve sayfalandırmayı; parola korumalı yazıları kontrol edin.
- BuddyPress açıkken etkinlik akışı, üye/grup dizinleri, profil, kayıt, giriş,
  bildirim ve özel mesaj ekranlarını etkin bileşenlere göre sınayın.
- Giriş yapmış/yapmamış hesaplarla etkinlik gönderme, yorumlama ve grup işlemlerini deneyin.
- Yalnızca Tab, Shift+Tab ve Enter ile gezinip içeriğe geç bağlantısını,
  odak görünürlüğünü, form hatalarını ve BuddyPress dinamik güncellemelerini kontrol edin.
- NVDA/Firefox veya VoiceOver/Safari ile başlıkları, bölgeleri, alan etiketlerini,
  doğrulama mesajlarını ve dinamik bildirimleri okuyun.
- 320 CSS piksel genişlikte ve %400 yakınlaştırmada içerik kaybı/yatay taşma
  olmadığını; yüksek kontrast ve azaltılmış hareket ayarlarını kontrol edin.
- Son siteyi bir erişilebilirlik denetleyicisiyle tarayın; otomatik sonuçları manuel
  klavye ve ekran okuyucu testleriyle tamamlayın.

## Geliştirme

Mevcut depoda otomatik test veya derleme altyapısı yoktur. PHP sözdizimi denetimi
için tema dizininde `find . -name '*.php' -print0 | xargs -0 -n1 php -l` çalıştırın.
İşlevsel doğrulama için WordPress ve BuddyPress kurulu bir test sitesi gerekir.

Lisans: [GPL-3.0-or-later](LICENSE).
