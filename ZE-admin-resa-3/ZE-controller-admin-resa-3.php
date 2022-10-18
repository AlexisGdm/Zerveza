<?php
require_once "../src/connectdb.php";
require("ZE-admin-auth.php");
require("../src/ZE-model-admin-resa-3.php");
require("head.php");
require('ZE-header-admin.php');
require('ZE-admin-resa-3.php');
header("refresh:3;url=ZE-admin-resa.php");
require ('ZE-footer.php');
