<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Udemy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <?php echo anchor('latest_posts', 'Latest Post', array('class' => 'nav-link'));?>
                </li>
				 <?php if ($this->session->userdata('is_logged_in') == TRUE) { ?>
                <li class="nav-item">
                    <?php echo anchor('add_post', 'Add Post', array('class' => 'nav-link'));?>
                </li>
                <?php } ?>				
            </ul>

            <ul class="nav navbar-nav navbar-right">
            <?php if ($this->session->userdata('is_logged_in') == false) { ?>
                <li class="nav-item">
                    <?php echo anchor('register', 'Register', array('class' => 'nav-link'));?>
                </li>

                <li class="nav-item">
                    <?php echo anchor('login', 'Login', array('class' => 'nav-link'));?>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                <?php echo anchor('profile', $this->session->userdata('firstname') .
                    '&nbsp;' . $this->session->userdata('lastname'),
                    array('class' => 'nav-link'));?>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Settings
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php echo anchor('my_post', 'My Post', array('class' => 'dropdown-item'));?>
                    <?php echo anchor('profile', 'Profile', array('class' => 'dropdown-item'));?>
                    <?php echo anchor('dashboard', 'Dashboard', array('class' => 'dropdown-item'));?>
                    <div class="dropdown-divider"></div>
                    <?php echo anchor('logout', 'Logout', array('class' => 'dropdown-item'));?>
                    </div>
                </li>
            <?php } ?>
            </ul>
        </div>
    </div>
</nav>
