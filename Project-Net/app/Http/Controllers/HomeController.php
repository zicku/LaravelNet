<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage; 


class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data = User::query();
    
        // Search functionality
        if ($request->get('search')) {
            $data = $data->where('name', 'LIKE', '%' . $request->get('search') . '%')
                         ->orWhere('email', 'LIKE', '%' . $request->get('search') . '%');
        }
    
        // Sorting functionality
        $sortField = $request->get('sortField', 'id');
        $sortDirection = $request->get('sortDirection', 'asc');
    
        $data = $data->orderBy($sortField, $sortDirection)->get();
        $pageTitle = 'Dashboard';
    
        return view('dasboard', compact('data', 'request', 'sortField', 'sortDirection', 'pageTitle'));
    }
    

    public function create()
    {
        $pageTitle = 'Create User';

        return view('create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'photo' => 'required|mimetypes:image/png,image/jpeg|max:2048',
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails())
            return redirect()->back()->withInput()->withErrors($validator);

           
        $photo = $request->file('photo');
        $filename = date('Y-m-d') . $photo->getClientOriginalName();


        $path='photo-user/'.$filename;
        Storage::disk('public')->put($path, file_get_contents($photo));

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['image'] = $filename;

        User::create($data);
        return redirect()->route('index');
    }

    public function edit(Request $request,$id){
        $data = User::find($id);
        $pageTitle = 'Edit Data User';

        return view('edit',compact('data','pageTitle'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'nullable|min:8',
            'photo' => 'nullable|mimetypes:image/png,image/jpeg|max:2048',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    
        $data['name'] = $request->name;
        $data['email'] = $request->email;
    
        if ($request->password) {
            $data['password'] = Hash::make($request->password);
        }
    
        // Handle photo upload
        if ($request->hasFile('photo')) {
            $uploadedPhoto = $request->file('photo');
            $filename = date('Y-m-d') . $uploadedPhoto->getClientOriginalName();
            $path = 'photo-user/' . $filename;
            Storage::disk('public')->put($path, file_get_contents($uploadedPhoto));
            $data['image'] = $filename;
        }
    
        User::whereId($id)->update($data);
    
        return redirect()->route('index');
    }
    

    public function delete(Request $request,$id){
        $data = User::find($id);

        if ($data){
            $data->delete();
        }
        return redirect()->route('index');
    }
}