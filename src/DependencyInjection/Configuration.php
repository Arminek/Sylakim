<?php

/*
 * This file is part of the Sylakim package.
 *
 * (c) Sylake
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylake\Bundle\SylakimBundle\DependencyInjection;

use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

/**
 * This is the class that defines the configuration for the Sylakim Bundle
 *
 * @author Julien Janvier <j.janvier@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('sylake_sylakim');
        $rootNode
            ->children()
                ->scalarNode('api_public_id')
                    ->isRequired()->cannotBeEmpty()
                    ->info('The public ID of the Sylius API. See http://docs.sylius.org/en/latest/api/authorization.html#oauth2.')
                ->end()
                ->scalarNode('api_secret')
                    ->isRequired()->cannotBeEmpty()
                    ->info('The secret of the Sylius API. See http://docs.sylius.org/en/latest/api/authorization.html#oauth2.')
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }

}
