<?php
if ( !defined('ABSPATH')) exit;

get_header();

$fields = get_fields(get_the_id());
var_dump($fields);
?>
<article>
    <div class="container">
        <div>

        </div>
    </div>
</article>
<?php get_footer();