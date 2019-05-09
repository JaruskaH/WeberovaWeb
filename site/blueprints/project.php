<?php if(!defined('KIRBY')) exit ?>

title: project
pages: false
fields:
  title:
    label: Title
    type:  text
  hlavicka:
    label: hlavička
    type:  text
  projectImage: 
    label: Main image
    extends:  imageselect
  highlightFoto: 
    label: Highlight image
    extends:  imageselect
  text:
    label: Text
    type:  markdown
    size:  large