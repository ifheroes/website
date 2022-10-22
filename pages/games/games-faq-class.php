<center>
<h4 id="<?php echo $data_lang->games[0]->survival_title; ?>"><?php echo $data_lang->games[0]->survival_title; ?></h4>
</center>

<?php

// get content form json file content/job_info.json via system/json_files.php 
$data = file_get_contents($json['games_faq'], true);
// JSON decode
$obj = json_decode($data);

$count = count($obj->survival);

echo $obj->survival[1]->title;
echo $count;

#start at 0 count up until the number of count is reached
#display all content in faq