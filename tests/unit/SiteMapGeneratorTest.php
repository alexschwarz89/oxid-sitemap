<?php

namespace Ivoba\OxidSiteMap\Tests\SiteMapGenerator;

use Ivoba\OxidSiteMap\Entity\Config;
use Ivoba\OxidSiteMap\Query\Categories;
use Ivoba\OxidSiteMap\SiteMapGenerator;

class SiteMapGeneratorTest extends \PHPUnit_Framework_TestCase
{

    public function testConstruct()
    {
        $config = new Config('filepath', 'filename', 'siteurl');
        //todo as soon as oxid core is available on packagist, mock legacyDb class and us all query classes
        $categories = $this->prophesize(Categories::class);
        $generator = new SiteMapGenerator($config, [$categories->reveal()]);

        $this->assertInstanceOf(SiteMapGenerator::class, $generator);
    }
}
