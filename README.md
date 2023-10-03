# User Information List

Simple page with a list of basic user information.

### Technologies Used

- [Laravel](https://laravel.com/docs/10.x)
- [Docker e Docker Compose](https://www.docker.com/)
- [Bootstrap](https://getbootstrap.com/)

### Requirements

- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node e NPM - v^18](https://nodejs.org/en)
- [Mysql](https://www.mysql.com/)

or

- [Docker and Docker Compose](https://www.docker.com/)

### Techniques and Tools

- Componentization
- Responsiveness
- Docker
- SOLID Principles
- Code Reusability
- And more...

## Configuration

1. Clone the project to your machine

```bash
git clone https://github.com/mauricioccardoso/user-info-list_laravel.git
```

1.1 If you have Docker and Docker Compose configured on your machine, proceed to [Docker and Docker Compose](#docker-and-docker-compose-configuration).
If you don't have Docker, continue to the configuration below.

2. Access the project's root folder and navigate to the app folder

```bash
cd user-info-list_laravel/app
```

3. Install dependencies

```bash
composer install

&&

npm install
```

4.  Generate the Laravel key using the following command

```bash
php artisan key:generate
```

5. After generating and configuring your database, copy the .env.example file and rename it to .env. Configure the variables related to the database in the .env file


6. Execute the migration command

```bash
php artisan migrate
```

7. Start the PHP server
```bash
php artisan serve
```

8. Open a new terminal and start the Vite server

```bash
npm run dev
```

### Docker and Docker Compose Configuration

1. After cloning the project, navigate to the project's root folder from the terminal or in the text editor or IDE terminal


2. Copy the .env file and configure the database variables the same as the database settings in the docker-compose file.


3. Use the following command to start the containers and wait for the completion.

```bash
docker compose up -d
```

4. Once the containers are ready, access in the browser

App - [http://0.0.0.0:8081/](http://0.0.0.0:8081/)

--- 

## Contribuição

- ***[Maurício Erick da Costa Cardoso](https://portfolio-mauricio-cardoso.vercel.app/home)***

    - FullStack Developer - ***PHP LARAVEL VUE.js TYPESCRIPT NODE.js DOCKER TAILWIND BOOTSTRAP MYSQL POSTGRESS LINUX GIT***

- **[GitHub](https://github.com/mauricioccardoso)**

- **[LinkedIn](https://www.linkedin.com/in/mauricioccardoso/)**

- **<mauricioerick17@gmail.com>**