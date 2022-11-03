<!-- controller-admin-resa-3 -->
<?php
require_once("../sql/connectdb.php");
include("../head/ZE-controller-head.php");
require("../admin-auth/ZE-controller-admin-auth.php");
require("src/ZE-model-admin-resa-3.php");
require('../header-admin/ZE-controller-header-admin.php');
require('templates/ZE-admin-resa-3.php');
header("refresh:3;url=//Zerveza/admin-resa");
require('../footer/ZE-controller-footer.php');
