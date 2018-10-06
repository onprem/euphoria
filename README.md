## Euphoria
----------
 *A simple website for a imaginary college fest*

This website is designed as a part of **Webkriti** website designing competition for 1st year students organised by **AASF** in *ABV-IIITM*.
The technologies used are HTML, CSS, JavaScript and PHP, MySQL is used for database. No framework of any kind (bootstrap, jQuery etc.) is used as stated by the rules of webkriti.
This website is made by beginners and hence can easily be understood by those who wants to learn web development. The website incorporates a registration and login facility as well as a Dashboard from where the user can register for different events organised in the college fest. The website also have a admin panel from which the admin can view stats.

### Setting up a admin account
The admin accounts are hardcoded in database. You can remove the default account by deleting the entry in `admins` table. Likewise to add a admin account register it as simple user and then put it's username in `admins` table.

### Installation
1. Copy the files in your web server's root directory.
2. Create a database in your Mysql DB server.
3. Import `tables.sql` in the database you created using phpmyadmin or any tool you prefer.
4. Edit `config.php` for correct settings and you are good to go.
5. admin accounts are hardcoded in admins table of database. You can edit them using phpmyadmin.
6. default admin account:
	`username: kamaln`
	`password: kamaln`


