#!/usr/bin/env bash

export MYSQL_PWD='password'
apt-get update && apt-get upgrade -y
echo "mysql-server mysql-server/root_password password $MYSQL_PWD" | debconf-set-selections
echo "mysql-server mysql-server/root_password_again password $MYSQL_PWD" | debconf-set-selections
apt-get -y install mysql-server
echo "CREATE DATABASE init;" | mysql
echo "CREATE USER 'admin'@'%' IDENTIFIED BY 'password';" | mysql
echo "GRANT ALL PRIVILEGES ON init.* TO 'admin'@'%'" | mysql
export MYSQL_PWD='password'
cat /vagrant/setup-database.sql | mysql -u admin init
sed -i'' -e '/bind-address/s/127.0.0.1/0.0.0.0/' /etc/mysql/mysql.conf.d/mysqld.cnf
service mysql restart