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
// https://codex.wordpress.org/Plugin_API/Action_Reference/edit_user_profile

```

### Save new user data
```php
add_action( 'user_register', 'myplugin_registration_save', 10, 1 );

function myplugin_registration_save( $user_id ) {

    if ( isset( $_POST['first_name'] ) )
        update_user_meta($user_id, 'first_name', sanitize_text_field($_POST['first_name']));

}
//https://codex.wordpress.org/Plugin_API/Action_Reference/user_register
```




[WordPress Development using PhpStorm](https://confluence.jetbrains.com/display/PhpStorm/WordPress+Development+using+PhpStorm)
-----------------
