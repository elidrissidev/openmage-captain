FROM httpd:2.4-alpine

COPY httpd-vhosts.conf php-fpm.conf /usr/local/apache2/conf/extra/

RUN sed -i \
		-e 's/^#\(Include .*vhosts.conf\)/\1/' \
		-e 's/^#\(LoadModule .*proxy.so\)/\1/' \
		-e 's/^#\(LoadModule .*proxy_fcgi.so\)/\1/' \
		-e 's/^#\(LoadModule .*rewrite.so\)/\1/' \
		conf/httpd.conf \
    && echo 'Include conf/extra/php-fpm.conf' >> conf/httpd.conf

EXPOSE 80
