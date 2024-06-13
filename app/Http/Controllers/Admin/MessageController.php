<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Request $request){
        if ($request->ajax()){
            $query = Message::where('archived',false)->get();
            $table = \DataTables::make($query);
            $table->addColumn('actions',function ($row){
                return '<button class="btn btn-sm btn-light-warning __datatable_archive" data-url="'.route('admin.messages.archive',$row->id).'"> <i class="fa fa-archive"></i> </button>';
            })->rawColumns(['actions']);
            return  $table->make();
        }
        return view('admin.messages.index');
    }
    public function archive(Message $message){
        if(\request()->ajax()){
            $message->update(['archived' => true]);
            return response('Message archivé',200);
        }
    }

    public function archived(Request $request){
        if ($request->ajax()){
            $query = Message::where('archived',true)->get();
            $table = \DataTables::make($query);
            return  $table->make();
        }
        return view('admin.messages.archived');
    }
}
