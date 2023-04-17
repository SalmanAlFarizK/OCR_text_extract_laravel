<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use thiagoalessio\TesseractOCR\TesseractOCR;
use App\Models\OCR_;

use Illuminate\Http\Request;

class OCR_COntroller extends Controller
{

    public function extractText(Request $request){

        $image=$request->file('image');
        if($image=="")
        {
            Session::flash('error', 'Please select an image');
            return redirect()->back();
                }
        else{
         $ocr = new TesseractOCR();
         $ocr->image($image);
        $text = $ocr->run();
        //Time sheet Number
          $timesheet_pattern ="/\|group (\d+)/";
          preg_match($timesheet_pattern, $text, $timesheet);
          $time_sheet=$timesheet[1];

          //gmail
              $pattern = '/\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Z]{2,}\b/i';
              preg_match_all($pattern, $text, $email);
              $email_string = implode(', ', $email[0]);
            ;

            //phone number
            $phone_pattern = "/(?<=Phone: )\d{5} \d{6}/";
            preg_match($phone_pattern, $text, $phno);
            $phone_string = $phno[0];
            
            // Declaration
            $declaration_pattern = "/Declaration:(.*)/s";
            preg_match($declaration_pattern, $text, $decl);
            $declaration_string = trim($decl[1]);


            $user = new OCR_;  
            $user->content = $text; 
            $user->Email = $email_string; 
            $user->PhoneNo =  $phone_string; 
            $user->Declaration = $declaration_string; 
            $user->TimesheetNo =  $time_sheet;    
            $user->save();
        //$text=$this->withOutSpeacialCharecters($text);
        //return $text;
            return redirect('stringDisplay');
        }
        
    }

    public function extractHere(){
        $users = OCR_::all();
        // return view('texthere');
        return view('text', ['use' => $users]);
    }
    public function StringDisplay()
    {
        $users=OCR_::orderBy('id','desc')->first();
        return(view('strinSelect',['users' => $users]));
    }
    public function ShowString(Request $request)
    {
        $sample=0;
        $j=0;
        $k=0;
        $string_array=array();
        $str=request('id');
        if($str==""){
            Session::flash('error', 'Please enter the ID');
            return redirect()->back();
        }else{
        $content=OCR_::find($str);
        $string=$content->content;
        $length=strlen($string);
        for($i=0;$i<$length;$i++)
        {
            if($string[$i]==" ")
            {
                $str1="";
               for($p=$j;$p<$i;$p++)
               {
                $str1=$str1.$string[$p];
               }
               $j=$i+1;
               $string_array[$k]=$str1;
               $k++;
            }
        }
        $val=0;
        
        $cons=count($string_array);
        for($i=0;$i<$cons;$i++)
        {
            // echo $string_array[$i];
            // echo "<br>";
            if($string_array[$i]=="NO")
            {
                 $val=$i;
            }
        }
    
        for($i=0;$i<$cons;$i++)
        {
            echo $string_array[$i]." ";
           
        }
    }
}
    public function withOutSpeacialCharecters($text){
        $res = str_replace( array( '\'', '"',
        ',' , ';', '<', '>' ,'$','^','#','%','*','@',':','{','}','/','|','!','~','.'), ' ', $text);
    
        return $res;
    }
}
