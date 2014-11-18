FROM opensuse:13.2
MAINTAINER devops@novacoast.com

RUN zypper --non-interactive --no-gpg-checks ref; \
    zypper --non-interactive in --recommends \
    which w3m apache2 php5 php5-mysql apache2-mod_php5 \
    php5-gd php5-gettext php5-mbstring php5-pear php5-curl php5-suhosin; \
    zypper clean

RUN sed -i 's/variables_order = "GPCS"/variables_order = "EGPCS"/g' /etc/php5/apache2/php.ini

CMD rcapache2 start && tail -f /var/log/apache2/*.log
