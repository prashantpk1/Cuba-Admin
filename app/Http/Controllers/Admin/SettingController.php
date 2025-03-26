<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        return view('Admin.Settings.index', compact('settings'));
    }

    public function edit()
    {
        $settings = Setting::first();
        return view('Admin.Settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'contact_number' => 'nullable|string|max:20',
            'whatsapp_number' => 'nullable|string|max:20',
            'facebook' => 'nullable|url|max:255',
            'twitter' => 'nullable|url|max:255',
            'linkedin' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'google_play' => 'nullable|url|max:255',
            'play_store' => 'nullable|url|max:255',
            'about_us' => 'nullable|string', 
        ]);

        $settings = Setting::first();

        if ($request->hasFile('logo')) 
        {
            if ($settings->logo && Storage::exists('public/settinglogo/' . $settings->logo)) {
                Storage::delete('public/settinglogo/' . $settings->logo);
            }

            $filename = time() . '-' . $request->file('logo')->getClientOriginalName();
            $path = $request->file('logo')->move('public/settinglogo', $filename);
            $settings->logo = $filename;
        }

        // Update other settings
        $settings->address = $request->input('address');
        $settings->email = $request->input('email');
        $settings->contact_number = $request->input('contact_number');
        $settings->whatsapp_number = $request->input('whatsapp_number');
        $settings->facebook = $request->input('facebook');
        $settings->twitter = $request->input('twitter');
        $settings->linkedin = $request->input('linkedin');
        $settings->instagram = $request->input('instagram');
        $settings->google_play = $request->input('google_play');
        $settings->play_store = $request->input('play_store');
        $settings->about_us = $request->input('about_us'); 
        $settings->save();

        return redirect()->back()->with('success', 'Settings updated successfully!');
    }
}