<?php

    /*This function prevents malicious users enter multiple email addresses into the email box
    *It makes sure that only one email is entered into the email box.
    */
    function spamcheck($field)
    {
    //filter_var() sanitizes the e-mail
    //address using FILTER_SANITIZE_EMAIL. It removes all illegal email characters
    $field=filter_var($field, FILTER_SANITIZE_EMAIL);

    //filter_var() validates the e-mail
    //address using FILTER_VALIDATE_EMAIL
    if(filter_var($field, FILTER_VALIDATE_EMAIL))
        {
        return TRUE;
        }
    else
        {
        return FALSE;
        }
    }

    /* This function will generate a list of birth years based on the current year.
    * It will start from the current year and provide a 100 year list in decending order.
    * The parameter $bo is the default selected year.
    */
    function birthOptionList($bo){

        $today = getdate();
        $thisYear = $today['year'];
        $list = "";
        for($i = $thisYear; $i > ($thisYear - 100); $i--){
            if ($i == $bo)
                $list = $list."<option value=\"".$i."\" selected = \"selected\">".$i."</option>" ;
            else  $list = $list."<option value=\"".$i."\">".$i."</option>" ;
        }
        return $list;

    }

?>