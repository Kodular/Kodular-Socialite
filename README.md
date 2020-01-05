# Kodular Laravel Socialite

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

1. Add this repository to composer.json
```PHP
"repositories": [
  {
    "type": "vcs",
    "url":  "git@github.com:kodular/socialite-kodular.git"
  }
]
```
2. Add the repository to composer: `composer require kodular/socialite-kodular`
3. Add the `SocialiteWasCalled` to `app/Providers/EventServiceProvider.php`
```PHP
protected $listen = [
  // a whole bunch of listeners
  \SocialiteProviders\Manager\SocialiteWasCalled::class => [
    // add your listeners (aka providers) here
    'SocialiteProviders\\Kodular\\KodularExtendSocialite@handle',
  ],
];
```
4. Add the Kodular Auth settings to `config/services.php`
```PHP
'kodular' => [
  'client_id' => env('KODULAR_CLIENT_ID'),
  'client_secret' => env('KODULAR_CLIENT_SECRET'),
  'redirect' => env('KODULAR_REDIRECT_URI'),
],
```
