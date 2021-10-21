<div class="post-page m-top-20">
<?php
if(empty($view_post)) {
    echo '<h3>You have not made any posts yet..!</h3>';
}
else {
?>
	<div class="post-holder grey-bg m-bot-40">
		<h3>
			<?= $view_post['title']; ?>
		</h3>

		<div class="post_details">
			<small>
				<?= anchor('view_author_profile/'.$view_post['poster_id'],
                $view_post['firstname'].'&nbsp;'.$view_post['lastname'])?>
            </small>
			<small>
				<?= ucfirst($view_post['category_name']);?>
            </small>
		</div>

		<p>
			<?= $view_post['body']?>
		</p>

	</div>


<?php if($this->session->flashdata('CommentAdded')){?>
    <div class="col-md-10">
      <div class="alert alert-dismissible alert-success">
        <div class="flash_data">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>Well Done!</strong> <?php echo $this->session->flashdata('CommentAdded'); ?>
       </div>
      <div class="clearfix"></div>
  </div>
</div>

<?php } 

echo Modules::run('comments/postcomments/add_comment');

echo Modules::run('comments/postcomments/get_comments', $view_post['post_id']);

} ?>


</div>