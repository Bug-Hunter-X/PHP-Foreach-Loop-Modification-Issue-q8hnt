function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'something') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = [1, 2, 'something', 4, 'something', 6];
$result = foo($arr);
print_r($result); //Output: Array ( [0] => 1 [1] => 2 [3] => 4 [5] => 6 )

//The issue arises because the foreach loop iterates over a copy of the array's keys, which are not updated when elements are removed.
//In this case,the keys will be 0,1,2,3,4,5 and even after removing element at index 2 and 4, foreach will continue with the keys.
