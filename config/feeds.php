<?php

declare(strict_types=1);

use App\Enums\Competition;

return [

    Competition::AutumnNations->value => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4523&source=sfms&TeamId=',
    Competition::BritishAndIrishLionsTour->value => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4462&source=lions&project=lions&TeamId=',
    Competition::EuropeanChallengeCup->value => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4530&source=erc&project=epcr&TeamId=',
    Competition::EuropeanChampionsCup->value => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4531&source=erc&project=epcr&TeamId=',
    Competition::Premiership->value => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4370&source=sfms&project=premier&TeamId={{team}}',
    Competition::PremiershipCup->value => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4387&source=sfms&project=premier&TeamId=',
    Competition::SixNations->value => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4537&source=sfms&project=sixnations&TeamId={{team}}',
    Competition::UnitedRugbyChampionship->value => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4528&source=celtic&project=celtic&TeamId=',
    Competition::U18sPremiership->value => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4390&source=sfms&project=premier&TeamId=',
    Competition::U20sSixNations->value => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4539&source=sfms&project=sixnations&TeamId=',
    Competition::WomensSixNations->value => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4538&source=sfms&project=sixnations&TeamId={{team}}',

];
