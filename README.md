# Custom wordpress theme

### Based on BlankWP Theme

This theme was designed to deloy a wordpress site in seconds.

Step 1: Clone this theme (e.g. git clone git@github.com:bbuie/blankWP.git)

Step 2: Create a database on your server (i.e. use phpmyadmin to create a new database)

Step 3: Copy wp-config-blankWP.php to wp-config.php and change the database credentials. 

Step 4: Use blankWP.sql (found in the root directory) to populate the new database (e.g. mysql -h localhost -u root -p blankwp -e 'source blankwp.sql')

Step 5: Change the general settings in the wordpress admin. 

Thats it. Start Theming!

#### Steps to change theme name

Step 1: change WP_DEFAULT_THEME in wp-config.php to the new theme name

Step 2: rename the theme folder

Step 3: change the Theme Name in the theme's style.css file. 

Step 4: commit your changes
