# Custom wordpress theme

### Based on BlankWP Theme

This theme was designed to deloy a wordpress site in seconds.

Step 1: Clone this theme (e.g. git clone git@github.com:bbuie/blankWP.git). IMPORTANT: delete the git remote origin.

Step 2: Create a database on your server (i.e. use phpmyadmin to create a new database)

Step 3: Use blankWP.sql (found in the root directory) to populate the new database (e.g. mysql -h localhost -u root -p blankwp -e 'source blankwp.sql')

Step 4: Copy wp-config-blankWP.php to wp-config.php and change the database credentials. Important: you need to override the WP_SITEURL and WP_HOME in this file too.  

Step 5: Login to wp-admin with blankwp keypass password, change credentials, save new site in keypass, 

Step 6: Update wordpress (if needed), re-backup the database (mysqldump [your new db name] --skip-extended-insert -h localhost -u root -p  > blankWP.sql) and push changes back to here.

Step 7: Change the name of blankWP.sql  to the name of your project

Step 8: Change the general settings in the wordpress admin. 

Thats it. Start Theming!

#### Steps to change theme name

Step 1: change WP_DEFAULT_THEME in wp-config.php to the new theme name

Step 2: rename the theme folder

Step 3: change the Theme Name in the theme's style.css file. 

Step 4: change the js/blankWP.js to the theme name

Step 5: change the blankWP.scss file name to theme name. Delete blankWP.css

Step 6: edit the header.php file and change every instance of blankWP to your new theme name

Step 7: commit your changes
