<!-- A function is a block of statements that can be used repeatedly in a program.
A function will not execute automatically when a page loads.
A function will be executed by a call to the function. -->


<!-- In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.

When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used: -->


function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;


<!-- By using the ... operator in front of the function parameter, the function accepts an unknown number of arguments. This is also called a variadic function. -->

<!-- One way is to insert the & character in the assignment to assign the item value by reference, and thereby
  making sure that any changes done with the array item inside the loop will be done to the original array: -->

  $cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}
unset($x);
var_dump($cars);
<!-- Note: Remember to add the unset() function after the loop. -->