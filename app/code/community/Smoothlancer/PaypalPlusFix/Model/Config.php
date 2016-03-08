<?php
/**
*
* The MIT License (MIT)
*
* Copyright (c) 2016 smoothlancer
*
* Permission is hereby granted, free of charge, to any person obtaining a copy
* of this software and associated documentation files (the "Software"), to deal
* in the Software without restriction, including without limitation the rights
* to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
* copies of the Software, and to permit persons to whom the Software is
* furnished to do so, subject to the following conditions:
*
* The above copyright notice and this permission notice shall be included in all
* copies or substantial portions of the Software.
* 
* THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
* IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
* FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
* AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
* LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
* OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
* SOFTWARE.
*/
class Smoothlancer_PaypalPlusFix_Model_Config extends Mage_Paypal_Model_Config

{
	
    /**
    * Return list of allowed methods for specified country iso code
    * @MOD add iways paypal plus method to returned array
    *
    * @param string $countryCode 2-letters iso code
    * @return array
    */
    public function getCountryMethods($countryCode = null)
    {
        $countryMethods =  parent:: getCountryMethods($countryCode);

        if ($countryCode === null) {
            foreach($countryMethods as $countryCode => $methodList){
                $countryMethods[$countryCode] []= Iways_PayPalPlus_Model_Payment::METHOD_CODE;	  	
            }
        }else{
           $countryMethods [] = Iways_PayPalPlus_Model_Payment::METHOD_CODE;	
       }

       return $countryMethods;
   }
}