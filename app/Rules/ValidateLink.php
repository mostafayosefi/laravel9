<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use phpDocumentor\Reflection\Types\Null_;

class ValidateLink implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */

    public function __construct($type_link , $valid )
    {
        $this->type_link = $type_link;
        $this->valid = $valid;
    }


    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value )
    {

        if($this->type_link=='UrlNamesilo'){

        //  return  (preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$value));

        $countDot=0;
         $data = "Two Ts and one F.";
         foreach (count_chars($value, 1) as $char => $count) {
            if(chr($char) =='.'){   $countDot=$count; }
         }


        $www = strpos($value, 'www.');
        $http = strpos($value, 'http://');
        $https = strpos($value, 'https://');

        if($this->valid=='www'){
            $www = strpos($value, 'www.');
            return $www === false;
        }

        if($this->valid=='http'){
            $https = strpos($value, 'http://');
            return $http === false;
        }

        if($this->valid=='https'){
            $https = strpos($value, 'https://');
            return $http === false;
        }

        if($this->valid=='regec_pers'){
            $pattern = "/[آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ]/";
           $patt=preg_match($pattern, $value);
            return $patt === 0;
        }
        if($this->valid=='regec_eng'){
            $pattern = "/[*!@#$%^&*()|}{]/";
           $patt=preg_match($pattern, $value);
            return $patt === 0;
        }


 




        }



    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {

        if($this->type_link=='UrlNamesilo'){


            if($this->valid=='regec_pers'){
                return 'لطفا دامنه را به فرمت انگلیسی وارد نمایید';

            } elseif($this->valid=='regec_eng'){
                return 'لطفا دامنه را به فرمت انگلیسی و بدون نشانه وارد نمایید';

            }else{
                return 'لطفا دامنه را به فرمت صحیح وارد نمایید';

            }


         }
    }
}
