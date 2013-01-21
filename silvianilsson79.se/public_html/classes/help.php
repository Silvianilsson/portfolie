<?php
require_once(ROOT_PATH.'/classes/db.php');
require_once(ROOT_PATH.'/classes/item.php');

function select($name, $title, $items, $selected_id = null) 
{
    $html = '<select name="'.$name.'">';
    $html .= '<option>-- Välj --</option>';

    foreach ($items as $item) 
    {
      $selected = '';
      if ($selected_id && $selected_id == $item->id) 
      {
        $selected = ' selected="selected"';
      }
      $html .= '<option'.$selected.' value="'.$item->id.'">'.$item->name.'</option>';
    }
    $html .= '</select>';
    return $html;
}
?>