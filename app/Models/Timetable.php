<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;

    protected $with = ['dayInfo'];

    public function subjectInfo() {
        return $this->hasOne(Subject::class, 'id', 'subject');
    }

    public function dayInfo() {
        return $this->hasOne(Day::class, 'id', 'day');
    }

    public function teacherInfo() {
        return $this->hasOne(User::class, 'id', 'teacher');
    }

    public function cabinetInfo() {
        return $this->hasOne(Cabinet::class, 'id', 'cabinet');
    }

    public function groupInfo() {
        return $this->hasOne(Group::class, 'id', 'group');
    }
}
