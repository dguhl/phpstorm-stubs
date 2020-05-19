<?php

// Start of Core v.5.3.6-13ubuntu3.2


/**
 * Fatal run-time errors. These indicate errors that can not be
 * recovered from, such as a memory allocation problem.
 * Execution of the script is halted.
 * @link https://php.net/manual/en/errorfunc.constants.php
 */
define ('E_ERROR', 1);

/**
 * Catchable fatal error. It indicates that a probably dangerous error
 * occurred, but did not leave the Engine in an unstable state. If the error
 * is not caught by a user defined handle (see also
 * <b>set_error_handler</b>), the application aborts as it
 * was an <b>E_ERROR</b>.
 * @link https://php.net/manual/en/errorfunc.constants.php
 */
define ('E_RECOVERABLE_ERROR', 4096);

/**
 * Run-time warnings (non-fatal errors). Execution of the script is not
 * halted.
 * @link https://php.net/manual/en/errorfunc.constants.php
 */
define ('E_WARNING', 2);

/**
 * Compile-time parse errors. Parse errors should only be generated by
 * the parser.
 * @link https://php.net/manual/en/errorfunc.constants.php
 */
define ('E_PARSE', 4);

/**
 * Run-time notices. Indicate that the script encountered something that
 * could indicate an error, but could also happen in the normal course of
 * running a script.
 * @link https://php.net/manual/en/errorfunc.constants.php
 */
define ('E_NOTICE', 8);

/**
 * Enable to have PHP suggest changes
 * to your code which will ensure the best interoperability
 * and forward compatibility of your code.
 * @link https://php.net/manual/en/errorfunc.constants.php
 */
define ('E_STRICT', 2048);

/**
 * Run-time notices. Enable this to receive warnings about code
 * that will not work in future versions.
 * @link https://php.net/manual/en/errorfunc.constants.php
 */
define ('E_DEPRECATED', 8192);

/**
 * Fatal errors that occur during PHP's initial startup. This is like an
 * <b>E_ERROR</b>, except it is generated by the core of PHP.
 * @link https://php.net/manual/en/errorfunc.constants.php
 */
define ('E_CORE_ERROR', 16);

/**
 * Warnings (non-fatal errors) that occur during PHP's initial startup.
 * This is like an <b>E_WARNING</b>, except it is generated
 * by the core of PHP.
 * @link https://php.net/manual/en/errorfunc.constants.php
 */
define ('E_CORE_WARNING', 32);

/**
 * Fatal compile-time errors. This is like an <b>E_ERROR</b>,
 * except it is generated by the Zend Scripting Engine.
 * @link https://php.net/manual/en/errorfunc.constants.php
 */
define ('E_COMPILE_ERROR', 64);

/**
 * Compile-time warnings (non-fatal errors). This is like an
 * <b>E_WARNING</b>, except it is generated by the Zend
 * Scripting Engine.
 * @link https://php.net/manual/en/errorfunc.constants.php
 */
define ('E_COMPILE_WARNING', 128);

/**
 * User-generated error message. This is like an
 * <b>E_ERROR</b>, except it is generated in PHP code by
 * using the PHP function <b>trigger_error</b>.
 * @link https://php.net/manual/en/errorfunc.constants.php
 */
define ('E_USER_ERROR', 256);

/**
 * User-generated warning message. This is like an
 * <b>E_WARNING</b>, except it is generated in PHP code by
 * using the PHP function <b>trigger_error</b>.
 * @link https://php.net/manual/en/errorfunc.constants.php
 */
define ('E_USER_WARNING', 512);

/**
 * User-generated notice message. This is like an
 * <b>E_NOTICE</b>, except it is generated in PHP code by
 * using the PHP function <b>trigger_error</b>.
 * @link https://php.net/manual/en/errorfunc.constants.php
 */
define ('E_USER_NOTICE', 1024);

/**
 * User-generated warning message. This is like an
 * <b>E_DEPRECATED</b>, except it is generated in PHP code by
 * using the PHP function <b>trigger_error</b>.
 * @link https://php.net/manual/en/errorfunc.constants.php
 */
define ('E_USER_DEPRECATED', 16384);

/**
 * All errors and warnings, as supported, except of level
 * <b>E_STRICT</b> prior to PHP 5.4.0.
 * Value of <b>E_ALL</b> is 32767 since PHP 5.4.x,
 * 30719 in PHP 5.3.x, 6143 in PHP 5.2.x, 2047 previously
 * @link https://php.net/manual/en/errorfunc.constants.php
 */
define ('E_ALL', 32767);
define ('DEBUG_BACKTRACE_PROVIDE_OBJECT', 1);
define ('DEBUG_BACKTRACE_IGNORE_ARGS', 2);
define ('S_MEMORY', 1);
define ('S_VARS', 4);
define ('S_FILES', 8);
define ('S_INCLUDE', 16);
define ('S_SQL', 32);
define ('S_EXECUTOR', 64);
define ('S_MAIL', 128);
define ('S_SESSION', 256);
define ('S_MISC', 2);
define ('S_INTERNAL', 536870912);
define ('S_ALL', 511);

/**
 * system is unusable
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_EMERG', 0);

/**
 * action must be taken immediately
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_ALERT', 1);

/**
 * critical conditions
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_CRIT', 2);

/**
 * error conditions
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_ERR', 3);

/**
 * warning conditions
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_WARNING', 4);

/**
 * normal, but significant, condition
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_NOTICE', 5);

/**
 * informational message
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_INFO', 6);

/**
 * debug-level message
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_DEBUG', 7);

/**
 * kernel messages
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_KERN', 0);

/**
 * generic user-level messages
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_USER', 8);

/**
 * mail subsystem
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_MAIL', 16);

/**
 * other system daemons
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_DAEMON', 24);

/**
 * security/authorization messages (use <b>LOG_AUTHPRIV</b> instead
 * in systems where that constant is defined)
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_AUTH', 32);

/**
 * messages generated internally by syslogd
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_SYSLOG', 40);

/**
 * line printer subsystem
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_LPR', 48);

/**
 * USENET news subsystem
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_NEWS', 56);

/**
 * UUCP subsystem
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_UUCP', 64);

/**
 * clock daemon (cron and at)
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_CRON', 72);

/**
 * security/authorization messages (private)
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_AUTHPRIV', 80);
define ('LOG_LOCAL0', 128);
define ('LOG_LOCAL1', 136);
define ('LOG_LOCAL2', 144);
define ('LOG_LOCAL3', 152);
define ('LOG_LOCAL4', 160);
define ('LOG_LOCAL5', 168);
define ('LOG_LOCAL6', 176);
define ('LOG_LOCAL7', 184);

/**
 * include PID with each message
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_PID', 1);

/**
 * if there is an error while sending data to the system logger,
 * write directly to the system console
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_CONS', 2);

/**
 * (default) delay opening the connection until the first
 * message is logged
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_ODELAY', 4);

/**
 * open the connection to the logger immediately
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_NDELAY', 8);
define ('LOG_NOWAIT', 16);

/**
 * print log message also to standard error
 * @link https://php.net/manual/en/network.constants.php
 */
define ('LOG_PERROR', 32);
define ('true', (bool)1, true);
define ('false', (bool)0, true);
define ('null', null, true);
define ('ZEND_THREAD_SAFE', false);
define ('ZEND_DEBUG_BUILD', false);
define ('PHP_WINDOWS_VERSION_BUILD', 0);
define ('PHP_WINDOWS_VERSION_MAJOR', 0);
define ('PHP_WINDOWS_VERSION_MINOR', 0);
define ('PHP_WINDOWS_VERSION_PLATFORM', 0);
define ('PHP_WINDOWS_VERSION_PRODUCTTYPE', 0);
define ('PHP_WINDOWS_VERSION_SP_MAJOR', 0);
define ('PHP_WINDOWS_VERSION_SP_MINOR', 0);
define ('PHP_WINDOWS_VERSION_SUITEMASK', 0);
define ('PHP_VERSION', "5.3.6-13ubuntu3.2");
define ('PHP_MAJOR_VERSION', 5);
define ('PHP_MINOR_VERSION', 3);
define ('PHP_RELEASE_VERSION', 6);
define ('PHP_EXTRA_VERSION', "-13ubuntu3.2");
define ('PHP_VERSION_ID', 50306);
define ('PHP_ZTS', 0);
define ('PHP_DEBUG', 0);
define ('PHP_OS', "Linux");
/**
 * The operating system family PHP was built for. Either of 'Windows', 'BSD', 'Darwin', 'Solaris', 'Linux' or 'Unknown'. Available as of PHP 7.2.0.
 * @since 7.2
 */
define ('PHP_OS_FAMILY', "Linux");
define ('PHP_SAPI', "cli");
define ('DEFAULT_INCLUDE_PATH', ".:/usr/share/php:/usr/share/pear");
define ('PEAR_INSTALL_DIR', "/usr/share/php");
define ('PEAR_EXTENSION_DIR', "/usr/lib/php5/20090626");
define ('PHP_EXTENSION_DIR', "/usr/lib/php5/20090626");
define ('PHP_PREFIX', "/usr");
define ('PHP_BINDIR', "/usr/bin");
define ('PHP_LIBDIR', "/usr/lib/php5");
define ('PHP_DATADIR', "/usr/share");
define ('PHP_SYSCONFDIR', "/etc");
define ('PHP_LOCALSTATEDIR', "/var");
define ('PHP_CONFIG_FILE_PATH', "/etc/php5/cli");
define ('PHP_CONFIG_FILE_SCAN_DIR', "/etc/php5/cli/conf.d");
define ('PHP_SHLIB_SUFFIX', "so");
define ('PHP_EOL', "\n");
define ('SUHOSIN_PATCH', 1);
define ('SUHOSIN_PATCH_VERSION', "0.9.10");
define ('PHP_MAXPATHLEN', 4096);
define ('PHP_INT_MAX', 9223372036854775807);
define ('PHP_INT_MIN', -9223372036854775808);
define ('PHP_INT_SIZE', 8);
/**
 * Number of decimal digits that can be rounded into a float and back without precision loss. Available as of PHP 7.2.0.
 * @since 7.2
 */
define('PHP_FLOAT_DIG', 15);
/**
 * Smallest representable positive number x, so that x + 1.0 != 1.0. Available as of PHP 7.2.0.
 * @since 7.2
 */
define('PHP_FLOAT_EPSILON', 2.2204460492503e-16);

/**
 * Largest representable floating point number. Available as of PHP 7.2.0.
 * @since 7.2
 */
define('PHP_FLOAT_MAX', 1.7976931348623e+308);
/**
 * Smallest representable floating point number. Available as of PHP 7.2.0.
 * @since 7.2
 */
define('PHP_FLOAT_MIN', 2.2250738585072e-308);
define ('ZEND_MULTIBYTE', 0);
define ('PHP_OUTPUT_HANDLER_START', 1);
define ('PHP_OUTPUT_HANDLER_CONT', 2);
define ('PHP_OUTPUT_HANDLER_END', 4);
define ('UPLOAD_ERR_OK', 0);
define ('UPLOAD_ERR_INI_SIZE', 1);
define ('UPLOAD_ERR_FORM_SIZE', 2);
define ('UPLOAD_ERR_PARTIAL', 3);
define ('UPLOAD_ERR_NO_FILE', 4);
define ('UPLOAD_ERR_NO_TMP_DIR', 6);
define ('UPLOAD_ERR_CANT_WRITE', 7);
define ('UPLOAD_ERR_EXTENSION', 8);
define('STDIN', fopen('php://stdin', 'r'));
define('STDOUT', fopen('php://stdout', 'w'));
define('STDERR', fopen('php://stderr', 'w'));

define('PHP_FD_SETSIZE', 1024);
