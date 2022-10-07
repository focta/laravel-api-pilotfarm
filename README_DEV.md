# ADRについて

## 必要なファイル構造
```
.
├── Console
│   └── Kernel.php
├── Domain
│   └── `SampleIndexDomain.php`
├── Exceptions
│   └── Handler.php
├── Http
│   ├── Actions
│   │   ├── HelloController.php
│   │   └── `SampleIndexAction.php`
│   ├── Controllers
│   │   ├── Api
│   │   │   └── MeController.php
│   │   ├── Auth
│   │   │   ├── LoginController.php
│   │   │   └── LogoutController.php
│   │   └── Controller.php
│   ├── Kernel.php
│   ├── Middleware
│   │   ├── Authenticate.php
│   │   ├── EncryptCookies.php
│   │   ├── PreventRequestsDuringMaintenance.php
│   │   ├── RedirectIfAuthenticated.php
│   │   ├── TrimStrings.php
│   │   ├── TrustHosts.php
│   │   ├── TrustProxies.php
│   │   └── VerifyCsrfToken.php
│   ├── Requests
│   │   └── Auth
│   │       └── LoginRequest.php
│   └── Responders
│       └── `SampleIndexResponder.php`
├── Models
│   └── User.php
└── Providers
    ├── AppServiceProvider.php
    ├── AuthServiceProvider.php
    ├── BroadcastServiceProvider.php
    ├── EventServiceProvider.php
    └── RouteServiceProvider.php
```
