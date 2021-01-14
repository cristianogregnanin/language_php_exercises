<?php





public class ArrayManager(){


    private $numbers;


    


    public function __construct($numbers){


        this->$numbers = $numbers


    }


    


    public static function ricercaDicotomica($numbers){


        $numeri=array(2,3,5,9,11,14,21,23,34,37,45,56,59,67,87,90,94,123);


        $number=21;


        


        $inf=0;


        $sup=count($numbers)-1;


        $center=($inf+$sup)/2;


        


        for ($i=$center;$i<count($numbers),$i++){


            if($number==$numbers[$center])


                return $center;


                


            if($number>$numbers[$center]){


                $inf=$center+1;


                $center=($inf+$sup)/2;


            }else{


                $sup=$center-1;


                $center=($inf+$sup)/2;


            }


        }


        


        return -1;


        


    }


}





