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
    elseif ($page == "input1tambahpro")       include("page/input1/input1tambahpro.php");
    elseif ($page == "input1edit")            include("page/input1/input1edit.php");
    elseif ($page == "input1editpro")         include("page/input1/input1editpro.php");
    elseif ($page == "input1hapus")           include("page/input1/input1hapus.php");

    // -------------------------- Input --------------------------
    elseif ($page == "input2")                include("page/input2/input2.php");
    elseif ($page == "input2tambah")          include("page/input2/input2tambah.php");
    elseif ($page == "input2tambahpro")       include("page/input2/input2tambahpro.php");
    elseif ($page == "input2edit")            include("page/input2/input2edit.php");
    elseif ($page == "input2editpro")         include("page/input2/input2editpro.php");
    elseif ($page == "input2hapus")           include("page/input2/input2hapus.php");



else echo"Konten tidak ada";

?>