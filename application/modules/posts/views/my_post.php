<?php if ($this->session->flashdata('PostAdded')) { ?>
<div class="col-10 m-top-50">
    <div class="alert alert-dismissible alert-success">
        <div class="flash-data">
            <button type="button" class="close" data-dismiss="alert">X</button>
            <strong>Well Done! </strong><?=$this->session->flashdata('PostAdded');?>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<?php } ?>

<div class="post-page">
    <?php
    if(empty($posts)) {
        echo '<h3>You have not made any posts yet ... !</h3>';
    } else {
        foreach($posts as $post) {
    ?>
    <div class="post-holder grey-bg m-top-40">
        <h3><?= $post['title']; ?></h3>
        <div class="post_details">
            <small><?= anchor('view_author_profile/'.$post['poster_id'],
            $post['firstname'].'&nbsp;'.$post['lastname']); ?></small>
            <small><?= ucfirst($post['category_name']); ?></small>
            <p><?= word_limiter($post['body'], 30) ?></p>
            <?= anchor('view_post/'. $post['post_id'], 'Read more', 
            ['class' => 'btn btn-primary']); ?>
        </div>
    </div>
    <?php
        }
    }
    ?>
</div>