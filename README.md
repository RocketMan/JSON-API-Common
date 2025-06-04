JSON API Common
===============
[![Build Status](https://github.com/RocketMan/JSON-API-Common/actions/workflows/main.yml/badge.svg?branch=master)](https://github.com/RocketMan/JSON-API-Common)

[![license](https://img.shields.io/github/license/RocketMan/JSON-API-Common)](https://github.com/RocketMan/JSON-API-Common/blob/master/LICENSE)
[![latest version](https://badgen.net/github/release/RocketMan/JSON-API-Common?label=latest)](https://github.com/RocketMan/JSON-API-Common/releases)

This is a fork of the upstream
[`enm/json-api-common`](https://github.com/eosnewmedia/JSON-API-Common)
with post-release fixes.

It contains code shared by the
[JSON-API-Server](https://github.com/RocketMan/JSON-API-Server) and
JSON-API-Client projects.

## Installation

Generally, you will establish a composer dependency on json-api-server
or json-api-client as appropriate, and they will in turn pull in this
library.  If you wish to include this library explicitly, you can do
so like this:

```sh
composer require rocketman/json-api-common
```

*****

## Documentation
1. [JsonApiTrait](docs/01-trait.md)
1. [Resources](docs/02-resources.md)
    1. [Relationships](docs/02-resources.md#relationships)
1. [Attributes and Meta-Informations](docs/03-collections.md)
1. [Links](docs/04-links.md)
1. [Documents](docs/05-documents.md)
1. [Exceptions and Errors](docs/06-errors.md)
1. [Request and Response](docs/07-requests.md)

*****

## Changelog
See the [Changelog](CHANGELOG.md).
