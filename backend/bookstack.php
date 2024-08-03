<?php

class bookstack
{
    public $bookstack_book_name;
    public $bookstack_book_id;
    public $bookstack_book_url;
    public $bookstack_book_updated_at;

    # get the support threads from bookstack apihandler
    public function getSupportThreads($bookstack_book_content, $amount)
    {
        $count = count($bookstack_book_content['contents']);

        if ($amount > $count) {
            $amount = $count;
        }

        $i = 0;
        while ($i < $amount) {

            $bookstack_book_name = $bookstack_book_content['contents'][$i]['name'];
            $bookstack_book_id = $bookstack_book_content['contents'][$i]['id'];
            $bookstack_book_url =  $bookstack_book_content['contents'][$i]['url'];
            $bookstack_book_updated_at = $bookstack_book_content['contents'][$i]['updated_at'];

            echo '<a href="?support-thread&id='.$bookstack_book_id.'" style="text-decoration: underline;text-decoration-style: dotted;">'.$bookstack_book_name.'</a><br>';

            $i++;
        }
    }
}
