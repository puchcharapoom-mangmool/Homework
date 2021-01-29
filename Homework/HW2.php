<html>
    <head>
        <title>Sum_of_number</title>
    </head>
    <body>
    <center>
        <h1> HW2 : Sum of number </h1>

        <form method="get">
            <p>
                Num 1 : <input type="text" name="num1"><br>
            </p>
            
            <p>
                Operator : <input type="radio" name="operator" value="+"> + 
            <input type="radio" name="operator" value="-"> - 
            <input type="radio" name="operator" value="*"> * 
            <input type="radio" name="operator" value="/"> / 
            <input type="radio" name="operator" value="%"> % <br>

            </p>
            <p>
                Num 2 : <input type="text" name="num2"><br>

            </p>
            <p>
                Operator : <input type="radio" name="operator1" value="+"> + 
                <input type="radio" name="operator1" value="-"> - 
                <input type="radio" name="operator1" value="*"> * 
                <input type="radio" name="operator1" value="/"> / 
                <input type="radio" name="operator1" value="%"> % <br>
    
            </p>
            <p>
                Num 3 : <input type="text" name="num3"><br>
            </p>
            
            
            
            <input name="mild" type="submit">
        </form>
    </center>
     
    <?php
        error_reporting(0);
        if(isset($_GET['mild'])){
            $number1 = intval($_GET["num1"]);
            $number2 = intval($_GET["num2"]);
            $number3 = intval($_GET["num3"]);
            $operator = $_GET["operator"];
            $operator1 = $_GET["operator1"];
            $temp1 = 0;
            $result = 0;
       
           if ($operator == "+")
               $temp1= $number1 + $number2 ;
           if ($operator == "-")
                $temp1=$number1 - $number2 ;
            if ($operator == "*")
                $temp1=$number1 * $number2 ;
           if ($operator == "/")
                $temp1=$number1 / $number2 ;
           if ($operator == "%")
                $temp1=$number1 % $number2 ;
           if ($operator1 == "+"){
                $result = $temp1 + $number3;
                echo "<center><h2>Sum of number " . $result ."<h2></center>";
           } 
           if ($operator1 == "-"){
                $result = $temp1 - $number3;
                echo "<center><h2>Minus of number " . $result ."<h2></center>"; 
           }
           if ($operator1 == "*"){
                $result = $temp1 * $number3;
                echo "<center><h2>Multiple of number " . $result ."<h2></center>"; 
           }
                if ($operator1 == "/"){
                    $result = $temp1 / $number3;
                echo "<center><h2>Division of number " . $result ."<h2></center>"; 
                }
                if ($operator1 == "%"){
                    $result = $temp1 % $number3;
                echo "<center><h2>Modulus of number " . $result ."<h2></center>"; 
                }
            }
           ?>
          
        
    </body>
</html>