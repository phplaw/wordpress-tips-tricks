# wordpress-tips-tricks
Tips &amp; Tricks for Beginner to speed up learning WordPress
###User Hook
```php
// update user
add_action( 'personal_options_update', 'update_extra_retailer_practitioner_info');
add_action( 'edit_user_profile_update', 'update_extra_retailer_practitioner_info');
```
###Show user profile
```php
add_action( 'edit_user_profile', 'customer_show_extra_info' );
add_action( 'show_user_profile', array(this, 'customer_show_extra_info' ) );

```



[WordPress Development using PhpStorm](https://confluence.jetbrains.com/display/PhpStorm/WordPress+Development+using+PhpStorm)
-----------------
