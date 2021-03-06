<?php
/**
 * @title          Payment Model Class
 *
 * @author         Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright      (c) 2012-2018, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7/ App / System / Module / Payment / Model
 * @version        1.1
 */

namespace PH7;

class PaymentModel extends UserCoreModel
{
    /**
     * Update a membership group.
     *
     * @param string $sSection
     * @param string $sValue
     * @param int $iGroupId
     *
     * @return void
     */
    public function updateMembershipGroup($sSection, $sValue, $iGroupId)
    {
        $this->orm->update('Memberships', $sSection, $sValue, 'groupId', $iGroupId);
    }

    /**
     * Add a membership group.
     *
     * @param array $aData The parameters for the insertion in database for the new membership.
     *
     * @return void
     */
    public function addMembership(array $aData)
    {
        $this->orm->insert('Memberships', $aData);
    }

    /**
     * Delete a membership group.
     *
     * @param int $iGroupId
     *
     * @return void
     */
    public function deleteMembership($iGroupId)
    {
        $this->orm->delete('Memberships', 'groupId', $iGroupId);
    }
}
