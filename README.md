# Quality assurance (QA) 

Quality assurance for your PHP projects

-----

[![Downloads total](https://img.shields.io/packagist/dt/ninjify/qa.svg?style=flat-square)](https://packagist.org/packages/ninjify/qa)
[![Latest stable](https://img.shields.io/packagist/v/ninjify/qa.svg?style=flat-square)](https://packagist.org/packages/ninjify/qa)

## Install

```bash
composer require --dev ninjify/qa
```

## Usage

### CodeSniffer

Default folders are: `src`, `app`, `tests`

By default is used `ruleset.xml` in root of your project. Otherwise, strict default one is used.

```sh
vendor/bin/codesniffer
vendor/bin/codesniffer <folder1> <folder2>
```

### CodeFixer

Default folders are: `src`, `app`, `tests`

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
