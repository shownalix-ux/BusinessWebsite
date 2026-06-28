#!/data/data/com.termux/files/usr/bin/bash

DIR="$HOME/storage/shared/BusinessWebsite"
PORT=8000
HOST="127.0.0.1"
URL="http://$HOST:$PORT"

start_server() {
    echo ""
    echo "🚀 Starting PHP Server..."
    cd "$DIR" || {
        echo "❌ Project folder not found!"
        exit 1
    }

    pkill -f "php -S" 2>/dev/null
    php -S $HOST:$PORT >/dev/null 2>&1 &
    sleep 2

    echo ""
    echo "================================="
    echo "✅ PHP Server Running"
    echo "📂 Project : $DIR"
    echo "🌐 URL     : $URL"
    echo "================================="

    termux-open-url "$URL" 2>/dev/null
}

stop_server() {
    echo "🛑 Stopping PHP Server..."
    pkill -f "php -S" 2>/dev/null
    echo "✅ Server Stopped"
}

restart_server() {
    stop_server
    sleep 1
    start_server
}

while true; do
clear
echo "=================================="
echo "     BUSINESS WEBSITE LAUNCHER"
echo "=================================="
echo "1) 🚀 Start Server"
echo "2) 🛑 Stop Server"
echo "3) 🔄 Restart Server"
echo "4) 🌐 Open Browser"
echo "5) 📂 Open Project Folder"
echo "6) ❌ Exit"
echo "=================================="

read -p "Choose option: " opt

case $opt in
1) start_server ;;
2) stop_server ;;
3) restart_server ;;
4) termux-open-url "$URL" ;;
5) termux-open "$DIR" ;;
6) exit ;;
*) echo "❌ Invalid Option"; sleep 1 ;;
esac

echo ""
read -p "Press Enter to continue..."
done
