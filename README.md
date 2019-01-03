# AutoVersion
Never worry about clients using cached versions of files.

  This class is based on a community discussion from stackoverflow.com. View the
  thread at:
  https://stackoverflow.com/questions/118884/how-to-force-browser-to-reload-cached-css-js-files
 
  Use of this class requires the following modification to .htaccess
 
  RewriteEngine On
  RewriteRule ^(.*)\.[\d]{10}\.(css|js)$ $1.$2 [L] 
 
  Anywhere you call a .css or .js file, wrap it with a call to the static version() function.
  This has the same effect of versioning without having to change references 
  to the files every time a file is updated. Clients will never use cached versions
  of files that have been changed on the server.
  
  Example...given this call in the layout:
  
  Zend example
  $this->headScript()->prependFile($this->basePath() . AutoVersion::version('/js/application.js'))

  Plain html example
  <script type="text/javascript" src="<?php echo AutoVersion::version('/js/application.js') ?>"></script>

  
  The client sees this:

  <script type="text/javascript" src="/js/application.1509984994.js"></script>

