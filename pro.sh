#!/data/data/com.termux/files/usr/bin/bash

DIR=~/storage/shared/BusinessWebsite
PORT=8000
URL="http://127.0.0.1:$PORT"

function start_server() {
    echo ""
    echo "🚀 Starting PHP Server..."
    cd $DIR
    pkill php 2>/dev/null
    php -S 127.0.0.1:$PORT &
    echo "✅ Server Started at $URL"
    echo "🌐 Opening browser..."
    termux-open-url $URL 2>/dev/null
}

function stop_server() {
    echo ""
    echo "🛑 Stopping PHP Server..."
    pkill php 2>/dev/null
    echo "✅ Server Stopped"
}

function restart_server() {
    stop_server
    sleep 1
    start_server
}

clear

echo "================================="
echo "   BUSINESS WEBSITE LAUNCHER"
echo "================================="
echo "1) 🚀 Start Server"
echo "2) 🛑 Stop Server"
echo "3) 🔄 Restart Server"
echo "4) 🌐 Open Browser"
echo "5) ❌ Exit"
echo "================================="
read -p "Choose option: " opt

case $opt in
1) start_server ;;
2) stop_server ;;
3) restart_server ;;
4) termux-open-url $URL ;;
5) exit ;;
*) echo "❌ Invalid option" ;;

