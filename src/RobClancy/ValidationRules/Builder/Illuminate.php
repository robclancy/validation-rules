<?php RobClancy\ValidationRules\Rule\Builder;

use RobClancy\ValidationRules\Buildable;

class Illuminate implements Buildable {
	
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