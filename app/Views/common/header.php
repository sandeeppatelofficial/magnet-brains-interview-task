<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    

<nav class="navbar navbar-expand-lg navbar-light bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url(); ?>">Task Management</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0" style="margin-left: auto;">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="<?= base_url(); ?>">Home</a>
        </li>
        <?php
        if(session()->get('role') =="admin"){
        ?>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= base_url("users"); ?>">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= base_url("tasks"); ?>">Tasks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= base_url("logout"); ?>">Logout</a>
        </li>
        
        <?php }else if(session()->get('role') =="user"){ ?>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= base_url("tasks"); ?>">Tasks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= base_url("logout"); ?>">Logout</a>
        </li>
        
        <?php }else{ ?>
            <li class="nav-item">
          <a class="nav-link text-white" href="<?= base_url("login"); ?>">Login</a>
        </li>
            <?php }?>
       
      </ul>
    
    </div>
  </div>
</nav>

