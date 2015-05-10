```php
public function set_price( $price ) {
		$this->price = $price;
	}

	/**
	 * Adjust a products price dynamically.
	 *
	 * @param mixed $price
	 * @return void
	 */
	public function adjust_price( $price ) {
		$this->price = $this->price + $price;
	}

	/**
	 * Returns the product's sale price.
	 *
	 * @return string price
	 */
	public function get_sale_price() {
		return apply_filters( 'woocommerce_get_sale_price', $this->sale_price, $this );
	}

	/**
	 * Returns the product's regular price.
	 *
	 * @return string price
	 */
	public function get_regular_price() {
		return apply_filters( 'woocommerce_get_regular_price', $this->regular_price, $this );
	}

	/**
	 * Returns the product's active price.
	 *
	 * @return string price
	 */
	public function get_price() {
		return apply_filters( 'woocommerce_get_price', $this->price, $this );
	}
	
	
```
	
