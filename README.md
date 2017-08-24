# Nettsteder 2.0

This is not live yet -- under development.


## Installation

1. Install [Composer](https://getcomposer.org) and [WP-CLI](https://wp-cli.org/)
1. Clone the repo
1. Move `local-config-sample.php` to `../local-config.php` and edit it.
1. Set the ACF_PRO_KEY environment variable to the ACF Pro license key. E.g. `export ACF_PRO_KEY="license_key_goes_here"`
1. Run `composer install`
1. Run `wp core multisite-install --prompt`
