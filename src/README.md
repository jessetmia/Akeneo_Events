AppKernel.php changes 

    public function registerBundles()
    {
        $bundles = $this->registerProjectBundles();

        if (in_array($this->getEnvironment(), ['dev', 'test', 'behat'])) {
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Symfony\Bundle\WebServerBundle\WebServerBundle();
        }

        $bundles = array_merge(
            $this->getSymfonyBundles(),
            $this->getOroDependencies(),
            $this->getOroBundles(),
            $this->getPimDependenciesBundles(),
            $this->getPimBundles(),
            $this->getPimEnterpriseBundles(),
            $this->getRealTruckBundles(),
            $bundles
        );

        return $bundles;
    }
        
    protected function getRealTruckBundles()
    {
        return [
            new RealTruck\Bundle\AkeneoToETLBundle\RealTruckAkeneoToETLBundle(),
        ];
    }