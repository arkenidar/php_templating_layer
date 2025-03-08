<?php

require_once 'todo_list.php';

function todo_render()
{
    // items for todo list
    $items = todo_list();

    // render todo list template
    require_once '../templates/lib_template.php';

    // template : todo/template_todo_list
    echo apply_template('todo/template_todo_list', compact('items'));
}

todo_render();
