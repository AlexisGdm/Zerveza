<!-- controller admin-add -->
<?php
require_once("../sql/connectdb.php");
include("../head/ZE-controller-head.php");
require('../header-admin/ZE-controller-header-admin.php');
require("../admin-auth/ZE-controller-admin-auth.php");
require("src/ZE-model-admin-add.php");
require('./templates/ZE-admin-add.php');
require('../footer/ZE-controller-footer.php');
