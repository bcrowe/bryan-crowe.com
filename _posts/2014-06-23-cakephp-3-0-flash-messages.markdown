---
layout: post
title:  "CakePHP 3.0 Flash Messages"
date:   2014-06-23 00:33:00
---

Recently, I've had the pleasure of writing the FlashComponent and FlashHelper for the upcoming CakePHP 3.0 release - with some help from some code, ideas, and discussion made in another pull request. In this post, I'll be explaining the rationale behind some of the decisions that were collectively made around flash messages.

1) Flash Methods Removed From Session Classes
---------------------------------------------

Previously, the methods that dealt with flash messages were located within the session classes: Session, SessionComponent, and SessionHelper. While the concept of a flash message does indeed involve the session - the logic behind setting, destroying, and rendering flash messages should not be a concern of a session-related class, thus the FlashComponent and FlashHelper classes were born. 

2) Always Use Elements
----------------------

In previous versions of CakePHP, SessionHelper::flash() rendered the flash message output.  By default, if no element was supplied, it would generate some HTML for you right within the SessionHelper::flash() method.  Instead of doing this, CakePHP's App template now comes with a couple flash elements that can be used out-of-the-box with FlashHelper::render(). These elements are found under the src/Template/Element/Flash directory.

3) Added Verbosity
------------------

The FlashComponent has a __call magic method, which allows you to map the method name to an element name found under the src/Template/Element/Flash directory. In a Controller, the following code would use the info.ctp element to render your flash message:

{% highlight php %}
<?php
$this->Flash->info('Your information was successfully updated.');
?>
{% endhighlight %}

This simply offers a way to make your code more expressive.

For more information on how to use FlashComponent and FlashHelper, check out the [FlashComponent][flash-component] and [FlashHelper][flash-helper] sections of the 3.0 documentation.

[flash-component]: http://book.cakephp.org/3.0/en/controllers/components/flash.html
[flash-helper]: http://book.cakephp.org/3.0/en/views/helpers/flash.html
