<?php

function todo_list()
{
    $items = [];
    $items[] = ['id' => 1, 'description' => 'Buy milk', 'state' => 0];
    $items[] = ['id' => 2, 'description' => 'Walk the dog', 'state' => 1];
    $items[] = ['id' => 3, 'description' => 'Do homework', 'state' => 0];
    return $items;
}
