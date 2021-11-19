#!/bin/sh -e

for f in *.php; do
	php --syntax-check "$f"
done
