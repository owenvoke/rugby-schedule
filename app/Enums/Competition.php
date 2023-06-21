<?php

declare(strict_types=1);

namespace App\Enums;

enum Competition: string
{
    case AutumnNations = 'autumn-nations';
    case EuropeanChallengeCup = 'european-challenge-cup';
    case EuropeanChampionsCup = 'european-champions-cup';
    case Premiership = 'premiership';
    case PremiershipCup = 'premiership-cup';
    case SixNations = 'six-nations';
    case U18sPremiership = 'u18s:six-nations';
    case U20sSixNations = 'u20s:six-nations';
    case WomensSixNations = 'womens:six-nations';

    public function name(): string
    {
        return match ($this) {
            self::AutumnNations => 'Autumn Nations Series',
            self::EuropeanChallengeCup => 'European Challenge Cup',
            self::EuropeanChampionsCup => 'European Champions Cup',
            self::Premiership => 'Gallagher Premiership',
            self::PremiershipCup => 'Gallagher Premiership Cup',
            self::SixNations => 'Six Nations',
            self::U18sPremiership => 'Premiership Rugby Under-18s Academy League',
            self::U20sSixNations => 'Under-20s Six Nations',
            self::WomensSixNations => 'Women\'s Six Nations',
        };
    }
}
