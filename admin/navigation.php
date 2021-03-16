<?php

function active($currect_page)
{
    $url_array =  explode('/', $_SERVER['REQUEST_URI']);
    $url = end($url_array);
    if ($currect_page == $url) {
        echo 'active'; //class name in css 
    }
}

?>
<style>
    .active {
        font-weight: bold;
    }
</style>


<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item <?php if($login_session === 'user@mail.com') {echo 'd-none';} ?>">
                <a class="nav-link <?php active('dashboard.php'); ?>" aria-current="page" href="dashboard.php">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item <?php if($login_session === 'admin@mail.com') {echo 'd-none';} ?>">
                <a class="nav-link <?php active('notifications.php'); ?>" aria-current="page" href="notifications.php">
                    <span data-feather="bell"></span>
                    Notifications
                </a>
            </li>
            <li class="nav-item <?php if($login_session === 'admin@mail.com') {echo 'd-none';} ?>">
                <a class="nav-link <?php active('history.php'); ?>" aria-current="page" href="history.php">
                    <span data-feather="clock"></span>
                    History
                </a>
            </li>
            <li class="nav-item <?php if($login_session === 'user@mail.com') {echo 'd-none';} ?>">
                <a class="nav-link <?php active('members.php'); ?>" href="members.php">
                    <span data-feather="file"></span>
                    Members
                </a>
            </li>
            <li class="nav-item <?php if($login_session === 'user@mail.com') {echo 'd-none';} ?>">
                <a class="nav-link <?php active('transactions.php'); ?>" href="transactions.php">
                    <span data-feather="shopping-cart"></span>
                    Transactions
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php active('chats.php'); ?>" href="chats.php">
                    <span data-feather="users"></span>
                    Chats
                </a>
            </li>
            <li class="nav-item <?php if($login_session === 'user@mail.com') {echo 'd-none';} ?>">
                <a class="nav-link <?php active('content.php'); ?>" href="content.php">
                    <span data-feather="layers"></span>
                    Content
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php active('account.php'); ?>" href="account.php">
                    <span data-feather="bar-chart-2"></span>
                    Account
                </a>
            </li>
            <!-- <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li> -->
        </ul>

        <!-- <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul> -->
    </div>
</nav>