function myFunction($a, $b) {
  // Check if variables are defined and are numbers
  if (is_numeric($a) && is_numeric($b)) {
    return $a + $b;
  } else {
    return "Invalid input: Both parameters must be numbers";
  }
}

//Example usage
echo myFunction(10, 5); //Outputs 15
echo myFunction(10, 'hello'); //Outputs Invalid input: Both parameters must be numbers