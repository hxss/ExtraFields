<?php

namespace Modules\ExtraFields\Controllers;

use Phact\Controller\Controller;

class ManualSlugController extends Controller
{
	public function get($module, $modelName, $fieldName) {
		$text = $this->request->get['text'];

		$modelClass = "Modules\\{$module}\\Models\\{$modelName}";
		$model = new $modelClass;

		$field = $model->getField($fieldName);

		$model->{$field->source} = $text;

		$this->jsonResponse($field->buildSlug());
	}
}
