<?php

class ThemeHouse_RoutePrefixes_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_RoutePrefixes' => array(
                'datawriter' => array(
                    'XenForo_DataWriter_RoutePrefix'
                ), 
            ), 
        );
    }

    public static function loadClassDataWriter($class, array &$extend)
    {
        $loadClassDataWriter = new ThemeHouse_RoutePrefixes_Listener_LoadClass($class, $extend, 'datawriter');
        $extend = $loadClassDataWriter->run();
    }
}