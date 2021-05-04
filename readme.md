# Web-project

## Support Me

Do you like Web-project? Are you looking forward to the **new features**?

<a href="https://www.paypal.com/donate?hosted_button_id=BWR5RJCDLY7SG"><img src="https://buymecoffee.intm.org/img/janpecha-paypal-donate@2x.png" alt="PayPal or credit/debit card" width="254" height="248"></a>

<img src="https://buymecoffee.intm.org/img/bitcoin@2x.png" alt="Bitcoin" height="32"> `bc1qrq9egf99a6z3576twggrp6uv5td5r3pq0j4awe`

Thank you!


## Installation

```
composer create-project inteve/web-project <directory>
```

* change namespace `InteveApp` to something else
* change contacts in `www/.well-known/security.txt`


## Notice: Composer PHP version

This project forces PHP 7.2 as your PHP version for Composer packages. If you have older version on production server you should change it in composer.json:

```
"config": {
	"platform": {
		"php": "5.6"
	}
}
```
