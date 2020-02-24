<?php
//debug($movies);
function getImageMovie($movie)
{
  return '<img src="https://www.weblitzer.fr/formation/posters/'.$movie['id'].'.jpg" alt="'.$movie['title'].'"/>';
}
//
function debug(array $array)
{
  echo '<pre>';
  print_r ($array);
  echo '</pre>';
}
