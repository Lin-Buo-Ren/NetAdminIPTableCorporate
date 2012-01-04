<?php include_once ("functions.php"); ?>
<?php print ('<?xml version="1.0" encoding="utf-8"?>'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh_TW" lang="zh_TW">
<head>
<title><?php print($title);?> | IP Manager</title>
<meta name="author" content="國立海洋大學資訊工程學系 B97570146 楊力維, 09957010 林博仁" />
<meta name="description" content="適用於網路管理者的IP位址表" />
<meta name="generator" content="Vim" />
<meta name="keywords" content="IP位址表" />
<meta name="robots" content="index,follow" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href='styles/screen.css' rel='stylesheet' type='text/css'/>
</head>
<body>
<div class="topbar">
  <div class="topbar-inner">
    <div class="container">
      <a class="brand" href="index.php">IP Manager</a>
    
      <?php if (isUser()):?>
        <ul class="nav">
          <li><a href="new.php">新增IP</a></li>
          <li><a href="edit.php">修改IP</a></li>
          <?php if (isSuperUser()): ?>
          <li><a href="admin.php">新增/刪除帳號</a></li>
          <?php endif; ?>
        </ul>
      <?php endif; ?>
    
      <ul class="nav secondary-nav">
        <?php if (isUser()):?>
        <li><a href="logout.php">登出 <?php print($_SESSION['userName'])?></a></li>
        <?php else: ?>
        <li><a href="login.php">登入</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</div>
