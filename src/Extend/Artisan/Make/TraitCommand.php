<?php
/**
 * [Description]
 *
 * @Author  leeprince:2020-07-16 23:04
 */
namespace LeePrince\LaravelWechatShop\Extend\Artisan\Make;

use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputArgument;

trait TraitCommand
{
    protected $packagePath = __DIR__."/../../..";
    
    private $rootNamespace = 'LeePrince\LaravelWechatShop';
    
    /**
     * [获取根命名空间]
     *
     * @Author  leeprince:2020-07-16 23:57
     * @return string
     */
    protected function rootNamespace()
    {
        return $this->rootNamespace;
    }
    
    /**
     * [获取创建的路径]
     *
     * @Author  leeprince:2020-07-16 23:57
     * @param $name
     * @return string
     */
    protected function getPath($name)
    {
        $name = Str::replaceFirst($this->rootNamespace(), '', $name);
        
        return  $this->packagePath.'/'.str_replace('\\', '/', $name).'.php';
    }
    
    /**
     * [获取控制台命令参数]
     *
     * @Author  leeprince:2020-07-17 02:02
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['package', InputArgument::REQUIRED, 'The package of the class'],
            ['name', InputArgument::REQUIRED, 'The name of the class'],
        ];
    }
}
