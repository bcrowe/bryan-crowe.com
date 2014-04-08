---
layout: post
title:  "CakePHP 3.0 Models"
date:   2014-03-29 15:54:17
---

Models in CakePHP 3.0 have been split into two seperate ideas: Tables and Entities. A Table represents a table in your database which is reminiscent of the all-encapsulating Model classes in previous versions of CakePHP. Table classes reside within "App/Model/Table" and have took on a plural form: `class ArticlesTable extends Table` and `ArticlesTable.php`. Entities on the other hand, represent an individual row within a database table. Entities reside within "App/Model/Entity" and are in singular form: `class Article extends Entity` and `ArticleEntity.php`. This introduces a seperation of concerns.

For example, in CakePHP 2.x you could aquaint a "virtual field" that concatenates two fields together using the "$virtualFields" property within a Model:

Jekyll also offers powerful support for code snippets:

{% highlight php %}
<?php
public $virtualFields = array(
	'full_name' => 'CONCAT(User.first_name, " ", User.last_name)'
);
?>
{% endhighlight %}

But, to aquaint a "virtual field" in CakePHP 3.0, you would define an accessor method within your Entity such as:

{% highlight php %}
<?php
public function getFullName() {
	return $this->_properties['first_name'] . '  ' .
	$this->_properties['last_name'];
}
?>
{% endhighlight %}

This makes `$user->full_name` an accessible property of your result set. Note that the property name is the lowercased and underscored version of the accessor's name.

On the other hand, addresssing associations between Models in CakePHP 2.x you would set the `$hasMany` property something similiar to:

{% highlight php %}
<?php
public $hasMany = array('User');
?>
{% endhighlight %}

But, definfing associations between Models in CakePHP 3.0 is done through Table's initialize method:


{% highlight php %}
<?php
public function initialize(array $config) {
	$this->belongsTo('Users');
}
?>
{% endhighlight %}

[jekyll-gh]: https://github.com/mojombo/jekyll
[jekyll]:    http://jekyllrb.com
