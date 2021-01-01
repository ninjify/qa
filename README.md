![](https://heatbadger.now.sh/github/readme/ninjify/qa/)

<p align=center>
  <a href="https://github.com/ninjify/qa/actions"><img src="https://badgen.net/github/checks/ninjify/qa/master?cache=300"></a>
  <a href="https://coveralls.io/r/ninjify/qa"><img src="https://badgen.net/coveralls/c/github/ninjify/qa?cache=300"></a>
  <a href="https://packagist.org/packages/ninjify/qa"><img src="https://badgen.net/packagist/dm/ninjify/qa"></a>
  <a href="https://packagist.org/packages/ninjify/qa"><img src="https://badgen.net/packagist/v/ninjify/qa"></a>
</p>
<p align=center>
  <a href="https://packagist.org/packages/ninjify/qa"><img src="https://badgen.net/packagist/php/ninjify/qa"></a>
  <a href="https://github.com/ninjify/qa"><img src="https://badgen.net/github/license/ninjify/qa"></a>
  <a href="https://bit.ly/ctteg"><img src="https://badgen.net/badge/support/gitter/cyan"></a>
  <a href="https://bit.ly/cttfo"><img src="https://badgen.net/badge/support/forum/yellow"></a>
  <a href="https://contributte.org/partners.html"><img src="https://badgen.net/badge/sponsor/donations/F96854"></a>
</p>

<p align=center>
Website 🚀 <a href="https://contributte.org">contributte.org</a> | Contact 👨🏻‍💻 <a href="https://f3l1x.io">f3l1x.io</a> | Twitter 🐦 <a href="https://twitter.com/contributte">@contributte</a>
</p>

## Usage

To install latest version of `ninjify/qa` use [Composer](https://getcomposer.com).

```
composer require ninjify/qa
```

## Versions

| State       | Version | Branch   | PHP      |
|-------------|---------|----------|----------|
| dev         | `^0.13` | `master` | `>=7.2` | 
| stable      | `^0.12` | `master` | `>=7.2` |

## Documentation

### CodeSniffer & CodeFixer

Default folders are: `src`, `app`, `tests`
Default extensions are: `php`, `phtml`, `phpt`
Default excluded folders are: `*/temp`, `*/tmp`

By default is used `ruleset.xml` in library/project root of your project. Otherwise, strict default one is used.

```sh
vendor/bin/codesniffer
vendor/bin/codesniffer <folder1> <folder2>
```

```sh
vendor/bin/codefixer
vendor/bin/codefixer <folder1> <folder2>
```

### Linter (PHP)

Default folders are: `src`, `app`, `tests`

```sh
vendor/bin/linter
vendor/bin/linter <folder1> <folder2>
```

### Executing

```
composer qa
composer qa <folder>
composer run qa
composer run-script qa
```

### Composer

```json
{
  "scripts": {
    "qa": [
      "linter src tests",
      "codesniffer src tests"
    ]
  }
}
```

## Development

See [how to contribute](https://contributte.org) to this package. This package is currently maintained by these authors.

<a href="https://github.com/f3l1x">
    <img width="80" height="80" src="https://avatars2.githubusercontent.com/u/538058?v=3&s=80">
</a>

-----

Consider to [support](https://contributte.com/partners) **contributte** development team.
Also thank you for using this package.
