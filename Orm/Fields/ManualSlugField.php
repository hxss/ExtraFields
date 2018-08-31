<?php

namespace Modules\ExtraFields\Orm\Fields;

use Cocur\Slugify\Slugify;
use Modules\ExtraFields\Contrib\SlugifyRuleProvider;
use Modules\ExtraFields\Forms\Fields\ManualSlugField as FormManualSlugField;
use Phact\Orm\Fields\SlugField;

class ManualSlugField extends SlugField
{
	public $rules = [
		'ж' => 'j',
		'Ж' => 'J',
		'Ц' => 'Ts',
		'ц' => 'ts',
		'ий' => 'iy',
		'ый' => 'iy',
	];

	public function getFormField()
	{
		return $this->setUpFormField([
			'class' => FormManualSlugField::class,
			'source' => $this->source,
		]);
	}

	public function getSlugify()
	{
		parent::getSlugify();

		foreach ($this->rules as $src => $dst) {
			$this->_slugify->addRule($src, $dst);
		}

		return $this->_slugify;
	}

	public function getSlugifyWProvider()
	{
		if (!$this->_slugify) {
			$attributes = [
				'rulesets' => $this->rulesets,
				'lowercase' => $this->lowercase,
				'separator' => $this->separator
			];
			if ($this->regexp) {
				$attributes['regexp'] = $this->regexp;
			}
			$this->_slugify = new Slugify($attributes, new SlugifyRuleProvider());
		}

		return $this->_slugify;
	}
}
