<?php

return array(
	'db_host' => '127.0.0.1', /* default: localhost */
	'db_name' => 'cookbook',
	'db_user' => 'root',
	'db_pwd' => 'ls55ftc',
	/* store */
	'store_name' => 'arc_tests',
	/* network */
	'proxy_host' => '192.168.1.1',
	'proxy_port' => 80,
	/* parsers */
	'bnode_prefix' => 'bn',
	/* sem html extraction */
	'sem_html_formats' => 'rdfa microformats',
	/* endpoint */
  	'endpoint_features' => array(
    	'select', 'construct', 'ask', 'describe', 
    	'load', 'insert', 'delete', 
    	'dump' /* dump is a special command for streaming SPOG export */
  	),
  	'endpoint_timeout' => 60, /* not implemented in ARC2 preview */
  	'endpoint_read_key' => '', /* optional */
  	'endpoint_write_key' => '', /* optional, but without one, everyone can write! */
  	'endpoint_max_limit' => 250 /* optional */
);

?>