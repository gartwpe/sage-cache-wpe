# WP Engine Sage Cache 

Ensures that Sage's cache folders are present on a WP Engine environment even after restarts/reboots (GCP/AWS) and web-head cycling (AWS). 

The code uses the WP Engine `PWP_NAME` variable (set in `wp-config.php` to "know" where it is and generates a Sage cache directory accordingly - allowing copies between production/staging/development without sharing cached code.

## Installation

1. Place inside `wp-content/mu-plugins/` directory.

2. Modify the Sage theme `compiled` path to:
```php
'compiled' => '/tmp/sage-cache-' . PWP_NAME,
```

For example, within... 
```bash
wp-content/themes/YOUR_THEME/config/view.php
wp-content/themes/YOUR_THEME/vendor/roots/acorn/config/view.php
```

## Usage

That's it! The Sage cache directrory will automatically regenerate in `/tmp/sage-cache-INSTALL_NAME/*` if not are already not present.

## Contributing
Pull requests are welcome. 


## License
[GPL 3.0](https://choosealicense.com/licenses/gpl-3.0/)