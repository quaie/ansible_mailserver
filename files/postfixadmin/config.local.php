<?php
$CONF['database_type'] = 'mysqli';
$CONF['database_host'] = '{{ postfix_mysql_host }}';
$CONF['database_user'] = '{{ postfix_mysql_user }}';
$CONF['database_password'] = '{{ postfix_mysql_pass }}';
$CONF['database_name'] = '{{ postfix_db_name }}';
$CONF['configured'] = true;
?>
