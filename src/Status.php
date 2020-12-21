<?php

namespace Corpus\Http;

abstract class Status {

	public const StatusContinue     = 100; // RFC 7231, 6.2.1
	public const SwitchingProtocols = 101; // RFC 7231, 6.2.2
	public const Processing         = 102; // RFC 2518, 10.1

	public const OK                   = 200; // RFC 7231, 6.3.1
	public const Created              = 201; // RFC 7231, 6.3.2
	public const Accepted             = 202; // RFC 7231, 6.3.3
	public const NonAuthoritativeInfo = 203; // RFC 7231, 6.3.4
	public const NoContent            = 204; // RFC 7231, 6.3.5
	public const ResetContent         = 205; // RFC 7231, 6.3.6
	public const PartialContent       = 206; // RFC 7233, 4.1
	public const MultiStatus          = 207; // RFC 4918, 11.1
	public const AlreadyReported      = 208; // RFC 5842, 7.1
	public const IMUsed               = 226; // RFC 3229, 10.4.1

	public const MultipleChoices  = 300; // RFC 7231, 6.4.1
	public const MovedPermanently = 301; // RFC 7231, 6.4.2
	public const Found            = 302; // RFC 7231, 6.4.3
	public const SeeOther         = 303; // RFC 7231, 6.4.4
	public const NotModified      = 304; // RFC 7232, 4.1
	public const UseProxy         = 305; // RFC 7231, 6.4.5
	//                     = 306; // RFC 7231, 6.4.6 (Unused)
	public const TemporaryRedirect = 307; // RFC 7231, 6.4.7
	public const PermanentRedirect = 308; // RFC 7538, 3

	public const BadRequest                   = 400; // RFC 7231, 6.5.1
	public const Unauthorized                 = 401; // RFC 7235, 3.1
	public const PaymentRequired              = 402; // RFC 7231, 6.5.2
	public const Forbidden                    = 403; // RFC 7231, 6.5.3
	public const NotFound                     = 404; // RFC 7231, 6.5.4
	public const MethodNotAllowed             = 405; // RFC 7231, 6.5.5
	public const NotAcceptable                = 406; // RFC 7231, 6.5.6
	public const ProxyAuthRequired            = 407; // RFC 7235, 3.2
	public const RequestTimeout               = 408; // RFC 7231, 6.5.7
	public const Conflict                     = 409; // RFC 7231, 6.5.8
	public const Gone                         = 410; // RFC 7231, 6.5.9
	public const LengthRequired               = 411; // RFC 7231, 6.5.10
	public const PreconditionFailed           = 412; // RFC 7232, 4.2
	public const RequestEntityTooLarge        = 413; // RFC 7231, 6.5.11
	public const RequestURITooLong            = 414; // RFC 7231, 6.5.12
	public const UnsupportedMediaType         = 415; // RFC 7231, 6.5.13
	public const RequestedRangeNotSatisfiable = 416; // RFC 7233, 4.4
	public const ExpectationFailed            = 417; // RFC 7231, 6.5.14
	public const Teapot                       = 418; // RFC 7168, 2.3.3
	public const UnprocessableEntity          = 422; // RFC 4918, 11.2
	public const Locked                       = 423; // RFC 4918, 11.3
	public const FailedDependency             = 424; // RFC 4918, 11.4
	public const UpgradeRequired              = 426; // RFC 7231, 6.5.15
	public const PreconditionRequired         = 428; // RFC 6585, 3
	public const TooManyRequests              = 429; // RFC 6585, 4
	public const RequestHeaderFieldsTooLarge  = 431; // RFC 6585, 5
	public const UnavailableForLegalReasons   = 451; // RFC 7725, 3

	public const InternalServerError           = 500; // RFC 7231, 6.6.1
	public const NotImplemented                = 501; // RFC 7231, 6.6.2
	public const BadGateway                    = 502; // RFC 7231, 6.6.3
	public const ServiceUnavailable            = 503; // RFC 7231, 6.6.4
	public const GatewayTimeout                = 504; // RFC 7231, 6.6.5
	public const HTTPVersionNotSupported       = 505; // RFC 7231, 6.6.6
	public const VariantAlsoNegotiates         = 506; // RFC 2295, 8.1
	public const InsufficientStorage           = 507; // RFC 4918, 11.5
	public const LoopDetected                  = 508; // RFC 5842, 7.2
	public const NotExtended                   = 510; // RFC 2774, 7
	public const NetworkAuthenticationRequired = 511; // RFC 6585, 6

	public static $statusText = [
		self::StatusContinue     => 'Continue',
		self::SwitchingProtocols => 'Switching Protocols',
		self::Processing         => 'Processing',

		self::OK                   => 'OK',
		self::Created              => 'Created',
		self::Accepted             => 'Accepted',
		self::NonAuthoritativeInfo => 'Non-Authoritative Information',
		self::NoContent            => 'No Content',
		self::ResetContent         => 'Reset Content',
		self::PartialContent       => 'Partial Content',
		self::MultiStatus          => 'Multi-Status',
		self::AlreadyReported      => 'Already Reported',
		self::IMUsed               => 'IM Used',

		self::MultipleChoices   => 'Multiple Choices',
		self::MovedPermanently  => 'Moved Permanently',
		self::Found             => 'Found',
		self::SeeOther          => 'See Other',
		self::NotModified       => 'Not Modified',
		self::UseProxy          => 'Use Proxy',
		self::TemporaryRedirect => 'Temporary Redirect',
		self::PermanentRedirect => 'Permanent Redirect',

		self::BadRequest                   => 'Bad Request',
		self::Unauthorized                 => 'Unauthorized',
		self::PaymentRequired              => 'Payment Required',
		self::Forbidden                    => 'Forbidden',
		self::NotFound                     => 'Not Found',
		self::MethodNotAllowed             => 'Method Not Allowed',
		self::NotAcceptable                => 'Not Acceptable',
		self::ProxyAuthRequired            => 'Proxy Authentication Required',
		self::RequestTimeout               => 'Request Timeout',
		self::Conflict                     => 'Conflict',
		self::Gone                         => 'Gone',
		self::LengthRequired               => 'Length Required',
		self::PreconditionFailed           => 'Precondition Failed',
		self::RequestEntityTooLarge        => 'Request Entity Too Large',
		self::RequestURITooLong            => 'Request URI Too Long',
		self::UnsupportedMediaType         => 'Unsupported Media Type',
		self::RequestedRangeNotSatisfiable => 'Requested Range Not Satisfiable',
		self::ExpectationFailed            => 'Expectation Failed',
		self::Teapot                       => 'I\'m a teapot',
		self::UnprocessableEntity          => 'Unprocessable Entity',
		self::Locked                       => 'Locked',
		self::FailedDependency             => 'Failed Dependency',
		self::UpgradeRequired              => 'Upgrade Required',
		self::PreconditionRequired         => 'Precondition Required',
		self::TooManyRequests              => 'Too Many Requests',
		self::RequestHeaderFieldsTooLarge  => 'Request Header Fields Too Large',
		self::UnavailableForLegalReasons   => 'Unavailable For Legal Reasons',

		self::InternalServerError           => 'Internal Server Error',
		self::NotImplemented                => 'Not Implemented',
		self::BadGateway                    => 'Bad Gateway',
		self::ServiceUnavailable            => 'Service Unavailable',
		self::GatewayTimeout                => 'Gateway Timeout',
		self::HTTPVersionNotSupported       => 'HTTP Version Not Supported',
		self::VariantAlsoNegotiates         => 'Variant Also Negotiates',
		self::InsufficientStorage           => 'Insufficient Storage',
		self::LoopDetected                  => 'Loop Detected',
		self::NotExtended                   => 'Not Extended',
		self::NetworkAuthenticationRequired => 'Network Authentication Required',
	];

	/**
	 * Return the text for an HTTP status code.
	 */
	public static function statusText( int $code ) : ?string {
		return self::$statusText[$code] ?? null;
	}

}
