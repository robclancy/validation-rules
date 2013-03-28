<?php namespace Robbo\ValidationRules\Rule;

use Robbo\ValidationRules\Builder\BuilderInterface;

class Factory {

	/**
	 * A builder for this rule.
	 *
	 * @var Robbo\ValidationRules\Builder\BuilderInterface
	 */
	protected $builder;

	/**
	 * Just set a builder.
	 *
	 * @param  Robbo\ValidationRules\Builder\BuilderInterface
	 */
	public function __construct(Builder $builder)
	{
		$this->builder = $builder;
	}

	/**
	 * Create a new rule and call whatever method was called on the factory.
	 *
	 * @param  string $method
	 * @param  array  $arguments
	 * @return Robbo\ValidationRules\Rule
	 */
	public function __call($method, $arguments)
	{
		$rule = new Rule($this->builder);

		return call_user_func_array(array($rule, $method), $arguments);
	}
}