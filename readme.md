# Web-project

<a href="https://www.patreon.com/bePatron?u=9680759"><img src="https://c5.patreon.com/external/logo/become_a_patron_button.png" alt="Become a Patron!" height="35"></a>
<a href="https://www.paypal.me/janpecha/1eur"><img src="https://buymecoffee.intm.org/img/button-paypal-white.png" alt="Buy me a coffee" height="35"></a>


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
