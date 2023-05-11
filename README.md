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
Plase run `docker compose up -d` to Drupal start locally
Follow the steps inserting your *username* and *password*
Inserting the name of project, I prefered for the Glossary Tooltip name
After ending the six steps, your project is ready to execute locally

# Installing the volume modules:
volumes:
  drupal_modules: 
  drupal_profiles:
  drupal_themes:
  drupal_sites:
  db_data:
