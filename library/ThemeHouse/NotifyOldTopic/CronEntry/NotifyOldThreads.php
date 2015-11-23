<?php

/**
 * Cron entry for marking old threads to be used for faster queries.
 *
 * @package XenForo_Banning
 */
class ThemeHouse_NotifyOldTopic_CronEntry_NotifyOldThreads
{

    /**
     * Check old threads and record in xf_old_threads_th.
     */
    public static function checkForOldThreads()
    {
        /* @var $threadModel XenForo_Model_Thread */
        $threadModel = XenForo_Model::create('XenForo_Model_Thread');
        
        $lastPostDate = array(
            '>=<', 
            XenForo_Application::$time - (XenForo_Application::get('options')->th_notifyOldThreads_oldThreadMaxDays * 86400),
            XenForo_Application::$time - (XenForo_Application::get('options')->th_notifyOldThreads_oldThreadMinDays * 86400),
        );
        
        $conditions = array(
            'last_post_date' => $lastPostDate,
        	'reply_count_th' => 0,
            'discussion_state' => 'visible',
            'discussion_open' => 1,
        );
        
        $excludedNodeIds = XenForo_Application::getOptions()->th_notifyOldThreads_forumIds;
        if (!empty($excludedNodeIds)) {
            $allowedNodeIds = array_keys(XenForo_Model::create('XenForo_Model_Node')->getAllNodes());
            $allowedNodeIds = array_diff($allowedNodeIds, $excludedNodeIds);
            $conditions['node_id'] = $allowedNodeIds;
        }
        
        $threadIds = $threadModel->getThreadIds($conditions);
        
        if (!empty($threadIds)) {
            $dw = XenForo_DataWriter::create('XenForo_DataWriter_Option');
            $dw->setExistingData('th_notifyOldThreads_threadIds');
            $dw->set('option_value', $threadIds);
            $dw->save();
        }
    } /* END checkForOldThreads */
}