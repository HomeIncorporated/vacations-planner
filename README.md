<h1 align="center">Welcome to Vacation Planner 👋</h1>
<p>
  <img alt="Version" src="https://img.shields.io/badge/version-1.0.0-blue.svg?cacheSeconds=2592000" />
  <a href="https://github.com/gkoniaris/vacation-planner#readme" target="_blank">
    <img alt="Documentation" src="https://img.shields.io/badge/documentation-yes-brightgreen.svg" />
  </a>
  <a href="https://github.com/gkoniaris/vacation-planner/graphs/commit-activity" target="_blank">
    <img alt="Maintenance" src="https://img.shields.io/badge/Maintained%3F-yes-green.svg" />
  </a>
  <a href="#" target="_blank">
    <img alt="License: MIT" src="https://img.shields.io/badge/License-MIT-yellow.svg" />
  </a>
  <a href="https://twitter.com/gkondev" target="_blank">
    <img alt="Twitter: gkondev" src="https://img.shields.io/twitter/follow/gkondev.svg?style=social" />
  </a>
</p>

> A web application allowing companies to schedule their employees vacations

### ✨ [Demo (Not working yet)](https://gkoniaris.gr/vacation-planner)

## What is Vacation Planner

Vacation planner is a side/pet project written in plain PHP, allowing companies to schedule their employees' vacations. It has the following features:

- Login / Registrer functionality
- Supervisor / Employee roles
- Supervisors can manage their employees from the admin dashboard
- Employees can request vacation time from their supervisor
- Supervisors can approve / reject vacation time
- Supervisors can see all vacations in a practical calendar
- All notifications are performed via email

## What was implemented in the backend

I tried to implement my own simple version of Laravel, so I can dive into PHP internals like Reflection, sessions and more, as well as find ways to correctly structure all these components and make them work together. So, these are some of the things that were implemented in this project.

- A custom router following the MVC pattern, allowing to use controllers and middlewares
- A simple ORM to perform database operations
- Facades for accessing request data, accessing the database and more
- A simple Dependency Injection container to instantiate controller dependencies
- Error handling using custom exceptions as well as global error handling
- Custom validators that can be injected in controllers through the DI container
- Authentication / authorization using bcrypt and PHP sessions
- Commands to be able to run multiple operations in a queue and later abstract it in a queue worker
- A simple mailer library using PHPMailer
- Migration and seed scripts

## Prerequisites

To setup this project you have to install NodeJS and Docker in your computer. I have tested this setup in a Unix environment but it will probably work in Windows / Mac too.

## Technologies Used

- PHP
- Composer
- VueJS
- Docker
- MySQL

## Setup

Run the following commands in the project's root folder.

```sh
composer install

cd frontend && npm install

cd ..

cp .env.example .env

cp frontend/.env.example frontend/.env
```

After finishing the above steps, setup your smtp info in the .env file.

## Run the project

Run the following commands

```sh
docker-compose up

npm run migrate
```

After running these commands you will have a fully working docker environment and all database tables will be in place.`

You can then access the frontend of the application at [http://localhost:8080](http://localhost:8080/) and the API at [http://localhost:8081](http://localhost:8081).

## Screenshots

<p align="left">
  <a href="https://github.com/gkoniaris/vacations-planner/blob/39668b3148b569a95d0880c488143342a5abfe54/screenshots/screenshot%201.PNG">
    <img src="https://github.com/gkoniaris/vacations-planner/blob/39668b3148b569a95d0880c488143342a5abfe54/screenshots/screenshot%201.PNG" height="auto" width="200" />
  </a>

  <a href="https://github.com/gkoniaris/vacations-planner/blob/0cafbcf4e5733dc7db82943d8f752760b05fb846/screenshots/screenshot%202.PNG">
    <img src="https://github.com/gkoniaris/vacations-planner/blob/0cafbcf4e5733dc7db82943d8f752760b05fb846/screenshots/screenshot%202.PNG" height="auto" width="200" />
  </a>
</p>

## Author

👤 **George Koniaris**

* Website: https://gkoniaris.gr
* Twitter: [@gkondev](https://twitter.com/gkondev)
* Github: [@gkoniaris](https://github.com/gkoniaris)
* LinkedIn: [@gkon](https://linkedin.com/in/gkon)

## 🤝 Contributing

Contributions, issues and feature requests are welcome!<br />Feel free to check [issues page](https://github.com/gkoniaris/vacation-planner/issues). You can also take a look at the [contributing guide](https://github.com/gkoniaris/vacation-planner/blob/master/CONTRIBUTING.md).

## Show your support

Give a ⭐️ if this project helped you!

## 📝 License

Copyright © 2020 [George Koniaris](https://github.com/gkoniaris).<br />
This project is [MIT](https://github.com/gkoniaris/vacation-planner/blob/master/LICENSE) licensed.

***
_This README was generated with ❤️ by [readme-md-generator](https://github.com/kefranabg/readme-md-generator)_