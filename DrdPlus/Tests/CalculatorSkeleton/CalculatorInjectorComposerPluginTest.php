<?php
declare(strict_types=1);

namespace DrdPlus\Tests\CalculatorSkeleton;

use DrdPlus\CalculatorSkeleton\CalculatorInjectorComposerPlugin;
use DrdPlus\Tests\RulesSkeleton\Partials\AbstractContentTest;

class CalculatorInjectorComposerPluginTest extends AbstractContentTest
{
    use Partials\AbstractContentTestTrait;

    /**
     * @test
     */
    public function Name_of_package_matches(): void
    {
        if (!$this->isCalculatorSkeletonChecked()) {
            self::assertTrue(true, 'Should be fine');

            return;
        }
        self::assertSame(CalculatorInjectorComposerPlugin::CALCULATOR_SKELETON_PACKAGE_NAME, $this->getComposerConfig()['name']);
    }
}
