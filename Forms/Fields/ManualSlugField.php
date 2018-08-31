<?php

namespace Modules\ExtraFields\Forms\Fields;

use Phact\Form\Fields\CharField;
use Phact\Main\Phact;

class ManualSlugField extends CharField
{
	public $inputTemplate = 'forms/field/manualSlug/input.tpl';
	public $source = '';

	public function getGetUrl() {
		$model = $this->form->model;

		return Phact::app()->router->url('extraFields:manual_slug', [
			$model->moduleName,
			$model->classNameShort(),
			$this->name
		]);
	}
}
