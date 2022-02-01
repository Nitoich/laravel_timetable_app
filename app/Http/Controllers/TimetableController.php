<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Timetable;
use App\Models\Group;

use App\Http\Resources\TimetableResource;

class TimetableController extends Controller
{
    public function selectGroupPage() {
        return view('selectGroup', ['groups' => Group::all()]);
    }

    public function getTimetableByGroup($group) {
        $data = [
            'monday' => Timetable::where('group', $group)->where('day', 1)->get(),
            'tuesday' => Timetable::where('group', $group)->where('day', 2)->get(),
            'wednesday' => Timetable::where('group', $group)->where('day', 3)->get(),
            'thursday' => Timetable::where('group', $group)->where('day', 4)->get(),
            'friday' => Timetable::where('group', $group)->where('day', 5)->get(),
            'saturday' => Timetable::where('group', $group)->where('day', 6)->get()
        ];
        return view('timetable', ['data' => $data]);
    }
}
