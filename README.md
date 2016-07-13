# WordPress Boilerplate Theme
Boilerplate Theme and components

## System Requirements
- [Php](http://php.net/downloads.php)
- [MySQL](http://dev.mysql.com/downloads/)
- [Apache](http://httpd.apache.org/download.cgi)
- [WordPress (v 4.3.1)](https://wordpress.org/wordpress-4.3.1.zip)
- [Nodejs](https://nodejs.org/download/)
- [npm (Node Package Manager)](https://nodejs.org/download/)

## Installing Node dependencies
```
$ npm install -g grunt-cli
$ npm install
```

## Grunt tasks

#### Global tasks

* General development process
```
$ grunt dev
```
* Compiling project
```
$ grunt build
```

  
#### Individual tasks
* Watch (sass -> css, js, php & images) + livereload
```
$ grunt watch
```
* Compiling sass
```
$ grunt sass
```
* Validating styles
```
$ grunt csslint
```
* Uglify and minify JavaScript
```
$ grunt uglify
```
* Validating JavScript
```
$ grunt jshint
```

## Search and replace
- `diegoteliz_wp` for functions
- `Diego Teliz WP Boilerplate` for Theme Name
- `http://diegoteliz.com` for Theme URI and Author URI
- `WordPress boilerplate theme to start new projects` for Description
- `Diego Teliz` for Author