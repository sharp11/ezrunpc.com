<?php
echo '
<nav>
  <ul>
    <li id="homePageLink"><a href="index.php">Home</a></li>
    <li id="servicesPageLink"><a href="services.php">Services</a>                        
      <ul>
        <li>
        <ul>
          <li><a href="services.php?page=general">General Computing</a></li>
          <li><a href="services.php?page=maintenance">Maintenance</a></li>
          <li><a href="services.php?page=security">Security</a></li>
          <li><a href="services.php?page=networking">Networking</a></li>
          <li><a href="services.php?page=backup">Data Backup</a></li>
        </ul>
        </li>
      </ul>
    </li>
    <li id="contactPageLink"><a href="contact.php">Contact</a></li>
  </ul>
</nav>
';
?>
