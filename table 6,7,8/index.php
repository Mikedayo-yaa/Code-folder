<DOCTYPE html>
    <html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="table">
    <?php
 

    function func($arg)  {
  $result = 0;
  for($i=0; $i<$arg; $i++) {
    $result = $result + $i;
  }
  return $result;
}
echo func(5);



    ?>

</div>
    </body>
</html>
</DOCTYPE>