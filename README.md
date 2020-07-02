# yellowbox
yellowbox is a Deluge-operated seedbox served from under my desk on an old Raspberry Pi 1 Model B. It runs remotely with the help of the built-in php web server. (TODO: migrate from the built-in web server to apache2)

## Motivation

The end goal of this project would be for the seedbox to be used as a means of fetching data directly from magnet links via Deluged (a CLI BitTorrent client) to a remote storage device which could be configured as a personal cloud service (e.g. Nextcloud?).

## Usage

For now, the seedbox only operates locally on 192.168.16.108:1777, a local sub-network address (on a custom port), for future reference.
```bash
sudo ./boot.sh # followed by your desired admin password (which you need in order to add/remove torrents) (overrides)
# the salted password hash will be stored in key.txt and the seedbox server will be hosted on localhost:1777
```

## Dependencies

- php7.3+
- deluged
- deluge-console

## License
[MIT](https://choosealicense.com/licenses/mit/)
