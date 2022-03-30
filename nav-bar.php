<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.php">Smart Home Device Scheduler</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item" id="home">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item" id="schedule">
        <a class="nav-link" href="schedule.php">Schedules</a>
      </li>
      <li class="nav-item" id="scan">
        <a class="nav-link" href="scan.php">Register Devices</a>
      </li>
      <li class="nav-item dropdown" id="device-preference">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Device Preferences
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			<?php foreach($arr_data as $items){ ?>
				<?php $link = '<a class="dropdown-item" href="mywebpage2.php?val='; ?>
				<?php $link .= $items.'">'.$items.'</a>'; ?> 
				<?php print $link; ?>
			<?php } ?>
        </div>
      </li>
	  <li class="nav-item" id="settings">
        <a class="nav-link" href="settings.php">Settings</a>
      </li>
    </ul>
  </div>
</nav>