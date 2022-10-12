<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gardener;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
    
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $keywords = $request->keywords;
            $collection = Gardener::where('project','like','%'.$keywords.'%')->paginate(10);
            return view('pages.admin.crud.list',compact('collection'));
        }
        return view('pages.admin.crud.main');
    }

    
    public function create()
    {
        return view('pages.admin.crud.input',['crud'=>new Gardener]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'project' => 'required',
            'keterangan' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('project')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('project'),
                ]);
            }elseif ($errors->has('keterangan')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('keterangan'),
                ]);
            }
        }
        $crud = new Gardener;
        $crud->project = $request->project;
        $crud->keterangan = $request->keterangan;
        $crud->status = $request->status;
        $crud->save();
        return response()->json([
            'alert' => 'success',
            'message' => 'Data '. $request->project . ' tersimpan',
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        return view('pages.admin.crud.input', compact('crud'));
    }

    public function update(Request $request, Gardener $crud)
    {
        $validator = Validator::make($request->all(), [
            'project' => 'required',
            'keterangan' => 'required',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            if ($errors->has('project')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('project'),
                ]);
            }elseif ($errors->has('keterangan')) {
                return response()->json([
                    'alert' => 'error',
                    'message' => $errors->first('keterangan'),
                ]);
            }
        }
        $crud->project = $request->project;
        $crud->keterangan = $request->keterangan;
        $crud->status = $request->status;
        $crud->update();
        return response()->json([
            'alert' => 'success',
            'message' => 'Data '. $request->project . ' diubah',
        ]);
    }

    public function destroy(Gardener $crud)
    {
        $crud->delete();
        return response()->json([
            'alert' => 'success',
            'message' => 'Data'. $crud->project . ' terhapus',
        ]);
    }
}