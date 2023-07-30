# PHP Variable Scopes - Static Variables (PHP Tutorial)
Notes
1. Every variable declared within a function has a local scope
2. Variables defined in the global scope can be accessed by using a global keyword to variable or through the associative array called $GLOBALS (SUPER GLOBALS)
3. If possible always avoid use of super globals
4. A local variable has a local scope, which is eventually destroyed when out of scope, a static variable isn't destroyed out of scope it caches it's state within the scope.
