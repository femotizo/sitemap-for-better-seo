# Sitemap for better SEO

There is already a post on this website (you can find it in the archive) about using [Bard](https://github.com/laravelista/Bard) and [Laravel](https://laravel.com/) to create a sitemap. It contains some cool ways of adding dynamic links, multilungual links, named routes, sitemap index etc.

**In this lesson I will focus only on the core objective and that is a simple, plain sitemap with static urls.**

This kind of sitemap requires only a few minutes to set up, but it can increase your search engine standing a lot.

## Installation

Clone repository to your drive and type in terminal there:

```
composer install
```

## Configuration

Copy file `.env.example` to `.env` file:

```
cp .env.example .env
```

and change the `APP_KEY` in `.env` using:

```
php artisan key:generate
```

## Running

From terminal type:

```
php artisan serve
```

You should get an address to open in your browser like http://localhost:8000.

**Have fun!**