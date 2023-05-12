# glossary-tooltip
A glossary tootip using a Docker image with Drupal and phpMyAdmin 

# Configuration
Installing the Docker configuration via the Composer
Drupal: version 10
Port: 80
Username: default_by_user
Password: default_by_user

# Database
- SQL Lite 3 (https://github.com/nouchka/docker-sqlite3/blob/master/docker-compose.yml)

# Installation
- Run `docker compose up -d` to start Docker Compose
- Follow the steps by entering your *username* and *password*
- Also inserting the name of the project, I preferred the name Glossary Tooltip
- After completing the six steps, your project is ready to run locally
- It's important to `docker-compose.yml` works with the modules *descriptions* and *terms*, they also importants to create a glossary module with terms:
- Title and Description for create a new title and description when pass the mouse coursor into the text;
- The *Read More* text, limi characters and more customation changes can be work when running again `docker compose up -d` after changing the `modules/glossary_descriptions.php` file
-  

# Installing the volume modules:
volumes:
  drupal_modules: 
  drupal_profiles:
  drupal_themes:
  drupal_sites:
  db_data:
