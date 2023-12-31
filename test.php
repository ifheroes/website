<?php 
$yourTextWithLinks = 'test https://test.de';
    $text = strip_tags($yourTextWithLinks);
    
    function displayTextWithLinks($s) {
      return preg_replace('@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@', '<a href="$1">$1</a>', $s);
    }
    
    $text = displayTextWithLinks($text);
    echo $text;
