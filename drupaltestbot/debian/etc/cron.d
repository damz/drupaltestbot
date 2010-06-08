*/1 * * * *     www-data   [ -x /usr/bin/drush ] && /usr/bin/drush -l `/bin/hostname` -r /var/lib/drupaltestbot core-cron
