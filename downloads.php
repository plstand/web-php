<?php
require_once 'prepend.inc';

$SIDEBAR_DATA = '
<h3>Binaries for other systems</h3>
<p>
We do not distribute UNIX/Linux binaries. Most Linux
distributions come with PHP these days, so if you do
not want to compile your own, go to your distribution\'s
download site. Binaries available on external servers:
<ul>
<li>' . make_link("http://www.entropy.ch/software/macosx/php/", "Mac OS X") . '</li>
<li>' . make_link("http://www.ecs.soton.ac.uk/~ajw498/internet/php/", "RISC OS (with source)") . '</li>
</ul>
</p>

<h3>Other Downloads</h3>
<p>
For downloadable manual packages, go to the '.
make_link("download-docs.php", "documentation download").'
page
</p>

<p>
Get some '.
make_link("download-logos.php", "PHP logos").'
for your site, and some PHP icons to use on
your computer
</p>

<p>
To download the latest development version,
see the '.
make_link("anoncvs.php","instructions on using anonymous CVS").'
</p>

<p>'.
make_link("http://www.zend.com/zend/optimizer.php", "Zend Optimizer").'
for PHP 4.0.3 and later is
available on Zend Technologies\' web site
</p>

<p> For '.
make_link("http://gtk.php.net/", "PHP-GTK").'
downloads, please visit our site dedicated
to ' . make_link("http://gtk.php.net/", "PHP-GTK").'.
</p>
';

commonHeader("Downloads");
$server = $SERVER_NAME;
?>

<h1>Latest version of PHP</h1>

<p>
Before you download, make sure you're using a mirror close to you. You can
change mirrors at the bottom of the page.
</p>

<h2>Complete Source Code</h2>
<ul>
  <li><?php download_link("php-4.1.1.tar.gz", "PHP 4.1.1"); ?> - 26 December 2001</li>
</ul>

<h2>Windows Binaries</h2>
All Windows binaries can be used on Windows 95/98/Me and on Windows NT/2000/XP.
The Windows binaries for PHP 4.1.1 will be available later.
<ul>
  <li><?php download_link("php-4.1.1-Win32.zip", "PHP 4.1.1 zip package"); ?> - 03 January 2002<br>
  (CGI binary plus server API versions for Apache, AOLserver, ISAPI and NSAPI. MySQL
  support built-in, many extensions included, packaged as zip)</li>
  <li><?php download_link("php-4.1.1-installer.exe", "PHP 4.1.1 installer"); ?> - 03 January 2002<br>
  (CGI only, MySQL support built-in, packaged as Windows installer to install and
  configure PHP, and automatically configure IIS, PWS and Xitami, with manual
  configuration for other servers. N.B. no external extensions included)</li>
<!--
  <li>Win32 binaries will be posted soon!</li>
-->
<!--
  <li>Java binaries will be posted soon!</li>
  <li>Servlet Server API:
    <a href="http://www.php.net/do_download.php?download_file=php-4.0.2-Win32-servlet-jdk118.zip&source_site=<?php echo $server; ?>">jdk1.1.8</a>,
    <a href="http://www.php.net/do_download.php?download_file=php-4.0.2-Win32-servlet-jdk122.zip&source_site=<?php echo $server; ?>">jdk1.2.2</a>,
    <a href="http://www.php.net/do_download.php?download_file=php-4.0.2-Win32-servlet-jdk13.zip&source_site=<?php echo $server; ?>">jdk1.3</a>
  <li>Java extensions:
    <a href="http://www.php.net/do_download.php?download_file=php-4.0.2-Win32-java-jdk118.zip&source_site=<?php echo $server; ?>">jdk1.1.8</a>,
    <a href="http://www.php.net/do_download.php?download_file=php-4.0.2-Win32-java-jdk122.zip&source_site=<?php echo $server; ?>">jdk1.2.2</a>,
    <a href="http://www.php.net/do_download.php?download_file=php-4.0.2-Win32-java-jdk13.zip&source_site=<?php echo $server; ?>">jdk1.3</a>
-->
</ul>

<h2>Patches</h2>
<ul>
  <li><?php download_link("php-4.0.6-memlimit.diff.gz", "PHP 4.0.6 memory limit fix"); ?> - 1 July 2001<br>
  (This patch fixes a bug in the 4.0.6 memory limit option. This is only needed when configuring
  PHP with --enable-memory-limit). If you have problems applying the patch try using GNU patch.</li>
</ul>

<?php echo hdelim(); ?>

<h1>Older Versions of PHP</h1>

<ul>
  <li>PHP 4.1.0
    <ul>
      <li><?php download_link("php-4.1.0.tar.gz", "Source Code"); ?></li>
      <li><?php download_link("php-4.1.0-Win32.zip", "PHP 4.1.0 zip package"); ?></li>
      <li><?php download_link("php410-installer.exe", "PHP 4.1.0 installer"); ?></li>
    </ul><br>
  </li>
  <li>PHP 4.0.6
    <ul>
      <li><?php download_link("php-4.0.6.tar.gz", "Source Code"); ?></li>
      <li><?php download_link("php-4.0.6-Win32.zip", "Windows Binary (zip)"); ?></li>
    </ul><br>
  </li>
  <li>PHP 4.0.5
    <ul>
      <li><?php download_link("php-4.0.5.tar.gz", "Source Code"); ?></li>
      <li><?php download_link("php-4.0.5-Win32.zip", "Windows Binary (zip)"); ?></li>
    </ul><br>
  </li>
  <li>PHP 4.0.4pl1
    <ul>
      <li><?php download_link("php-4.0.4pl1.tar.gz", "Source Code"); ?></li>
      <li><?php download_link("php-4.0.4pl1-Win32.zip", "Windows Binary (zip)"); ?></li>
    </ul><br>
  </li>
  <li>PHP 3.0.x (latest)
    <ul>
      <li><?php download_link("php-3.0.18.tar.gz", "PHP 3.0.18 Source Code"); ?></li>
      <li><?php download_link("php-3.0.17-win32.zip", "PHP 3.0.17 Windows Binary (zip)"); ?></li>
    </ul><br>
  </li>
  <li><a href="ftp://ftp.nerosworld.com/pub/php/dist">PHP/FI 2.0</a> Source and related files</li>
</ul>

<p>
<i>Older releases are listed for archeological purposes only. They are no longer supported.</i>
</p>

<?php commonFooter(); ?>
