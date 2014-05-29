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
			'Je denkt zeker dat je Steve Miller Band.',
			'Je hebt een vreemd gezicht.',
			'Polio is geen mode-statement.',
			'Je bent een kei. Glad hard en koud!',
			'Disssssssss!',
			'Je hebt een poffertjes-porem.',
			'Als jij in het spookhuis komt, dan lopen de poppen weg.',
			'Voel jij je echt zo beroerd als je eruit ziet?',
			'Jouw gezicht is zo pokdalig: als je in jouw gezicht een kilo erwten gooit rolt er geen één terug.',
			'Wat zit je haar leuk. Is het al lang dood?',
			'Gij ploertige hofnar!',
			'Simsalabim! SHIT... Je bent nog steeds lelijk.',
			'Mag ik je pasfoto? Ik spaar natuurrampen.',
			'Je bent zo\'n eikel dat er 700 eekhoorns achter je aan rennen.',
			'Ik hou van de zee. Ik hou van de rotsen. Maar als ik jou zie moet ik kotsen.',
			'Als kleuter was je al zo lelijk dat je moeder een stuk biefstuk om je nek moest binden, anders wou zelfs de hond niet met je spelen.',
			'Je buik ziet eruit alsof je een miljoen bolletjes hebt geslikt',
			'Ik schijt op je status.',
			'Je bent zo lelijk dat zelfs Bob de Bouwer je niet kan fiksen.',
			'Je bent zo dik, dat als je je omdraait je alweer jarig bent.',
			'Je bent zo dik, dat als je een gele jas aanhebt, mensen in Amerika denken dat de zon opkomt.',
			'Gecondoleerd met je kop.',
			'Iedereen mag lelijk zijn, maar jij maakt er echt misbruik van.',
			'Zelfs Zumba is nog cooler dan jij.',
			'Mooie tanden. Heb je ze ook in het wit?'

		];

		// Check session
		$seen = Session::get('seen', []);
		if (count($seen) >= count($disses)) $seen = [];

		foreach ($seen as $i) {
			unset($disses[$i]);
		}


		// Get a random one
		$index = array_rand($disses);
		array_push($seen, $index);
		Session::set('seen', $seen);

		return $disses[$index];


	}

}