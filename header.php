AddDefaultCharset UTF-8

RewriteRule ^index?$ index.php [NC, L]

RewriteRule ^404?$ 404.php [NC, L]

ErrorDocument 404/404.php
