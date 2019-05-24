# TrueMoney Wallet-Omise (Beta)
Omise provides a set of APIs to enable your customers to make payments directly from their TrueMoney Wallet. TrueMoney Wallet enables customers to checkout faster by eliminating the need to enter their card or payment details. In order to use this feature, the customer is required to have a mobile number registered with TrueMoney Wallet. This guide will walk through the payment flow and basic implementation of this payment method.


# ตัวอย่าง

ตั้งค่า PUBLIC_KEY / SECRET_KEY ที่ไฟล์ (config.php)

```php
define('OMISE_PUBLIC_KEY', 'PUBLIC_KEY');
define('OMISE_SECRET_KEY', 'SECRET_KEY');
```


ตั้งค่าที่ไฟล์ (index.html)

```js
Omise.setPublicKey("pkey_test_5fqixbcu72fymj")
```


## License

TrueMoneywallet-Omise is open-sourced software released under the [MIT License](https://opensource.org/licenses/MIT).
