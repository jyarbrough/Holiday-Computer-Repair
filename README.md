# Holiday-Computer-Repair


#Database Setup
####Prerequisites
1. execute `mysql -uroot`
2. copy all three lines out of `initialization.sql`
3. execute copied lines in mysql shell


####Steps
1. Start MySQL
*  `cd /usr/local/mysql-shell/bin/`
*  `mysql.server start`


2. Log into the mysql prompt
*  `mysql -u posapi -pposapi`


3. Select the `pos` database
*   `use pos;`

4.  Run liquibase to configure database
*  activate maven profile: `Liquibase`
*  execute `liquibase:update`


#####Notes:
* If you've made a change to an already applied Liquibase script run `liquibase:dropAll` and then `liquibase:update

#Running Locally 
* un-check the Liquibase profiles

1. Run Maven lifecycle goal: `compile`

2. Run Maven plugin `jetty:run`

##DB changes
If you make database changes you will likely want to blow out the schema and reload the schema with more data.
If that is true, please use the `update-db-schema-with-dev-data.sh` 

`Prequistites:` 
1. Ensure maven is instaled on the command line. (test this by entering `which mvn` and if it responds with a path then you are good.)
2. If you need to install it visit `https://maven.apache.org/download.cgi` and download the zip
3. Then configure your path to have `mvn` on it.  see: `https://maven.apache.org/install.html`

`Steps:`
1. open up `update-db-schema-with-dev-data.sh` in intellij
2. ensure that the bash intellij plugin is installed. (if is it not you will see a intellij hint
in the top right of the screen telling you to install the plugin.)
3. Just right click in the file and say `run`.

