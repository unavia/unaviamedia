# Create new sudo user and sign in with the account
adduser development
usermod -aG sudo development
su development
# Will need to enter password for first sudo use

# Update repositories and upgrade available packages
sudo apt update -y
sudo apt upgrade -y

# Install nginx
sudo apt install nginx -y
# Possible check to ensure nginx is working (go to ip)

# Install mysql
sudo apt install mysql-server
# Add password automatically ("Passw0rD")

sudo mysql_secure_installation
# Validate password (n)
# Change password (n)
# Remove anonymous users (y)
# Disallow root login remotely (y)
# Remove test database (y)
# Reload table privileges (y)

# Install php and mysql handling
sudo apt install php-fpm php-mysql -y

# Security configuration to php.ini (/etc/php/7.0/fpm/php.ini) and restart php
# Find/replace "#cgi.fix_pathinfo=1" to "cgi.fix_pathinfo=0"
sudo systemctl restart php7.0-fpm

# Move default site configuration file into sites-available and link to sites-enabled

cd /etc/nginx/sites-enabled/
sudo rm default
sudo ln -s /etc/nginx/sites-available/site_conf /etc/nginx/sites-enabled/site_conf
cd -

# Check nginx configuration and reload
sudo nginx -t
sudo systemctl reload nginx

# Clean html directory and create php test file
sudo rm /var/www/html/*
sudo vim /var/www/html/info.php