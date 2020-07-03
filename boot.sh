#!/bin/bash

#    in order for this to work, make sure www-data has access to the deluge config files in the relevant home folder!
#    (you can do this by adding yourself into the www-data group, changing the group of the home folder to www-data, 
#    and changing perms if necessary)

if [ "$#" -ne 1 ]; then 
    echo "Please provide a single admin password for the seedbox as input!"
    exit
fi

if ! ps ax | grep -v "grep" | grep "/usr/bin/deluged" > /dev/null
then
    # makes sure deluged is running
    sudo /usr/bin/deluged &
fi

sudo /etc/init.d/lighttpd restart
# (re)start the server

passwd=$(php -r "echo password_hash(\"$1\", PASSWORD_DEFAULT);")

sudo echo "$passwd" > "./key.txt" 

printf "\n\nYour password is now $1. Don't forget it!\nIts salted hash ($passwd) has been stored in key.txt as plaintext.\n\n"

sudo chgrp -R www-data /var/www/.config
sudo chmod -R g+rxs /var/www/.config
# make sure the .config file is accessible to deluge

exit
