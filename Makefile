build:
	wget http://test3.elasticemail.com/public/client/php -O ./ElasticEmailClient.php
	rm -rf ./src/*
	php ./tools/file-splitter.php ./ElasticEmailClient.php ./src
	rm ./ElasticEmailClient.php