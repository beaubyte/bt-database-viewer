# bt-database-viewer
`bt-database-viewer` is a website I made to complement my other project `bt-le-investigator`. It is a simple webpage that can be run on any web server with PHP and the PostgreSQL drivers.

### Dependencies
- `apache2`
- `php8.4`
- `php8.4-pgsql`

### Usage
Move PHP files to your web server. Configure a .env file with `DB_USER`, `DB_PASS`, `DB_HOST`, and `DB_NAME` values.

The file should look like this:
```
DB_USER=''
DB_PASS=''
DB_HOST=''
DB_NAME=''
```
After, simply fill each value with the information to point towards your database.

The web page can then be browsed to, in which the data and database can be interacted with.

