add_shortcode('my_WC_product_creator', 'my_WC_product_creator_func');
function my_WC_product_creator_func($attributes) {
    // Parses the parameters/attributes and makes them available as variables.
    extract(shortcode_atts(array(
        'foo' => 'default value for foo',
        'bar' => 'default value for bar',
    ), $attributes));

    // Generate stuff
    $output = complex_content_generation_goes_here();

    return $output;
}