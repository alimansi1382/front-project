<nav id="navigation-bar" class="navbar navbar_nav lightnav grid-display grid-50-50">
    <ul class="list">
        <li class="list_item" id="SidebarIcon"><i class='fas fa-bars'></i></li>
        <li class="nav_list_item">
            <div class="drophover">
                <i class="far fa-comment-alt"></i>
                <span class="badge bg-primary">3</span>
                <ul class="drophover_menu right">
                    <li class="drophover_item"> تیکت های جدید </li>
                </ul>
            </div>
        </li>
        <li class="nav_list_item">
            <div class="drophover">
                <i class="far fa-comment"></i>
                <span class="badge bg-primary">2</span>
                <ul class="drophover_menu right">
                    <li class="drophover_item"> کامنت های جدید </li>
                </ul>
            </div>
        </li>
    </ul>
    <ul class="list">
        <div class="drophover">
            <i class="fas fa-user-circle drophover_first_item action"></i>
            <ul class="drophover_menu left">
                <li class="drophover_item"><a href="<?php $controllerroot; ?>UserPanel_controller.php"><?php echo $_SESSION['firstname'].' '.$_SESSION['lastname']; ?></a></li>
                <li class="drophover_item"><a href="<?php echo $controllerroot; ?>exit_controller.php"><i class="fas fa-sign-out-alt"></i>خروج</a></li>
            </ul>
        </div>
    </ul>
</nav>