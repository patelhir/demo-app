<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Merchant;
use Exception;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Merchant $merchant)
    {

        $notes = $merchant->notes()->latest()->get();
        return view('notes.index', compact('merchant', 'notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Note $note)
    {
        $merchants = Merchant::all();
        return view('notes.create', ['merchants' => $merchants], compact('merchants'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Merchant $merchant)
    {
        try {
           
            $request->validate([
                'content' => 'required|string',
                'merchant_id' => 'required|exists:merchants,id',
            ]);

            Note::create([
                'content' => $request->content,
                'merchant_id' => $request->merchant_id,
            ]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }


        return redirect()->route('merchants.notes.index', ['merchant' => $request->merchant_id])->with('success', 'Note created.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return view('notes.show', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(Note $notes, $id)
    {
        $notes = Note::findOrFail($id);
        $merchants = Merchant::all();
        return view('notes.edit', ['merchants' => $merchants,'selectedMerchantId'=>$notes->merchant_id], compact('notes'));
    }

    public function update(Request $request, $id, Note $notes)
    {

        $request->validate([
            'content' => 'required|string',
        ]);

        $note = Note::find($id);
        $note->update($request->only('content'));

        return redirect()->route('merchants.notes.index', ['merchant' => 1])->with('success', 'Note updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note, Merchant $merchant)
    {
        $merchant_id = $note->merchant_id;
        $note->delete();
        return redirect()->route('merchants.notes.index', ['merchant' => $merchant_id])->with('success', 'Note deleted successfully.');
    }
}
