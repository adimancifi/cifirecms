# CiFireCMS - Gratis Rasa Premium
CiFireCMS adalah platform CMS open source gratis Indonesia dibuat menggunakan framework CodeIgniter3 dengan konsep yang menarik dan mudah digunakan.


## Minimum System Requirements
```

### Server Requirement
+--------------+-----------------+
|  System      |  Version        |
+--------------+-----------------+
|  Web server  |  Apache 2.4.x   |
|  PHP         |  5.6.x - 7.3.x  |
|  MySQL       |  5.7.x - 8.x    |
|  MariaDB     |  10.3.x         |
+--------------+-----------------+
```


### PHP Extension
```
+--------------+----------+
|  Extension   |  Config  |
+--------------+----------+
|  pdo_mysql   |  ON      |
|  pdo_sqlite  |  ON      |
|  pdo_sqlite  |  ON      |
|  json        |  ON      |
|  fileinfo    |  ON      |
|  intl        |  ON      |
|  gd2         |  ON      |
|  mbstring    |  ON      |
+--------------+----------+
```


## Permission
Ubah user permission folder dan file berikut menjadi ``0777``.
```
cifirecms
├── app/
│   ├── cache  -->  777
│   └── config
│   │   └── routes
│   │       └── slug_routes.php  -->  777
│   ├── controllers  -->  777 (semua folder dan file)
│   ├── language  -->  777 (semua folder dan file)
│   ├── logs  -->  777
│   ├── models  -->  777 (semua folder dan file)
│   └── views
│       ├── mod  -->  777 (semua folder dan file)
│       ├── themes  -->  777 (semua folder dan file)
│       └── meta_social.php  -->  777
└── public  -->  0777 (semua folder dan file)
```


## .htaccess
Standard **.htaccess** configuration.
```
RewriteEngine On
RewriteCond $1 !^(index\.php|resources|robots\.txt)
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L,QSA]
```

Untuk menentukan web anda di akses dengan alamat **http** atau **https** silahkan ubah konfigurasi file **.htaccess** dan tambahkan kode berikut di bawah baris kode ``RewriteEngine On``.


#### Redirect HTTP to HTTPS

```
# non-www to www.
RewriteCond %{HTTPS} off [OR]
RewriteCond %{HTTP_HOST} !^www\. [NC]
RewriteCond %{HTTP_HOST} ^(?:www\.)?(.+)$ [NC]
RewriteRule ^ https://www.%1%{REQUEST_URI} [L,NE,R=301]

# www to non-www.
RewriteCond %{HTTPS} off [OR]
RewriteCond %{HTTP_HOST} ^www\. [NC]
RewriteCond %{HTTP_HOST} ^(?:www\.)?(.+)$ [NC]
RewriteRule ^ https://%1%{REQUEST_URI} [L,NE,R=301]
```


#### Redirect HTTPS to HTTP
```
# non-www to www.
RewriteCond %{HTTPS} on [OR]
RewriteCond %{HTTP_HOST} !^www\. [NC]
RewriteCond %{HTTP_HOST} ^(?:www\.)?(.+)$ [NC]
RewriteRule ^ http://www.%1%{REQUEST_URI} [L,NE,R=301]

# www to non-www.
RewriteCond %{HTTPS} on [OR]
RewriteCond %{HTTP_HOST} ^www\. [NC]
RewriteCond %{HTTP_HOST} ^(?:www\.)?(.+)$ [NC]
RewriteRule ^ http://%1%{REQUEST_URI} [L,NE,R=301]
```


### Environment
Jika web sudah siap di online-kan silahkan ubah kode pada ``.env`` cari code ``CI_ENV=development`` ubah menadi ``CI_ENV=production``


## Admin
* Untuk mengakses halaman administrator kunjungi link ``http://your-web-domain/l-admin``
* Masukan Username dan Password sesuai konfigurasi pada awal instalasi.


## License
CiFireCMS is licensed under the MIT License.