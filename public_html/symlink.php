<?php
if (!windows_os())
{
	return symlink(
		"/home/vol15_8/epizy.com/epiz_25831512/htdocs/storage/app/public",
		"/home/vol15_8/epizy.com/epiz_25831512/htdocs/public_html/storage"
	);
}
$mode = $this->isDirectory("/home/vol15_8/epizy.com/epiz_25831512/htdocs/storage/app/public") ? "J" : "H";
exec("mklink /{$mode} ".escapeshellarg("/home/vol15_8/epizy.com/epiz_25831512/htdocs/public_html/storage")." ".escapeshellarg("/home/vol15_8/epizy.com/epiz_25831512/htdocs/storage/app/public"))