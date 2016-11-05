# Quality assurance (QA) 

Quality assurance for your PHP projects

-----

[![Downloads total](https://img.shields.io/packagist/dt/ninjify/qa.svg?style=flat-square)](https://packagist.org/packages/ninjify/qa)
[![Latest stable](https://img.shields.io/packagist/v/ninjify/qa.svg?style=flat-square)](https://packagist.org/packages/ninjify/qa)

## Install

```bash
composer require --dev ninjify/qa
```

## Manual usage (bin)

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

## Composer scripts

### Extra scripts [composer.json]
You should define a special scripts to your `composer.json`.

```json
"scripts": {
    "qa": [
        "@qa-codesniffer",
        "@qa-linter"
    ],
    "qa-codesniffer": [
        "Ninjify\\Composer\\Script\\CodeSniffer::execute"
    ],
    "qa-codefixer": [
        "Ninjify\\Composer\\Script\\CodeFixer::execute"
    ],
    "qa-linter": [
        "Ninjify\\Composer\\Script\\Linter::execute"
    ]
}
```

### Extra parameters [composer.json]

```json
"extra": {
    "ninjify": {
        "qa": {
            "codesniffer": {
                "folders": ["app", "src", "test/cases"]
            },
            "codefixer": {
                "folders": ["app", "src", "test/cases"]
            },
            "linter": {
                "folders": ["app", "src", "test/cases"]
            }
        }
    }
}
```

### Executing

```
composer qa
composer run qa
composer run-script qa
```

-----

Thanks for testing, reporting and contributing.