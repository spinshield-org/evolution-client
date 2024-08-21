# Evolution Client 
Changes currency of Evolution game session.

## Install
Install first of all per normal like you would any [Laravel](https://laravel.com) app.

Run `cp .env.example .env` and fill in all variables, for each currency you will need to add a domain and have a seperate websocket instance.

Enter to .env example:
```bash
EVO_USD_DOMAIN="n1.yoursite.com"
EVO_EUR_DOMAIN="n2.yoursite.com"
EVO_GBP_DOMAIN="n3.yoursite.com"
EVO_CAD_DOMAIN="n4.yoursite.com"
EVO_NZD_DOMAIN="n5.yoursite.com"
EVO_AUD_DOMAIN="n6.yoursite.com"
```

Each currency has it's own websocket server (on each own port, make sure the nginx setup you change the websocket port accordingly), check the `/websocket` folder.
Run each currency websocket server persistant like following: `pm2 start server.js --name=n1-5 -- --port=8015"

You can set the origin Evolution server in `config/evolution.php`, which should match the original evolution server you feed to the convertUrl.

## Contact
https://t.me/wrccwest

## Usage
You feed any Evolution URL to API route `/api/convertUrl`, for example: 
`http://localhost/api/convertUrl?currency=USD&url=https://originalsessionurl.evo-games.com`


## Nginx Example
```bash
server {
    listen 443 ssl;
    listen 80;
    access_log /dev/null;
    error_log /dev/null;

    ssl_certificate /etc/letsencrypt/live/n1.yoursite.com/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/n1.yoursite.com/privkey.pem;
    server_name n1.yoursite.com;
    charset utf-8;
    index index.php;
    root /var/www/evolution/public/;

  location / {
      add_header 'Access-Control-Allow-Origin' 'https://n1.yoursite.com' always;
      add_header 'Access-Control-Allow-Credentials' 'true' always;
      add_header 'Access-Control-Allow-Methods' 'GET, POST, OPTIONS' always;
      add_header 'Access-Control-Allow-Headers' 'DNT,User-Agent,X-Requested-With,If-Modified-Since,Content-Type,Range' always;
      add_header 'Access-Control-Expose-Headers' 'Content-Length,Content-Range' always;
      try_files $uri $uri/ /index.php$is_args$args;
    }

    # Websocket Reverse Proxy
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
```

## multi websocket nginx Exmaple
```
upstream websocket21 {
  server localhost:5011;
  server localhost:5012;
  server localhost:5013;
}
server {
    listen 443 ssl;
    listen 80;
    access_log /dev/null;
    error_log /dev/null;

    ssl_certificate /etc/letsencrypt/live/n1.scattersdk.com/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/n1.scattersdk.com/privkey.pem;
    server_name n1.scattersdk.com;
    charset utf-8;
    index index.php;
    root /var/www/evolution-client-master/public/;

  location / {
      #add_header 'Access-Control-Allow-Origin' 'https://scattersdk.com' always;
      add_header 'Access-Control-Allow-Credentials' 'true' always;
      add_header 'Access-Control-Allow-Methods' 'GET, POST, OPTIONS' always;
      add_header 'Access-Control-Allow-Headers' 'DNT,User-Agent,X-Requested-With,If-Modified-Since,Content-Type,Range' always;
      add_header 'Access-Control-Expose-Headers' 'Content-Length,Content-Range' always;
      try_files $uri $uri/ /index.php$is_args$args;
    }

    # Websocket Reverse Proxy
    location /public/ {
       proxy_pass http://websocket21;
       proxy_http_version 1.1;
       proxy_set_header Upgrade $http_upgrade;
       proxy_set_header Connection "Upgrade";
       proxy_set_header Host $host;
    }

    location ~ \.php$ {
            fastcgi_split_path_info ^(.+\.php)(/.+)$;
            fastcgi_pass unix:/run/php/php8.3-fpm.sock;
            #fascgi_index index.php;
            include fastcgi.conf;
    }
}
```

## Helpers
### Permission Helper
```bash
sudo chown -R $USER:www-data .
sudo find . -type f -exec chmod 664 {} \;
sudo find . -type d -exec chmod 775 {} \;
sudo find . -type d -exec chmod g+s {} \;
sudo chgrp -R www-data storage bootstrap/cache
sudo chmod -R ug+rwx storage bootstrap/cache
```
