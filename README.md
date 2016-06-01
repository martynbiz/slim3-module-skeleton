# Slim Framework 3 Skeleton Application

Use this skeleton application to quickly setup and start working on a new Slim Framework 3 application with modules. This application uses the latest Slim 3 with the PHP-View template renderer. It also uses the Monolog logger.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

## Modules

This skeleton application has been setup with Slim 3 modules https://github.com/martynbiz/slim3-module

## Install the Application

Run this command from the directory in which you want to install your new Slim Framework application with modules.

    php composer.phar create-project martynbiz/slim3-module-skeleton [my-app-name]

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

That's it! Now go build something cool.
