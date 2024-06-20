FROM php:8.2-fpm
ARG user
ARG uid
# Update and install necessary packages
RUN apt update && apt install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    sqlite3 \
    libsqlite3-dev \
    pkg-config \
    libicu-dev
# Clean up the package lists
RUN apt clean && rm -rf /var/lib/apt/lists/*
# Install PHP extensions
RUN docker-php-ext-configure intl && \
    docker-php-ext-install pdo pdo_mysql pdo_sqlite intl mbstring exif pcntl bcmath gd
# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
# Create a non-root user
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user
WORKDIR /var/www
USER $user
# Expose port 9000 for PHP-FPM
EXPOSE 9000
# Command to start PHP-FPM
CMD ["php-fpm"]
