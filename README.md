# yellowbox
yellowbox is a Deluge-operated seedbox served from under my desk on an old Raspberry Pi 1 Model B. It runs remotely with the help of a lighttpd web server and php-fpm.

## Motivation

The seedbox can be used as a means of fetching data directly from magnet links via Deluged (a CLI BitTorrent client). This can then be stored in the box, and later retrieved via scp through a tcp connection with another device.

## Usage

For now, the seedbox (while self-hosted) has two ports (ssh for transfers and http for the main user interaction) tunneled via [ngrok](ngrok.com).
```bash
sudo ./boot.sh  # followed by your desired admin password (overrides the current one if it exists)
                # you need this in order to securely add/remove torrents
                # the salted password hash will be stored in key.txt and the seedbox server will be hosted on localhost:80
```
The www-data user's deluge .config files will be stored in `/var/www/.config/deluge`.
All downloaded files can be retrieved with `scp -P {port_number} pi@{some_id}.tcp.ngrok.io:~/Downloads/* .`.

## Dependencies

- php7.3
- php7.3-fpm
- deluged
- deluge-console
- lighttpd (make sure to have the fastcgi and fastchi-php mods enabled and to use the php-fpm socket file!)

## License
[MIT](https://choosealicense.com/licenses/mit/)
