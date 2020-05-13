<?php
  if (!empty($_GET['q'])) {
    switch ($_GET['q']) {
      case 'info':
        phpinfo(); 
        exit;
      break;
    }
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Laragon</title>

        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Karla';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .opt {
                margin-top: 30px;
            }

            .opt a {
              text-decoration: none;
              font-size: 150%;
            }
            
            a:hover {
              color: red;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title" title="Laragon">Laragon</div>
     
                <div class="info"><br />
                      <strong><?php print($_SERVER['SERVER_SOFTWARE']); ?></strong><br />
                      PHP version: <strong><?php print phpversion(); ?></strong>   <span><a title="phpinfo()" href="/?q=info">info</a></span><br />
                      Document Root: <strong><?php print ($_SERVER['DOCUMENT_ROOT']); ?></strong><br />

                </div>
                <div class="info"><br />
                	<?php

	                	$mysql = mysqli_connect('localhost', 'root', '');
	 
						/* Test the MySQL connection */
						if (mysqli_connect_errno()) {
							printf("Connection failed: %s\n", mysqli_connect_error());
							exit();
						}
					?>
						 
						<!-- Print the MySQL server version --> 
						MySQL server info:<strong><?php printf("%s\n", mysqli_get_server_info($mysql)); ?></strong>
						<br>
						MySQL protocol info:<strong><?php printf("%s\n", mysqli_get_proto_info($mysql)); ?></strong>
						<br>
						MySQL server version:<strong><?php printf("%s\n", mysqli_get_server_version($mysql)); ?></strong>
						<br>
						MySQL client info:<strong><?php printf("%s\n", mysqli_get_client_info($mysql)); ?></strong>
						<br>
						MySQL host info:<strong><?php printf("%s\n", mysqli_get_host_info($mysql)); ?></strong>

					<?php
						/* Close the MySQL connection */
						mysqli_close($mysql);
					?>

                </div>
                <div class="opt">
                  <div><a title="Getting Started" href="http://laragon.org/?q=getting-started">Getting Started</a></div>
                </div>
            </div>

        </div>
    </body>
</html>