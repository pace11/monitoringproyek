<section class="sidebar">
    <div class="user-panel">
    <div class="pull-left image">
        
    </div>
    <div class="pull-left info">
        <p><?= $userdata->username ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <li class="<?php if ($_GET['page'] == 'dashboard'){ echo "active";} ?>">
            <a href="?page=dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
        </li>
        <li class="treeview <?php if ($_GET['page'] == 'input1' || $_GET['page'] == 'input2' || $_GET['page'] == 'input3' || $_GET['page'] == 'input4' ||
                                      $_GET['page'] == 'input1tambah'){echo "active";} ?>">
          <a href="#">
            <i class="fa fa-pencil"></i> <span>Input</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu ">
            <li class="<?php if($_GET['page'] == 'input1' || $_GET['page'] == 'input1tambah') {echo "active";} ?>"><a href="?page=input1"><i class="fa fa-circle-o"></i>input 1</a></li>
            <li class="<?php if($_GET['page'] == 'input2') {echo "active";} ?>"><a href="?page=input2"><i class="fa fa-circle-o"></i>input 2</a></li>
            <li class="<?php if($_GET['page'] == 'input3') {echo "active";} ?>"><a href="?page=input3"><i class="fa fa-circle-o"></i>input 3</a></li>
            <li class="<?php if($_GET['page'] == 'input4') {echo "active";} ?>"><a href="?page=input4"><i class="fa fa-circle-o"></i>input 4</a></li>
          </ul>
        </li>
    </ul>
</section>