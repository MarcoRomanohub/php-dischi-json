<?php
$json_string = file_get_contents('dischi.json');

$list = json_decode($json_string);


if (isset($_POST['newDiskTitle'])) {
  $new_item = [
    'title' => $_POST['newDiskTitle'],
    'author' => $_POST['newDiskAuthor'],
    'poster' => $_POST['newDiskPoster'],

  ];
  $list[] = $new_item;
  file_put_contents('dischi.json', json_encode($list));
}


header('Content-Type: application/json');

echo json_encode($list);
