<?php 
namespace Dev\Custom\Resources;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
  public function pluginDetails()
  {
    return [
      'name' => 'Eduonix',
      'description' => 'Provides company resources',
      'author' => 'Brad Traversy',
      'icon' => 'icon-leaf'
    ];
  }

  public function registerComponents()
  {
    return [
      '\Dev\Custom\Resources\Components\Links' => 'resourcesLinks'
    ];
  }
}