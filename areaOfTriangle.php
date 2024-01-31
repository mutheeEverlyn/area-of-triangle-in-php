<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calcuating area of triangle</title>
</head>
<body>
    <form method="post"> 
      <fieldset>
        <legend>calulating area of a triangle</legend>
          Enter base:<br/>
            <input type="number" name="a"><br/><br/>
          Enter height:<br/>
            <input type="number" name="b"><br/><br/>
          Enter hypotenius:<br/>
            <input type="number" name="c"><br/><br/>
            <input type="submit" name="submit" value ="area">
      </fieldset>
    </form>
    <?php
    if(isset($_POST["submit"])){
        $a=$_POST["a"];
        $b=$_POST["b"];
        $c=$_POST["c"];
        $s=($a+$b+$c)/2;
        $area=sqrt($s*($s-$a)*($s-$b)*($s-$c));
        echo"the area of the triangle is:".round($area,3);
    }
    ?>
</body>
</html>