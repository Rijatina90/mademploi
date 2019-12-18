<?php

namespace App\Http\Controllers;

use App\Candidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class CandidatController extends Controller
{
    public function store(Request $request)
    {
        $validator = $this->validation($request);
        if ($validator->fails()) {
            # code...
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $candidat = Candidat::create($request->all());
        $data['message_motivation'] = "This is Test Mail Tuts Make";
        $mails = array('mangetri.rijatina@gmail.com','mangetri.rijatina@gmail.com');
        Mail::send('emails.email', $data, function ($message) use ($mails) {
            $message->to($mails)->subject('Candidat');
        });
        if (Mail::failures()) {
            return response()->Fail('Sorry! Please try again latter');
        } else {
              return redirect()->back()->with('success', ['message'=>'Candidature avec success!','id_offre' => $request['id_offre']]);
        }
    }

    public function validation($request)
    {
        $vadator = Validator::make($request->all(), [
            'nom_complet'           =>  'required|max:255',
            'telephone'             =>  'required|min:10',
            'email'                 =>  'required|email',
            'message_motivation'    =>  'required',
            'cv'                    =>  'required'
        ]);
        return $vadator;
    }
}
