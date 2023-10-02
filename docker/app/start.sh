#!/bin/bash

cd /home/php/app

if [ -e /home/php/app/composer.json ] && [ -e /home/php/app/.env ]; then
  echo -e "\e[32m Project found \e[0m"

  echo -e "\e[32m Installing dependencies \e[0m\n"
  composer install
  npm install
  echo -e "\n\e[32m Dependencies installed \e[0m"

  echo -e "\e[32m Generating key \e[0m"
  php artisan key:generate
  echo -e "\e[32m Key generated \e[0m"

  #Check if db_password was defined.
  line_content=$(sed -n "16p" "/home/php/app/.env")
  text="DB_PASSWORD="
  if ! echo "$line_content" | grep -q "${text}.\+"; then
    echo -e "\n\e[33;1m *** Warning - Configure the database environment variables in the .env file \e[0m\n"
    echo -e "\e[33;1m The variables DB_CONNECTION, DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME and DB_PASSWORD should be on lines 11 to 16 of the .env file \e[0m"

    echo -e "\n\e[32;1m Keeping the container up \e[0m"
    tail -f /dev/null
  fi

  echo -e "\e[32m Running migrations \e[0m"
  php artisan migrate
  echo -e "\e[32m Migrations completed \e[0m"

  echo -e "\e[32m Running the server on port 8081 \e[0m"
  php artisan serve --host=0.0.0.0 --port=8081

elif [ -e /home/php/app/composer.json ] && ! [ -e /home/php/app/.env ]; then
  echo -e "\n\e[33;1m *** Warning - File .env does not exist \e[0m"
  echo -e "\e[33;1m Please create the '.env' file from '.env.example' and configure the database connection variables \e[0m"

  echo -e "\n\e[32;1m Keeping the container up \e[0m"
  tail -f /dev/null

else
  echo -e "\e[33;1m *** Warning - Project or file composer.json does not exist \e[0m"

  echo -e "\e[32;1m Keeping the container up \e[0m"
  tail -f /dev/null
fi