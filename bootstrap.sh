#!/usr/bin/env bash

apt-get update
apt-get install -y apache2 php5 php-pear php5-mysql php5-gd
rm -rf /var/www
ln -fs /vagrant /var/www
a2enmod rewrite