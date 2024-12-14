// Solution 1: Using a while loop
function foo(array $arr) {
  $i = 0;
  while ($i < count($arr)) {
    if ($arr[$i] === 'something') {
      unset($arr[$i]);
    } else {
      $i++;
    }
  }
  return $arr;
}

// Solution 2: Iterating over a copy
function foo(array $arr) {
  $arrCopy = $arr;
  foreach ($arrCopy as $key => $value) {
    if ($value === 'something') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

// Solution 3: Using array_filter
function foo(array $arr) {
  return array_filter($arr, function ($value) {
    return $value !== 'something';
  });
}

$arr = [1, 2, 'something', 4, 'something', 6];
$result = foo($arr);
print_r($result); //Output: Array ( [0] => 1 [1] => 2 [3] => 4 [5] => 6 )