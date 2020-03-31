

Require this package with composer:
```
composer require qing7777/hash
```


## Configuration

To use your own settings, publish config.

```
php bin/hyperf.php vendor:publish qing7260/hash
```

`config/autoload/hash.php`

# 获取Hash
```php
use Qing7777\Hash\Hash;

$str = '12345';

$encryptedStr = Hash::make($str);
```
or
```php
use Hyperf\Utils\ApplicationContext;
use Qing7777\Hash\HashInterface;

$str = '12345';

$HashInterface = ApplicationContext::getContainer()->get(HashInterface::class);

$HashInterface->make($str);
```

# 使用指定Hash算法加密
```php
use Qing7777\Hash\Hash;

$str = '12345';

// Supported: "bcrypt", "argon"

$encryptedStr = Hash::driver("argon")->make($str);
```
