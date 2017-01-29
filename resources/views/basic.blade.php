<!DOCTYPE html>
<html lang="en">
    <head>
        
    </head>
    <body>
        <?php

        $batch = fopen("000.txt", "r") or die("Unable to open file!");

        if($batch==NULL) 
        	echo "kichu nai";
        else
		{
			while(!feof($batch)) 
			{
				// $id = DB::table('users')->insertGetId(
    //                         [
    //                         'bookid' => $request->book_id , 
    //                         'date' => date("Y/m/d"),
    //                         'expiry_date' => date('Y/m/d', strtotime('+5 days')),
    //                         'user' => $request->regno,
    //                         ]);
			$full = fgets($batch);
			$reg = substr($full, 0, 10);
			$name = substr($full, 10);

			  echo $reg . "  ";
			  echo $name . "<br>";

			// $id = DB::table('users')->insertGetId(
   //                          [
   //                          'name' => $name , 
   //                          'regno' => $reg,
   //                          'loan_number1' => 0;
   //                          'loan_number2' => 0;
   //                          ]);
			// $user = new App\User();
			// $user->password = Hash::make($reg);
			// $user->regno = $reg;
			// $user->name = $name;
			// $user->loan_number1 = 0;
			// $user->loan_number2 = 0;

			// $temp_user = DB::table('users')->where('regno', $reg)->first();
			// if($temp_user==NULL)
			// 	$user->save();


			 }



			//Book::create($request->all());

    	}


        ?>
    </body>
</html>
