## ZepsonSMS Developer API Docs | Official Zepson SMS API package

## Overview

This page will help you get started with API.

This document will provide instructions on how to quickly integrate SMS messaging services into various solutions by using HTTP application programming interface (HTTP API). The HTTP API can be used for sending SMS messages, making Number Context (number validation) requests and receiving inbound SMS messages sent from mobile phones.

API is based on REST standards, enabling you to use your browser for accessing URLs. In order to interact with our API, any HTTP client in any programming language can be used.

## Base URL

Submit all requests to the base URL. All the requests are submitted thorough HTTP POST method.

```
https://zepsonsms.co.tz/
```

## Content-Type & Accept header

API supports JSON and XML Content-Types and Accept criteria that should be specified in the header. If the Content-Type is not specified you will receive a General error. Depending which Accept type is chosen in the deader for the request, the same one will be applied in the response.

```
Content-Type: application/json
Accept header: application/json
```

## Authentication & Authorization

We support basic authorization using a username and password with Base64 encoding variation RFC2045-MIME.

Username and password are combined into a string username:password.
The resulting string is encoded using the `RFC2045-MIME` variant of Base64.
The authorization method and a space, like this: "Basic ", are put before the encoded string.

#### EXAMPLE

```
Username: Aladdin
Password: open sesame
```

```
Base64 encoded string: QWxhZGRpbjpvcGVuIHNlc2FtZQ==
Authorization header: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ==
```

## Table of Contents

- [Contacts API](./contacts.md)
- [Contact groups API](/contact_groups.md)
- [SMS API](/sms.md)
- [Profile API](/profile.md)

## 🙌 Credits

- [Alpha Olomi](https://alpha.olomi.com)
