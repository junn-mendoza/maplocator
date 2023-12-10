<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://i.imgur.com/FCOceNJ.png" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Task description and process

Build a Laravel app in 9 or 10 <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"> with a simple form that allows a user create a new area. 

<img src="https://i.imgur.com/tYulMzi.png"/>

The form field and a map should be on the same page (built with Livewire). 

```php
"require": {
    "php": "^8.1",
    "guzzlehttp/guzzle": "^7.2",
    "laravel/framework": "^10.10",
    "laravel/sanctum": "^3.3",
    "laravel/tinker": "^2.8",
    "livewire/livewire": "^3.2",
    "livewire/volt": "^1.0"
},
````

The area will need to be given a name, category and start date. Additional optional fields include an end date, 

```php
Schema::create('maps', function (Blueprint $table) {
    $table->id();
    $table->string('map_name');
    $table->string('category');
    $table->date('start_date');
    $table->date('end_date');
    $table->integer('user_id')->unsigned();
    $table->foreign('user_id')->references('id')->on('users');
    $table->json('geojson');
    $table->timestamps();
});
```

a validated field (set by person inputted) 

```php
  #[Rule('required|min:2|max:50')]
  public $map_name;
  #[Rule('required')]
  public $category;
  #[Rule('required|date_format:d/m/Y')]
  public $start_date;
  #[Rule('required|date_format:d/m/Y')]
  public $end_date;
  #[Rule('required')]
```
and an owner of the area (Client A, Client B etc..)

<img src="https://i.imgur.com/VzecUNR.jpg"/>

There should be 2 options for creating the geometry. Option 1 is to use the Leaflet draw plugin to plot the points on the map and cerate the area. 

<img src="https://i.imgur.com/5CSA0L2.jpg"/>

Option 2 is to upload a GeoJson or KML file (both file types should be supported). When a file is uploaded, it should display the area polygon on the map.

The area should also be editable, with functionality to move the geometry vertices so the user can edit the geometry. 

<img src="https://i.imgur.com/UG20HqL.png"/>

