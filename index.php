<?php
    //tarife string

    // $name = "mahan";
    // echo $name;

//--------------------------------------------------------------------
    //tarife medare sabet(const)

    // define('NAME' , "mahan");
    // echo strtoupper(NAME);
//--------------------------------------------------------------------
    //array

    // $game = ["cod mobile"  , "assassin creed" , "Rainbow six" , "apex legends"];
    // $rating = array(1,2,3,4,5,6,7,8,9);

    // $mixed = array_merge($game , $rating);
    // print_r($mixed);

    //bryae bedast aordan tedad array
    // echo count($mixed);
//--------------------------------------------------------------------
    //key and value

    // $gameReview = ['best'=> 'witcher' , 'action' => 'red dead' , 'rpg' => 'skyrim'];
    // echo $gameReview['best'];
//--------------------------------------------------------------------
    //array chand bodie

    // $game = [
    //     ['game1' , 'game2' , 'game3'],
    //     ['game4' , 'game5' , 'game6'],
    //     ['game7' , 'game8' , 'game9']
    // ];

    // echo $game[2][1];



//--------------------------------------------------------------------

        //if in php

        // if(7<5){
        //     echo "hello";
        // }elseif(5==5){
        //     echo "goodbay";
        // };

//--------------------------------------------------------------------

//loop in php

//for
        // for ($i=0; $i < 5 ; $i++) { 
        //     echo "hello".'<br>';
        // };
        //--------------------------------------------------------------

        // $game = ['game1' , 'game2' , 'game3'];
        // for($i=0 ; $i<count($game); $i++){
        //     echo $game[$i].'<br>';
        // };
        //--------------------------------------------------------------

//foreach
        // $games = ['game1' , 'game2' , 'game3'];
        // foreach($games as $game){
        //     echo $game .'<br>';
        // };

//while
        // $game = ['game1' , 'game2' , 'game3'];
        // $i = 0;
        // while($i<count($game)){
        //     echo $game[$i].'<br>';
        //     $i++;
        // };
//-----------------------------------------------------------------------------------------------------------------
//function

        //     function sayHello($name){
        //         echo "hello $name".'<br>';
        //     };

        //     sayHello("mahan");
        //     sayHello("qolam");

        //     function sum($a , $b){
        //         $sum = $a + $b;
        //         return $sum;
        //     };

        //    $result = sum(2,6);
        //    echo $result.'<br>';

        //    $result = sum(7,1990);
        //    echo $result.'<br>';

        //    $result = sum(105,89);
        //    echo $result.'<br>';

        //--------------------------------------------------------------------

//variable and scope
        //local variable
            // function myFunc(){
            //     $name = 'mahan';
            //     echo "hello $name";
            // }
            // myFunc();
            //next line error becuase its local variable
            // echo $name;

            //next example
            // function myFunc($name){
            //     echo "hello $name";
            // };
            // myFunc("mahan");
            // next line error becuase its local variable
            // echo $name;
        //-------------------------------------------------------------------
        //global variable

        // $name = 'mahan';

        // function myFunc(){
        //     global $name;
        //     $name = 'poyan';
        //     echo "hello $name".'<br>';
        // };

        // myFunc();
        // echo $name;
        //------------------------------------------------------------------------


//
?>
<!-- ================================================================================= -->


<?php 
    // include('names.php');
    // require('names.php');
?>


<!DOCTYPE html>
<html lang="en">

    <?php 
       include 'Template/header.php';
       include 'Template/footer.php';
    ?> 

</html>