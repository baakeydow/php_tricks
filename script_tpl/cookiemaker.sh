curl -c test.txt 'http://google.com/php_tricks/cookie_crisp.php?action=set&name=state&value=up'
curl -b test.txt 'http://google.com/php_tricks/cookie_crisp.php?action=get&name=state'
curl -c test.txt 'http://google.com/php_tricks/cookie_crisp.php?action=del&name=state'
