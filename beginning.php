<?php
$textStorage = [];
function add ( array &$textStorage, string $title, string $text): void
{
              $textStorage = [['title' =>  $title, 'text' => $text]];
}
$title = 'title_1';
$text =  'text_1';
add ($textStorage, $title, $text);
$next = [];
$title_2 = 'title_2';
$text_2 = 'text_2';
add ( $next, $title_2, $text_2);
$textStorage = array_merge ($textStorage, $next );
var_dump($textStorage);
function remove ( array &$textStorage, int $n) 
{
    echo $n;
    var_dump (array_key_exists( $n, $textStorage));
    unset ($textStorage[$n]['text']);             
}
remove ( $textStorage, 0);
remove ( $textStorage, 5);
var_dump($textStorage);
function edit (array &$textStorage, int $n, string $new_title, string $new_text )
{
  var_dump (array_key_exists( $n, $textStorage));
  if (array_key_exists( $n, $textStorage) == false){
    return;
  } 
  else {
  $textStorage [$n]['title'] = $new_title;
  $textStorage [$n]['text'] = $new_text;
  }  
}

$new_title = 'И это новый заголовок';
$new_text = 'delite';
edit ($textStorage, 0, $new_title, $new_text );
var_dump($textStorage);
edit ($textStorage, 777, $new_title, $new_text );
var_dump($textStorage);
