<div class="sidebar-wrapper">
    <div class="user">
        <div class="photo">
            <img src="<?php echo backend_asset_url('assets/img/faces/avatar.jpg'); ?>" />
        </div>
        <div class="info">
            <a >
                <?php echo $this->session->userdata('admins_session')->fullname; ?>
            </a>
        </div>
    </div>
    <ul class="nav">
       <!--  <li>
            <a href="<?php //echo backend_url('position'); ?>">
                <i class="material-icons">dashboard</i>
                <p>Position</p>
            </a>
        </li> -->

        <li>
            <a href="<?php echo backend_url('agent'); ?>">
                <i class="material-icons">dashboard</i>
                <p>Agent</p>
            </a>
        </li>

        <li>
            <a data-toggle="collapse" href="#location">
                <i class="material-icons">image</i>
                <p>Location
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="location">
                <ul class="nav">
                    <li>
                        <a href="<?php echo backend_url('country'); ?>">Country</a>
                    </li>
                    <li>
                        <a href="<?php echo backend_url('province'); ?>">Province</a>
                    </li>
                    <li>
                        <a href="<?php echo backend_url('city'); ?>">City</a>
                    </li>
                    <li>
                        <a href="<?php echo backend_url('district'); ?>">District</a>
                    </li>
                </ul>
            </div>
        </li>

        <li>
            <a data-toggle="collapse" href="#master">
                <i class="material-icons">image</i>
                <p>Master
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse" id="master">
                <ul class="nav">
                    <li>
                        <a href="<?php echo backend_url('category'); ?>">Category</a>
                    </li>
                    <li>
                        <a href="<?php echo backend_url('facilities'); ?>">Facilities</a>
                    </li>
                </ul>
            </div>
        </li>

        <li>
            <a href="<?php echo backend_url('auth/logout'); ?>">
                <i class="material-icons">users</i>
                <p>Logout</p>
            </a>
        </li>
     
    </ul>
</div>