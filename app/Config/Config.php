<?php
/**
 * This file is part of the O2System PHP Framework package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author         Steeve Andrian Salim
 * @copyright      Copyright (c) Steeve Andrian Salim
 */
// ------------------------------------------------------------------------

/**
 * Default App
 *
 * This determine which application set is used by default.
 *
 * @var string|null
 */
$config[ 'app' ] = null;

/**
 * Default Character Set
 *
 * This determines which character set is used by default in various methods
 * that require a character set to be provided.
 *
 * @var string
 */
$config[ 'charset' ] = 'UTF-8';

/**
 * Default Language
 *
 * This determine which set of language packages should be used.
 *
 * @var array
 */
$config[ 'language' ] = 'en-US';

/**
 * DateTime Timezone
 *
 * @see http://php.net/manual/en/timezones.php
 *
 * @var string
 */
$config[ 'datetime' ][ 'timezone' ] = 'Asia/Jakarta';

/**
 * DateTime Reference
 *
 * Options are 'local' or 'gmt'.  This pref tells the system whether to use
 * your server's local time as the master 'now' reference, or convert it to
 * GMT.  See the 'date helper' page of the user guide for information
 * regarding date handling.
 *
 * @var string
 */
$config[ 'datetime' ][ 'reference' ] = 'local';

/**
 * DateTime Format
 *
 * @see http://php.net/manual/en/function.date.php
 *
 * @var string
 */
$config[ 'datetime' ][ 'format' ] = 'd-m-Y H:m:s';

/**
 * Logger Threshold
 *
 * If you have enabled error logging, you can set an error threshold to
 * determine what gets logged. Threshold options are:
 *
 * LOGGER_DISABLED  = 0
 * LOGGER_DEBUG     = 1
 * LOGGER_INFO      = 2
 * LOGGER_NOTICE    = 3
 * LOGGER_WARNING   = 4
 * LOGGER_ALERT     = 5
 * LOGGER_ERROR     = 6
 * LOGGER_EMERGENCY = 7
 * LOGGER_CRITICAL  = 8
 * LOGGER_ALL       = 9
 *
 * For a live site you'll usually only enable Errors (1) to be logged otherwise
 * your log files will fill up very fast.
 *
 * @example Specific logging thresholds
 *          $config['logger']['threshold'] = [ LOGGER_DEBUG, LOGGER_INFO ];
 *
 * @var int|array
 */
$config[ 'logger' ][ 'threshold' ] = LOGGER_ALL;

/**
 * Security Encryption Key
 *
 * @var string
 */
$config[ 'security' ][ 'encryptionKey' ] = '02Syst3m!';

/**
 * Units Currency
 *
 * This configuration is used by currency_format at number helper.
 * See the 'number helper' page of the user guide for information
 * regarding currency number formatting.
 */
$config[ 'units' ][ 'currency' ] = 'IDR';

/**
 * Units Weight
 *
 * This configuration is used by weight_format at number helper.
 * See the 'number helper' page of the user guide for information
 * regarding weight number formatting.
 */
$config[ 'units' ][ 'weight' ] = 'gr';