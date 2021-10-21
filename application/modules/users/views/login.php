<?php if ($this->session->flashdata('UserRegistred')) { ?>
<div class="col-10 m-top-50">
    <div class="alert alert-dismissible alert-success">
        <div class="flash-data">
            <button type="button" class="close" data-dismiss="alert">X</button>
            <strong>Well Done!</strong><?=$this->session->flashdata('UserRegistred');?>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<?php } ?>

<div class="col-8 center-block m-top-50 login-page grey-bg">
    <h2>Login here...!</h2>

<?php
$email = array(
    'name' => 'login_email',
    'class' => 'form-control m-top-10',
    'type' => 'email',
    'id' => 'email',
    'placeholder' => 'Enter Your Email',
);

$password = array(
    'name' => 'login_password',
    'class' => 'form-control m-top-10',
    'type' => 'password',
    'id' => 'password',
    'placeholder' => 'Enter Your password',
);

$login_submit = array(
    'name' => 'login_submit',
    'class' => 'btn btn-primary m-top-10',
    'value' => 'Login',
);

echo form_open('login', array('class' => 'form-horizontal m-top-20'));

echo form_input($email);
echo '<div class="error">' . form_error('login_email') . '</div>';

echo form_input($password);
echo '<div class="error">' . form_error('login_password') . '</div>';

echo form_submit($login_submit);

echo form_close();
?>
</div>
