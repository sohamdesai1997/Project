FROM php:7.2-apache

# Install required packages
RUN apt-get update \
    && apt-get install -y git unzip vim nano \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

# Install MySQL server
RUN apt-get update \
    && apt-get install -y mariadb-server \
    && rm -rf /var/lib/apt/lists/*

# Copy MySQL configuration
COPY my.cnf /etc/mysql/conf.d/

# Start MySQL service
RUN service mysql start \
    && mysql -e "CREATE DATABASE IF NOT EXISTS dvwa; GRANT ALL PRIVILEGES ON dvwa.* TO 'dvwa'@'%' IDENTIFIED BY 'password';"

# Download DVWA
RUN git clone https://github.com/digininja/DVWA.git /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html/

# Start Apache
CMD ["apache2-foreground"]
