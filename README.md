# think-hashing
The thinkphp Hashing package.

# 安装
~~~
composer require tp5er/think-hashing
~~~

# 使用

~~~
use tp5er\think\hashing\facade\Hash;

//加密
$hashedValue= Hash::make("123456");
//验证密码是否有效
$check = Hash::check("123456",$hashedValue);

//加密
$hashedValue = hash_make("123456");
//验证密码是否有效
hash_check("123456",$hashedValue);
~~~

