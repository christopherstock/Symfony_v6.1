# Symfony_v6.1
![Symfony](img/logo-symfony.png)

First steps with **Symfony 6.1**:<br>
https://symfony.com/download

# Install the Symfony CLI Client
This can be done using Homebrew. An actual installation of 
Xcode including the macOS developer tools is required for 
installing the Symfony CLI client.
```
brew install symfony-cli/tap/symfony-cli
```

# Create a new Symfony Web Application Project
This will generate a new directory `my_project` with a web application sceleton.
```
symfony new --webapp my_project
```

Create a new project that is based on the Symfony Demo Project:
```
symfony new --webapp --demo my_project
```

# Start Dev Web Server
Either run the local PHP web server inside directory `public`:
```
cd public
php -S localhost:8000
```

Or achieve the same effect with the Symfony CLI client
from the root folder of your project:
```
symfony serve
```

# Run Unit Tests
Run PHPUnit in order to run all tests:
```
./bin/phpunit
```

# Debug Console Tool
Show all specified routes using the debug console
```
php bin/console debug:router
```
