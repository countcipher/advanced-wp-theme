<?php

//AFTER ENABLING CUSTOM FIELDS ON THE BACKEND UI OF WORDPRESS, THIS ADDS THE INFO TO THE DB
$test_custom_fields = get_post_meta($post->ID, 'Weather', true);

?>