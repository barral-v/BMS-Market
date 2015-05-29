#!/usr/bin/env sh
SRC_DIR="`pwd`"
cd "`dirname "$0"`"
cd "../vendor/doctrine/phpcr-odm/bin"
BIN_TARGET="`pwd`/phpcrodm.php"
cd "$SRC_DIR"
"$BIN_TARGET" "$@"
