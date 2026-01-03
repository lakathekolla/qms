<?php
// compat/mysql.php
// Minimal mysql_* compatibility layer for PHP 8+ using mysqli.
// This is ONLY for running an archived legacy project.

if (!defined('MYSQL_ASSOC')) define('MYSQL_ASSOC', MYSQLI_ASSOC);
if (!defined('MYSQL_NUM'))   define('MYSQL_NUM', MYSQLI_NUM);
if (!defined('MYSQL_BOTH'))  define('MYSQL_BOTH', MYSQLI_BOTH);

$GLOBALS['__mysql_link'] = null;

function mysql_connect($server = null, $username = null, $password = null)
{
    $link = mysqli_connect($server, $username, $password);
    if (!$link) {
        die("Connection Fail: " . mysqli_connect_error());
    }
    $GLOBALS['__mysql_link'] = $link;

    // Match older behaviour / avoid weird encoding issues
    mysqli_set_charset($link, 'utf8');

    return $link;
}

function mysql_select_db($database_name, $link_identifier = null)
{
    $link = $link_identifier ?: $GLOBALS['__mysql_link'];
    if (!$link) return false;

    return mysqli_select_db($link, $database_name);
}

function mysql_query($query, $link_identifier = null)
{
    $link = $link_identifier ?: $GLOBALS['__mysql_link'];
    if (!$link) {
        die("No DB connection");
    }

    return mysqli_query($link, $query);
}

function mysql_fetch_array($result, $result_type = MYSQL_BOTH)
{
    return mysqli_fetch_array($result, $result_type);
}

function mysql_close($link_identifier = null)
{
    $link = $link_identifier ?: $GLOBALS['__mysql_link'];
    if (!$link) return true;

    return mysqli_close($link);
}
