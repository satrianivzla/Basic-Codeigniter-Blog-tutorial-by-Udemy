<div class="register-page grey-bg">
    <h2>Edit Profile... !</h2>

<?php
$firstname = array(
    'name' => 'firstname',
    'class' => 'form-control m-top-10',
    'type' => 'text',
    'id' => 'firstname',
    'placeholder' => 'Enter Your First name',
    'value' => $user_profile['firstname']
);

$lastname = array(
    'name' => 'lastname',
    'class' => 'form-control m-top-10',
    'type' => 'text',
    'id' => 'lastname',
    'placeholder' => 'Enter Your Last name',
    'value' => $user_profile['lastname']
);

$email = array(
    'name' => 'email',
    'class' => 'form-control m-top-10',
    'type' => 'email',
    'id' => 'email',
    'placeholder' => 'Enter Your Email',
    'value' => $user_profile['email'],
    'readonly' => 'true'
);

$about = array(
    'name' => 'about',
    'class' => 'form-control m-top-10',
    'row' => '2',
    'cols' => '10',
    'placeholder' => 'Enter something about yourself',
    'value' => $user_profile['about'] 
);

$profile_submit = array(
    'name' => 'profile_submit',
    'class' => 'btn btn-primary m-top-10',
    'value' => 'Update Profile',
);

echo form_open('edit_profile', array('class' => 'form-horizontal m-top-20'));

echo form_input($firstname);
echo '<div class="error">' . form_error('firstname') . '</div>';

echo form_input($lastname);
echo '<div class="error">' . form_error('lastname') . '</div>';

echo form_input($email);
echo '<div class="error">' . form_error('email') . '</div>';

echo form_textarea($about);
echo '<div class="error">' . form_error('about') . '</div>';


echo form_submit($profile_submit);

echo form_close();
?>

</div>
