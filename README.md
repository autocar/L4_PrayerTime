Laravel 4 Prayer Time
=========

Diyanet işleri bakanlığının alt yapısını kullanarak namaz vakitlerini temin eden laravel için geliştirilmiş basit bir pakettir.

Not: Şuan sadece Türkiye için namaz vakitleri sağlanmaktadır.

Kurulum
--------------
Paketi uygulamanıza dahil etmek için **composer.json** dosyasının içinde bulunan **require** dizisi içerisine aşağıdaki dizgeyi ekleyiniz.

```sh
"lugihaue/prayertime":"dev-master"
```

Sonrasında paketi yüklemek için aşağıdaki komutunu çalıştırınız.

```sh
composer install
```
Eğer varolan paketi güncellemek istiyorsanız aşağıdaki komutu çalıştırınız.
```sh
composer update
```

Yükleme işlemi bittikten sonra **app/config/app.php** dosyasının içerisinde bulunan **providers** dizisine aşağıdaki değeri ekleyiniz.
```sh
'Lugihaue\Prayertime\PrayertimeServiceProvider',
```

Alias eklemek içinde gene **app/config/app.php** dosyasının içerisinde bulunan **aliases** dizisine aşağıdaki değeri ekleyiniz.
```sh
'Prayer' 	=> 'Lugihaue\Prayertime\Facades\Prayer',
```

Bu adımları uygulayarak kurulumu tamamlamış oluyoruz.


Kullanımı
----

> Bütün şehirlerin isimlerini almak.

```sh
// Bütün şehir isimlerini dizi halinde getirir.
// key = şehir kodu 
// value = şehir ismi şeklindedir.
Prayer::getAllCitiesName();
```


> Bütün şehirlerin kodlarını almak.

```sh
// Bütün şehir kodlarını dizi halinde getirir.
// key = şehir ismi 
// value = şehir kodu şeklindedir.
Prayer::getAllCitiesCode();
```



> Bütün şehirlerin kodlarını almak.

```sh
// Bütün şehir kodlarını dizi halinde getirir.
// key = şehir ismi 
// value = şehir kodu şeklindedir.
Prayer::getAllCitiesCode();
```

** Tekil Kullanımlar için ise :**


> Belirtilen kodun şehir ismini almak.

```sh
// Parametrede belirtilen şehir kodunun ismini getirir.
Prayer::getCityName(520); // Bursa
```

> Belirtilen şehir isminin kodunu almak.

```sh
// Parametrede belirtilen şehir isminin kodunu getirir.
Prayer::getCityCode('BURSA'); // 520
```

> Belirtilen şehir koduna ait ilçelerin kodlarını getirir.

```sh
// Parametrede belirtilen şehir koduna ait ilçelerin isimlerini ve kodlarını getirir.
Prayer::getDistrictCode(520);

// İkinci parametre olarak true belirtilirse sadece merkez ilçenin kodunu getirir.
Prayer::getDistrictCode(520 , true); // 9335
```

> Belirtilen ilçe koduna ait namaz vakitlerini bir dizi olarak getirir .

```sh
// Parametrede belirtilen şehir isminin kodunu getirir.
Prayer::getPrayerTimes(9335);
```

##### Dizi içeriği;

* Date (Geçerli günü verir yani "strtotime('today')  şeklinde.)
* İmsak
* Günes(Sabah)
* Ögle
* İkindi
* Akşam
* Yatsı
* Kıble
* Enlem
* Boylam
* Kıble açısı
* Ülke adı
* Şehir adı
* Kıble saati
* Güneş batış saati
* Güneş doğuş saati

> Ülkenin bütün şehirlerinin merkez ilçelerinin namaz vakitlerini almak

__construct'da belirtilen ülke'ye ailt şehirlerin merkez ilçelerinin namaz vakitlerini dizi olarak getirir.

```sh
Prayer::getAllPrayerTimes();
```


NOT
--

Gelen verileri cache ederek kullanmanızı şiddetle tavsiye ederim. Tam olarak güncellenme saatini bilmiyorum ama siz gece 01:00'den sonra uygun gördüğünüz bir
saate günlük cron ayarlayıp namaz vakitlerini güncel tutarsınız.

Lisans
----

[MIT] ile lisanslanmıştır.

[MIT]:http://opensource.org/licenses/MIT
