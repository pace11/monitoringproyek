<?php 

if (isset($_GET['page'])) $page=$_GET['page'];
else $page="dashboard";

if ($page == "dashboard") include("page/dashboard.php");
elseif ($page == "logout") include("page/logout.php");

    // -------------------------- user --------------------------
    elseif ($page == "user")                include("page/user/user.php");
    elseif ($page == "useradd")             include("page/user/useradd.php");
    elseif ($page == "useraddpro")          include("page/user/useraddpro.php");
    elseif ($page == "useredit")            include("page/user/useredit.php");
    elseif ($page == "usereditpro")         include("page/user/usereditpro.php");
    elseif ($page == "userdelete")          include("page/user/userdelete.php");

    // -------------------------- Input --------------------------
    elseif ($page == "input1")                include("page/input1/input1.php");
    elseif ($page == "input1tambah")          include("page/input1/input1tambah.php");

    // -------------------------- Input --------------------------
    elseif ($page == "input2")                include("page/input2/input2.php");

    // -------------------------- Input --------------------------
    elseif ($page == "input3")                include("page/input3/input3.php");

    // -------------------------- Input --------------------------
    elseif ($page == "input4")                include("page/input4/input4.php");


else echo"Konten tidak ada";

?>