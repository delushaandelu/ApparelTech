<?php
$functionName = filter_input(INPUT_POST, 'functionName', '$categoryName');


if ($functionName == "addItemToItemNameDropDown") {
    addItemToItemNameDropDown();}


function addItemToItemNameDropDown($categoryName)
{
    $myItem = new Item();
    $method = $myItem->addItemToItemNameDropDown($categoryName);
    echo json_encode($method);
}


?>