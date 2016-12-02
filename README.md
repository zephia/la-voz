# La Voz Feed Generator

[![Build Status](https://scrutinizer-ci.com/g/zephia/la-voz/badges/build.png?b=master)](https://scrutinizer-ci.com/g/zephia/la-voz/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/zephia/la-voz/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/zephia/la-voz/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/zephia/la-voz/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/zephia/la-voz/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/zephia/la-voz/v/stable)](https://packagist.org/packages/zephia/la-voz)
[![Total Downloads](https://poser.pugx.org/zephia/la-voz/downloads)](https://packagist.org/packages/zephia/la-voz)
[![License](https://poser.pugx.org/zephia/la-voz/license)](https://packagist.org/packages/zephia/la-voz)

## Installation

Using [composer](http://getcomposer.org)

```bash
$ composer require zephia/la-voz
```

## Usage

```php
<?php

// Instantiate serializer with configurations.
$serializer = \JMS\Serializer\SerializerBuilder::create()
   ->addMetadataDir(__DIR__ . '/resources/config/serializer')
   ->build();

// Generate document feed
$document = new Zephia\LaVozFeed\Document($serializer);

// Generate Ad list
$adBag = new \Zephia\LaVozFeed\Entity\AdBag;

$document->generate($adBag);

// <?xml version="1.0" encoding="UTF-8"?>
// <data/>
```
