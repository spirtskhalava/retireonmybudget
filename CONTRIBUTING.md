# Contributing to <PROJECT>
 
## Installation
 
For local development, the easiest way to get started is via [Laravel Homestead](https://laravel.com/docs/master/homestead), the official [Vagrant](https://www.vagrantup.com/) box for Laravel development.
 
The Homestead virtual machine contains all of the necessary tools for building and running the application. To get started, begin by cloning this Git repository onto your local machine, then run the following commands:
 
```sh
# Install Composer dependencies.
$ composer install
 
# Prepare the repository for Laravel Homestead.

# macOS / Linux...
$ php vendor/bin/homestead make

# Windows...
$ vendor\\bin\\homestead make
 
# Provision the Vagrant VM.
$ vagrant up

#If error like this happense: "Check your Homestead.yaml (or Homestead.json) file, the path to your private key does not exist."
#Delete authorize and keys (it should be the first lines, 5 to 7, before folder line) from file Homestead.yaml. 
#The lines are as follows:

#authorize: ~/.ssh/id_rsa.pub
#keys:
#    - ~/.ssh/id_rsa

#Then run again
$ vagrant up
 
# Finally, SSH into the Vagrant box to work with the app:
$ vagrant ssh