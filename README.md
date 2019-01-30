# Http

[![Latest Stable Version](https://poser.pugx.org/corpus/http/version)](https://packagist.org/packages/corpus/http)
[![License](https://poser.pugx.org/corpus/http/license)](https://packagist.org/packages/corpus/http)
[![Build Status](https://travis-ci.org/CorpusPHP/Http.svg?branch=master)](https://travis-ci.org/CorpusPHP/Http)


HTTP Status Codes and Exceptions

## Requirements

- **php**: ^7.1

## Installing

Install the latest version with:

```bash
composer require 'corpus/http'
```

## Documentation

### Class: \Corpus\Http\Exceptions\AbstractHttpException

Base Exception class all HTTP Exception Classes Extend

### Class: \Corpus\Http\Exceptions\ClientError\AbstractClientErrorException

Base of Exceptions Representing The 4xx Class

### Class: \Corpus\Http\Exceptions\ClientError\BadRequestException

#### Method: BadRequestException->getHttpStatusCode

```php
function getHttpStatusCode()
```

### Class: \Corpus\Http\Exceptions\ClientError\ForbiddenException

#### Method: ForbiddenException->getHttpStatusCode

```php
function getHttpStatusCode()
```

### Class: \Corpus\Http\Exceptions\ClientError\NotFoundException

#### Method: NotFoundException->getHttpStatusCode

```php
function getHttpStatusCode()
```

### Class: \Corpus\Http\Exceptions\ClientError\UnauthorizedException

#### Method: UnauthorizedException->getHttpStatusCode

```php
function getHttpStatusCode()
```

### Class: \Corpus\Http\Exceptions\Redirection\AbstractLocationRedirectionHttpException

Base of 3xx Exceptions which include a "Location" header.

#### Method: AbstractLocationRedirectionHttpException->__construct

```php
function __construct($location [, $message = '' [, $previous = null]])
```

AbstractRedirectionHttpException constructor.

##### Parameters:

- ***string*** `$location`
- ***string*** `$message`
- ***\Throwable*** `$previous` - [optional] The previous throwable used for the exception chaining.

---

#### Method: AbstractLocationRedirectionHttpException->getLocation

```php
function getLocation()
```

##### Returns:

- ***string***

### Class: \Corpus\Http\Exceptions\Redirection\AbstractRedirectionHttpException

Base of Exceptions Representing The 3xx Class

### Class: \Corpus\Http\Exceptions\Redirection\FoundException

#### Method: FoundException->getHttpStatusCode

```php
function getHttpStatusCode()
```

### Class: \Corpus\Http\Exceptions\Redirection\SeeOtherException

#### Method: SeeOtherException->getHttpStatusCode

```php
function getHttpStatusCode()
```

### Class: \Corpus\Http\Exceptions\ServerError\AbstractServerErrorException

Base of Exceptions Representing The 5xx Class

### Class: \Corpus\Http\Exceptions\ServerError\InternalServerErrorException

#### Method: InternalServerErrorException->getHttpStatusCode

```php
function getHttpStatusCode()
```

### Class: \Corpus\Http\Exceptions\Success\AbstractSuccessException

Base of Exceptions Representing The 2xx Class

### Class: \Corpus\Http\Exceptions\Success\NoContentException

#### Method: NoContentException->getHttpStatusCode

```php
function getHttpStatusCode()
```



### Class: \Corpus\Http\StatusAwareInterface

#### Method: StatusAwareInterface->getHttpStatusCode

```php
function getHttpStatusCode()
```

Get the HTTP Status Code the Exception Represents

##### Returns:

- ***int***