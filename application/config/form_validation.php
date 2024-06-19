
<?php

$config = array(
    array(
            'field' => 'Username',
            'label' => 'User name',
            'rules' => 'required|trim'
    ),
    array(
        'field' => 'Email',
        'label' => 'email',
        'rules' => 'required|trim',
        'errors'=> array(
            'required'=> '%s khali na hovvv'
        )
        
    ),
);
$config['error_prefix'] = '<div class="text-danger mt-2 mb-2">';
$config['error_suffix'] = '</div>';