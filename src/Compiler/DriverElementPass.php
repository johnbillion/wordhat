<?php
declare(strict_types=1);
namespace WordHat\Extension\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

/**
 * Extension container compilation pass.
 */
class DriverElementPass implements CompilerPassInterface
{
    /**
     * Modify the container before Symfony compiles it.
     *
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        $wordpress = $container->getDefinition('wordpress.wordpress');
        if (! $wordpress) {
            return;
        }

        foreach ($container->findTaggedServiceIds('wordpress.element') as $id => $attributes) {
            foreach ($attributes as $attribute) {
                if (! isset($attribute['alias'], $attribute['driver'])) {
                    continue;
                }

                $wordpress->addMethodCall(
                    'registerDriverElement',
                    [$attribute['alias'], new Reference($id), $attribute['driver']]
                );
            }
        }
    }
}
