<?php
/**
 * @ Author: Tommyprmbd
 * @ Create Time: 2024-05-08 11:55:29
 * @ Modified by: Tommyprmbd
 * @ Modified time: 2024-05-08 12:23:57
 * @ Description:
 */
namespace App\Document;

use Pimcore\Extension\Document\Areabrick\AbstractTemplateAreabrick;

class AbstractAreabrick extends AbstractTemplateAreabrick
{
    public function getName(): string
    {
        return preg_replace('/(?<!\ )[A-Z]/', ' $0', (new \ReflectionClass($this))->getShortName());
    }
}
