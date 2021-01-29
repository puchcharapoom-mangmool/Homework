<html>  
    <head>  
      <title>Cal_Grade_Period_Average</title>
    </head>
<body>
    <center>
        <h1> HW4 : Cal Grade Period Average (GPA) </h1>
        <form action="HW4_Pro.php" method="post">
        <?php
          for($i =1;$i<6;$i++):
        ?>
        <p>
            Name subject <?=$i?> : <input type="text" name="name<?=$i?>">
            Unit :<select name="unit<?=$i?>" id="" onchange="">
            <option value="1" >1</option>
              <option value="2" >2</option>
              <option value="3" >3</option>
            </select>
            Grade : <select name="grade<?=$i?>" id="" onchange="">
                <option value="4.0" >A</option>
                <option value="3.5" >B+</option>
                <option value="3.0" >B</option>
                <option value="2.5" >C+</option>
                <option value="2.0" >C</option>
                <option value="1.5" >D+</option>
                <option value="1.0" >D</option>
                <option value="0.0" >F</option>
              </select><br>
        </p>
        <?php endfor; ?>
            <input type="submit">
        </form>
    </center>
     
</body>
</html>