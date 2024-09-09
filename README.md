# Http

[![Latest Stable Version](https://poser.pugx.org/corpus/http/version)](https://packagist.org/packages/corpus/http)
[![License](https://poser.pugx.org/corpus/http/license)](https://packagist.org/packages/corpus/http)
[![ci.yml](https://github.com/CorpusPHP/Http/actions/workflows/ci.yml/badge.svg)](https://github.com/CorpusPHP/Http/actions/workflows/ci.yml)


HTTP Status Codes and Exceptions

## Requirements

- **php**: ^7.2 | ^8.0

## Installing

Install the latest version with:

```bash
composer require 'corpus/http'
```

## Documentation

### Class: Corpus\Http\Exceptions\AbstractHttpException

Base Exception class all HTTP Exception Classes Extend

#### Method: AbstractHttpException->__construct

```php
function __construct([ $message = '' [, ?\Throwable $previous = null]])
```

Construct the *HttpException.  
  
Use the HTTP Status code as the base exceptions code.

##### Parameters:

- ***string*** `$message`

### Class: Corpus\Http\Exceptions\ClientError\AbstractClientErrorException

Base of Exceptions Representing The 4xx Class

### Class: Corpus\Http\Exceptions\ClientError\BadRequestException

#### Method: BadRequestException->getHttpStatusCode

```php
function getHttpStatusCode() : int
```

### Class: Corpus\Http\Exceptions\ClientError\ForbiddenException

#### Method: ForbiddenException->getHttpStatusCode

```php
function getHttpStatusCode() : int
```

### Class: Corpus\Http\Exceptions\ClientError\NotFoundException

#### Method: NotFoundException->getHttpStatusCode

```php
function getHttpStatusCode() : int
```

### Class: Corpus\Http\Exceptions\ClientError\UnauthorizedException

#### Method: UnauthorizedException->getHttpStatusCode

```php
function getHttpStatusCode() : int
```

### Class: Corpus\Http\Exceptions\Redirection\AbstractLocationRedirectionHttpException

Base of 3xx Exceptions which include a "Location" header.

#### Method: AbstractLocationRedirectionHttpException->__construct

```php
function __construct(string $location [, $message = '' [, ?\Throwable $previous = null]])
```

AbstractRedirectionHttpException constructor.

##### Parameters:

- ***string*** `$message`
- ***\Throwable*** `$previous` - [optional] The previous throwable used for the exception chaining.

---

#### Undocumented Method: `AbstractLocationRedirectionHttpException->getLocation()`

### Class: Corpus\Http\Exceptions\Redirection\AbstractRedirectionHttpException

Base of Exceptions Representing The 3xx Class

### Class: Corpus\Http\Exceptions\Redirection\FoundException

#### Method: FoundException->getHttpStatusCode

```php
function getHttpStatusCode() : int
```

### Class: Corpus\Http\Exceptions\Redirection\SeeOtherException

#### Method: SeeOtherException->getHttpStatusCode

```php
function getHttpStatusCode() : int
```

### Class: Corpus\Http\Exceptions\ServerError\AbstractServerErrorException

Base of Exceptions Representing The 5xx Class

### Class: Corpus\Http\Exceptions\ServerError\InternalServerErrorException

#### Method: InternalServerErrorException->getHttpStatusCode

```php
function getHttpStatusCode() : int
```

### Class: Corpus\Http\Exceptions\Success\AbstractSuccessException

Base of Exceptions Representing The 2xx Class

### Class: Corpus\Http\Exceptions\Success\NoContentException

#### Method: NoContentException->getHttpStatusCode

```php
function getHttpStatusCode() : int
```

### Class: Corpus\Http\Status

```php
<?php
namespace Corpus\Http;

class Status {
	public const StatusContinue = 100;
	public const SwitchingProtocols = 101;
	public const Processing = 102;
	public const EarlyHints = 103;
	public const OK = 200;
	public const Created = 201;
	public const Accepted = 202;
	public const NonAuthoritativeInfo = 203;
	public const NoContent = 204;
	public const ResetContent = 205;
	public const PartialContent = 206;
	public const MultiStatus = 207;
	public const AlreadyReported = 208;
	public const IMUsed = 226;
	public const MultipleChoices = 300;
	public const MovedPermanently = 301;
	public const Found = 302;
	public const SeeOther = 303;
	public const NotModified = 304;
	public const UseProxy = 305;
	public const TemporaryRedirect = 307;
	public const PermanentRedirect = 308;
	public const BadRequest = 400;
	public const Unauthorized = 401;
	public const PaymentRequired = 402;
	public const Forbidden = 403;
	public const NotFound = 404;
	public const MethodNotAllowed = 405;
	public const NotAcceptable = 406;
	public const ProxyAuthRequired = 407;
	public const RequestTimeout = 408;
	public const Conflict = 409;
	public const Gone = 410;
	public const LengthRequired = 411;
	public const PreconditionFailed = 412;
	public const RequestEntityTooLarge = 413;
	public const RequestURITooLong = 414;
	public const UnsupportedMediaType = 415;
	public const RequestedRangeNotSatisfiable = 416;
	public const ExpectationFailed = 417;
	public const Teapot = 418;
	public const MisdirectedRequest = 421;
	public const UnprocessableEntity = 422;
	public const Locked = 423;
	public const FailedDependency = 424;
	public const TooEarly = 425;
	public const UpgradeRequired = 426;
	public const PreconditionRequired = 428;
	public const TooManyRequests = 429;
	public const RequestHeaderFieldsTooLarge = 431;
	public const UnavailableForLegalReasons = 451;
	public const InternalServerError = 500;
	public const NotImplemented = 501;
	public const BadGateway = 502;
	public const ServiceUnavailable = 503;
	public const GatewayTimeout = 504;
	public const HTTPVersionNotSupported = 505;
	public const VariantAlsoNegotiates = 506;
	public const InsufficientStorage = 507;
	public const LoopDetected = 508;
	public const NotExtended = 510;
	public const NetworkAuthenticationRequired = 511;
	/**
	 * @var array<int,string>
	 */
	public static $statusText = [self::StatusContinue => 'Continue', self::SwitchingProtocols => 'Switching Protocols', self::Processing => 'Processing', self::EarlyHints => 'Early Hints', self::OK => 'OK', self::Created => 'Created', self::Accepted => 'Accepted', self::NonAuthoritativeInfo => 'Non-Authoritative Information', self::NoContent => 'No Content', self::ResetContent => 'Reset Content', self::PartialContent => 'Partial Content', self::MultiStatus => 'Multi-Status', self::AlreadyReported => 'Already Reported', self::IMUsed => 'IM Used', self::MultipleChoices => 'Multiple Choices', self::MovedPermanently => 'Moved Permanently', self::Found => 'Found', self::SeeOther => 'See Other', self::NotModified => 'Not Modified', self::UseProxy => 'Use Proxy', self::TemporaryRedirect => 'Temporary Redirect', self::PermanentRedirect => 'Permanent Redirect', self::BadRequest => 'Bad Request', self::Unauthorized => 'Unauthorized', self::PaymentRequired => 'Payment Required', self::Forbidden => 'Forbidden', self::NotFound => 'Not Found', self::MethodNotAllowed => 'Method Not Allowed', self::NotAcceptable => 'Not Acceptable', self::ProxyAuthRequired => 'Proxy Authentication Required', self::RequestTimeout => 'Request Timeout', self::Conflict => 'Conflict', self::Gone => 'Gone', self::LengthRequired => 'Length Required', self::PreconditionFailed => 'Precondition Failed', self::RequestEntityTooLarge => 'Request Entity Too Large', self::RequestURITooLong => 'Request URI Too Long', self::UnsupportedMediaType => 'Unsupported Media Type', self::RequestedRangeNotSatisfiable => 'Requested Range Not Satisfiable', self::ExpectationFailed => 'Expectation Failed', self::Teapot => 'I\'m a teapot', self::MisdirectedRequest => 'Misdirected Request', self::UnprocessableEntity => 'Unprocessable Entity', self::Locked => 'Locked', self::FailedDependency => 'Failed Dependency', self::TooEarly => 'Too Early', self::UpgradeRequired => 'Upgrade Required', self::PreconditionRequired => 'Precondition Required', self::TooManyRequests => 'Too Many Requests', self::RequestHeaderFieldsTooLarge => 'Request Header Fields Too Large', self::UnavailableForLegalReasons => 'Unavailable For Legal Reasons', self::InternalServerError => 'Internal Server Error', self::NotImplemented => 'Not Implemented', self::BadGateway => 'Bad Gateway', self::ServiceUnavailable => 'Service Unavailable', self::GatewayTimeout => 'Gateway Timeout', self::HTTPVersionNotSupported => 'HTTP Version Not Supported', self::VariantAlsoNegotiates => 'Variant Also Negotiates', self::InsufficientStorage => 'Insufficient Storage', self::LoopDetected => 'Loop Detected', self::NotExtended => 'Not Extended', self::NetworkAuthenticationRequired => 'Network Authentication Required'];
}
```

#### Method: Status::statusText

```php
function statusText(int $code) : ?string
```

Return the text for an HTTP status code.

### Class: Corpus\Http\StatusAwareInterface

#### Method: StatusAwareInterface->getHttpStatusCode

```php
function getHttpStatusCode() : int
```

Get the HTTP Status Code the Exception Represents