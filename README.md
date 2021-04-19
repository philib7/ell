# Ellyzia
This is a basic wordpress when you want to start a new project with a clean theme.
we user gulp for the assets (css,js,svg to font, png jpg to webp..).

The keyfeatures is :

- Perf
- Simply
- Security

## Getting Started

```
git clone
```

### Prerequisites

- [_WampServer_](https://netix.dl.sourceforge.net/project/wampserver/WampServer%203/WampServer%203.0.0/wampserver3.1.7_x64.exe) - Web development environment

### Installing

For launch the website in local, you need to add a new vhost in windows and wamp.

Windows : C:\Windows\System32\drivers\etc\hosts :

in C:\wamp64\bin\apache\apache2.4.37\conf\extra\httpd-vhosts.conf :

```
<VirtualHost *:80>
  ServerAdmin webmaster@dummy-host.localhost
  DocumentRoot "C:/wamp64/www/<your_project_name>"
  ServerName local.dev.<your_project_name>.fr
  ServerAlias local.dev.<your_project_name>.fr
</VirtualHost>
```

### Wp-Config
#### BDD
```
HOST :
USER :
PWD :
```

#### BackOffice
```
HOST :
USER :
PWD :
```

#### Site URL
/!\ add into top file /!\
```
define('WP_SITEURL','http://local.dev.<your_project_name>.fr');
define('WP_HOME','http://local.dev.<your_project_name>.fr');
define('WP_PLUGIN_URL', 'http://local.dev.<your_project_name>.fr/wp-content/plugins');
define('WP_CONTENT_URL','http://local.dev.<your_project_name>.fr/wp-content');
```

#### HTTPS Admin
/!\ add into top file /!\
In local you need to force false the SSL
```
define('FORCE_SSL_ADMIN', false);
```

### .htaccess
Create an .htaccess file at the root folder and copy/paste the code below, ( this is usefull for the permalinks to work ), this file will be auto generated after the first run ( keep it writable )

```
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /
    RewriteRule ^index\.php$ - [L]
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule . /index.php [L]
</IfModule>
```

## Build Front

Wp from scratch BuildFrontAsset

Generate minified css, uglified Js and crunch images with gulp (https://gulpjs.com/)

First, install the npm parckages required

```
npm install
```

if necessary, install gulp globally ( you might need to have root access rights )

```
npm install -g gulp
```

Build command for prod

```
npm run build
```

Build command for dev : watcher on CSS and JS files with live minification ( don't forget to refresh your browser to check the css and/or js changes you did )

```
npm run dev
```

Type : "npm run dev" to start the dev task.
The dev task will keep watching css and js files chages inside the "src" folder of the theme. Once code is changed, the build of the css and js minified is launch in live. Please refrech your browser to see the changes.

## Built With
- [WordPress](https://codex.wordpress.org/)

## Versioning
We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags).

## Contributing
For contributing into <your_project_name> you need to read `CONTRIBUTING.md`
