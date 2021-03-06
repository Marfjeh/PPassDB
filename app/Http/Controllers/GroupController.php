<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Controllers\LogController;
use App\log;
use Illuminate\Auth;
use Illuminate\Http\Request;

class GroupController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function index() {
        $group = Group::all();
        return view("Group.index", compact('group'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view("Group.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        if (Auth::user()->Role === 3) {
            $group = Group::create([
                'name' => $request->name
            ]);
            alert()->success('Group Created', 'Successfully')->toToast();
            return redirect('/groups');
        } else {
            App::call(LogController::class)->log("Denied access for user trying to add a group in the database");
            abort(403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group) {
        //
    }
}
