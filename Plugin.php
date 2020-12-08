<?php namespace Mohsin\TextWithButtonWidget;

use Backend;
use System\Classes\PluginBase;

/**
 * TextWithButtonWidget Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'TextWithButtonWidget',
            'description' => 'Text with button form widget',
            'author'      => 'Saifur Rahman Mohsin',
            'icon'        => 'icon-minus-square'
        ];
    }

    /**
     * Register method for form widgets
     *
     * @return array
     */
    public function registerFormWidgets()
    {
        return [
            'Mohsin\TextWithButtonWidget\FormWidgets\TextWithButton' => 'text-with-button'
        ];
    }
}
