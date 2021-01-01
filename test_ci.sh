#!/bin/sh

# Based on racktables/tests/express_pre.sh.
printTestResult()
{
	printf '%-25s : %s\n' "${1:?}" "${2:?}"
}

testPHPSyntaxOnly()
{
	if php --syntax-check "${1:?}" >/dev/null 2>&1; then
		printTestResult "$1" 'OK (syntax only)'
		return 0
	else
		printTestResult "$1" 'ERROR: PHP syntax check failed'
		return 1
	fi
}

ret=0
for f in *.php; do
	testPHPSyntaxOnly "$f" || ret=1
done
exit $ret
