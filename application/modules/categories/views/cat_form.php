<?php
$attr = [
    'name' => 'category',
    'class' => 'form-control m-top-10'
];

$drop = ['' => 'Select a Category'];
foreach ($categories as $cat) {
    $drop[$cat['id']] = $cat['category_name'];
}

echo form_dropdown($attr, $drop);
?>