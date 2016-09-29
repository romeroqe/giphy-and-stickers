# Giphy and Stickers

[![Latest Stable Version](https://poser.pugx.org/romeroqe/giphy-and-stickers/v/stable)](https://packagist.org/packages/romeroqe/giphy-and-stickers) [![Total Downloads](https://poser.pugx.org/romeroqe/giphy-and-stickers/downloads)](https://packagist.org/packages/romeroqe/giphy-and-stickers) [![Latest Unstable Version](https://poser.pugx.org/romeroqe/giphy-and-stickers/v/unstable)](https://packagist.org/packages/romeroqe/giphy-and-stickers) [![License](https://poser.pugx.org/romeroqe/giphy-and-stickers/license)](https://packagist.org/packages/romeroqe/giphy-and-stickers)

A package that provides an interface between [Laravel](https://laravel.com/docs/5.3/) and [Giphy API](http://api.giphy.com/), includes Gifs and Stickers.

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

### Gifs

#### Search

Giphy::search($query, $limit = 25, $offset = 0, $rating = null, $lang = null)

```php

```

#### Translate

translate($query, $rating = null, $lang = null)

```php

```

#### Trending

trending($limit = 25, $rating = null)

```php

```

#### Random

Giphy::random($query, $rating = null)

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

You can do a `dd($giphy);` to see all attributes:

```php
{#162 ▼
  +"data": {#163 ▼
    +"type": "gif"
    +"id": "qbpRDgYI5JoKk"
    +"url": "http://giphy.com/gifs/cat-qbpRDgYI5JoKk"
    +"image_original_url": "https://media0.giphy.com/media/qbpRDgYI5JoKk/giphy.gif"
    +"image_url": "https://media0.giphy.com/media/qbpRDgYI5JoKk/giphy.gif"
    +"image_mp4_url": "https://media0.giphy.com/media/qbpRDgYI5JoKk/giphy.mp4"
    +"image_frames": "4"
    +"image_width": "500"
    +"image_height": "375"
    +"fixed_height_downsampled_url": "https://media0.giphy.com/media/qbpRDgYI5JoKk/200_d.gif"
    +"fixed_height_downsampled_width": "267"
    +"fixed_height_downsampled_height": "200"
    +"fixed_width_downsampled_url": "https://media0.giphy.com/media/qbpRDgYI5JoKk/200w_d.gif"
    +"fixed_width_downsampled_width": "200"
    +"fixed_width_downsampled_height": "150"
    +"fixed_height_small_url": "https://media0.giphy.com/media/qbpRDgYI5JoKk/100.gif"
    +"fixed_height_small_still_url": "https://media0.giphy.com/media/qbpRDgYI5JoKk/100_s.gif"
    +"fixed_height_small_width": "133"
    +"fixed_height_small_height": "100"
    +"fixed_width_small_url": "https://media0.giphy.com/media/qbpRDgYI5JoKk/100w.gif"
    +"fixed_width_small_still_url": "https://media0.giphy.com/media/qbpRDgYI5JoKk/100w_s.gif"
    +"fixed_width_small_width": "100"
    +"fixed_width_small_height": "75"
    +"username": ""
    +"caption": ""
  }
  +"meta": {#164 ▼
    +"status": 200
    +"msg": "OK"
  }
}
```

#### By ID 

getByID($id)

```php

```

#### By IDs 

getByIDs(array $ids)

```php

```

### Stickers

#### Search
```php

```

#### Translate
```php

```

#### Trending
```php

```

#### Random 
```php

```