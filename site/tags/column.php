<?php

kirbytext::$tags['column'] = array(

  'html' => function($tag) {

    $class = $tag->attr('column','');
    return '<div class="column ' . $class . '">';      
  }
);