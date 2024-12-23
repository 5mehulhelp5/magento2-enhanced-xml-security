# Enhanced XML Security for Magento 2

**A replacement of `\Magento\Framework\Xml\Security` for Magento 2 with enhanced security.**

## Background

When the `SAPI` is `php-fpm`, `\Magento\Framework\Xml\Security` cannot detect entity if the XML string is not encoded in `UTF-8`.  
This is a potential security issue and many developers forget to detect the XML encoding before using this class.

_Note: this class works correctly in CLI._

## Features

After installing this extension, `\Magento\Framework\Xml\Security` is `preference`d, and you don't need to worry about the XML encoding anymore.

```php
/** @var \Magento\Framework\Xml\Security $xmlSecurity */
$xmlSecurity->scan($xmlString);
```

That's it.

## Requirements

Magento 2.4

## Installation

**`composer require wubinworks/module-xml-security`**

_This extension requires dependencies that are not included in default Magento installation, so you need to use `composer`._

## ♥

If you like this extension or this extension helped you, please ★star☆ this repository.

You may also like:  
[Magento 2 patch for CVE-2024-34102(aka Cosmic Sting)](https://github.com/wubinworks/magento2-cosmic-sting-patch)
