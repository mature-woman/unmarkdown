<?php

declare(strict_types=1);

namespace mirzaev\unmarkdown;

/**
 * Escape all markdown symbols
 *
 * @param string $text Text for escaping
 * @param array $exception Characters to be excluded from the escape list
 *
 * @return string Escaped text
 */
function unmarkdown(string $text, array $exceptions = []): string
	{
		// Initializing the registry of characters for escaping
		$from = array_diff(
			[
				'.',
				'#',
				'*',
				'-',
				'_',
				'=',
				'[',
				']',
				'{',
				'}',
				'(',
				')',
				'>',
				'<',
				'!',
				'`',
				'\\',
				'|',
				'+'
			],
			$exceptions
		);

		// Initializing the registry of escaped characters
		$to = [];
		foreach ($from as $symbol) $to[] = "\\$symbol";

		// Escaping the text and exit (success)
		return str_replace($from, $to,	$text);
	}
