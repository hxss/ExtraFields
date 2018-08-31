<?php

return [
	[
		'route' => '/manual-slug/{:module}/{:modelName}/{:fieldName}',
		'target' => [Modules\ExtraFields\Controllers\ManualSlugController::class, 'get'],
		'name' => 'manual_slug'
	],
];
