<?php

namespace App\Http\Controllers\Admin;

use Exception;
use DataTables;
use App\Models\PlatformKey;
use App\Models\PaltformLang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PlatformKeyTranslation;
use App\Http\Requests\Admin\CreatePlatformLangeRequest;

class PaltformLangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        //
        if ($request->ajax()) {
            $data = PlatformKey::get();
            // $data = PlatformKey::with("translation","translations_array")->get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = "";
                    $btn = $btn . '<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                      <div class="btn-group" role="group">
                        <button class="btn btn-light dropdown-toggle text-primary" id="btnGroupDrop1" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">';

                    $btn = $btn . '<a class="edit-data dropdown-item"  href="javascript:void(0)" title="' . translate('Edit') . '" data-url="' . route('platform-lang.edit', $row->id) . '">' . translate('Edit') . '</a>';
                    // $btn = $btn . '<a href="" data-url="' . route('platform-lang.destroy', $row->id) . '" class="dropdown-item destroy-data" title="' . translate('Delete') . '">' . translate('Delete') . '</a>';

                    $btn = $btn . '</div>
                      </div>
                    </div>';
                    return $btn;
                })

                // ->rawColumns(['action', 'lang_flag_image', 'is_default_custom', 'lang_is_rtl_custom'])
                ->make(true);
        }
        return view('Admin.Platform-Lang.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $languages = getlanguages();

        // Define validation rules
        $rules = [
            'key' => 'required|string|max:255|unique:platform_keys,key',
        ];

        // Add validation for each language dynamically
        foreach ($languages as $lang) {
            $rules[$lang['lang_code'] . '.translation'] = 'required|string|max:255';
        }

        // Validate request
        $request->validate($rules);

        // Step 2: Create a new PlatformKey
        $data = PlatformKey::create([
            'key' => $request->key,
        ]);

        // Step 3: Insert translations
        foreach ($languages as $lang) {
            $langCode = $lang['lang_code']; // Extract language code

            // Use input() to safely get the value
            $translation = $request->input("$langCode.translation");

            if (!empty($translation)) {
                PlatformKeyTranslation::create([
                    'platform_key_id' => $data->id,
                    'locale' => $langCode,
                    'translation' => $translation,
                ]);
            }
        }

        if (!empty($data)) {
            return response()->json(['status' => '1', 'success' => translate('Platform Lang Added Successfully.')]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(PaltformLang $paltformLang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        try {
             $data = PlatformKey::with("translations_array")->where('id',$id)->first();
            if (!empty($data)) {
                return view('Admin.Platform-Lang.edit', compact('data'));
            }
        } catch (Exception $ex) {
            return response()->json(
                ['success' => false, 'message' => $ex->getMessage()]
            );
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PaltformLang $paltformLang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PaltformLang $paltformLang)
    {
        //
        
    }
}
