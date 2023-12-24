<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array<string, string>
     * @phpstan-var array<string, class-string>
     */
    public array $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'filteradmin' => \App\Filters\FilterAdmin::class,
        'filtercalonsiswa' => \App\Filters\FilterCalonSiswa::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array<string, array<string, array<string, string>>>|array<string, array<string>>
     * @phpstan-var array<string, list<string>>|array<string, array<string, array<string, string>>>
     */
    public array $globals = [
        'before' => [
            'filteradmin' => ['except' => [
                '/', 'login', 'checkLogin',
                'register', 'saveRegister',
            ]],
            'filtercalonsiswa' => ['except' => [
                '/', 'login', 'checkLogin',
                'register', 'saveRegister',
            ]],

            // 'honeypot',
            // 'csrf',
            // 'invalidchars',
        ],
        'after' => [
            'filteradmin' => ['except' => [
                '/', 'dashboard/',
                'kelolaUser', 'kelolaUser/*',
                'pendaftarMasuk', 'pendaftarMasuk/*',
                'pendaftarDiterima', 'pendaftarDiterima/*',
                'pendaftarDitolak', 'pendaftarDitolak/*',
                'semuaPendaftar', 'semuaPendaftar/*',
                'banner', 'banner/*',
                'profil', 'profil/*'
            ]],
            'filtercalonsiswa' => ['except' => [
                '/', 'dashboard',
                'biodata', 'biodata/*',
                'biodata/tambahBiodata',
                'cetakBuktiPendaftaran', 'cetakBuktiPendaftaran/*',
            ]],
            'toolbar',
            // 'honeypot',
            // 'secureheaders',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['foo', 'bar']
     *
     * If you use this, you should disable auto-routing because auto-routing
     * permits any HTTP method to access a controller. Accessing the controller
     * with a method you don't expect could bypass the filter.
     */
    public array $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     */
    public array $filters = [];
}
