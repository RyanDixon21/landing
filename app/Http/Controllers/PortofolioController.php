<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        return view('portfolio.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ]);

        $imagePath = $request->file('image')->store('portfolio_images', 'public');

        Portfolio::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('portfolio.index')->with('success', 'Portofolio berhasil ditambahkan.');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('portfolio_images', 'public');
            $portfolio->update([
                'image' => $imagePath,
            ]);
        }

        $portfolio->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('portfolio.index')->with('success', 'Portofolio berhasil diperbarui.');
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->route('portfolio.index')->with('success', 'Portofolio berhasil dihapus.');
    }
}
