<?php declare(strict_types = 1);

namespace PHPStan\Rules\Functions;

use PHPStan\Rules\Rule;
use PHPStan\Testing\RuleTestCase;

/**
 * @extends \PHPStan\Testing\RuleTestCase<CallToFunctionStamentWithoutSideEffectsRule>
 */
class CallToFunctionStamentWithoutSideEffectsRuleTest extends RuleTestCase
{

	protected function getRule(): Rule
	{
		return new CallToFunctionStamentWithoutSideEffectsRule($this->createReflectionProvider());
	}

	public function testRule(): void
	{
		$this->analyse([__DIR__ . '/data/function-call-statement-no-side-effects.php'], [
			[
				'Call to function sprintf() on a separate line has no effect.',
				11,
			],
		]);
	}

}
