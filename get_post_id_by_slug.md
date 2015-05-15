	
_Get a WordPress Page ID with the Slug_

When I develop for WordPress, I start out on my local machine, then eventually migrate to the production server. This works very well, but takes a bit more work when I get to the migration stage. To make it a little easier, I use this little function to eliminate any hard-coded page IDs in navigation links or conditional statements:
```php
function get_ID_by_slug($page_slug) {
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
}
```
Then, whenever we need to call a function that requires a page ID, just pass it our new function.

```php
wp_some_function(get_ID_by_slug('any-page'));

```
OR using wordpress query
```php
$slug = 'page_or_post_slug';
$post_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '$slug'");
```

```php
// Usage:
// get_id_by_slug('any-page-slug');
 
function get_id_by_slug($page_slug) {
	$page = get_page_by_path($page_slug);
	if ($page) {
		return $page->ID;
	} else {
		return null;
	}
}
```

[get_page_by_path](https://codex.wordpress.org/Function_Reference/get_page_by_path)
