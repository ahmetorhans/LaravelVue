<?php namespace App\Providers;
 
class ModulesServiceProvider extends \Illuminate\Support\ServiceProvider
{
    
    public function boot()
    {
     
        $modules = config("module.modules");
 
        while (list(,$module) = each($modules)) {
    
            $appPath = app_path();

            if(file_exists($appPath.'/Modules/'.$module.'/routes.php')) {
                include $appPath.'/Modules/'.$module.'/routes.php';
            }
    
            if(is_dir($appPath.'/Modules/'.$module.'/Views')) {
                $this->loadViewsFrom($appPath.'/Modules/'.$module.'/Views', $module);
            }
        }
    }
    public function register() {}
}