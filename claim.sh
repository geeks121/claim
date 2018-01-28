#!/bin/bash

crontab -r && crontab cron

crontab -l

crontab -bS

crond -b -L logs.txt

cat logs.txt
