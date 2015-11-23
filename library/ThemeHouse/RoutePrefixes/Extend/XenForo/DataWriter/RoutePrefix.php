<?php
if (false) {

    class XFCP_ThemeHouse_RoutePrefixes_Extend_XenForo_DataWriter_RoutePrefix extends XenForo_DataWriter_RoutePrefix
    {
    }
}

class ThemeHouse_RoutePrefixes_Extend_XenForo_DataWriter_RoutePrefix extends XFCP_ThemeHouse_RoutePrefixes_Extend_XenForo_DataWriter_RoutePrefix
{

    protected function _preSave()
    {
        $class = $this->get('route_class');
        if (!XenForo_Application::autoload($class)) {
            $filename = XenForo_Autoloader::getInstance()->getRootDir() . DIRECTORY_SEPARATOR . str_replace("_", DIRECTORY_SEPARATOR, $class) . ".php";
            if (!file_exists(dirname($filename))) {
                XenForo_Helper_File::createDirectory(dirname($filename));
            }
            $options = array(
            	'title_plural' => str_replace('-', ' ', $this->get('original_prefix'))
            );
            $phpFile = null;
            switch($this->get('route_type')) {
            	case 'public':
                    $phpFile = new ThemeHouse_RoutePrefixes_PhpFile_Route_Prefix($class, $options);
                    break;
            	case 'admin':
                    $phpFile = new ThemeHouse_RoutePrefixes_PhpFile_Route_PrefixAdmin($class, $options);
                    break;
            }
            if (!is_null($phpFile)) {
                $phpFile->export(true);
            }
        }

        return parent::_preSave();
    }
}