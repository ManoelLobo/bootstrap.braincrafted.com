<?php
/**
 * This file is part of BcBootstrapDemoBundle.
 * (c) 2012-2013 Florian Eckerstorfer
 */

namespace Bc\Bundle\BootstrapDemoBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

/**
 * Builder
 *
 * @package    BcBootstrapDemoBundle
 * @subpackage Menu
 * @author     Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright  2012 Florian Eckerstorfer
 * @license    http://opensource.org/licenses/MIT The MIT License
 * @link       http://bootstrap.braincrafted.com BcBootstrapBundle
 */
class Builder extends ContainerAware
{
    /**
     * Builds the navbar menu.
     *
     * @param \Knp\Menu\FactoryInterface $factory The menu factory
     * @param array                      $options The options array
     *
     * @return \Knp\Menu\ItemInterface The root item
     */
    public function navbar(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Installation', array('route' => 'bc_bootstrap_installation'));
        $menu->addChild('Components', array('route' => 'bc_bootstrap_components'));

        return $menu;
    }
}
