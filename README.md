# Phroses [![Build Status](https://travis-ci.org/cythral/phroses.svg?branch=master)](https://travis-ci.org/cythral/phroses)
Phroses is a multi-site content management system and dispatcher.  It is currently still in early development, with many initial features and systems still being implemented and ironed out. Phroses is easy to use, and fully customizable with customizable themes using [phyrex](https://github.com/cythral/phyrex) templating, along with plugins using [listen](https://github.com/cythral/listen).  Phroses has only been tested on apache, support for nginx is coming later on. 

## Installation
### Recommended Method
The recommended way to install phroses is to download the tarball of the latest version from http://api.phroses.com/latest and extract it. Then set apache's DocumentRoot to the directory where you extracted the tarball.  Visit a URL that is pointed to the directory and complete the onsite setup. The tarball has a compiled phar archive instead of the source files.


### From Source
Phroses can be installed from source by simply cloning the repository and setting apache's DocumentRoot to the cloned one. Create a file named **.developer** in the cloned directory. Visit a URL you pointed to the directory and complete the onsite setup.  If you want to build the phar and use that instead, run the following command to build and delete the **.developer** file:

```bash
php build.php && rm .developer
```

## Updating
You can update Phroses to new versions by visiting /admin/update on any configured website to do updates.  Please note that this does not update source files if you installed from source.  If you want to update the source files, you will have to clone the repository again, cd into the **src** folder and do:

```bash
php startup.php update
```
This command will update the database schema if it has changed from previous versions.

## Usage
To edit, create, or delete a page, just go to the desired URL and use the buttons that appear at the bottom.  Pages can also be managed at /admin/pages.  Site creation is just as easy, just go to the URL and Phroses will ask you to create it.  Manage site credentials at /admin/creds.  Change the site theme and see view count totals on /admin.  

### Plugins
To be documented

### Themes
To be documented