<?php
$users = [
  ['id' => 1, 'name' => 'Alice', 'role' => 'admin'],
  ['id' => 2, 'name' => 'Bob', 'role' => 'user'],
  ['id' => 3, 'name' => 'Charlie', 'role' => 'user']
];

function createFilter($key, $value)
{
  return fn($item) => strcasecmp($item[$key], $value) === 0;
}


$isAdmin = createFilter('role', 'admin');
$isBob = createFilter('name', 'bob');
$admins = array_filter($users, $isAdmin);
$bobs = array_filter($users, $isBob);
var_dump($admins);
var_dump($bobs);
