# Variable, Anonymous, Callable, Closure & Arrow Functions
Notes
Documentation
Variable functions : https://www.php.net/manual/en/functions.variable-functions.php#:~:text=PHP%20supports%20the%20concept%20of,will%20attempt%20to%20execute%20it.

1. PHP supports the concept of variable functions. This means that if a variable name has parentheses appended to it, PHP will look for a function with the same name as whatever the variable evaluates to, and will attempt to execute it.

2. Use of is_callable prevents calling of invalid or non existent variable functions

3. Variable functions won't work with language constructs such as echo, print, unset(), isset(), empty(), include, require and the like. Utilize wrapper functions to make use of any of these constructs as variable functions.

Documentation
Anonymous functions : https://www.php.net/manual/en/functions.anonymous.php

4. Anonymous functions, also known as closures, allow the creation of functions which have no specified name. They are most useful as the value of callable parameters, but they have many other uses.

5.  Assigning a closure to a variable uses the same syntax as any other assignment, including the trailing semicolon.

Documentation
Arrow Functions : https://www.php.net/manual/en/functions.anonymous.php

6. Arrow functions were introduced in PHP 7.4 as a more concise syntax for anonymous functions.

7. With arrow function use of variables from the parent scope is always automatic without use of the 'use' keyword

8. Arrow functions use single expressions

9. Both anonymous functions and arrow functions are implemented using the Closure class.

