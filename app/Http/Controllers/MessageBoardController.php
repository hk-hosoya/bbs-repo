<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MessageBoard; //Modelがデータベースに接続してる

class MessageBoardController extends Controller
{
    public function add()
    {
        return view('MessageBoard.add');
    }

    public function confirm(Request $request)
    {

        if ($request->has('back')) {
            return redirect('/MessageBoard')->withInput();
            //ここ/MessageBoard.addじゃないのはなぜ。web.phpで/MessageBoardにget送信されたらだから？？
        }

        if ($request->has('send')) {
            $new_message = new MessageBoard();
            $new_message->name = $request->name;
            $new_message->phone = $request->phone;
            $new_message->adress = $request->adress;
            $new_message->detail = $request->detail;

            $new_message->save();
            return redirect('/MessageBoard/complete');
        }

        return view('MessageBoard.confirm', compact('request'));
    }

    public function list(Request $request)
    {
        if ($request->has('kensaku')) {
            // dd($request->all());
            $search = $request->search;
            $search_members = MessageBoard::where('name', 'like', '%' . $search . '%')->get();

            return view('MessageBoard.search', compact('search_members'));
        }

        $messages = MessageBoard::all();
        return view('MessageBoard.list', compact(('messages')));
    }

    public function delete($id)
    {
        $message_del = MessageBoard::find($id);
        $message_del->delete();
        return redirect('/MessageBoard/list');
    }

    public function edit($id)
    {
        $message = MessageBoard::find($id);
        return view('MessageBoard.edit', compact('message'));
    }

    public function update(Request $request, $id)
    {
        $message = MessageBoard::find($id);
        $message->name = $request->name;
        $message->phone = $request->phone;
        $message->adress = $request->adress;
        $message->detail = $request->detail;
        $message->save();
        return redirect('/MessageBoard/list');
    }

    // public function search(Request $request)
    // {
    //     $members = MessageBoard::all();
    //     $search = $request->search;
    //     foreach ($members as $search_member) {
    //         $name = MessageBoard::where('name', 'like', '%' . $search . '%');
    //     }
    //     return redirect('/MessageBoard/list');
    // }
}
