<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

class AccountController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $account = Account::all();
        return view('Account.index', compact($account, 'account'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('Account.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate([
          'name' => 'required',
        ]);
        $account = Account::create([
          'name' => $request->name,
          'url' => $request->url,
          'username' => $request->username,
          'password' => $request->password,
          'WriteGroup' => $request->WriteGroup,
          'ReadGroup' => $request->ReadGroup,
          'Tagid' => $request->Tag,
          'Description' => $request->Description,
          'ChangeQueue' => 0
        ]);
        alert()->success('Account Created', 'Successfully')->toToast();
        return redirect('/accounts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account) {
        return view('Account.view', compact('account', $account));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account) {
        return view('Account.edit', compact('account'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account) {
        if(isset($request->ChangeQueue) ) {
            if ($request->ChangeQueue === '1' || $request->ChangeQueue === '0') {
                $account->ChangeQueue = $request->ChangeQueue;
            } else {
                alert()->error('Error', 'invalid value')->toToast();
                return redirect('/accounts');
            }
        }
        else {
            $account->name = $request->name;
            $account->url = $request->url;
            $account->username = $request->username;
            $account->password = $request->password;
            $account->WriteGroup = $request->WriteGroup;
            $account->ReadGroup = $request->ReadGroup;
            $account->Tagid = $request->Tag;
            $account->Description = $request->Description;
            $account->ChangeQueue = 0;
        }
        $account->save();
        alert()->success('Account Edited', 'Successfully')->toToast();
      return redirect('/accounts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account $account
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Account $account, Request $request) {
        $account->delete();
        alert()->warning('Deleted', 'Notice the entry is still in the database stored. if it needs to be removed completly, contact an adminsitrator')->toToast()->showCloseButton()->autoClose(10000);
        return redirect('/accounts');
    }
}
