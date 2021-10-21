<div class="col-8 center-block m-top-50  register-page grey-bg">
  <h2>Register here..!</h2>
  <?php

$firstname = array(
    'name' => 'firstname',
    'class' => 'form-control m-top-10',
    'type' => 'text',
    'id' => 'firstname',
    'placeholder' => 'Enter Your First name',
    'value' => set_value('firstname'),
);

$lastname = array(
    'name' => 'lastname',
    'class' => 'form-control m-top-10',
    'type' => 'text',
    'id' => 'lastname',
    'placeholder' => 'Enter Your Last name',
    'value' => set_value('lastname'),
);

$email = array(
    'name' => 'email',
    'class' => 'form-control m-top-10',
    'type' => 'email',
    'id' => 'email',
    'placeholder' => 'Enter Your Email',
    'value' => set_value('email'),
);

$username = array(
    'name' => 'username',
    'class' => 'form-control m-top-10',
    'type' => 'text',
    'id' => 'username',
    'placeholder' => 'Enter Your Username',
    'value' => set_value('username'),
);

$password = array(
    'name' => 'password',
    'class' => 'form-control m-top-10',
    'type' => 'password',
    'id' => 'password',
    'placeholder' => 'Enter Your password',
);

$confirm_password = array(
    'name' => 'confirm_password',
    'class' => 'form-control m-top-10',
    'type' => 'password',
    'id' => 'confirm_password',
    'placeholder' => 'Re-Enter Your password',
);

$gender = array(
    'name' => 'gender',
    'class' => 'form-control m-top-10',
    'id' => 'gender',
    'value' => set_value('gender'),
);

$gender_option = array(
    '' => 'Select your gender',
    'male' => 'Male',
    'female' => 'Female',
    'others' => 'Others',
);

$register_submit = array(
    'name' => 'register_submit',
    'class' => 'btn btn-primary m-top-10',
    'value' => 'Register',
);

echo form_open('register', array('class' => 'form-horizontal m-top-20'));

echo form_input($firstname);
echo '<div class="error">' . form_error('firstname') . '</div>';

echo form_input($lastname);
echo '<div class="error">' . form_error('lastname') . '</div>';

echo form_input($email);
echo '<div class="error">' . form_error('email') . '</div>';

echo form_input($username);
echo '<div class="error">' . form_error('username') . '</div>';

echo form_input($password);
echo '<div class="error">' . form_error('password') . '</div>';

echo form_input($confirm_password);
echo '<div class="error">' . form_error('confirm_password') . '</div>';

echo form_dropdown($gender, $gender_option);
echo '<div class="error">' . form_error('gender') . '</div>';

echo form_submit($register_submit);

echo form_close();
?>
</div>
