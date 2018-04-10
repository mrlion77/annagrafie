<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {


    public function ajaxProcessContact(Request $request) {

        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');


/*        Mail::send(
            'emails.contact',
            ['message' => $message],
            function ($m) use ($email, $name) {
                $m->from($email, $name);
                $m->to('info@annagrafie.com')->subject('New site visitor contact');
            }
        );*/

        Mail::to('lev.tarkhanov@gmail.com')
            ->send(new Contact($name, $email, $message));

        $response = [
            'ResponseData' => trans('statuses.messageSent')
        ];

        return json_encode($response);
    }

}
