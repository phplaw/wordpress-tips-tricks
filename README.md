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
        update_user_meta($user_id, 'first_name', sanitize_text_field( $_POST['first_name'] ) );

}
//https://codex.wordpress.org/Plugin_API/Action_Reference/user_register
```

[Read more on Wordpress Codex](https://codex.wordpress.org/Main_Page)


[WordPress Development using PhpStorm](https://confluence.jetbrains.com/display/PhpStorm/WordPress+Development+using+PhpStorm)

Redirect User to a specific url
```php
wp_redirect( home_url() ); exit;
```
[Read more about wordpress redirect](https://codex.wordpress.org/Function_Reference/wp_redirect)

```php
/*
 * goes in theme functions.php or a custom plugin
 *
 * By default login goes to my account
 **/
add_filter('woocommerce_login_widget_redirect', 'custom_login_redirect');

function custom_login_redirect( $redirect_to ) {
     $redirect_to = 'http://anypage.com';
}

```
(How to remove filter in wordpress)[https://codex.wordpress.org/Function_Reference/remove_filter]

(Getting Started with WordPress Shortcodes+Examples)[http://speckyboy.com/2011/07/18/getting-started-with-wordpress-shortcodes-examples/] - Good explaintion

(Shortcode API)[https://codex.wordpress.org/Shortcode_API]

**Get user meta data**
```php
//$single default is false, true will return only value
get_user_meta($user_id, $key, $single);

// example
$user_id = 9;
  $key = 'last_name';
  $single = true;
  $user_last = get_user_meta( $user_id, $key, $single ); 
  echo '<p>The '. $key . ' value for user id ' . $user_id . ' is: ' . $user_last . '</p>'; 
  // will out put
  // The last_name value for user id 9 is Franklin
  //https://codex.wordpress.org/Function_Reference/get_user_meta
```
###Add user role
Create a new "Basic Contributor" role.
```php
$result = add_role(
    'basic_contributor',
    __( 'Basic Contributor' ),
    array(
        'read'         => true,  // true allows this capability
        'edit_posts'   => true,
        'delete_posts' => false, // Use false to explicitly deny
    )
);
if ( null !== $result ) {
    echo 'Yay! New role created!';
}
else {
    echo 'Oh... the basic_contributor role already exists.';
}
```

Create a new role when a plugin is activated. See register_activation_hook
```php
   function add_roles_on_plugin_activation() {
       add_role( 'custom_role', 'Custom Subscriber', array( 'read' => true, 'level_0' => true ) );
   }
   register_activation_hook( __FILE__, 'add_roles_on_plugin_activation' );
   ```
https://codex.wordpress.org/Function_Reference/add_role

-----------------
