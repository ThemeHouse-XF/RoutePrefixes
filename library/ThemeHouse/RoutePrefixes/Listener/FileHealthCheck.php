<?php

class ThemeHouse_RoutePrefixes_Listener_FileHealthCheck
{

    public static function fileHealthCheck(XenForo_ControllerAdmin_Abstract $controller, array &$hashes)
    {
        $hashes = array_merge($hashes,
            array(
                'library/ThemeHouse/RoutePrefixes/Extend/XenForo/DataWriter/RoutePrefix.php' => 'bf49c047278a1f5afe5ca975459e232d',
                'library/ThemeHouse/RoutePrefixes/Install/Controller.php' => 'f1542a3f35bbd6ccb906ed49acc06595',
                'library/ThemeHouse/RoutePrefixes/Listener/LoadClass.php' => 'e91669b87fe7081412fb6e75e9173fc8',
                'library/ThemeHouse/RoutePrefixes/Listener/TemplateCreate.php' => '772aefc559a8f1be88af301befca4687',
                'library/ThemeHouse/RoutePrefixes/PhpFile/Route/Prefix.php' => '055f445aff2fa47ee15fb90fe5309f23',
                'library/ThemeHouse/RoutePrefixes/PhpFile/Route/PrefixAdmin.php' => 'ef30a07ec6a83f19adea9e9f1c71eeab',
                'library/ThemeHouse/RoutePrefixes/PhpFile/Route.php' => 'ecb6e5e72f9ee0a50f6a543538ee6ae3',
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
                'library/ThemeHouse/Listener/Template.php' => '0aa5e8aabb255d39cf01d671f9df0091',
                'library/ThemeHouse/Listener/Template/20150106.php' => '8d42b3b2d856af9e33b69a2ce1034442',
                'library/ThemeHouse/Listener/TemplateCreate.php' => '6bdeb679af2ea41579efde3e41e65cc7',
                'library/ThemeHouse/Listener/TemplateCreate/20150106.php' => 'c253a7a2d3a893525acf6070e9afe0dd',
            ));
    }
}