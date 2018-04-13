# ecpay2in1
整合綠界金流&amp;物流

## 安裝
#### 使用`composer`安裝
```
composer require eddy7697/ecpay2in1:dev-master
```
或者在你的`composer.json`里`require`部分添加
```php
"eddy7697/ecpay2in1": "dev-master",
```
#### 安裝完畢以後```config/app.php```加入`service provider`
```php
'providers' => [
    Eddy7697\Ecpay2in1\Ecpay2in1ServiceProvider::class,
];
```
```php
'aliases' => [
    'Ecpay' => Eddy7697\Ecpay2in1\Facades\Ecpay::class,
];
```
