<?php
/**
 * @author Jesus Macias <jesus@owncloud.com>
 *
 * @copyright Copyright (c) 2015, ownCloud, Inc.
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

// use OCP namespace for all classes that are considered public.
// This means that they should be used by apps instead of the internal ownCloud classes
namespace OCP\Files;

/**
 * External Storage authentication exception
 * @since 9.0.0
 */
class ExtStorageTimeoutException extends StorageNotAvailableException {

	/**
	 * ExtStorageTimeoutException constructor.
	 *
	 * @param string $message
	 * @param int $code
	 * @param \Exception $previous
	 * @since 9.0.0
	 */
	public function __construct($message = '', \Exception $previous = null) {
		$l = \OC::$server->getL10N('core');
		parent::__construct($l->t('External storage connection timeout. %s', $message), self::STATUS_TIMEOUT, $previous);
	}
}
