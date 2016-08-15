<? php

echo '<h1 style="color:green"> Hello World, THis is robo </h1>';

for ($i=0; $i<100; $i++ ){
  if ($i % 2 == 0 ) {
    echo "<span style='color:green'>$i is Even number</span>";
  }else {
    echo "<span style='color:red'>$i is odd number</span>";  
  }
}

?>
