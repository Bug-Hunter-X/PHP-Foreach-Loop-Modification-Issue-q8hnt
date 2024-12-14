# PHP Foreach Loop Modification Issue
This repository demonstrates a common issue encountered when modifying arrays within a foreach loop in PHP.  When you unset elements during iteration, the loop's internal pointer may skip elements unexpectedly. This can lead to incomplete or incorrect array modifications.
The `bug.php` file contains code that showcases the problem. The `bugSolution.php` demonstrates a corrected approach.
This is a common pitfall for PHP developers, so it's crucial to understand and avoid.  The solution shows alternative, safer methods for iterating and modifying arrays.