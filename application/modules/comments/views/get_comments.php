<?php 
if (empty($comments)) { 
?>
<div class="grey-bg add-comment m-top-20">
	<h3>Their are no comments available for this post..!!</h3>
</div>
<?php } else {
    foreach ($comments as $comm):
?>

<div class="grey-bg add-comment m-top-20">
	<div class="row">

		<div class="col-2">
			<img src="<?=base_url();?>assets/images/users/<?=$comm['profile_pic'];?>" class="img-fluid rounded-circle" alt="" />
		</div>

		<div class="col-10">
			<p>
				<?=$comm['comment_body'];?>
			</p>
			<small>
				<?=anchor('view_author_profile/' . $comm['commenter_id'],
                $comm['firstname'] . '&nbsp;' . $comm['lastname']);?><br />
				<?=$comm['created_at'];?>
			</small>
		</div>

	</div>
</div><br />
<?php
endforeach;
}
?>
