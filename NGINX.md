server {
    listen 443 ssl;
    listen 80;
    access_log /dev/null;
    error_log /dev/null;

    ssl_certificate /etc/letsencrypt/live/n1.spin2.net/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/n1.spin2.net/privkey.pem;
    server_name n1.spin2.net;
    charset utf-8;
    index index.php;
    root /var/www/evolution/public/;

  location / {
      add_header 'Access-Control-Allow-Origin' 'https://n1.spin2.net' always;
      add_header 'Access-Control-Allow-Credentials' 'true' always;
      add_header 'Access-Control-Allow-Methods' 'GET, POST, OPTIONS' always;
      add_header 'Access-Control-Allow-Headers' 'DNT,User-Agent,X-Requested-With,If-Modified-Since,Content-Type,Range' always;
      add_header 'Access-Control-Expose-Headers' 'Content-Length,Content-Range' always;
      try_files $uri $uri/ /index.php$is_args$args;
    }

    location /public/ {
       proxy_pass http://127.0.0.1:8081;
       proxy_http_version 1.1;
       proxy_set_header Upgrade $http_upgrade;
       proxy_set_header Connection "Upgrade";
       proxy_set_header Host $host;
    }

    location ~ \.php$ {
            fastcgi_split_path_info ^(.+\.php)(/.+)$;
            fastcgi_pass unix:/run/php/php8.2-fpm.sock;
            #fascgi_index index.php;
            include fastcgi.conf;
    }
}