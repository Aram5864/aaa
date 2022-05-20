<?php

namespace App\Http\Controllers;
use App\Http\Requests\ContactRequest as RequestsContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class ContactController extends Controller
{
    public function submit(RequestsContactRequest $req){
    
        $contact = new Contact();
        $contact->name=$req->input('name');
        $contact->email=$req->input('email');
        $contact->message=$req->input('message');

        $contact->save();

        return redirect()->route('about')->with('success',"Ձեր հաղորդագրությունը հաջողությամբ գնաց");

    }

    public function contactData()
    {
        $data = new Contact();
        return view('ContactData',['data'=>  $data->all()]);
    }

    public function oneMessage($id)
    {
        $data = new Contact();

        return view('browsData',['data'=>$data->find($id)]);

    }
    public function updatePage($id)
    {
        $data = new Contact();

        return view('update',['data'=>$data->find($id)]);

    }
    public function updateData($id, RequestsContactRequest $req)
    {
        $data = new Contact();
        $m = $data->find($id);

        $m->name = $req->input('name');
        $m->email = $req->input('email');
        $m->message = $req->input('message');

        $m->save();

        return redirect()->route('contact-data-one', $id)->with('success',"update complated !");
    }

    public function deleteData($id)
    {
        $data = new Contact;
        $data->find($id)->delete();

        return redirect()->route('contact-data')->ve;
    }
}
