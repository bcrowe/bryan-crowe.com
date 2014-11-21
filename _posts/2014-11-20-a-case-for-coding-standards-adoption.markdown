---
layout: post
title:  "A Case for Coding Standards Adoption"
date:   2014-11-20 17:53:00
---

Coding standards play a vital role in the open source world. Most importantly, they negate frivolous bickering between our personal preferences and allow us to move on and get shit done. Not only that, but they allow a large community to resonate on the same frequency as we collectively make leaps and bounds towards our individual cases of carpal tunnel syndrome. But, coding standards can manifest through two avenues: at a personal/tribal level and at the level of a community at large -- which reintroduces frivolous bickering back into the picture. I would like to make a case for letting down our guards, and simply adopting the most widely accepted coding standard, especially within the dictation of a well-respected, democratic and republic governing body.

Implementing home brewed coding standards does not make a project unique; it is not a form of self-expression, nor will earn you "best dressed" in your high school yearbook. Furthermore, coding standards aren't features, or make your code more performant. With this in mind, we can safely say coding standards do not add any value in achieving a project's substantive end-goal.

"Okay, so you've just said they don't add any real value, so why should we care?"

Bike-shedding sucks. No one enjoys bike-shedding, and if you do, you're either a troll or an asshole, or both. Coding standards are a bike-shedder's dream and are a revolving door for anyone and everyone to put their two cents in on something that's easy to weigh-in on, and doesn't achieve anything of real value. If a project doesn't already adopt the popular coding standard, with certainty, there will be a line of people longer than your intestines ready to suggest its adoption. Let's end this needless noise and refocus our efforts on things that make a difference.

Mental shifts suck. Shifting between projects with differing coding standards is a mental wear. After spending a significant amount of time within one standard, we develop muscle memory, and having to double-think after each stroke of a key can become daunting.

The punk rocker in all of us certainly doesn't want to bow down to "the man" and eat the government cheese, but this is not a humanitarian effort, it's simply coding standards. In the spirit of open source, we all want to give something that the community can benefit from. Letting go of our own preferences or our old ways in favor of what the majority sees as acceptable should be entwined with our goals as creators and maintainers of open source projects.

Of course there are some nomenclatures with this idea. 1) The coding standards should be reasonable and should largely only deal with language/driver constructs. This should be inherent to a governing body being a diverse representation of the community. 2) If a project is largely popular, of course you don't want to invalidate existing pull requests. In this case, we should strive to make the adoption in either the next minor version release given there are no backwards-compatible breaks introduced by the standard, or the next major version release if backwards-compatible are introduced by the standard. This is made much easier in framework-agnostic packages, where we have less overhead on releasing minor and major versions.

In the context of PHP, we have a wonderful tool called PHPCS, which I imagine mostly everyone is familiar with. But, if you aren't already aware, there is an automated coding standard fixer as well, which will bring you most of the way there. [PHP-CS-Fixer][php-cs-fixer] makes updating your project to be PSR-2 compliant easy as cake.

Let's drop our personal preferences and play nicely in the community sandbox.

[php-cs-fixer]: https://github.com/FriendsOfPHP/PHP-CS-Fixer
