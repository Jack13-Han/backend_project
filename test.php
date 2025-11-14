<?php



// $file_path= "test.txt";

// $file_stream=fopen($file_path,"r");


// echo fread($file_stream,1024);//file တစ်ခုလုံးကိုဖတ်တဲ့ နေရာမှာသုံးတယ်

// echo fgetc(($file_stream));//file ထဲမှာရှိတဲ့ စာတွေကို တစ်လုံးချင်စီဖတ်တဲ့ method

// echo fgets(($file_stream));

// while (!feof($file_stream)){
//     echo fgets(($file_stream));
// }

// fclose($file_stream);

// if(file_exists($file_path)){
//     echo "File exit";
//     $file_stream=fopen($file_path,"a")

//     fwrite($file_stream,"han")
// }else{
//     echo "File dosen't exit";
// }


class Animal
{


    private $name;

    
    // public function run(){
    //     echo "$this->name is running...";
    // }
    public function __construct(){
        echo "Creating Animal object";
    
        // throw new \Exception('Not implemented');
    }
}

$dog = new Animal();
// $dog->name="bobo";
// $dog->run();
var_dump($dog);
