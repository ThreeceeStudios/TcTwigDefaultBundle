Tc Twig Default Bundle
======================

[![Latest Stable Version](https://poser.pugx.org/tc/twig-default-bundle/v/stable)](https://packagist.org/packages/tc/twig-default-bundle)

Adds a `set_default` tag to twig, which will only set a variable if it doesn't already exist.


Installation
------------

```
composer require tc/twig-default-bundle
```

Enable the bundle in your `AppKernel.php`

```php
$bundles = array(
    // ...
    
    new Tc\Bundle\TwigDefault\TcTwigDefaultBundle(),
    
    // ...
);
```


Usage
------

Usage in Twig:

```twig
{% set_default title = 'One' %}

{# title = One #}

{% set title = 'Two' %}

{# title = Two #}

{% set_default title = 'Three' %}

{# title = Two #}
```


License
-------

TcTwigDefaultBundle is licensed with the MIT license.

See LICENSE for more details.
