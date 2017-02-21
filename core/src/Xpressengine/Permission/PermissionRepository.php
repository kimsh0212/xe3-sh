<?php
/**
 * This file is a permission repository.
 *
 * PHP version 5
 *
 * @category    Permission
 * @package     Xpressengine\Permission
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2015 Copyright (C) NAVER Corp. <http://www.navercorp.com>
 * @license     http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html LGPL-2.1
 * @link        https://xpressengine.io
 */

namespace Xpressengine\Permission;

/**
 * Interface PermissionRepository
 *
 * @category    Permission
 * @package     Xpressengine\Permission
 * @author      XE Developers <developers@xpressengine.com>
 * @copyright   2015 Copyright (C) NAVER Corp. <http://www.navercorp.com>
 * @license     http://www.gnu.org/licenses/old-licenses/lgpl-2.1.html LGPL-2.1
 * @link        https://xpressengine.io
 */
interface PermissionRepository
{
    /**
     * Find a registered by type and name
     *
     * @param string $siteKey site key
     * @param string $name    target name
     * @return Permission
     */
    public function findByName($siteKey, $name);

    /**
     * Insert register information
     *
     * @param Permission $item permission instance
     * @return Permission
     */
    public function insert(Permission $item);

    /**
     * Update register information
     *
     * @param Permission $item permission instance
     * @return Permission
     */
    public function update(Permission $item);

    /**
     * Delete register information
     *
     * @param Permission $item permission instance
     * @return int affecting statement
     */
    public function delete(Permission $item);

    /**
     * Returns ancestor of item
     *
     * @param string $siteKey site key
     * @param string $name    target name
     * @return array
     */
    public function fetchAncestor($siteKey, $name);

    /**
     * Returns descendant of item
     *
     * @param string $siteKey site key
     * @param string $name    target name
     * @return array
     */
    public function fetchDescendant($siteKey, $name);

    /**
     * Parent Changing with descendant
     *
     * @param Permission $item permission instance
     * @param string     $to   parent name
     * @return void
     */
    public function foster(Permission $item, $to);

    /**
     * affiliated to another registered
     *
     * @param Permission $item permission instance
     * @param string     $to   parent name
     * @return void
     */
    public function affiliate(Permission $item, $to);
}
