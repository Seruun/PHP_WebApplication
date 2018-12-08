<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Envor - The Dark Age</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="../favicon_env.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Additional CSS -->
    <link rel="stylesheet" href="<?php echo $_OWN; ?>/php/css/stylesheet.css">
  </head>
  <body>
<!-- Header -->
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">
      <img alt="Brand" src="<?php echo $_OWN; ?>/php/globals/ico/ico_env.png" width="35%" height="35%">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo $_OWN; ?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Projects </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?php echo $_PHP_WEB; ?>">php Webproject</a>
            <a class="dropdown-item" href="<?php echo $_PGHT; ?>">PyGame "Hunting Terrorist"</a>
            <a class="dropdown-item" href="<?php echo $_PyMedia; ?>">PyMediaPlayer</a>
            <a class="dropdown-item" href="<?php echo $_PMCCM; ?>">Py Multi Cryptocurrency Miner (CPU/GPU)</a>
            <a class="dropdown-item" href="<?php echo $_MMORPG; ?>">MMORPG -> "Envor - The Dark Age"</a>
            <a class="dropdown-item" href="<?php echo $_UNI; ?>">University Projects -> "Technical College Brandenburg"</a>
            <a class="dropdown-item" href="<?php echo $_Projects; ?>">Project List</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Features </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="<?php echo $_FORUM; ?>">Forum</a>
            <a class="dropdown-item" href="<?php echo $_WIKI; ?>">Wiki</a>
            <a class="dropdown-item" href="<?php echo $_GIT_REPO; ?>">GitPrep</a>
            <a class="dropdown-item" href="<?php echo $_TICKETS; ?>">Ticket Support Service</a>
            <a class="dropdown-item" href="<?php echo $_VESTA; ?>">Powered by VESTA</a>
          </div>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
</header>
<!-- End of Header -->
