#!/data/data/com.termux/files/usr/bin/bash

echo "================================="
echo "  Starting Business Website 🚀"
echo "================================="

cd ~/storage/shared/BusinessWebsite

# stop old server if running
pkill php

echo "Old server stopped (if any)"

# start server
php -S 127.0.0.1:8000
