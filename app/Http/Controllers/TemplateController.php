<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        $templates = Template::all();

        $totalTemplates = Template::count();
        return view('admin.template', compact('templates', 'totalTemplates'));
    }

    public function store(Request $request)
    {
        $template = new Template();
        $template->nama = $request->input('namaTemplate');
        $template->save();

        return redirect()->route('admin-addtemplate')->with('success', 'Template baru berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $templates = Template::find($id);
        return view('admin.edit-template', compact('templates'));
    }

    public function update(Request $request, $id)
    {
        $template = Template::find($id);

        $template->nama = $request->input('namaBaru'); // 'nama' sesuai dengan nama input pada formulir
        $template->save();

        return redirect()->route('admin-addtemplate')->with('success', 'Nama template berhasil diperbarui.');
    }

    public function delete($id)
    {
        $template = Template::find($id);

        if (!$template) {
            return redirect()->route('admin-addtemplate')->with('error', 'Data template tidak ditemukan.');
        }

        $template->delete();

        return redirect()->route('admin-addtemplate')->with('success', 'Data template berhasil dihapus.');
    }
}
