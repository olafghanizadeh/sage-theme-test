<?php

namespace App;

use Sober\Controller\Controller;

class Single extends Controller
{
    /**
     * Return images from Advanced Custom Fields
     *
     * @return array
     */
    public function category()
    {
        return get_field('post_category');
    }

// Related Posts
    public function related_posts()
{
    global $post;

    $data = [];

    $related_posts = get_field('related_posts');

    if($related_posts):
    foreach ($related_posts as $related_post) {

        $this_post = (object) array(
            'thumbnail' => get_the_post_thumbnail($related_post, 'thumbnail', array('class' => 'card-img-top img-fluid')),
            'permalink' => get_the_permalink($related_post),
            'title' => get_the_title($related_post),
        );

        array_push($data, $this_post);
    }
  endif;

    return $data;
}
}
