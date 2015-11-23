<?php

/**
 *
 * @see XenForo_Model_Thread
 */
class ThemeHouse_NotifyOldTopic_Extend_XenForo_Model_Thread extends XFCP_ThemeHouse_NotifyOldTopic_Extend_XenForo_Model_Thread
{

    /**
     *
     * @see XenForo_Model_Thread::prepareThreadConditions()
     */
    public function prepareThreadConditions(array $conditions, array &$fetchOptions)
    {
        $sqlConditions = array();
        $db = $this->_getDb();
        if (isset($conditions['reply_count_th'])) {
            $sqlConditions[] = 'thread.reply_count = ' . $db->quote($conditions['reply_count_th']);
        }
        
        return parent::prepareThreadConditions($conditions, $fetchOptions) . ' AND ' .
             $this->getConditionsForClause($sqlConditions);
    } /* END prepareThreadConditions */
}