curl -v -c cred_cookie.txt 'http://google.com/index.php'
curl -v -b cred_cookie.txt 'http://google.com/index.php?login=nyt&passwd=nyt&submit=OK'
curl -v -b cred_cookie.txt 'http://google.com/index.php'
curl -v 'http://google.com/index.php'
