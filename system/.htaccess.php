	RewriteEngine On
	RewriteBase /
	
	# Removes index.php from ExpressionEngine URLs
	RewriteCond %{THE_REQUEST} ^GET.*index\.php [NC]
	RewriteCond %{REQUEST_URI} !/system/.* [NC]
	RewriteRule (.*?)index\.php/*(.*) proyecto/$1$2 [R=301,NE,L]
	
	# Directs all EE web requests through the site index file
	RewriteCond %{REQUEST_FILENAME} !-f
	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteRule ^(.*)$ proyecto/index.php/$1 [L]

</IfModule>
