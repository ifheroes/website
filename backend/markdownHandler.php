<?php

require('./vendor/Parsedown.php');

class markdown
{

    function markdownPrinter($requested_file)
    {

        # converts a md file from frontend to html output

        $md_file = file_get_contents('../frontend/markdown/'. $requested_file .'.md'); # dont change

        # how to print md file in frontend: print_r((new markdown())->markdownPrinter('privacy'));

        $parsedown = new Parsedown();

        return $parsedown->text($md_file);
    }
}

