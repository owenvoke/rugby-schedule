# Rugby Schedule

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-github-actions]][link-github-actions]
[![Style CI][ico-styleci]][link-styleci]
[![Total Downloads][ico-downloads]][link-downloads]
[![Buy us a tree][ico-treeware-gifting]][link-treeware-gifting]

**Rugby Schedule** is a command-line tool that keeps you up to date with rugby cup schedules.

## Install

> Requires PHP 8.0 or later

Via Composer

```shell
composer global require owenvoke/rugby-schedule
```

## Usage

The following tournament commands are available:

#### Men's Rugby

- `european-challenge` - [The European Challenge Cup](https://epcrugby.com/challenge-cup)
- `european-champions` - [The European Champions Cup](https://epcrugby.com)
- `premiership` - [The Gallagher Premiership](https://premiershiprugby.com/gallagher-premiership)
- `premiership-cup` - [The Gallagher Premiership Cup](https://premiershiprugby.com/premiership-rugby-cup)
- `premiership-sevens` - The Gallagher Premiership 7s
- `premiership-shield` - [The Gallagher Premiership Shield](https://premiershiprugby.com/premiership-rugby-shield)
- `six-nations` - [Six Nations](https://sixnationsrugby.com)

#### Women's Rugby

- `womens:six-nations` - [Women's Six Nations](https://womens.sixnationsrugby.com)

See the output of `rugby-schedule` for all available commands and their usage, or use `--help` to display extended usage information for a specific command.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

```shell
composer test
```

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email security@voke.dev instead of using the issue tracker.

## Credits

- [Owen Voke][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Treeware

You're free to use this package, but if it makes it to your production environment you are required to buy the world a tree.

It’s now common knowledge that one of the best tools to tackle the climate crisis and keep our temperatures from rising above 1.5C is to plant trees. If you support this package and contribute to the Treeware forest you’ll be creating employment for local families and restoring wildlife habitats.

You can buy trees [here][link-treeware-gifting].

Read more about Treeware at [treeware.earth][link-treeware].

[ico-version]: https://img.shields.io/packagist/v/owenvoke/rugby-schedule.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-github-actions]: https://img.shields.io/github/workflow/status/owenvoke/rugby-schedule/Static%20Analysis.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/471038401/shield
[ico-downloads]: https://img.shields.io/packagist/dt/owenvoke/rugby-schedule.svg?style=flat-square
[ico-treeware-gifting]: https://img.shields.io/badge/Treeware-%F0%9F%8C%B3-lightgreen?style=flat-square

[link-packagist]: https://packagist.org/packages/owenvoke/rugby-schedule
[link-github-actions]: https://github.com/owenvoke/rugby-schedule/actions
[link-styleci]: https://styleci.io/repos/471038401
[link-downloads]: https://packagist.org/packages/owenvoke/rugby-schedule
[link-treeware]: https://treeware.earth
[link-treeware-gifting]: https://ecologi.com/owenvoke?gift-trees
[link-author]: https://github.com/owenvoke
[link-contributors]: ../../contributors
