# Strategy Design Pattern in PHP

The code of this example is based on the [Laracasts](https://laracasts.com/) lesson on the [Strategy Pattern](https://laracasts.com/series/design-patterns-in-php/episodes/4).

The pattern is used to encapsulate a family of algorithms within an interface and then use that interface when that family of functionality is required. Through polymorphism, we can use different implementations of the same interface according to our needs.

In this example, there is a Logger interface that provides a uniform interface that guarantees the possibility to use different services to log information based on the class that is passed to the App class. The App class has a log method that accepts arguments of type Logger; this way, it is possible to pass any class that implements the Logger interface.

## Info

You could run the code in your local environment by cloning the repo:

`git clone https://github.com/federico-boncaldo/strategy-pattern-php.git`

and from command line running:

`php index.php`

## Requirements

PHP 5 or greater