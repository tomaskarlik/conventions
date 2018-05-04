# Structure

Install
-------
Download package
```
composer require tomaskarlik/conventions
````

Register extension in config.neon
```
extensions:
	conventions: TomasKarlik\Conventions\DI\Extension

conventions:
	my_view1: primary_key1
	my_view2: primary_key2
	table: key_name

database:
	conventions: @TomasKarlik\Conventions\Conventions
```

Other tables use ```Nette\Database\Structure```
