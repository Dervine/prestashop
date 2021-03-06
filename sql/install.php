<?php
/**
 * Sendy Api Module installation
 *
 *  @author    Griffin M
 *  @copyright Sendy
 */

$sql = array();

/*
	create table that contains
	sendy_api_id,
	sendy_api_key,
	sendy_api_username
	from
	building
	floor
	other_details
*/
$sql[] = 'CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'sendy_api` (
        `sendy_api_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `sendy_api_key` varchar(200) NOT NULL,
	    `sendy_api_username` varchar(200) NOT NULL,
	    `from` varchar(200) NOT NULL,
	    `building` varchar(200) DEFAULT NULL,
	    `floor` varchar(200) DEFAULT NULL,
	    `other_details` varchar(200) DEFAULT NULL,
        PRIMARY KEY  (`sendy_api_id`)
) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;';

foreach ($sql as $query) {
    if (!Db::getInstance()->execute($query)) return false;
}
