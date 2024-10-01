<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).



## Installation

Follow these steps to set up the project locally:



 **Install dependencies:**

   Make sure you have [Composer](https://getcomposer.org/) installed. Then, run:

   ```bash
   composer install
   ```


7. **Run the migrations:**

   After configuring your database, run the migrations to set up the database schema:

   ```bash
   php artisan migrate
   ```

8. **Start the development server:**

   To start the local development server, run:

   ```bash
   php artisan serve
   ```

   The application will be available at `http://localhost:8000`.

 you can see customers on : http://127.0.0.1:8000/api/customers
 

## Running Tests

You can run the tests using PHPUnit. To do so, use the following command:

```bash
php artisan test
```

## Additional Commands

- **Clear application cache:**

  ```bash
  php artisan cache:clear
  ```

- **Run database seeders:**

  ```bash
  php artisan db:seed
  ```

## License

-----------------------------------------------------------------------------------
# Technical test
You have 72 hours to submit your code. Read the next lines to know about the requirement.

#### The challenge is simple. 
#### According to your desired position is, you are going to choice from the next options:
#### Our new business associate needs a GUI in order to their customers can to submit personal information for future telephonic contact.

## Frontend developer challenge's instructions
##### Clone the repository using the following url 
`https://{your-username-here}@bitbucket.org/MAS_development/crud_dev_jr.git`
> Using ReactJS or AngularJS you must create SPA with a simple form registration.
> This is the URL of the API [https://micros.masservicios-ti.com.mx](#https://micros.masservicios-ti.com.mx)
> This is the main endpoint of the API `/api/customers`
> Attached to this message you'll found an (dot) JSON file EvaluacionProgramadoresFrontEndJunior.postman_collection.json, using POSTMAN to open it (google it if necessary), the documentation wil guide you through the actions that your GUI needs to perform. 


## Backend developer challenge's instructions
##### Clone the repository using the following url 
``https://{your-username-here}@bitbucket.org/MAS_development/api_dev_jr.git``

> Using Laravel you must create API for a simple form registration.
> Attached to this message you'll found an (dot) JSON file EvaluacionProgramadoresFrontEndJunior.postman_collection.json, using POSTMAN to open it (google it if necessary), the documentation wil guide you through the actions that your API needs to perform. 

### Bonus Points
 * Use unit tests.
 * Use of homestead.


### The API should be able to:

 * list all customers
 * retrieve a single customer
 * create a customer
 * update a customer
 * delete a customer
 * restore a deleted customer
 * upload a file with customer's avatar


### Data structure
Field             | Type             | Null | Key | Default                         |
------------------|------------------|------|-----|---------------------------------|
id                | int(11) unsigned | NO   | PRI | NULL                            |
email             | varchar(100)     | YES  |     | NULL                            |
password          | varchar(100)     | YES  |     | NULL                            |
name              | varchar(100)     | YES  |     | NULL                            |
last_name         | varchar(100)     | YES  |     | NULL                            |
birth_date        | date             | YES  |     | NULL                            |
personal_phone    | varchar(20)      | YES  |     | NULL                            |
contact_phone     | varchar(20)      | YES  |     | NULL                            |
address           | text             | YES  |     | NULL                            |
gender            | varchar(1)       | YES  |     | NULL                            |
state             | varchar(30)      | YES  |     | NULL                            |
city              | varchar(80)      | YES  |     | NULL                            |
suburb            | varchar(80)      | YES  |     | NULL                            |
zip_code          | varchar(8)       | YES  |     | NULL                            |
avatar            | varchar(150)     | YES  |     | https://via.placeholder.com/500 |
email_verified_at | timestamp        | YES  |     | NULL                            |
remember_token    | varchar(100)     | YES  |     | NULL                            |
created_at        | timestamp        | YES  |     | current_timestamp()             |
updated_at        | timestamp        | YES  |     | NULL                            |
deleted_at        | timestamp        | YES  |     | NULL                            |


### Customer's required attributes:
> email * validates email address
> password * validates min length of 10
> name * validates min length of 3
> last_name * validates min length of 4
> birth_date * validates date format: YYYY-MM-DD
> personal_phone * validates 10 digits
> contact_phone * validates 10 digits
> zip_code * validates 6 digits

### Criteria
For full transparency, the test will be scored according to the following:

 * REST Structure
 * Unit Testing
 * Logging
 * Best practices
 * Reusable code
 * Decoupled code
 * Ability to transform requirements into code
 * Use of services, controllers, and models | ONLY FOR BACKEND DEVELOPERS
 * Use of Laravel 6 LTS as a framework | ONLY FOR BACKEND DEVELOPERS
 * Use of hooks | ONLY FOR FRONTEND DEVELOPERS
 * Use of dom | ONLY FOR FRONTEND DEVELOPERS
 * This API not requires CSRF verification
 
