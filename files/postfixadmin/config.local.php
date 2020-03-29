<?php
$CONF['database_type'] = 'mysqli';
$CONF['database_host'] = '{{ postfix_mysql_host }}';
$CONF['database_user'] = '{{ postfix_mysql_user }}';
$CONF['database_password'] = '{{ postfix_mysql_password }}';
$CONF['database_name'] = '{{ postfix_mysql_dbname }}';
$CONF['configured'] = true;
?>
