#!/bin/sh

ret=0
for f in *.php; do
	php --syntax-check "$f" || ret=1
done
exit $ret
