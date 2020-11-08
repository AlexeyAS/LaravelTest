<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Posting;

class UserController extends Controller
{
    public function index(Request $request, User $user, Posting $posting)
    {
        $users = $user->getUsersBySearch($request)->paginate(3)->appends('name', $request['name'])->appends('email', $request['email']);

        foreach ($users as $user) {
            $name = $user->name;
            $postings[$name] = $posting->where('name', '=', $name)->orderBy('created_at', 'desc')->get();
            $postings[$name]['count'] = count($postings[$name]);
            $postings[$name]['created_at'] = $postings[$name]->take(1)->pluck('created_at');

            //HACK FOR datetime format('d-M-Y H:i:s')
            if ($postings[$name]['created_at'] == '[null]') {
                $postings[$name]['created_at'] = '-';
            } else {
                    $explode = explode('T',explode('.000000Z"]',explode('["',$postings[$name]['created_at'])[1])[0]);

                $postings[$name]['created_at'] = $explode[0] . PHP_EOL . $explode[1];
            }
            //END HACK FOR datetime format('d-M-Y H:i:s')
        }

        return view('users', compact('users', 'request', 'postings'))->with(['users' => $users, 'request' => $request, 'postings' => $postings]);
    }
}
