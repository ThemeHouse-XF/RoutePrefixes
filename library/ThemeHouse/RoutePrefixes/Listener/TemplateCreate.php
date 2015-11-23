<?php

class ThemeHouse_RoutePrefixes_Listener_TemplateCreate extends ThemeHouse_Listener_TemplateCreate
{

    protected function _getTemplates()
    {
        return array(
            'route_prefix_edit'
        );
    }

    public static function templateCreate(&$templateName, array &$params, XenForo_Template_Abstract $template)
    {
        $templateCreate = new ThemeHouse_RoutePrefixes_Listener_TemplateCreate($templateName, $params, $template);
        list($templateName, $params) = $templateCreate->run();
    }

    protected function _routePrefixEdit()
    {
        $this->_template->addRequiredExternal('js', 'js/themehouse/routeprefixes/route_prefix_edit.js');
    }
}