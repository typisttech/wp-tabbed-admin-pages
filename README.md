# WP Tabbed Admin Pages

[![Latest Stable Version](https://poser.pugx.org/typisttech/wp-tabbed-admin-pages/v/stable)](https://packagist.org/packages/typisttech/wp-tabbed-admin-pages)
[![Total Downloads](https://poser.pugx.org/typisttech/wp-tabbed-admin-pages/downloads)](https://packagist.org/packages/typisttech/wp-tabbed-admin-pages)
[![Build Status](https://travis-ci.org/TypistTech/wp-tabbed-admin-pages.svg?branch=master)](https://travis-ci.org/TypistTech/wp-tabbed-admin-pages)
[![codecov](https://codecov.io/gh/TypistTech/wp-tabbed-admin-pages/branch/master/graph/badge.svg)](https://codecov.io/gh/TypistTech/wp-tabbed-admin-pages)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/TypistTech/wp-tabbed-admin-pages/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/TypistTech/wp-tabbed-admin-pages/?branch=master)
[![PHP Versions Tested](http://php-eye.com/badge/typisttech/wp-tabbed-admin-pages/tested.svg)](https://travis-ci.org/TypistTech/wp-tabbed-admin-pages)
[![StyleCI](https://styleci.io/repos/107813662/shield?branch=master)](https://styleci.io/repos/107813662)
[![License](https://poser.pugx.org/typisttech/wp-tabbed-admin-pages/license)](https://packagist.org/packages/typisttech/wp-tabbed-admin-pages)
[![Donate via PayPal](https://img.shields.io/badge/Donate-PayPal-blue.svg)](https://typist.tech/donate/wp-tabbed-admin-pages/)
[![Hire Typist Tech](https://img.shields.io/badge/Hire-Typist%20Tech-ff69b4.svg)](https://typist.tech/contact/)

Create WordPress admin pages with tabbed navigations, the OOP way.

<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->


- [Install](#install)
- [Usage](#usage)
  - [Example](#example)
- [Frequently Asked Questions](#frequently-asked-questions)
  - [Can two different plugins use this package at the same time?](#can-two-different-plugins-use-this-package-at-the-same-time)
  - [Do you have real life examples that use this package?](#do-you-have-real-life-examples-that-use-this-package)
- [Support](#support)
  - [Why don't you hire me?](#why-dont-you-hire-me)
- [Developing](#developing)
- [Running the Tests](#running-the-tests)
- [Feedback](#feedback)
- [Change log](#change-log)
- [Security](#security)
- [Contributing](#contributing)
- [Credits](#credits)
- [License](#license)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

## Install

Installation should be done via composer, details of how to install composer can be found at [https://getcomposer.org/](https://getcomposer.org/).

``` bash
$ composer require typisttech/wp-tabbed-admin-pages
```

You should put all `WP Tabbed Admin Pages` classes under your own namespace to avoid class name conflicts.

- [imposter-plugin](https://github.com/Typisttech/imposter-plugin)
- [mozart](https://github.com/coenjacobs/mozart)

## Usage

### Example

![Screenshot example](./assets/screenshot-example.png)

```php
// TODO
```

## Frequently Asked Questions

### Can two different plugins use this package at the same time?

Yes, if put all `WP Tabbed Admin Pages` classes under your own namespace to avoid class name conflicts.

- [imposter-plugin](https://github.com/Typisttech/imposter-plugin)
- [mozart](https://github.com/coenjacobs/mozart)

### Do you have real life examples that use this package?

Here you go:

 * [Sunny](https://github.com/Typisttech/sunny)
 * [WP Cloudflare Guard](https://github.com/TypistTech/wp-cloudflare-guard)
 * [WP Better Settings](https://github.com/TypistTech/wp-better-settings)

*Add your own plugin [here](https://github.com/TypistTech/wp-tabbed-admin-pages/edit/master/README.md)*

## Support

Love `wp-tabbed-admin-pages`? Help me maintain it, a [donation here](https://typist.tech/donation/) can help with it.

### Why don't you hire me?

Ready to take freelance WordPress jobs. Contact me via the contact form [here](https://typist.tech/contact/) or, via email [info@typist.tech](mailto:info@typist.tech)

## Developing

To setup a developer workable version you should run these commands:

```bash
$ composer create-project --keep-vcs --no-install typisttech/wp-tabbed-admin-pages:dev-master
$ cd wp-tabbed-admin-pages
$ composer install
```

## Running the Tests

[WP Tabbed Admin Pages](https://github.com/TypistTech/wp-tabbed-admin-pages) run tests on [Codeception](http://codeception.com/) and relies [wp-browser](https://github.com/lucatume/wp-browser) to provide WordPress integration.
Before testing, you have to install WordPress locally and add a [codeception.yml](http://codeception.com/docs/reference/Configuration) file.
See [*.suite.example.yml](./tests/) for [Local by Flywheel](https://share.getf.ly/v20q1y) configuration examples.

Actually run the tests:

``` bash
$ composer test
```

We also test all PHP files against [PSR-2: Coding Style Guide](http://www.php-fig.org/psr/psr-2/) and part of the [WordPress coding standard](https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards).

Check the code style with ``$ composer check-style``.

## Feedback

**Please provide feedback!** We want to make this package useful in as many projects as possible.
Please submit an [issue](https://github.com/TypistTech/wp-tabbed-admin-pages/issues/new) and point out what you do and don't like, or fork the project and make suggestions.
**No issue is too small.**

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security

If you discover any security related issues, please email wp-tabbed-admin-pages@typist.tech instead of using the issue tracker.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) and [CODE_OF_CONDUCT](./CODE_OF_CONDUCT.md) for details.

## Credits

[WP Tabbed Admin Pages](https://github.com/TypistTech/wp-tabbed-admin-pages) is a [Typist Tech](https://typist.tech) project and maintained by [Tang Rufus](https://twitter.com/Tangrufus), freelance developer for [hire](https://typist.tech/contact/).

Full list of contributors can be found [here](https://github.com/TypistTech/wp-tabbed-admin-pages/graphs/contributors).

## License

[WP Tabbed Admin Pages](https://github.com/TypistTech/wp-tabbed-admin-pages) is licensed under the GPLv2 (or later) from the [Free Software Foundation](http://www.fsf.org/).
Please see [License File](LICENSE) for more information.
