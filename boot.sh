#!/bin/bash

if ! ps ax | grep -v "grep" | grep "/usr/bin/deluged" > /dev/null
then
    # makes sure deluged is running
    /usr/bin/deluged &
fi

if ! ps ax | grep -v "grep" | grep "php -S localhost:1777" > /dev/null 
then
    # makes sure php server is running on port 1777
    sudo php -S localhost:1777 &
fi

exit