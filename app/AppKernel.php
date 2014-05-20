<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new TADSNexcon\Webcar\CoreBundle\TADSNexconWebcarCoreBundle(),
            
            
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new Sonata\UserBundle\SonataUserBundle('FOSUserBundle'),
            new Sonata\IntlBundle\SonataIntlBundle(),
            new Sonata\MediaBundle\SonataMediaBundle(),
            new Application\Sonata\MediaBundle\ApplicationSonataMediaBundle(),
            new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
            new Application\Sonata\UserBundle\ApplicationSonataUserBundle(),
            
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),

            // Then add SonataAdminBundle
            new Sonata\AdminBundle\SonataAdminBundle(),
            
            
            
            new TADSNexcon\Webcar\AdminBundle\TADSNexconWebcarAdminBundle(),
            
            new Oh\GoogleMapFormTypeBundle\OhGoogleMapFormTypeBundle(),
            //new Oh\ColorPickerTypeBundle\OhColorPickerTypeBundle(),
            new TADSNexcon\Webcar\HomeBundle\TADSNexconWebcarHomeBundle(),
            new TADSNexcon\Webcar\ConcessionaryBundle\TADSNexconWebcarConcessionaryBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Acme\DemoBundle\AcmeDemoBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
            $bundles[] = new Bazinga\Bundle\FakerBundle\BazingaFakerBundle();
            $bundles[] = new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
