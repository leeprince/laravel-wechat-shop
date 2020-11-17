<?php

namespace LeePrince\LaravelWechatShop\Extend\Artisan\Make;

use Illuminate\Database\Console\Seeds\SeederMakeCommand;
use Symfony\Component\Console\Input\InputArgument;

class MakeSeederCommand extends SeederMakeCommand
{
    use TraitCommand;

    protected $name = 'prince-make:seeder';

    protected function getPath($name)
    {
        return $this->packagePath.'/'.$this->getPackageInput().'/Database/seeds/'.$name.'.php';
    }
}
