# Giphy and Stickers

[![Latest Stable Version](https://poser.pugx.org/romeroqe/giphy-and-stickers/v/stable)](https://packagist.org/packages/romeroqe/giphy-and-stickers) [![Total Downloads](https://poser.pugx.org/romeroqe/giphy-and-stickers/downloads)](https://packagist.org/packages/romeroqe/giphy-and-stickers) [![Latest Unstable Version](https://poser.pugx.org/romeroqe/giphy-and-stickers/v/unstable)](https://packagist.org/packages/romeroqe/giphy-and-stickers) [![License](https://poser.pugx.org/romeroqe/giphy-and-stickers/license)](https://packagist.org/packages/romeroqe/giphy-and-stickers)

A package that provides an interface between [Laravel](https://laravel.com/docs/5.3/) and [Giphy API](https://github.com/giphy/GiphyAPI), includes Gifs and Stickers.

## Installation
- [Giphy and Stickers on Packagist](https://packagist.org/packages/romeroqe/giphy-and-stickers)
- [Giphy and Stickers on GitHub](https://github.com/romeroqe/giphy-and-stickers)

### Composer

From the command line run:

```
$ composer require romeroqe/giphy-and-stickers
```

### Provider

Once installed you need to register the service provider with the application. Open up `config/app.php` and find the `providers` key.

``` php
'providers' => [
	...
	Romeroqe\Giphy\GiphyServiceProvider::class,
	Romeroqe\Giphy\StickersServiceProvider::class,

]
```

### Facade

This package also ships with a facade which provides the static syntax. You can register the facade in the aliases key of your `config/app.php` file.

```php
'aliases' => [
	...
	'Giphy' => Romeroqe\Giphy\GiphyFacade::class,
	'Stickers' => Romeroqe\Giphy\StickersFacade::class,
]

## Quick Examples

You can see [the documentation](https://github.com/giphy/GiphyAPI) for more information.

