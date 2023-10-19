# Hi, I'm Erkan! 👋

#  Master Laravel, Vue 3 & Inertia Full Stack 2023 Project
<p><a href="https://laravel.com/" target="_blank" rel="noopener noreferrer"><img width="100" src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" alt="Laravel Logo"></a><a href="https://vuejs.org" target="_blank" rel="noopener noreferrer"><img width="100" src="https://vuejs.org/images/logo.png" alt="Vue logo"></a><a href="https://inertiajs.com/" target="_blank" rel="noopener noreferrer"><img width="100" src="https://avatars.githubusercontent.com/u/47703742?s=280&v=4" alt="Inertia logo"></a></p>


## Terminal Commands Used on project
### Docker Commands
- Install docker https://docs.docker.com/desktop/install/mac-install/
- Create docker-compose.yml
- Past this code in docker-compose.yml file 
```bash
`version: "3.9"
services:
  mysql:
    image: mariadb:10.8.3
    # Uncomment below when on Mac M1
    # platform: linux/arm64/v8
    command: --default-authentication-plugin=mysql_native_password
    restart: always
    environment:
      MYSQL_ROOT_PASSWORD: root
    ports:
      - 3306:3306
  adminer:
    image: adminer
    restart: always
    ports:
      - 8080:8080`
  ```
   then
   ```bash
  `docker compose up` 
  ``` 
  - You can set a password in the docker-composer.yml file `MYSQL_ROOT_PASSWORD:????`
  - If you are in Mac you can define the password on the .env file you should check the db requires on docker and change.
### Factory and Seeder usage
- You can create a factory with 
```bash
php artisan make:factory FactoryNameFactory`this code 
```
- You have to define unnullable columns on deffination array on factory file.
- You must define every mandatory colums with correct tags.
- Some usefull tags 'sentence()', 'date()', 'realText()', 'streetName()', 'city()','postcode()','numberBetween(x,y)'
### Laravel Tinker Commands
- Get in terminal if are uses on the vscode terminal tinker not word correctly then you must use a terminal.
- Opening code is 
```bash
php artisan tinker
```
- You can run every php code on this section sql query some php functions ex.
- Then if you use any factoru on the project you can add some dummby file with `'tablename'->`
#### 



