<?php

namespace App\Http\Controllers;

use App\Disneyplus;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Http\Request;
use Svg\Tag\Rect;

class DisneyplusController extends Controller
{
    public function index()
    {
        $shows = Disneyplus::all();

        return view('index', compact('shows'));
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'show_name' => 'required|max:255',
            'series' => 'required|max:255',
            'lead_actor' => 'required|max:255',
        ]);
        Disneyplus::create($request->all());

        return redirect("/disneyplus/{$request->id}");
    }

    public function show($id)
    {
        $show = Disneyplus::find($id);
        return view('show', [
            'show' => $show
        ]);
    }

    public function downloadPDF($id)
    {
        $show = Disneyplus::find($id);

        $pdf = \PDF::loadView('pdf', compact('show'));

        return $pdf->stream('disney.pdf');
    }
}
