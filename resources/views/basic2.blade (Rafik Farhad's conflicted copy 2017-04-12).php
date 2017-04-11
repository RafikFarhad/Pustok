<!DOCTYPE html>
<html lang="en">
    <head>
        
    </head>
    <body>
        <?php

        $batch = fopen("final.txt", "r") or die("Unable to open file!");

        if($batch==NULL) 
          echo "kichu nai";
        else
    {
      while(!feof($batch)) 
      {

      $bc = fgets($batch);
      $pos1 = strpos($bc, "##");
      $name = substr($bc, 0, $pos1-2);
      $pos2 = strpos($bc, "**");
      $author = substr($bc, $pos1+3, $pos2-$pos1-4);
      $pos3 = strlen($bc);
      $an = substr($bc, $pos2+3, $pos3-$pos2-4);


      echo $name."   ".$author."   ".$an."<br>"; 

      // DB::table('books')->insertGetId(
      //                       [
      //                       'id' => $an,
      //                       'callnumber' => " " , 
      //                       'name' => $name,
      //                       'author' => $author,
      //                       'publication' => " ",
      //                       'edition' => 0,
      //                       'loan_number' => 0,

      //                       ]);
      // $user = new App\User();
      // $user->password = Hash::make($reg);
      // $user->regno = $reg;
      // $user->name = $name;
      // $user->loan_number1 = 0;
      // $user->loan_number2 = 0;

      // $temp_user = DB::table('users')->where('regno', $reg)->first();
      // if($temp_user==NULL)
      //  $user->save();


       }



      //Book::create($request->all());

      }


        ?>
    </body>
</html>
