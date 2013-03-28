<?php namespace RobClancy\ValidationRules\Rule\Builder;

interface BuilderInterface {
	
	/**
	 * Build a rule.
	 *
	 * @param  string $rule
	 * @param  array  $params
	 * @return mixed
	 */
	public function make($rule, array $params = array());
}