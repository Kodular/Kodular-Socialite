# Kodular Socialite for Laravel

<div align=center>

![Kodular Socialite|726x608, 30%](https://i.ibb.co/DWvM00s/signup-illustration-50317127aadc.png)


### Kodular Auth Provider for Laravel Socialite



[![Latest Stable Version](https://poser.pugx.org/kodular/kodular-socialite/v)](//packagist.org/packages/kodular/kodular-socialite) [![Total Downloads](https://poser.pugx.org/kodular/kodular-socialite/downloads)](//packagist.org/packages/kodular/kodular-socialite) [![Latest Unstable Version](https://poser.pugx.org/kodular/kodular-socialite/v/unstable)](//packagist.org/packages/kodular/kodular-socialite) [![License](https://poser.pugx.org/kodular/kodular-socialite/license)](//packagist.org/packages/kodular/kodular-socialite)

</div>

---

### Usage

```PHP
Socialite::with('kodular')->redirect();
```

## Installation

```
composer require kodular/kodular-socialite
```


## Development

### Requirements

- **PHP 7.2** or higher
- **Laravel 6.0** or higher

### Installation

1. Add the repository to composer: `composer require kodular/kodular-socialite`
2. Add the `SocialiteWasCalled` to `app/Providers/EventServiceProvider.php`
```PHP
protected $listen = [
  // a whole bunch of listeners
  \SocialiteProviders\Manager\SocialiteWasCalled::class => [
    // add your listeners (aka providers) here
    'SocialiteProviders\\Kodular\\KodularExtendSocialite@handle',
  ],
];
```
3. Add the Kodular Auth settings to `config/services.php`
```PHP
'kodular' => [
  'client_id' => env('KODULAR_CLIENT_ID'),
  'client_secret' => env('KODULAR_CLIENT_SECRET'),
  'redirect' => env('KODULAR_REDIRECT_URI'),
],
```
