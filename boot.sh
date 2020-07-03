#!/bin/bash
if [ "$#" -ne 1 ]; then 
    echo "Please provide a single admin password for the seedbox as input!"
    exit
fi

if ! ps ax | grep -v "grep" | grep "/usr/bin/deluged" > /dev/null
then
    # makes sure deluged is running
    /usr/bin/deluged &
    # sets the download directory as the ./storage folder
    deluge-console config -s download_location $PWD/storage &
fi

if ! ps ax | grep -v "grep" | grep "php -S localhost:17772" > /dev/null 
then
    # makes sure php server is running on port 17772
    sudo php -S localhost:17772 &
fi

passwd=$(php -r "echo password_hash(\"$1\", PASSWORD_DEFAULT);")

echo "$passwd" > "./key.txt" 
echo "Your password is now $1. Don't forget it!"
echo "Its salted hash ($passwd) has been stored in key.txt as plaintext."

exit
