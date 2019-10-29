<?php namespace Liyee\Weather;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    
    public function pluginDetails()
    {
        return [
            'name'        => 'Weather',
            'description' => 'Provides the local weather information.',
            'author'      => 'Alexey Bobkov, Samuel Georges',
            'icon'        => 'icon-sun-o'
        ];
    }
    
    public function registerComponents()
    {
        return [
            '\Liyee\Weather\Components\Weather' => 'weather'
        ];
    }
}