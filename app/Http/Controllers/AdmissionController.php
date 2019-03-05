<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;
use App\Jobs\MailAfterLead;

class AdmissionController extends Controller
{

    public function index()
    {    
        return view('admission.index');
    }

    public function save(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:4|max:50',
            'mail' => 'required|email|max:50',
            'message' => 'required'
        ]);

        $lead = new Lead;
        $lead->fill($validatedData);

        $lead->save();

        //\Log::info('è stato inviato un nuovo messaggio : ' . $lead);

        MailAfterLead::dispatch($lead);

        $message = 'Grazie per aver lasciato il messaggio';

        return view('admission.index', compact('message'));
    }

}
