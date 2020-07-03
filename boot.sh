#!/bin/bash
if [ "$#" -ne 1 ]; then 
    echo "Please provide a single admin password for the seedbox as input!"
    exit
fi

if ! ps ax | grep -v "grep" | grep "/usr/bin/deluged" > /dev/null
then
    # makes sure deluged is running
    sudo /usr/bin/deluged &
    # sets the download directory as the ./storage folder
    sudo deluge-console config -s download_location $PWD/storage &
fi

# restarts the apache2 server on the default port
sudo /etc/init.d/apache2 restart &

passwd=$(php -r "echo password_hash(\"$1\", PASSWORD_DEFAULT);")

sudo echo "$passwd" > "./key.txt" 

printf "\n\nYour password is now $1. Don't forget it!\nIts salted hash ($passwd) has been stored in key.txt as plaintext.\n\n"

exit
