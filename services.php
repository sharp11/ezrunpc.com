<!DOCTYPE html>

<html lang="eng">
<head>
    <meta charset="UTF-8">
    <title>EZRunPC.com - In Home Computer Services - Services</title>
    <link rel="stylesheet" href="index.css">
</head>

<body id="servicesPage">
<div id="pageWrapper">    
    <div id="masthead">
        <div id="navContainer">
            <div id="navigation">            
                <?php require_once('navigation.php'); ?>
            </div> <!-- navigation -->
        </div> <!-- navContainer -->
    </div> <!-- masthead -->
    
    
    <div id="content">
<?php

$page = 'default';

// $_GET will be set when a menu item is selected in the navigation
if (isset($_GET['page']))
	$page = $_GET['page'];

if (!empty($page) && !$page == '') {
  if ($page == 'general') {
    echo '<ul>
            <li>General Computing
                <ul>
                    <li>help with installing and using software</li>
                    <li>internet, email help</li>
                    <li>CD/DVD burning</li>
                    <li>setting up and installing devices (printers, scanners, hard drives, etc.)</li>
                </ul>
            </li>
        </ul>';
  }
  else if ($page == 'maintenance') {
    echo '<ul>
            <li>Maintenance
                <ul>
                    <li>uninstall unused programs</li>
                    <li>clean up registry</li>
                    <li>start-up optimization</li>
                    <li>hard drive defragmenting</li>
                    <li>update device drivers, software, Windows</li>                        
                </ul>
            </li>
           </ul>';
  }
  else if ($page == 'security') {
    echo '<ul>
            <li>Security
                <ul>
                    <li>remove spyware, malware, viruses</li>
                    <li>install security program(s)</li>                    
                </ul>
            </li>
          </ul>';
  }
  else if ($page == 'networking') {
    echo '<ul>
            <li>Networking
                <ul>
                    <li>set up router</li>
                    <li>configure wireless network</li>
                    <li>set up file and printer sharing with other computers</li>
                    <li>integrate devices into home network:
                        <ul>
                            <li>game consoles, networked AV receivers, iPad/iPod, AppleTV, etc</li>
                            <li>recover lost wireless network keys</li>
                        </ul>
                    </li>                    
                </ul>
            </li>
          </ul>';
  }
  else if ($page == 'backup') {
    echo '<ul>
            <li>Data Backup
                <ul>
                    <li>Backup your precious data (photos, documets, music, videos, etc.)</li>
                </ul>
            </li>
          </ul>';
  }
  else if ($page == 'default') {
  	echo '<p>We offer a variety of services to help you get set up or solve computing issues.</p>';
  }
  
  else {
    echo "unknown page: $page.";
  }
}

?>
</div> <!-- content -->
        
  </div> <!-- wrapper -->

</body>
</html>
