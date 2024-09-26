# Database Setup

This folder contains a script for setting up a database using MariaDB.

### Steps
1. Log in to the database using: ```mariadb -u root -p```
2. Enter your default password (in bitnami_credentials or bitnami_application_password).
3. Run: ```source /opt/bitnami/apache/htdocs/sql/init.sql```
4. Create a new user and grant privileges to this user on the new database:
    - Only with local access:
    ```grant all privileges on DATABASE_NAME.* TO 'USER_NAME'@'localhost' identified by 'PASSWORD';```
    - With remote access:
    ```grant all privileges on DATABASE_NAME.* TO 'USER_NAME'@'%' identified by 'PASSWORD';```
5. The database is now set up with dummy data and you are able to log back into the database with the `USER_NAME` and `PASSWORD` you used above.
