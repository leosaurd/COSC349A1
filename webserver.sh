apt-get update
apt-get install -y apache2 php libapache2-mod-php php-mysql

CONF=$(cat <<EOF
    <VirtualHost *:80>
    ServerAdmin webmaster@localhost
    DocumentRoot /vagrant/webpages/webserver
    <Directory /vagrant/webpages/webserver>
        AllowOverride All
        Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
    </VirtualHost>
    # vim: syntax=apache ts=4 sw=4 sts=4 sr noet
EOF
)

echo "${CONF}" > /etc/apache2/sites-available/webserver.conf
a2ensite webserver
a2dissite 000-default
a2enmod rewrite
service apache2 reload