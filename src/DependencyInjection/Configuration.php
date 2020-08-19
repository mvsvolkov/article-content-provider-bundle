<?php

namespace CatCasCarSkillboxSymfony\ArticleContentProviderBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('catcascar_article_content_provider');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->scalarNode('article_word_decorator')->defaultNull()->info('ContentDecorator class')->end()
                ->booleanNode('is_bold')->defaultTrue()->info('Bold or Italic word style')->end()
            ->end()
        ;
            
        return $treeBuilder;
    }
}
