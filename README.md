# DLE AMP ⚡
<img src="https://img.shields.io/badge/dle-13.0+-007dad.svg"> <img src="https://img.shields.io/badge/lang-tr-ce600f.svg"> <img src="https://img.shields.io/badge/license-GPL-60ce0f.svg">

Mevcut makalelerinizde düzenleme işlemi yapmanıza gerek kalmadan otomatik olarak AMP uyumlu olarak dönüştürülür. Sadece makale sayfaları için geçerlidir.
Makale sayfasında DLE smartphone teması kullanılmıştır. Bu sayfa `DomiTori` tarafından oluşturulmuştur.

## Kurulum
1) İlk olarak `engine/classes/` dizininde `amp-library` adında bir klasör oluşturun. Ardından bu klasörde aşağıdaki komutu çalıştırın. Böylece gerekli kütüphane kurulmuş olacak.
```bash
composer require lullabot/amp
```
*Yükleme sonrasında amp-library klasörü yaklaşık olarak 12-13 mb yer kaplayacaktır.*

2) Ardından eklentiyi sitenize yükleyin.

## Konfigürasyon
Eklenti ile birlikte iki adet tpl dosyası geliyor. Bu dosyalardan `amp-main.tpl` olanı `main.tpl` gibi çalışmaktadır. içerisindeki `{amp-content}` tagı ise `{content}` tagı gibidir. Eklenti sadece makale gösteriminde aktif olacaktır ve `fullstory.tpl` muadili olan `amp-fullstory.tpl` şablonu kullanılarak gösterilecektir. Bu iki şablon dosyasını kendinize göre düzenleyiniz. Fakat yaptığınız işlemlerin AMP kurallarına uygun olup olmadığını kontrol etmeyi unutmayınız.

Eklenti ile gelen taglar:
```
{normal-url} - Makalenin orijinal URL'si
{amp-url} - Makalenin amp URL'si
```

Modülün admin panelden kontrolü yapılmamaktadır.

## Ekran Görüntüleri
![Ekran 1](/docs/screen1.png?raw=true)
![Ekran 2](/docs/screen2.png?raw=true)
![Ekran 3](/docs/screen3.png?raw=true)

## Tarihçe

|Version|Tarih|Uyumluluk|Yenilikler|
| -
|**1.0**|16.01.2019|13.0+|İlk sürüm|
