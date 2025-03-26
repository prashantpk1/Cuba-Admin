<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Models\Translation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class TranslationController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            // $data = Translation::latest()->get();
            $data = Translation::where('lang', "en")->latest()->get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = "";
                    $btn = $btn . '<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                  <div class="btn-group" role="group">
                    <button class="btn btn-light dropdown-toggle text-primary" id="btnGroupDrop1" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">';

                    $btn = $btn . '<a class="edit-data dropdown-item"  href="javascript:void(0)" title="' . translate('Edit') . '" data-url="' . route('translation.edit', $row->id) . '">' . translate('Edit') . '</a>';
                    $btn = $btn . '<a href="" data-url="' . route('translation.destroy', $row->lang_key) . '" class="dropdown-item destroy-data" title="' . translate('Delete') . '">' . translate('Delete') . '</a>';

                    $btn = $btn . '</div>
                  </div>
                </div>';
                    return $btn;
                })
                ->addColumn('key', function ($row) {
                    return Str::limit($row->lang_value, '50');
                })
                ->rawColumns(['action', 'name_en', 'status'])
                ->make(true);
        }
        return view('Admin.Translation.index');
    }


    public function create()
    {
        return response()->json(view('Admin.Translation.create')->render());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $languages = getlanguages(); // Fetch available languages

        // Define validation rules
        $rules = [
            'key' => 'required|string|max:255|unique:platform_keys,key',
        ];

        // Add validation for each language dynamically
        foreach ($languages as $lang) {
            $rules[$lang['lang_code'] . '._value'] = 'required|string|max:255';
        }

        // Validate request
        $request->validate($rules);


        $key = preg_replace('/[^A-Za-z0-9\_]/', '', str_replace(' ', '_', strtolower($request->key)));


        foreach ($languages as $lang) {
            $langCode = $lang['lang_code'];
            $langValue = $request->input($langCode . '_value');

            if ($langValue) {
                Translation::updateOrCreate(
                    [
                        "lang" => $langCode,
                        "lang_key" => $key,
                    ],
                    [
                        "lang" => $langCode,
                        "lang_key" => $key,
                        "lang_value" => $langValue,
                    ]
                );
            }
        }

        // Clear cache for all translations
        foreach ($languages as $lang) {
            Cache::forget('translations-' . $lang['lang_code']);
        }
        return response()->json(["status" => 1, "success" => translate('Translation added successfully')]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $data = Translation::find($id);
        $translation = Translation::where('lang_key', $data['lang_key'])->get();
        return response()->json(view('Admin.Translation.edit', compact("data", "translation"))->render());
    }

    /** 
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {


        $languages = getlanguages(); // Fetch available languages

        // Add validation for each language dynamically
        foreach ($languages as $lang) {
            $rules[$lang['lang_code'] . '_value'] = 'required|string|max:255';
        }

        // Validate request
        $request->validate($rules);

        $data = Translation::where('lang_key', $id)->first();

        if (!$data) {
            return response()->json(["status" => 0, "error" => translate("Translation not found")]);
        }

        // Loop through all available languages and update or create translations
        foreach ($languages as $lang) {
            $langCode = $lang['lang_code'];
            $langValue = $request->input("{$langCode}_value");

            Translation::updateOrCreate(
                [
                    "lang" => $langCode,
                    "lang_key" => $data->lang_key,
                ],
                [
                    "lang_value" => $langValue,
                ]
            );
        }

        // Clear cache for all translations
        foreach ($languages as $lang) {
            Cache::forget('translations-' . $lang['lang_code']);
        }

        return response()->json(["status" => 1, "success" => translate('Translation updated successfully')]);
    }

    public function destroy(string $id)
    {
        //
        try {
            DB::beginTransaction();
            $data = Translation::where('lang_key', $id)->first();
            $data->delete();
            DB::commit(); // Commit Transaction
            return response()->json(['status' => '1', 'success' => translate('Translation deleted successfully')]);
        } catch (\Exception $e) {
            DB::rollBack(); //Rollback Transaction
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
