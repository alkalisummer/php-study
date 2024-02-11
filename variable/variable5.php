<html>
  <body>
    <?php
      #타입 지정
      $a = 100;
      echo gettype($a);
      settype($a, 'float');
      echo '<br/>';
      echo gettype($a);
      echo '<br/>';
      echo var_dump((string )$a);
      echo '<br/>';
      echo var_dump((array)$a);
      echo '<br/>';
      echo var_dump((object )$a);
      echo '<br/>';
      echo var_dump((float)$a);
      echo '<br/>';
    ?>
  </body>
</html>