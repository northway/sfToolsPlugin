# sfToolsPlugin

Simple tools for Symfony 1.4

###  Git

Git submodule add:

	$ git submodule add https://github.com/northway/sfToolsPlugin.git plugins/sfToolsPlugin

Git submodule update:

	$ git submodule update --remote

### Install

You need to add this line to ProjectConfiguration.class.php:

    $this->enablePlugins('sfToolsPlugin');

Then a Symfony cache clear:

		$ php symfony cc
