<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostingRequest;
use App\Models\Posting;

class PostingController extends Controller
{

    public function index(Request $request, Posting $posting)
    {
        $postings = $posting->getPostingsBySearch($request)->orderBy('id', 'desc')->get();
        return view('postings', compact('postings', 'request'))->with(['postings' => $postings, 'request' => $request]);
    }

    public function lastMessage()
    {
        $posting = new Posting;
        return view('main', ['data' => $posting->orderBy('id', 'desc')->take(3)->get()]);
    }


    public function submit(PostingRequest $req)
    {

        $posting = new Posting();
        $posting->name = auth()->user()->name;
        $posting->email = auth()->user()->email;
        $posting->subject = $req->input('subject');
        $posting->message = $req->input('message');

        $posting->save();

        return redirect()->route('posting-data')->with('success', 'Пост успешно добавлен');
    }

    public function allData()
    {
        $posting = new Posting;
        //$name = auth()->user()->name;
        $email = auth()->user()->email;

        return view('posting', ['data' => $posting
            ->where('email', '=', $email)->orderBy('id', 'desc')->get()]);

    }

    public function showOneMessage($id)
    {
        $posting = new Posting;
        return view('posting-one', ['data' => $posting->find($id)]);
    }

    public function updateMessage($id)
    {
        $posting = new Posting;
        return view('posting-update', ['data' => $posting->find($id)]);
    }

    public function updateMessageSubmit($id, PostingRequest $req)
    {

        $posting = Posting::find($id);
        $posting->message = $req->input('message');

        $posting->save();

        return redirect()->route('posting-data-one', $id)->with('success', 'Сообшение обновлено');
    }

    public function deleteMessage($id)
    {
        $posting = Posting::find($id)->delete();
        return redirect()->route('posting-data', $id)->with('success', 'Сообшение удалено!');
    }
}
