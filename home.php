<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>High Five</title>
</head>
<body>

<div class="logo">
<img  src="rtu1.png" height= "150px" width= "150px" >
</div>
<div class="logo1">
<img  src="CEIT.png" height= "150px" width= "150px" >
</div>
    
    <h2 class="h2">RIZAL TECHNOLOGICAL UNIVERSITY</h2>
    <h3>College of Engineering, Architecture and Technology
Boni Campus</h3>
<h1>HIGH FIVE</h1>
    <div class="form-container">
        <div class="form-conlayer2">
            <form method="post" action="">
                
                <h2>Enter the appropriate value for the choosen formula.</h2>
                <h2>(Radius/Fahrenheit)</h2>
                <label>Enter Value: </label><input type='text' name='leftvalue'><br><br>
    <br><hr><br>
                <h2>Choose A Formula!</h2>

                <select name="formula">
                    <option value="Circle">Area, Circumference, and Diameter of a Circle</option>
                    <option value="FtoC">Conversion of Fahrenheit to Celsius</option>
                </select>

                <input type="submit" name="Submit" value="Submit">

            </form>

            <?php 
            
            $formula = $_POST['formula'];
            if(isset($_POST['Submit'])){

                

                if($formula=="Circle"){

                    //Area, Circumference and Diameter of Circle
                    $radius = $_POST['leftvalue'];
                    $area = pi()*pow($radius,2);
                    $area2 = round($area, 3);

                    $circumference = 2*pi()*$radius;
                    $circumference2 = round($circumference, 3);

                    $diameter = 2*$radius;
                    $diameter2 = round($diameter, 3);

                    echo "<h2>Answer:</h1>";
                    echo "Entered Radius: ".$radius;
                    echo "<br>Area of Circle: ".$area2;
                    echo "<br>Circumference of Circle: ".$circumference2;
                    echo "<br>Diameter of Circle: ".$diameter2;
                    echo '<br><img class="img1" src="area.png" width="30%"/>';
                }
                else if($formula=="FtoC"){

                    

                    //Fahrenheit to Celsius
                    $fahrenheit = $_POST['leftvalue'];
                    $celsius = ($fahrenheit-32)*5/9;
                    $celsius2 = round($celsius, 3);
                    
                    echo "<h2>Answer:</h1>";
                    echo "Fahrenheit in Celsius is: ".$celsius2;
                    echo '<br><img class="img2" src="farein.png" width="70%"/>';
                    
                }
                

            }
            
            ?>

        </div>
        
        <div class="form-conlayer2">

            <form method="post" action="">

                <h2>Enter the appropriate value for the choosen formula.</h2>
                <h2>(Base-Height/Length-Width)</h2>
                <label>Enter Value1: </label><input type="text" name="rigthvalue1"><br><br>
                <label>Enter Value2: </label><input type="text" name="rightvalue2"><br><br>
    <br><hr><br>
    <h2>Choose A Formula!</h2>
                <select name="formula">
                    <option value="Triangle">Area of a Triangle</option>
                    <option value="Rectangle">Area and Perimeter of a Rectangle</option>
                </select>

                <input type="submit" name="Submit2" value="Submit">

            </form>

            <?php 
            
                if(isset($_POST['Submit2'])){ 


                    if($formula=="Triangle"){
            
                        
            
                        //AREA OF TRIANGLE
                        $baseTriangle = $_POST['rigthvalue1'];
                        $heightTriangle = $_POST['rightvalue2'];
                        $areaTriangle = ($baseTriangle*$heightTriangle)/2;
                        $areaTriangle2 = round($areaTriangle, 3);
            
                        echo '<div color= "white"><h2>Answer:</h1></div>';
                        echo "Area of Triangle: ".$areaTriangle2;
                        echo '<br><img class="img3" src="triangle.png" width="40%"/>';
                        
                    }
                    else if($formula=="Rectangle"){
            
                        //AREA AND PERIMETER OF RECTANGLE 
                        $lengthRectangle = $_POST['rigthvalue1'];
                        $widthRectangle = $_POST['rightvalue2'];
                        $areaRectangle = $lengthRectangle*$widthRectangle;
                        $areaRectangle2 = round($areaRectangle, 3);
            
                        $perimterRectangle = 2*($lengthRectangle+$widthRectangle);
                        $perimeterRectangle2 = round($perimterRectangle, 3);
                    
                        echo "<h2>Answer:</h1>";
                        echo "Area of Rectangle: ".$areaRectangle2;
                        echo "<br>Perimeter of Rectangle: ".$perimeterRectangle2;
                        echo '<br><img class="img3" src="rectangle.png" width="40%"/>';
                    }
            
                }
            
            ?>
        </div>
    </div>
    


    
</body>
</html>
<?php
    
    
?>



