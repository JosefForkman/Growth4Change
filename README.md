# Growth4change
This webbsite is is a school project for the
course [LIA](https://www.yrgo.se/studera-pa-yh/larande-i-arbete-lia-praktik/).  
This is the website for Growth4Change. It is built
with [Laravel](https://laravel.com), [Tailwind](https://tailwindcss.com) and [Filament CMS](https://filamentphp.com/).
You can reda about Growth4Change below or see on the [webbsite](https://growth4change.net).

## What we do

Growth4Change unites changemakers to ghetto engineer innovative solutions for urban transformation. Together we grow
stronger communities through ecosystem restoration and urban acupuncture.

## Where we work

Growth4Change operates in low-income urban and peri-urban neighbourhoods and informal settlements in Kenya.

The areas are typically overcrowded and lack essential services like proper sanitation, clean water, and electricity.
There's no effective waste management, causing environmental degradation and human rights violations. Hunger pushes
young men and women into crime and prostitution as they struggle with scarce resources and limited opportunities.

Hidden within these areas are valuable assets often overlooked or underutilised. Among these are the creativity, skills,
and dedication of the youth to transform their communities. Innovative solutions, practices, and untapped resources lie
waiting to be discovered and ghetto engineered.

## Documentation

To run this project locally, you need to have the following installed and running on your machine:

1. Clone the repo
2. Run `composer install`
3. Run `npm install`
4. Set up a database and add the credentials to the .env file
    - Run  `cp .env.example .env`
    - If you want to use SQLite, make a database.sqlite file in the database folder and add the following to the
      .env file:
   ```
    DB_CONNECTION=sqlite
    DB_DATABASE=/absolute/path/to/database.sqlite
    DB_FOREIGN_KEYS=true
    ```
5. Run `php artisan migrate`
6. Make a Filament user by running `php artisan filament:user` and follow the instructions
7. Run `php artisan serve`
8. Run `npm run dev`
9. Go to [localhost:8000](http://localhost:8000) in your browser

## Design

We use [Tailwind](https://tailwindcss.com) CSS for styling. Whay we use Tailwind is because Filament CMS uses it and we
want to keep the same design language.

The design principles can you find in the [Design philosophy.md](Design%20philosophy.md) file. There you can
also find the color palette, what icon pack we use and the fonts we use.

### Issues

We had som issues
with [Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client) in VS Code
and [Filament CMS](https://filamentphp.com/). Her are some tips to get it working. If you run into any issues, try the
following:

- Add and set these values to "false" in settings.json if Intelephense throws the "undefined" error on all types,
  varibles and functions:

  ```
  "intelephense.diagnostics.undefinedTypes": false,
  "intelephense.diagnostics.undefinedFunctions": false,
  "intelephense.diagnostics.undefinedMethods": false,
  ```

- In order to make image upload work in Filament during development, add the path to your local host in the .env file:
  `APP_URL=http://127.0.0.1:8000` (Replace with your actual path). The run `php artisan storage:link`.

## The people behind this project are

- [JosefForkman](https://github.com//JosefForkman)
- [MagnusVV](https://github.com/MagnusVV)
- [TGKElit](https://github.com/TGKElit)

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by
the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell
via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
