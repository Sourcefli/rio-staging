<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamDetailsController extends Controller
{
    public function update(Request $request, $member) {
        $newName = $request->input('new_name');

        $lookupKey = '' . $member . '_fullName';

//        dd("New Name is " . $newName, "Lookup Key is " . $lookupKey);
        option([$lookupKey => $newName]);

        $successMessage = $newName . ' successfully updated';

        return response()->json([
            'message' => 'Member successfully updated!',
            'name' => $newName
        ]);
    }
}
