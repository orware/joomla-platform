<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Database
 *
 * @copyright   Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('JPATH_PLATFORM') or die;

// Deprecation warning.
JLog::add('JDatabaseSqlsrv is deprecated, use JDatabaseDriverSqlsrv instead.', JLog::NOTICE, 'deprecated');

/**
 * SQL Server database driver
 *
 * @package     Joomla.Platform
 * @subpackage  Database
 * @see         http://msdn.microsoft.com/en-us/library/cc296152(SQL.90).aspx
 * @since       11.1
 * @deprecated  11.4
 */
class JDatabaseSqlsrv extends JDatabaseDriverSqlsrv
{
}
