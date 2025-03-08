<?php

require_once 'todo_list.php';

function todo_render_detail(int $id)
{

    // item index from id
    $item_index_from_id = array_search($id, array_column(todo_list(), 'id'));
    if ($item_index_from_id === false) {
        echo 'Item not found';
        return;
    }

    // item from id
    $item_from_id = todo_list()[$item_index_from_id];

    // template variables
    $template_variables = $item_from_id;

    // render detail of todo
    require_once '../templates/lib_template.php';

    // template : todo/template_todo_detail
    echo apply_template('todo/template_todo_detail', $template_variables);
}

// render detail of todo
todo_render_detail($_GET['id']);
