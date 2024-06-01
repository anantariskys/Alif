<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::latest()->get();
        return view('skills.index', compact('skills'));
    }

    public function create()
    {
        return view('skills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'misal' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $gambar = $request->file('gambar')->store('public/skills');

        Skill::create([
            'nama' => $request->nama,
            'misal' => $request->misal,
            'gambar' => $gambar,
        ]);

        return redirect()->route('skills.index')->with('success', 'Skill berhasil ditambahkan.');
    }

    public function edit(Skill $skill)
    {
        return view('skills.edit', compact('skill'));
    }

    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'nama' => 'required',
            'misal' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $gambar = $skill->gambar;
        if ($request->file('gambar')) {
            Storage::delete($skill->gambar);
            $gambar = $request->file('gambar')->store('public/skills');
        }

        $skill->update([
            'nama' => $request->nama,
            'misal' => $request->misal,
            'gambar' => $gambar,
        ]);

        return redirect()->route('skills.index')->with('success', 'Skill berhasil diperbarui.');
    }

    public function destroy(Skill $skill)
    {
        Storage::delete($skill->gambar);
        $skill->delete();

        return redirect()->route('skills.index')->with('success', 'Skill berhasil dihapus.');
    }
}