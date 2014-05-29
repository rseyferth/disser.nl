<?php

class Diss
{
	
	public static function random() {

		$disses = [
			'Je bent een sukkel.',
			'Je vader is je moeder.',
			'Je tante is je oom.',
			'Je tanden zijn zo geel als een kanariepiet.',
			'Vaak vind ik jou dom.',
			'Ga je weg? Ik zie je nog steeds.',
			'Je moeder is een lul.',
			'Wie dit leest is gedist.',
			'Zelfs Sinterklaas houdt niet van je.',
			'Heb je geen reet, dat je zo uit je bek stinkt?',
			'Ik dis je in je gezicht.',
			'Je hebt een kutkop.',
			'Je ruikt naar varkens.',
			'Je bent te dom om deze dis te begrijpen.',
			'Adriaan van Dis.',
			'Poep hoort niet aan je gezicht.',
			'Je denkt zeker dat je Steve Miller Band.'
		];

		return $disses[array_rand($disses)];


	}

}