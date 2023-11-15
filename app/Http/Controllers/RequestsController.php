<?php

namespace App\Http\Controllers;
use App\Models\Client as ClientModel;
use App\Models\Request as RequestModel;
use App\Models\Tenant as TenantModel;
class RequestsController extends Controller
{
    public function index()
    {

        $requests = RequestModel::all();
        return view('requests.index', ['requests' => $requests]);

    }

    public function view($id) {

        $request = RequestModel::where('id',$id)->first();
        $client = ClientModel::where('id',$id)->first();
        $tenant = TenantModel::where('id',$id)->first();
        return view('requests.view', ['request' => $request, 'client' => $client, 'tenant'=>$tenant  ]);
        

    }


    public function create()
    {
        return view('requests.create');
    }

    public function edit($id) {

        $request = RequestModel::where('id',$id)->first();
        return view('requests.edit', ['request' => $request]);


    }
    public function createPost(RequestModel $request) {

        
        $array = $this->extractDataFromRequest($request);

        // ulozime do db

        $request = RequestModel::create($array);


        return redirect($request->getViewLink());

    }

    public function editPost(RequestModel $request) {

        $id = $request->input('id');
        $array = $this->extractDataFromRequest($request);


        // ulozime do db
        $request = RequestModel::find($id);
        if($request) {
            $request->update($array);
        }

        return redirect($request->getViewLink());

    }

    public function deletePost(RequestModel $request) {

        $id = $request->input('id');

        // ulozime do db
        $request = RequestModel::find($id);
        if($request) {
            $request->delete();
        }

        return redirect(route('requests.index'));

    }

    public function extractDataFromRequest(RequestModel $request) {

        $array = [
            'id'=> $request->input('id'),
            'request' => $request->input('request'),
        ];

        return $array;

    }

}