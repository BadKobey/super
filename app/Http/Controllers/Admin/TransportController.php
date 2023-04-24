<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Transport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransportController extends Controller
{
    public function index (Request $request)
    {
        $keyword = $request -> get('search');
        $perPage = 5;

        if(!empty ($keyword)){
            $transports = Transport::where('marka', 'LIKE', "%$keyword%" )
            ->orWhere('gos_nomer', 'LIKE', "%$keyword%" )
            ->latest()->paginate($perPage);
        }else{
            $transports = Transport::latest()->paginate($perPage);
        }
        return view('admin.transports.index', ['transports'=>$transports])->with('1',(request()->input('page',1) -1) *5);
    }

    public function create()
    {
        return view('admin.transports.create');
    }

    public function store(Request $request){
        $request->validate([
            'marka' => 'required',
        ]);

        $transport = new Transport();

        $transport->marka = $request->marka;
        $transport->gos_nomer = $request->gos_nomer;

        $transport->save();
        return redirect()->route('transports.index')->with('success', 'Пользователь создан');
    }

    public function edit($id){
        $transport = Transport::findOrFail($id);
        return view('admin.transports.edit', ['transport'=>$transport]);
    }

    public function update(Request $request, Transport $transport){
        $request->validate([
            'marka'=>'required'
        ]);



        $transport = Transport::find($request->hidden_id);

        $transport->marka = $request->marka;
        $transport->gos_nomer = $request->gos_nomer;


        $transport->save();

        return redirect()->route('transports.index')->with('success', 'Пользователь обнавлён');
    }

    public function destroy($id){
        $transport = Transport::findOrFail($id);
        $transport->delete();
        return redirect()->route('transports.index')->with('success', 'Пользователь удалён');
    }
}
