# yellowbox
yellowbox is a Deluge-operated seedbox served from under my desk on an old Raspberry Pi 1 Model B. It runs remotely under the guise of an Apache2 (Debian) Web Server.

## Motivation

The end goal of this project would be for the seedbox to be used as a means of fetching data directly from magnet links via Deluged (a CLI BitTorrent client) to a remote storage device which could be configured as a personal cloud service (e.g. Nextcloud?).

## Usage

For now, the seedbox only operates locally on 192.168.16.108, a sub-network. (for future reference)
```bash
service apache2 start # is how you start an apache server
```

## License
[MIT](https://choosealicense.com/licenses/mit/)
