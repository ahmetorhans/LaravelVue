Laravel Modul sistemi ile **app/Modules altındaki moduller otomatik olarak yüklenir.**

Her Module ait Controller, Model, View ve route dosyaları vardır.


View altında bulunan .js dosyaları otomatik olarak webpack ile compile edilir ve **/public/js/Modules/[dosya_adi.js]** kaydedilir. Bu şekilde tek sayfa .vue dosyaları ve modulleri de npm ile kullanılabilir. 


Modullerin yüklenmesi için:

/config/module.php dosyasına tanımlanmalıdır..
```
return  [
   'modules' => [
       'Home',
       'Ayarlar',
       'Yazi'
   ]
];
```

Test için..
```
#composer install

#npm install --save-dev cross-env



#php artisan serve

#npm run watch
```


