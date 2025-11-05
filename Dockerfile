# Use the official PHP Apache image
FROM php:8.2-apache

# Copy all project files into the web root
COPY . /var/www/html/

# Expose the container port
EXPOSE 80
