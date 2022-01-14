# Joomla ads.txt Plugin

# Installation

- install com_adstxt into joomla: https://github.com/derdeka/joomla-extensions/releases/download/com_adstxt%2F0.1.1/com_adstxt.zip
- add the following line to Joomla .htaccess file:

```
RewriteRule ^ads\.txt$ index.php?option=com_adstxt&format=raw [L]
```
