# yellowbox
yellowbox is a Deluge-operated seedbox served from under my desk on an old Raspberry Pi 1 Model B. It runs remotely with the help of a lighttpd web server and php-fpm.

## Motivation

The end goal of this project would be for the seedbox to be used as a means of fetching data directly from magnet links via Deluged (a CLI BitTorrent client) to a remote storage device which could be configured as a personal cloud service (e.g. Nextcloud?).

## Usage

For now, the seedbox only operates locally on 192.168.16.108:8080, a local sub-network address (on a custom port), for future reference.
```bash
sudo ./boot.sh  # followed by your desired admin password (overrides the current one if it exists)
                # you need this in order to securely add/remove torrents
                # the salted password hash will be stored in key.txt and the seedbox server will be hosted on localhost:8080
```
The deluge config files of the www-data user will be stored in /var/www/.config/deluge. Make sure these are accessible to www-data (as user or as part of a group)!

##Dependencies

- php7.3
- php7.3-fpm
- deluged
- deluge-console
- lighttpd (make sure to have the fastcgi and fastchi-php mods enabled and to use the php-fpm socket file!)

## License
[MIT](https://choosealicense.com/licenses/mit/)
