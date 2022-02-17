<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidateRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($valid)
    {
        $this->valid = $valid;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {

        if($this->valid=='regec_eng'){
            $pattern = "/[*!@#$%^&*()|}{آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ]/";
           $patt=preg_match($pattern, $value);
            return $patt === 0;
        }

        if($this->valid=='ip'){


            $pattern = "/^(((?=(?>.*?(::))(?!.+3)))3?|([dA-F]{1,4}(3|:(?!$)|$)|2))(?4){5}((?4){2}|((2[0-4]|1d|[1-9])?d|25[0-5])(.(?7)){3})z/i";
                $patt=preg_match($pattern, $value);
                 return $patt === false;


        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        if($this->valid=='regec_eng'){
            return 'لطفا :attribute را به فرمت انگلیسی و بدون نشانه وارد نمایید';

        }
    }
}
