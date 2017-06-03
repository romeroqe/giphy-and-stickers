# Giphy and Stickers

[![Latest Stable Version](https://poser.pugx.org/romeroqe/giphy-and-stickers/v/stable)](https://packagist.org/packages/romeroqe/giphy-and-stickers) [![Total Downloads](https://poser.pugx.org/romeroqe/giphy-and-stickers/downloads)](https://packagist.org/packages/romeroqe/giphy-and-stickers) [![Latest Unstable Version](https://poser.pugx.org/romeroqe/giphy-and-stickers/v/unstable)](https://packagist.org/packages/romeroqe/giphy-and-stickers) [![License](https://poser.pugx.org/romeroqe/giphy-and-stickers/license)](https://packagist.org/packages/romeroqe/giphy-and-stickers)

A package that provides an interface between [Laravel](https://laravel.com/docs/5.3/) and [Giphy API](http://api.giphy.com/), includes Gifs and Stickers.

## Installation
- [Giphy and Stickers on Packagist](https://packagist.org/packages/romeroqe/giphy-and-stickers)
- [Giphy and Stickers on GitHub](https://github.com/romeroqe/giphy-and-stickers)

### Composer

First, pull in the package through Composer.

``` php
“require”: {
    ...
    "romeroqe/giphy-and-stickers": "dev-master"
}
```

And run composer:

```
$ composer update
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
```

## Quick Examples

You can see [the documentation](https://github.com/giphy/GiphyAPI#giphy-api-documentation) for more information.

###### Parameters
+ q - search query term or phrase
+ s - search query term or phrase
+ limit - (optional) number of results to return, maximum 100. Default 25.
+ offset - (optional) results offset, defaults to 0.
+ rating - (optional) limit results to those rated (y,g, pg, pg-13 or r).
+ lang - (optional) specify default country for regional content; format is 2-letter ISO 639-1 country code. See list of supported langauges [here](https://github.com/Giphy/GiphyAPI#language-support)

### Endpoints

+ [Gifs](#gifs)
	+ [Search](#search)
	+ [Translate](#translate)
	+ [Trending](#trending)
	+ [Random](#random)
	+ [By id](#by-id)
	+ [By id](#by-ids)
+ [Stickers](#stickers)
	+ [Sticker Search](#sticker-search)
	+ [Sticker Translate](#sticker-translate)
	+ [Sticker Trending](#sticker-trending)
	+ [Sticker Random](#sticker-random)

### Gifs

#### Search

Search all Giphy GIFs for a word or phrase. Punctuation will be stripped and ignored. On this case, `$giphys` is an array.

Method: Giphy::search($query, $limit = 25, $offset = 0, $rating = null, $lang = null) 

```php
$giphys = Giphy::search('cat');

foreach ($giphys->data as $giphy) {
    // Get id
	$giphy->id;

	// Get image original url
	$giphy->images->original->url;

	// Get image original mp4 url
	$giphy->images->original->mp4;

	//etc
}
```

You can do a `dd($giphys)` to see all attributes:

```php
{#162 ▼
  +"data": array:25 [▼
    0 => {#163 ▼
      +"type": "gif"
      +"id": "W80Y9y1XwiL84"
      +"slug": "gift-W80Y9y1XwiL84"
      +"url": "http://giphy.com/gifs/gift-W80Y9y1XwiL84"
      ...
    }
    1 => {#182 ▶}
    2 => {#202 ▶}
    ...
```

#### Translate

The translate API draws on search, but uses the Giphy "special sauce" to handle translating from one vocabulary to another.

Method: Giphy::translate($query, $rating = null, $lang = null)

```php
$giphy= Giphy::translate('cat');

// Get id
$giphy->data->id;

// Get image original url
$giphy->data->images->original->url;

// Get image original mp4 url
$giphy->data->images->original->mp4;

//etc
```

You can do a `dd($giphy)` to see all attributes:

```php
{#162 ▼
  +"data": {#163 ▼
    +"type": "gif"
    +"id": "3oz8xQQP4ahKiyuxHy"
    ...
    +"images": {#165 ▼
      ...
      +"original": {#180 ▼
        +"url": "http://media3.giphy.com/media/3oz8xQQP4ahKiyuxHy/giphy.gif"
        +"width": "480"
        +"height": "352"
        +"size": "3795005"
        +"frames": "33"
        +"mp4": "http://media3.giphy.com/media/3oz8xQQP4ahKiyuxHy/giphy.mp4"
        +"mp4_size": "132229"
        +"webp": "http://media3.giphy.com/media/3oz8xQQP4ahKiyuxHy/giphy.webp"
        +"webp_size": "756840"
      }
      ...
```

#### Trending

Fetch GIFs currently trending online. On this case, `$giphys` is an array.

Method: Giphy::trending($limit = 25, $rating = null)

```php
$giphys = Giphy::trending();

foreach ($giphys->data as $giphy) {
    // Get id
	$giphy->id;

	// Get image original url
	$giphy->images->original->url;

	// Get image original mp4 url
	$giphy->images->original->mp4;

	//etc
}
```

You can do a `dd($giphys)` to see all attributes:

```php
{#162 ▼
  +"data": array:25 [▼
    0 => {#163 ▼
      +"type": "gif"
      +"id": "l2SqiAELInKQ8rF0Q"
      +"slug": "2dopequeens-podcast-2-dope-queens-l2SqiAELInKQ8rF0Q"
      +"url": "http://giphy.com/gifs/2dopequeens-podcast-2-dope-queens-l2SqiAELInKQ8rF0Q"
      ...
    }
    1 => {#183 ▶}
    2 => {#203 ▶}
    ...
```

#### Random

Returns a random GIF, limited by tag.

Method: Giphy::random($query, $rating = null)

```php
$giphy = Giphy::random('cat');

// Get id
$giphy->data->id;

// Get image original url
$giphy->data->image_original_url;

// Get image mp4 url
$giphy->data->image_mp4_url;

//etc
```

You can do a `dd($giphy)` to see all attributes:

```php
{#162 ▼
  +"data": {#163 ▼
    +"type": "gif"
    +"id": "qbpRDgYI5JoKk"
    +"url": "http://giphy.com/gifs/cat-qbpRDgYI5JoKk"
    +"image_original_url": "https://media0.giphy.com/media/qbpRDgYI5JoKk/giphy.gif"
    ...
  }
  +"meta": {#164 ▼
    +"status": 200
    +"msg": "OK"
  }
}
```

#### By ID 

Returns meta data about a GIF, by GIF id.

Method: Giphy::getByID($id)

```php
$giphy= Giphy::getByID('qbpRDgYI5JoKk');

// Get id
$giphy->data->id;

// Get image original url
$giphy->data->images->original->url;

// Get image original mp4 url
$giphy->data->images->original->mp4;

//etc
```

You can do a `dd($giphy)` to see all attributes:

```php
{#162 ▼
  +"data": {#163 ▼
    +"type": "gif"
    +"id": "qbpRDgYI5JoKk"
    ...
    +"images": {#164 ▼
      ...
      +"original": {#179 ▼
        +"url": "https://media1.giphy.com/media/qbpRDgYI5JoKk/giphy.gif"
        +"width": "500"
        ...
```

#### By IDs 

A multiget version of the get GIF by ID endpoint. On this case, `$giphys` is an array.

Method: Giphy::getByIDs(array $ids)

```php
$giphys = Giphy::getByIDs(['qbpRDgYI5JoKk','FiGiRei2ICzzG']);

foreach ($giphys->data as $giphy) {
    // Get id
	$giphy->id;

	// Get image original url
	$giphy->images->original->url;

	// Get image original mp4 url
	$giphy->images->original->mp4;

	//etc
}
```

You can do a `dd($giphys)` to see all attributes:

```php
{#162 ▼
  +"data": array:2 [▼
    0 => {#163 ▼
      +"type": "gif"
      +"id": "qbpRDgYI5JoKk"
      +"slug": "cat-qbpRDgYI5JoKk"
      ...
    }
    1 => {#182 ▼
      +"type": "gif"
      +"id": "FiGiRei2ICzzG"
      +"slug": "funny-cat-FiGiRei2ICzzG"
      ...
```

### Stickers

The methods of Stickers are similar to the methods Giphy, so I will omit the examples of `dd()`, but also you can use it to view all the attributes of objects.

#### Sticker Search

Search all Sticker for a word or phrase. Punctuation will be stripped and ignored. On this case, `$stickers` is an array.

Method: Stickers::search($query, $limit = 25, $offset = 0, $rating = null, $lang = null) 

```php
$stickers = Stickers::search('dog');

foreach ($stickers->data as $sticker) {
    // Get id
	$sticker->id;

	// Get image original url
	$sticker->images->original->url;

	// Get image original mp4 url
	$sticker->images->original->mp4;

	//etc
}
```

#### Sticker Translate

The translate API draws on search, but uses the Stickers "special sauce" to handle translating from one vocabulary to another.

Method: Stickers::translate($query, $rating = null, $lang = null)

```php
$sticker= Stickers::translate('cat');

// Get id
$sticker->data->id;

// Get image original url
$sticker->data->images->original->url;

// Get image original mp4 url
$sticker->data->images->original->mp4;

//etc
```

#### Sticker Trending

Fetch Stickers currently trending online. On this case, `$stickers` is an array.

Method: Stickers::trending($limit = 25, $rating = null)

```php
$stickers = Stickers::trending();

foreach ($stickers->data as $sticker) {
    // Get id
	$sticker->id;

	// Get image original url
	$sticker->images->original->url;

	// Get image original mp4 url
	$sticker->images->original->mp4;

	//etc
}
```

#### Sticker Random 

Returns a random Sticker, limited by tag.

Method: Stickers::random($query, $rating = null)

```php
$sticker = Stickers::random('cat');

// Get id
$sticker->data->id;

// Get image original url
$sticker->data->image_original_url;

// Get image mp4 url
$sticker->data->image_mp4_url;

//etc
```
