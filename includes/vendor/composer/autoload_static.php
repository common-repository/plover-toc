<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e7d2cce14e2ae679961f088ecacc849
{
    public static $files = array (
        '28a1c7cc56b3687f6fc2a8fb01a11d05' => __DIR__ . '/../../..' . '/src/plover-toc_plugin_helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TOC\\' => 4,
        ),
        'P' => 
        array (
            'PloverToc\\' => 10,
        ),
        'M' => 
        array (
            'Masterminds\\' => 12,
        ),
        'K' => 
        array (
            'Knp\\Menu\\' => 9,
        ),
        'C' => 
        array (
            'Cocur\\Slugify\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TOC\\' => 
        array (
            0 => __DIR__ . '/..' . '/caseyamcl/toc/src',
            1 => __DIR__ . '/..' . '/caseyamcl/toc/tests',
        ),
        'PloverToc\\' => 
        array (
            0 => __DIR__ . '/../../..' . '/src/Core',
        ),
        'Masterminds\\' => 
        array (
            0 => __DIR__ . '/..' . '/masterminds/html5/src',
        ),
        'Knp\\Menu\\' => 
        array (
            0 => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu',
        ),
        'Cocur\\Slugify\\' => 
        array (
            0 => __DIR__ . '/..' . '/cocur/slugify/src',
        ),
    );

    public static $classMap = array (
        'Cocur\\Slugify\\Bridge\\Laravel\\SlugifyFacade' => __DIR__ . '/..' . '/cocur/slugify/src/Bridge/Laravel/SlugifyFacade.php',
        'Cocur\\Slugify\\Bridge\\Laravel\\SlugifyServiceProvider' => __DIR__ . '/..' . '/cocur/slugify/src/Bridge/Laravel/SlugifyServiceProvider.php',
        'Cocur\\Slugify\\Bridge\\Latte\\SlugifyHelper' => __DIR__ . '/..' . '/cocur/slugify/src/Bridge/Latte/SlugifyHelper.php',
        'Cocur\\Slugify\\Bridge\\League\\SlugifyServiceProvider' => __DIR__ . '/..' . '/cocur/slugify/src/Bridge/League/SlugifyServiceProvider.php',
        'Cocur\\Slugify\\Bridge\\Nette\\SlugifyExtension' => __DIR__ . '/..' . '/cocur/slugify/src/Bridge/Nette/SlugifyExtension.php',
        'Cocur\\Slugify\\Bridge\\Plum\\SlugifyConverter' => __DIR__ . '/..' . '/cocur/slugify/src/Bridge/Plum/SlugifyConverter.php',
        'Cocur\\Slugify\\Bridge\\Symfony\\CocurSlugifyBundle' => __DIR__ . '/..' . '/cocur/slugify/src/Bridge/Symfony/CocurSlugifyBundle.php',
        'Cocur\\Slugify\\Bridge\\Symfony\\CocurSlugifyExtension' => __DIR__ . '/..' . '/cocur/slugify/src/Bridge/Symfony/CocurSlugifyExtension.php',
        'Cocur\\Slugify\\Bridge\\Symfony\\Configuration' => __DIR__ . '/..' . '/cocur/slugify/src/Bridge/Symfony/Configuration.php',
        'Cocur\\Slugify\\Bridge\\Twig\\SlugifyExtension' => __DIR__ . '/..' . '/cocur/slugify/src/Bridge/Twig/SlugifyExtension.php',
        'Cocur\\Slugify\\Bridge\\ZF2\\Module' => __DIR__ . '/..' . '/cocur/slugify/src/Bridge/ZF2/Module.php',
        'Cocur\\Slugify\\Bridge\\ZF2\\SlugifyService' => __DIR__ . '/..' . '/cocur/slugify/src/Bridge/ZF2/SlugifyService.php',
        'Cocur\\Slugify\\Bridge\\ZF2\\SlugifyViewHelper' => __DIR__ . '/..' . '/cocur/slugify/src/Bridge/ZF2/SlugifyViewHelper.php',
        'Cocur\\Slugify\\Bridge\\ZF2\\SlugifyViewHelperFactory' => __DIR__ . '/..' . '/cocur/slugify/src/Bridge/ZF2/SlugifyViewHelperFactory.php',
        'Cocur\\Slugify\\RuleProvider\\DefaultRuleProvider' => __DIR__ . '/..' . '/cocur/slugify/src/RuleProvider/DefaultRuleProvider.php',
        'Cocur\\Slugify\\RuleProvider\\FileRuleProvider' => __DIR__ . '/..' . '/cocur/slugify/src/RuleProvider/FileRuleProvider.php',
        'Cocur\\Slugify\\RuleProvider\\RuleProviderInterface' => __DIR__ . '/..' . '/cocur/slugify/src/RuleProvider/RuleProviderInterface.php',
        'Cocur\\Slugify\\Slugify' => __DIR__ . '/..' . '/cocur/slugify/src/Slugify.php',
        'Cocur\\Slugify\\SlugifyInterface' => __DIR__ . '/..' . '/cocur/slugify/src/SlugifyInterface.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Knp\\Menu\\FactoryInterface' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/FactoryInterface.php',
        'Knp\\Menu\\Factory\\CoreExtension' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Factory/CoreExtension.php',
        'Knp\\Menu\\Factory\\ExtensionInterface' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Factory/ExtensionInterface.php',
        'Knp\\Menu\\Integration\\Symfony\\RoutingExtension' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Integration/Symfony/RoutingExtension.php',
        'Knp\\Menu\\ItemInterface' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/ItemInterface.php',
        'Knp\\Menu\\Iterator\\CurrentItemFilterIterator' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Iterator/CurrentItemFilterIterator.php',
        'Knp\\Menu\\Iterator\\DisplayedItemFilterIterator' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Iterator/DisplayedItemFilterIterator.php',
        'Knp\\Menu\\Iterator\\RecursiveItemIterator' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Iterator/RecursiveItemIterator.php',
        'Knp\\Menu\\Loader\\ArrayLoader' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Loader/ArrayLoader.php',
        'Knp\\Menu\\Loader\\LoaderInterface' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Loader/LoaderInterface.php',
        'Knp\\Menu\\Loader\\NodeLoader' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Loader/NodeLoader.php',
        'Knp\\Menu\\Matcher\\Matcher' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Matcher/Matcher.php',
        'Knp\\Menu\\Matcher\\MatcherInterface' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Matcher/MatcherInterface.php',
        'Knp\\Menu\\Matcher\\Voter\\RegexVoter' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Matcher/Voter/RegexVoter.php',
        'Knp\\Menu\\Matcher\\Voter\\RouteVoter' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Matcher/Voter/RouteVoter.php',
        'Knp\\Menu\\Matcher\\Voter\\UriVoter' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Matcher/Voter/UriVoter.php',
        'Knp\\Menu\\Matcher\\Voter\\VoterInterface' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Matcher/Voter/VoterInterface.php',
        'Knp\\Menu\\MenuFactory' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/MenuFactory.php',
        'Knp\\Menu\\MenuItem' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/MenuItem.php',
        'Knp\\Menu\\NodeInterface' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/NodeInterface.php',
        'Knp\\Menu\\Provider\\ArrayAccessProvider' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Provider/ArrayAccessProvider.php',
        'Knp\\Menu\\Provider\\ChainProvider' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Provider/ChainProvider.php',
        'Knp\\Menu\\Provider\\LazyProvider' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Provider/LazyProvider.php',
        'Knp\\Menu\\Provider\\MenuProviderInterface' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Provider/MenuProviderInterface.php',
        'Knp\\Menu\\Provider\\PsrProvider' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Provider/PsrProvider.php',
        'Knp\\Menu\\Renderer\\ArrayAccessProvider' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Renderer/ArrayAccessProvider.php',
        'Knp\\Menu\\Renderer\\ListRenderer' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Renderer/ListRenderer.php',
        'Knp\\Menu\\Renderer\\PsrProvider' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Renderer/PsrProvider.php',
        'Knp\\Menu\\Renderer\\Renderer' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Renderer/Renderer.php',
        'Knp\\Menu\\Renderer\\RendererInterface' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Renderer/RendererInterface.php',
        'Knp\\Menu\\Renderer\\RendererProviderInterface' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Renderer/RendererProviderInterface.php',
        'Knp\\Menu\\Renderer\\TwigRenderer' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Renderer/TwigRenderer.php',
        'Knp\\Menu\\Twig\\Helper' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Twig/Helper.php',
        'Knp\\Menu\\Twig\\MenuExtension' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Twig/MenuExtension.php',
        'Knp\\Menu\\Util\\MenuManipulator' => __DIR__ . '/..' . '/knplabs/knp-menu/src/Knp/Menu/Util/MenuManipulator.php',
        'Masterminds\\HTML5' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5.php',
        'Masterminds\\HTML5\\Elements' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Elements.php',
        'Masterminds\\HTML5\\Entities' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Entities.php',
        'Masterminds\\HTML5\\Exception' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Exception.php',
        'Masterminds\\HTML5\\InstructionProcessor' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/InstructionProcessor.php',
        'Masterminds\\HTML5\\Parser\\CharacterReference' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/CharacterReference.php',
        'Masterminds\\HTML5\\Parser\\DOMTreeBuilder' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/DOMTreeBuilder.php',
        'Masterminds\\HTML5\\Parser\\EventHandler' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/EventHandler.php',
        'Masterminds\\HTML5\\Parser\\FileInputStream' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/FileInputStream.php',
        'Masterminds\\HTML5\\Parser\\InputStream' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/InputStream.php',
        'Masterminds\\HTML5\\Parser\\ParseError' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/ParseError.php',
        'Masterminds\\HTML5\\Parser\\Scanner' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/Scanner.php',
        'Masterminds\\HTML5\\Parser\\StringInputStream' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/StringInputStream.php',
        'Masterminds\\HTML5\\Parser\\Tokenizer' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/Tokenizer.php',
        'Masterminds\\HTML5\\Parser\\TreeBuildingRules' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/TreeBuildingRules.php',
        'Masterminds\\HTML5\\Parser\\UTF8Utils' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Parser/UTF8Utils.php',
        'Masterminds\\HTML5\\Serializer\\HTML5Entities' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Serializer/HTML5Entities.php',
        'Masterminds\\HTML5\\Serializer\\OutputRules' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Serializer/OutputRules.php',
        'Masterminds\\HTML5\\Serializer\\RulesInterface' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Serializer/RulesInterface.php',
        'Masterminds\\HTML5\\Serializer\\Traverser' => __DIR__ . '/..' . '/masterminds/html5/src/HTML5/Serializer/Traverser.php',
        'PloverToc\\Enum' => __DIR__ . '/../../..' . '/src/Core/Enum.php',
        'PloverToc\\PluginManager' => __DIR__ . '/../../..' . '/src/Core/PluginManager.php',
        'PloverToc\\TableOfContents' => __DIR__ . '/../../..' . '/src/Core/TableOfContents.php',
        'TOC\\HtmlHelper' => __DIR__ . '/..' . '/caseyamcl/toc/src/HtmlHelper.php',
        'TOC\\MarkupFixer' => __DIR__ . '/..' . '/caseyamcl/toc/src/MarkupFixer.php',
        'TOC\\OrderedListRenderer' => __DIR__ . '/..' . '/caseyamcl/toc/src/OrderedListRenderer.php',
        'TOC\\TocGenerator' => __DIR__ . '/..' . '/caseyamcl/toc/src/TocGenerator.php',
        'TOC\\TocTwigExtension' => __DIR__ . '/..' . '/caseyamcl/toc/src/TocTwigExtension.php',
        'TOC\\UniqueSlugify' => __DIR__ . '/..' . '/caseyamcl/toc/src/UniqueSlugify.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e7d2cce14e2ae679961f088ecacc849::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e7d2cce14e2ae679961f088ecacc849::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9e7d2cce14e2ae679961f088ecacc849::$classMap;

        }, null, ClassLoader::class);
    }
}
