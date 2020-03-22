# Kodular Socialite for Laravel

Kodular Auth Provider for Laravel Socialite

---

### Usage

```PHP
Socialite::with('kodular')->redirect();
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
