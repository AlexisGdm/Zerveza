<!-- controller admin-remove -->
<?php
require_once("../sql/connectdb.php");
include("../head/ZE-controller-head.php");
require("../admin-auth/ZE-controller-admin-auth.php");
require('src/ZE-model-admin-remove.php');
require('../header-admin/ZE-controller-header-admin.php');
require('./templates/ZE-admin-remove.php');
require('../footer/ZE-controller-footer.php');
