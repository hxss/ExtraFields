<?php

namespace Modules\ExtraFields\Orm\Fields;

use Phact\Form\Fields\CheckboxListField;
use Phact\Orm\Fields\ManyToManyField;

class ManyToManyCheckboxField extends ManyToManyField
{

	public function setUpFormField($config = [])
	{
		if (!isset($config['class'])) {
			$config['class'] = CheckboxListField::class;
		}

		return parent::setUpFormField($config);
	}
}
