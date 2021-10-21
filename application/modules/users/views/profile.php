<div class="profile-holder">
    <div class="row grey-bg">
        <?php if ($this->session->flashdata('ProfileUpdated')) { ?>
        <div class="col-10 m-top-50">
            <div class="alert alert-dismissible alert-success">
                <div class="flash-data">
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    <strong>Well Done! </strong><?=$this->session->flashdata('ProfileUpdated');?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <?php } ?>
        <div class="col-4 text-center">
            <img src="<?= base_url();?>assets/images/users/<?= $user_profile['profile_pic']; ?>" class="img-fluid" alt="" />
            <?= anchor('edit_profile_pic', 'Edit Profile Pic'); ?>
        </div>
        <div class="col-8 m-top-15">
            <p><strong>Name</strong>:- <?= $user_profile['firstname'] .'&nbsp;'. $user_profile['lastname']; ?></p>
            <p><strong>Email</strong>:- <?= $user_profile['email']; ?></p>
            <p><strong>Gender</strong>:- <?= $user_profile['gender']; ?></p>
            <p><strong>About</strong>:- <?= $user_profile['about']; ?></p>
            <?= anchor('edit_profile', 'Edit Profile', ['class' => 'btn btn-primary']); ?>
        </div>
    </div>
</div>