<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Redirect;
use Session;
use Auth;
use Mail;

class Mailer extends Model
{
    use HasFactory;
    public static function mail($subject, $email, $name, $message){

        //The Generic mailler Goes here
        $data = array(
            'content'=>$message,
        );

        $FromVariable = $email;
        $FromVariableName = $name;

        $toVariable = "info@halisiafricadiscoveries.com";
        $toVariableName = "Halisi Africa Discoveries";


        Mail::send('mail', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('albertmuhatia@gmail.com')->subject($subject);
        });
    }
}
