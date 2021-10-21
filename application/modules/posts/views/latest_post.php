<?php
if($this->session->flashdata('PostAdded')){
 ?>
<div class="col-10 m-top-50">
	<div class="alert alert-dismissible alert-success">
		<div class="flash-data">
			<button type="button" class="close" data-dismiss="alert">X</button>
			<strong>Well done !</strong>
			<?= $this->session->flashdata('PostAdded');?>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php
}
  ?>

<div class="post-page m-top-20">
	<?php
if(empty($posts))
{
  echo '<h3>You have not made any posts yet..!</h3>';
}
else
{
  foreach($posts as $post):
  ?>
	<div class="post-holder grey-bg m-bot-40">
		<h3>
			<a href="<?php echo 'view_post/'. $post['post_id']; ?>"><?php echo $post['title']; ?></a>
		</h3>

		<div class="post_details">
			<small>
				<?php echo anchor('view_author_profile/'.$post['poster_id'], $post['firstname'].'&nbsp;'.$post['lastname'])?></small>
			|
			<small>
				<?php echo ucfirst($post['category_name'])?></small> |
			<small>
				<?php echo $post['total_comments'];?> Comments</small>
		</div>

		<p>
			<?php echo word_limiter($post['body'], 30)?>
		</p>
		<?php echo anchor('view_post/'. $post['post_id'], 'Read more',  array('class' => 'btn btn-primary')); ?>
	</div>
	<?php
endforeach;
}
    ?>
</div>
