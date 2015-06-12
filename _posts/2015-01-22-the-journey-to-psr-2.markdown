---
layout: post
title:  "The Journey to PSR-2"
date:   2015-01-22 23:25:00
---

It's not news that CakePHP 3.0 is now [PSR-2][psr-2] compliant. What started as
a couple GitHub issues suggesting adopting one or two of PSR-2's styles,
ultimately fell into the consideration of wholly adopting PSR-2 as a base for
our coding standards. Naturally, given CakePHP's history of having its own
opinionated coding standards, coupled with a mass of users and contributors
seasoned to them, a Category 1 shit-storm ensued. A call to arms emanated,
loading our muskets with tabs, and sharping our space-imbued swords. An
honorable battle was fought, and between a majority core team vote and community
feedback, the battle was short-lived and our comradery was restored.

Outside of CakePHP being PSR-2 compliant, we augment PSR-2 with a set of
[our own coding standards][cake-cs], which do not conflict with PSR-2's
standards, keeping the twinkle in our eyes.

There are two noteworthy tools that aide in converting a code base's coding
standards, [PHP-CS-Fixer][php-cs-fixer], and
[PHPCBF (PHP Code Beautifier)][phpcs] which is included with
[PHP_CodeSniffer][phpcs]. Converting CakePHP's 200k+ lines of code proved to be
an interesting task. In light of CakePHP's large code base nearly violating all
of PSR-2's rules, we ended up needing both of the fore-mentioned tools. Each
tool brought CakePHP 98% of the way to PSR-2 compliance with a small disparity
of specific rule fixers between the two, but with the size of CakePHP the last
2% required a metric fuck-ton of by-hand fixes. The solution was to run both
tools on the code base:

{% highlight bash %}
composer global require squizlabs/php_codesniffer
composer global require fabpot/php-cs-fixer

echo 'export PATH=~/.composer/vendor/bin:$PATH' >> ~/.(bash_profile or zshrc)

php-cs-fixer fix ~/Projects/cakephp/src --fixers=phpdoc_indent -vv
php-cs-fixer fix ~/Projects/cakephp/src --level=psr2 -vv
phpcbf -v --standard=psr2 --extensions=php ~/Projects/cakephp/src
{% endhighlight %}

You'll notice the "phpdoc_indent" fixer which is initially run. We discovered
that docblocks weren't being indented correctly with PHP-CS-Fixer, which led to
an [issue][phpdoc-indent-issue] filed by Mark Scherer and a new
[fixer added][phpdoc-indent-pr] by Marc Yypes. Shortly after, we learned that
PHPCBF correctly handled docblock indentations adding the --tab-width=4 flag.

In summation, either of the coding standard fixer tools will bring mostly any
project to PSR-2 compliance with little effort involved. It is only whenever you
are dealing with a massive code base that you may have to run both tools in
order to save a few hours of by-hand fixes. It is worth mentioning that
Graham Campbell is actively working on patching up the missing bits of
PHP-CS-Fixer, giving PHP-CS-Fixer a bright future of a one stop shop. But keep
in mind, as of now, each of these tools have a fixer or two that the other
doesn't. Happy standardizing.

[phpcs]: https://github.com/squizlabs/PHP_CodeSniffer
[php-cs-fixer]: https://github.com/FriendsOfPHP/PHP-CS-Fixer
[psr-2]: http://www.php-fig.org/psr/psr-2/
[cake-cs]: http://book.cakephp.org/3.0/en/contributing/cakephp-coding-conventions.html
[phpdoc-indent-issue]: https://github.com/FriendsOfPHP/PHP-CS-Fixer/issues/833
[phpdoc-indent-pr]: https://github.com/FriendsOfPHP/PHP-CS-Fixer/pull/834
