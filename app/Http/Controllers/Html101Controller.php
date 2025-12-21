<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Html101Controller extends Controller
{
    public function create()
    {
        return view('html101');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'date' => 'required|date',
            'age' => 'nullable|integer|min:0',
            'gender' => 'nullable|string',
            'photo' => 'nullable|file|image|max:2048',
            'address' => 'nullable|string',
            'color' => 'nullable|string',
            'preference' => 'nullable|in:เพื่อชีวิต,ลูกทุ่ง,อื่นๆ',
            'consent' => 'nullable|accepted',
        ]);

        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('photos', 'public');
            $data['photo'] = $path;
        }

        // store in session to display on the view page (no DB required for now)
        session()->flash('form_data', $data);

        return redirect()->route('html101.view');
    }

    public function view()
    {
        $data = session('form_data');
        if (!$data) {
            return redirect()->route('html101.create');
        }

        return view('html101_view', $data);
    }
}
