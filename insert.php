<?php
require 'vendor/autoload.php';
$m = new MongoDB\Client("mongodb://localhost:27017");
$db = $m->Test;

$coll = $db->maybe;
echo "collection selected. ";
if($_POST)

{
    $insert= array(
        '_id'=> $_POST['_id'],
        'name'=> $_POST['name'],
        'city'=> $_POST['city'],
    );

    if($coll->insertOne($insert))
    {
        echo "data is in, bitch";
    }
    else {
        echo "issues, bitch";
    }
}
elseif($_GET){
    $toot=$coll->find();
    foreach ($toot as $boot){
        $bryan= json_encode($boot["city"], JSON_UNESCAPED_SLASHES);
        echo "<img src=$bryan>";
    }
}

else {
    echo "no data, bitch";
}

?>