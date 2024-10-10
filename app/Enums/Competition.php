<?php

declare(strict_types=1);

namespace App\Enums;

enum Competition: string
{
    case AutumnNations = 'autumn-nations';
    case BritishAndIrishLionsTour = 'lions';
    case EuropeanChallengeCup = 'european-challenge';
    case EuropeanChampionsCup = 'european-champions';
    case Premiership = 'premiership';
    case PremiershipCup = 'premiership-cup';
    case SixNations = 'six-nations';
    case U18sPremiership = 'u18s:premiership';
    case U20sSixNations = 'u20s:six-nations';
    case UnitedRugbyChampionship = 'united-rugby-championship';
    case WomensSixNations = 'womens:six-nations';

    public function name(): string
    {
        return match ($this) {
            self::AutumnNations => 'Autumn Nations Series',
            self::BritishAndIrishLionsTour => 'British & Irish Lions Tour',
            self::EuropeanChallengeCup => 'European Challenge Cup',
            self::EuropeanChampionsCup => 'European Champions Cup',
            self::Premiership => 'Gallagher Premiership',
            self::PremiershipCup => 'Gallagher Premiership Cup',
            self::SixNations => 'Six Nations',
            self::U18sPremiership => 'Premiership Rugby Under-18s Academy League',
            self::U20sSixNations => 'Under-20s Six Nations',
            self::UnitedRugbyChampionship => 'United Rugby Championship',
            self::WomensSixNations => 'Women\'s Six Nations',
        };
    }

    public function feedUrl(): string
    {
        return match ($this) {
            self::AutumnNations => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4523&source=sfms&TeamId=',
            self::BritishAndIrishLionsTour => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4462&source=lions&project=lions&TeamId=',
            self::EuropeanChallengeCup => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4530&source=erc&project=epcr&TeamId=',
            self::EuropeanChampionsCup => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4531&source=erc&project=epcr&TeamId=',
            self::Premiership => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4370&source=sfms&project=premier&TeamId={{team}}',
            self::PremiershipCup => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4387&source=sfms&project=premier&TeamId=',
            self::SixNations => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4537&source=sfms&project=sixnations&TeamId={{team}}',
            self::UnitedRugbyChampionship => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4528&source=celtic&project=celtic&TeamId=',
            self::U18sPremiership => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4390&source=sfms&project=premier&TeamId=',
            self::U20sSixNations => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4539&source=sfms&project=sixnations&TeamId=',
            self::WomensSixNations => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4538&source=sfms&project=sixnations&TeamId={{team}}',
        };
    }
}
