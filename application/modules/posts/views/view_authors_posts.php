<?php
if(isset($error))
{
  echo '<h3>'.$error.'</h3>';
}
else
{
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
			<?= $post['title']; ?>
		</h3>

		<div class="post_details">
			<small>
				<?= anchor('view_author_profile/'.$post['poster_id'],
      $post['firstname'].'&nbsp;'.$post['lastname'])?></small>
			<small>
				<?= ucfirst($post['category_name'])?></small>
		</div>

		<p>
			<?= word_limiter($post['body'], 30)?>
		</p>
		<?= anchor('view_post/'. $post['post_id'], 'Read more',
      array('class' => 'btn btn-primary')); ?>
	</div>
	<?php
endforeach;
}
    ?>
</div>

<?php
}
   ?>
