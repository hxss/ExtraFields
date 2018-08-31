<?php

namespace Modules\ExtraFields\Contrib;

use Cocur\Slugify\RuleProvider\DefaultRuleProvider;

class SlugifyRuleProvider extends DefaultRuleProvider
{
	public function __construct() {
		$this->rules['russian'] = [
			'А' => 'A',
			'а' => 'a',
			'Б' => 'B',
			'б' => 'b',
			'В' => 'V',
			'в' => 'v',
			'Г' => 'G',
			'г' => 'g',
			'Д' => 'D',
			'д' => 'd',
			'Е' => 'E',
			'е' => 'e',
			'ж' => 'zh',
			'Ж' => 'Zh',
			'З' => 'Z',
			'з' => 'z',
			'И' => 'I',
			'и' => 'i',
			'Й' => 'Y',
			'й' => 'y',
			'К' => 'K',
			'к' => 'k',
			'Л' => 'L',
			'л' => 'l',
			'М' => 'M',
			'м' => 'm',
			'Н' => 'N',
			'н' => 'n',
			'О' => 'O',
			'о' => 'o',
			'П' => 'P',
			'п' => 'p',
			'Р' => 'R',
			'р' => 'r',
			'С' => 'S',
			'с' => 's',
			'Т' => 'T',
			'т' => 't',
			'У' => 'U',
			'у' => 'u',
			'Ф' => 'F',
			'ф' => 'f',
			'Х' => 'H',
			'х' => 'h',
			'Ц' => 'C',
			'ц' => 'c',
			'Ч' => 'Ch',
			'ч' => 'ch',
			'Ш' => 'Sh',
			'ш' => 'sh',
			'Щ' => 'Shch',
			'щ' => 'shch',
			'Ъ' => '',
			'ъ' => '',
			'Ы' => 'Y',
			'ы' => 'y',
			'Ь' => '',
			'ь' => '',
			'Э' => 'E',
			'э' => 'e',
			'Ю' => 'Yu',
			'ю' => 'yu',
			'Я' => 'Ya',
			'я' => 'ya',
			'Ё' => 'E',
			'ё' => 'e',
		];
	}
}