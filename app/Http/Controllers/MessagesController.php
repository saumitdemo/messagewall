<?php

namespace App\Http\Controllers;

use App\Messages;
use Illuminate\Http\Request;

/**
 * Controller for the Messages.
 *
 * Class MessagesController
 * @package App\Http\Controllers
 */
class MessagesController extends Controller
{
    /**
     * Displays paginated list of all messages.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request) {
        $allMessages = Messages::orderBy('created_at', 'desc')->paginate(2);
        return view('index', ['messages' => $allMessages]);
    }

    /**
     * Displays the form to add a message.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function add(Request $request) {
        return view('message_add');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAdd(Request $request) {
        $username = $request->get('inputUser');
        $email = $request->get('inputEmail');
        $content = $request->get('inputContent');

        $message = new Messages();
        $message->username = $username;
        $message->email = $email;
        $message->content = $content;

        $message->save();

        return redirect()->route('home');
    }

    /**
     * Delete the message by the given id.
     *
     * @param Request $request
     */
    public function delete($msg_id) {
        Messages::where('id', $msg_id)->delete();

        return redirect()->route('home');
    }
}
