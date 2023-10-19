#  Master Laravel, Vue 3 & Inertia Full Stack 2023 Project
## Terminal Commands Used on project
### Docker Commands
-Install docker https://docs.docker.com/desktop/install/mac-install/
-Create docker-compose.yml
-Past this code in docker-compose.yml file 

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
      
### Tinker Commands
#### Query on Laravel Tinker 
#### How to Work on Tinker
