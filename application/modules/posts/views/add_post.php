<div class="grey-bg add-post">
    <h2>Add a post here...</h2>

    <?php
    $hidden = array(
        'poster_id' => $this->session->userdata('user_id'),
    );

    $title = array(
        'name' => 'title',
        'class' => 'form-control m-top-10',
        'type' => 'text',
        'id' => 'title',
        'placeholder' => 'Enter a title for post',
        'value' => set_value('title'),
    );

    $body = array(
        'name' => 'body',
        'class' => 'form-control m-top-10',
        'rows' => '5',
        'cols' => '10',
        'id' => 'about',
        'placeholder' => 'Enter your post body',
        'value' => set_value('body'),
    );

    $post_submit = array(
        'name' => 'post_submit',
        'class' => 'btn btn-primary m-top-10',
        'value' => 'Add Post',
    );

    echo form_open('add_post', array('class' => 'form-horizontal m-top-20'), $hidden);

    echo form_input($title);
    echo '<div class="error">' . form_error('title') . '</div>';

    echo form_textarea($body);
    echo '<div class="error">' . form_error('body') . '</div>';

    echo Modules::run('categories/categories/get_cat_for_form');
    echo '<div class="error">' . form_error('category') . '</div>';

    echo form_submit($post_submit);

    echo form_close();

    ?>
</div>
