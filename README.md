Strange interaction Baseline and ignoreErrors
===============================================

Explanation
-----------------------------------
The reason of this is repo is to reproduce a strange interaction between phpstan baseline file and
ignoreErrors config.

The file `tests/AdderTest.php` have 2 errors with message: `"#^Call to an undefined method Kata\\\\Adder\\:\\:suma\\(\\)\\.$#"` 
One in the baseline the other no, phpstan is configured with 
`ignoreErrors:
'#^Call to an undefined method Kata\\Adder\:\:suma\(\)\.$#'`

Running phpstan with the baseline file returns 
`Ignored error pattern #^Call to an undefined method
Kata\\Adder\:\:suma\(\)\.$# in path /app/tests/AdderTest.php is expected to occur 1 time, but occurred 2 times.` 
without baseline  returns 3 existing errors but no the ignored one

Environment setup
=================
After cloning the repo, run `docker-compose run composer install` to install dependencies.

Examples
=====

With baseline run:
` docker compose run php bin/phpstan -cphpstan-with-baseline.neon`

without baseline run:

`docker compose run php bin/phpstan`

