<?php

class ThemeHouse_NotifyOldTopic_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/NotifyOldTopic/CronEntry/NotifyOldThreads.php' => '1a5ea84b88962e407d717d6a9a828d81',
                'library/ThemeHouse/NotifyOldTopic/Extend/XenForo/Model/Thread.php' => '82c637d50b88230050dca9f1633a928d',
                'library/ThemeHouse/NotifyOldTopic/Install/Controller.php' => 'dd43215b6ed47b1a37f0e780698b9665',
                'library/ThemeHouse/NotifyOldTopic/Listener/LoadClass.php' => 'b30f54158a2f4d344065a61fd519322b',
                'library/ThemeHouse/NotifyOldTopic/Listener/NoticesPrepare.php' => '1e47d7486057deb67b4640a9840ad519',
                'library/ThemeHouse/NotifyOldTopic/Option/NodeChooser.php' => '8049fa3128a0c38a04fe11bb4839c043',
                'library/ThemeHouse/NotifyOldTopic/Option/NotifyOldThreads.php' => '5a0b7b4f3fd01e2b4cfdfcc681f38eb1',
                'library/ThemeHouse/Install.php' => '18f1441e00e3742460174ab197bec0b7',
                'library/ThemeHouse/Install/20151109.php' => '2e3f16d685652ea2fa82ba11b69204f4',
                'library/ThemeHouse/Deferred.php' => 'ebab3e432fe2f42520de0e36f7f45d88',
                'library/ThemeHouse/Deferred/20150106.php' => 'a311d9aa6f9a0412eeba878417ba7ede',
                'library/ThemeHouse/Listener/ControllerPreDispatch.php' => 'fdebb2d5347398d3974a6f27eb11a3cd',
                'library/ThemeHouse/Listener/ControllerPreDispatch/20150911.php' => 'f2aadc0bd188ad127e363f417b4d23a9',
                'library/ThemeHouse/Listener/InitDependencies.php' => '8f59aaa8ffe56231c4aa47cf2c65f2b0',
                'library/ThemeHouse/Listener/InitDependencies/20150212.php' => 'f04c9dc8fa289895c06c1bcba5d27293',
                'library/ThemeHouse/Listener/LoadClass.php' => '5cad77e1862641ddc2dd693b1aa68a50',
                'library/ThemeHouse/Listener/LoadClass/20150518.php' => 'f4d0d30ba5e5dc51cda07141c39939e3',
            ));
    }
}