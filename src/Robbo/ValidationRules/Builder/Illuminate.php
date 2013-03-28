<?php namespace Robbo\ValidationRules\Rule\Builder;

class Illuminate implements BuilderInterface {
	
	/**
	 * Build a rule.
	 *
	 * @param  string $rule
	 * @param  array  $params
	 * @return mixed
	 */
	public function make($rule, array $params = array())
	{
		if ( ! empty($params))
		{
			$rule .= ':'.implode(',', $params);
		}
		
		return $rule;
	}
}