<?php
require_once("../sql/connectdb.php");
require("../admin-auth/ZE-controller-admin-auth.php");
require("./src/ZE-model-admin-resa-3.php");
require('../header-admin/ZE-controller-header-admin.php');
require('./templates/ZE-admin-resa-3.php');
header("refresh:3;url=../admin-resa/ZE-controller-admin-resa.php");
require('../footer/ZE-controller-footer.php');
