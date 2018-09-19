<?php

/*

Configurer dans php.ini soit :
 *  display_errors = on|off
 *  errors_reporting = on | off
 *  log_errors = on | off
 *
 *
 * Production
 *   - errors_reporting = E_ALL
 *   - display_error = off
 *   - errors_log = on
 * En dev
 *   - errors_reporting = E_ALL & ~E_NOTICE
 */
error_reporting($level);
ini_set($varname, $newvalue);
error_log($message, $message_type);
