USlugify
========

**WORK IN PROGRESS**

USlugify is a slugifier that generates unicode slugs.

Usage
-----

```
php > require 'vendor/autoload.php';

php > echo (new USlugify\USlugify())->slugify('计数器 (罢工)');
计数器-罢工
```
