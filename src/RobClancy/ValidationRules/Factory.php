<?php namespace RobClancy\ValidationRules\Rule;

class Factory {

	/**
	 * A builder for this rule.
	 *
	 * @var RobClancy\ValidationRules\Builder\Buildable
	 */
	protected $builder;

	/**
	 * Just set a builder.
	 *
	 * @param  RobClancy\ValidationRules\Buildable
	 */
	public function __construct(Buildable $builder)
	{
		$this->builder = $builder;
	}

	/**
	 * Create a new rule and call whatever method was called on the factory.
	 *
	 * @param  string $method
	 * @param  array  $arguments
	 * @return BigElephant\LaravelRules\Rule
	 */
	public function __call($method, $arguments)
	{
		$rule = new Rule($this->builder);

		return call_user_func_array(array($rule, $method), $arguments);
	}
}