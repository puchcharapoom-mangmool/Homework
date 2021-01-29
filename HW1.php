<!DOCTYPE HTML>
<html>  
<body>
<!--HTML PART-->
<center>
        <h1>Find_Min_Max_Average </h1>

        <form method="get">
            <p>
                Num 1 : <input type="text" name="num1"><br>
            </p>
            
            
            <p>
                Num 2 : <input type="text" name="num2"><br>

            </p>
           
            <p>
                Num 3 : <input type="text" name="num3"><br>
            </p>

            <p>
                <input type="radio" name="op" value="Minimum"> Minimum <br>
                <input type="radio" name="op" value="Maximum"> Maximum<br>
                <input type="radio" name="op" value="Average"> Average<br>
                
    
            </p>
            
            <input name="submit" type="submit">
            
        </form>
    </center>
    
    <?php
    error_reporting(0);
    //PHP PART
    if(isset($_GET['submit'])){
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $num3 = $_GET["num3"];
    if (empty($num1)or empty($num2) or empty($num3)){
        echo "<h3><center><br>Input Values<h3><center><br>" ;  
    }

        else{
            $operator = $_GET["op"];
            if(empty($operator)) echo "<h3><center><br>OPERATOR INVALID<h3><center><br>";
            else
            $result = 0;
            $min = 0;
            $max = 0;
            
            switch ($operator){
                case 'Minimum' :
           
             $min = min($num1,$num2,$num3) ;  
                echo "<h3><center><br>Minimum number : ".$min."<h3><center><br>";
             break;

                case 'Maximum':

             $max = max($num1,$num2,$num3) ;
             echo "<h3><center><br>Maximum number : ".$max."<br><center><h3>";
             break;

                case 'Average':

             $result = ($num1 + $num2 + $num3) / 3;
                echo "<h3><center><br>Average : " .$result. "<br><center><h3>";
            
             break;
            }
        }
    }  
    ?>
        
</body>
</html>