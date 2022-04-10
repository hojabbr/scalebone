## About ScaleBone

ScaleBone is a web application based on the famous Laravel framework. We believe development must be an enjoyable and
creative experience to be truly fulfilling, however when trying to create Laravel applications that can scale on the
enterprise level there is often many views on how such application should be implemented and structured. ScaleBone is
trying to create a guideline and a SOLID backend architecture that fits Laravel for such use-cases (of course it's also
great for small applications!). Developers using ScaleBone with it's DDD and SOLID architecture will always feel at home
like a normal Laravel application!

ScaleBone is intended for API uses and supports SPAs out of the box. ScaleBone also has a Frontend Repository (Using
nextjs) that will reflect all changes in the backend. You can clone it and use it alongside the back
at: https://github.com/hojabbr/scalebone-frontend

## What we have achieved so far:

- Removal of the app folder
- Separation of the App, Domain and Support layers
- Versioned API
- Docker and docker-compose
- .editorconfig for consistent coding styles in the IDE
- Code quality tools (phpmd, phpstan, php_codesniffer)

## What we will achieve:

- Multilingual (with mcamara/laravel-localization)
- Multi Tenancy (with tenancyforlaravel)
- Multi time-zoned
- SSO - Single Sign On (with Socialite)
- Actions and single responsibility controllers
- Repositories or Query builders
- Data Transfer Objects (with spatie/data-transfer-object) for requests and responses
- Collections and Resources
- Value Objects

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
