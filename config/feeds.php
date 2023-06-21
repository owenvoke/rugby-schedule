<?php

declare(strict_types=1);

use App\Enums\Competition;

return [

    Competition::AutumnNations->value => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4358&source=sfms&TeamId=',
    Competition::EuropeanChallengeCup->value => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=421&source=erc&project=epcr&TeamId=',
    Competition::EuropeanChampionsCup->value => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=420&source=erc&project=epcr&TeamId=',
    Competition::Premiership->value => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4370&source=sfms&project=premier&TeamId=%s',
    Competition::PremiershipCup->value => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4387&source=sfms&project=premier&TeamId=',
    Competition::SixNations->value => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4360&source=sfms&project=sixnations&TeamId=%s',
    Competition::U18sPremiership->value => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4390&source=sfms&project=premier&TeamId=',
    Competition::U20sSixNations->value => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4371&source=sfms&project=sixnations&TeamId=',
    Competition::WomensSixNations->value => 'https://cdn.soticservers.net/tools/wordpress/ical/calendar.php?CompId=4392&source=sfms&project=sixnations&TeamId=%s',

];
