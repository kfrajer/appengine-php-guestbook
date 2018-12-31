

Getting started with App Engine PHP
https://cloud.google.com/appengine/docs/standard/php/quickstart#test_the_application

Run a PHP app in the local environment (cloud.google >> console) by typing 
  $> dev_appserver.py app.yaml --php_executable_path /usr/bin/php-cgi

and then previewing page at port 8080 using the link provided by the console preview app.


To deploy application to the cloud, use
  $> gcloud app deploy
which creates a new instance. To update a previous uploaded instance use instead
  $> gcloud app deploy -v [version ID]

This deployed instanced can be accessed via: http://[project-id].appspot.com
You can target an isntance via: http://[version-id]-dot-[project-id].appspot.com


To access each instance, you can try this (done Nov 5,2018):

[Routing %]
[60%] http://20181105t105616-dot-odin-watcher.appspot.com
[20%] http://20181105t100040-dot-odin-watcher.appspot.com
[20%] http://20181102t164029-dot-odin-watcher.appspot.com

Script to test (or bombard) site can be found at
  $> cd /etc/cron.other/basic.sh
It can be run doing: 
  $> for i in `seq 1 10`; do sudo /bin/bash basic.sh; done

CM
