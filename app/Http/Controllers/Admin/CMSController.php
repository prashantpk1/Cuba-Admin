<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CMS;
use App\Models\CMSTranslation;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Yajra\DataTables\Facades\DataTables;

class CMSController extends Controller
{
    // public function index()
    // {
    //     if (request()->ajax()) {
    //         $pages = CMS::query();
    //         return DataTables::of($pages)
    //             ->addIndexColumn()
    //             ->editColumn('created_at', function ($page) {
    //                 return $page->created_at->format('d M Y');
    //             })
    //             ->addColumn('actions', function ($row) {
    //                 $editUrl = route('cms.edit', $row->id);

    //                 return "
    //                 <div class='dropdown action-buttons'>
    //                     <button class='action-button-link dropdown-toggle' id='btnGroupDrop{$row->id}' type='button' data-bs-toggle='dropdown' aria-expanded='false'>
    //                         <i class='fa fa-ellipsis-v'></i>
    //                     </button>
    //                     <div class='dropdown-menu' aria-labelledby='btnGroupDrop{$row->id}'>
    //                         <a class='dropdown-item text-success' href='{$editUrl}' title='Edit'>Edit</a>
    //                     </div>
    //                 </div>
    //             ";
    //             })
    //             ->rawColumns(['actions'])
    //             ->make(true);
    //     }

    //     return view('admin.cms.index');
    // }




    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = CMS::all();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('meta_title', function ($data) {
                    return $data->meta_title ?: 'No Title';
                })
                ->addColumn('created_at', function ($page) {
                    return $page->created_at->format('d M Y');
                })

                ->addColumn('actions', function ($row) {
                    $editUrl = route('cms.edit', $row->id);
                    $deleteUrl = route('cms.destroy', $row->id);
                    return "
                        <div class='btn-group' role='group'>
                            <button class='btn btn-light dropdown-toggle text-primary' id='btnGroupDrop{$row->id}' type='button' data-bs-toggle='dropdown'>
                                <i class='fa fa-ellipsis-h'></i>
                            </button>
                            <div class='dropdown-menu' aria-labelledby='btnGroupDrop{$row->id}'>
                                <a class='dropdown-item' href='{$editUrl}'>" . __('Edit') . "</a>
                                <a class='dropdown-item destroy-data' href='#' data-url='{$deleteUrl}'>" . __('Delete') . "</a>
                            </div>
                        </div>
                    ";
                })
                ->rawColumns(['actions'])
                ->make(true);
        }

        return view('Admin.cms.index');
    }




    public function show($id)
    {
        try {
            $cms = CMS::findOrFail($id);

            return view('admin.cms.show', compact('cms'));
        } catch (\Exception $e) {


            Log::error('CMS not found: ' . $e->getMessage());

            return redirect()->route('cms.index')->with('error', 'CMS not found.');
        }
    }

    public function edit($id)
    {
        $cms = CMS::findOrFail($id);
        $languages = Language::all();
        return view('Admin.cms.edit', compact('cms', 'languages'));
    }



    public function update(Request $request, $id)
    {
        try {
            // dd($request->all());
            $cms = CMS::findOrFail($id);

            // $request->validate([...]);

            $data = $request->only([
                'banner_heading',
                'banner_title',
                'banner_description',
                'button_text',
                'about_heading',
                'about_description',
                'description',
                'about_button_text',
                'service_title_1',
                'service_title_2',
                'service_title_3',
                'service_title_4',
                'service_description_1',
                'service_description_2',
                'service_description_3',
                'service_description_4',
                'cab_title',
                'cab_description',
                'cab_point_text_1',
                'cab_point_text_2',
                'cab_point_text_3',
                'cab_point_text_4',
                'button_text_2',
                'offer_service_heading',
                'offer_service_heading_2',
                'fairer_title',
                'fairer_count_1',
                'fairer_count_2',
                'fairer_count_3',
                'fairer_count_4',
                'fairer_text_1',
                'fairer_text_2',
                'fairer_text_3',
                'fairer_text_4',
                'priority_heading',
                'priority_title',
                'priority_description',
                'button_text_3',
                'blog_heading',
                'our_app_heading',
                'our_app_title',
                'our_app_description',
                'our_app_button',
                'our_app_button_1',
                'contact_title_1',
                'contact_title_2',
                'title_field',
                'provide_title',
                'provide_heading_1',
                'provide_heading_2',
                'provide_heading_3',
                'provide_heading_4',
                'provide_heading_5',
                'provide_heading_6',
                'provide_heading_7',
                'provide_heading_8',
                'provide_heading_9',
                'provide_description_1',
                'provide_description_2',
                'provide_description_3',
                'provide_description_4',
                'provide_description_5',
                'provide_description_6',
                'provide_description_7',
                'provide_description_8',
                'provide_description_9',
                'driver_title_1',
                'driver_title_2',
                'driver_title_3',
                'driver_description_1',
                'driver_description_2',
                'driver_description_3',
                'career_count_text_1',
                'career_count_text_2',
                'career_count_text_3',
                'career_count_text_4',
                'career_title_1',
                'career_title_2',
                'career_title_3',
                'career_title_4',
                'meta_title',
            ]);

            $fields = [
                'banner_image',
                'service_images_1',
                'service_images_2',
                'service_images_3',
                'service_images_4',
                'cab_images',
                'cab_images_2',
                'cab_images_3',
                'priority_image',
                'our_app_image',
                'about_image_1',
                'about_image_2',
                'about_image_3',
                'our_app_image_1',
                'our_app_image_2',
                'our_app_image_3',
            ];

            // Loop through each field and handle file upload
            foreach ($fields as $field) {
                if ($request->hasFile($field)) {
                    $image = $request->file($field);
                    $imageName = time() . '_' . $field . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('cms'), $imageName);
                    $data[$field] = 'cms/' . $imageName;
                    Log::info("Uploaded $field with name $imageName");
                }
            }
            // dd($request->all());
            // Fetch languages (assuming a function 'getlanguages()' exists)
            $languages = getlanguages();

            // Update or create translations for each language
            foreach ($languages as $lang) {
                $lang_code = $lang['lang_code'];
                // dd($request->input("provide_title")[$lang_code]);
                CMSTranslation::updateOrCreate(
                    ['cms_id' => $cms->id, 'locale' => $lang_code],
                    [
                        'banner_heading' => $request->input("{$lang_code}.banner_heading"),
                        'banner_title' => $request->input("{$lang_code}.banner_title"),
                        'button_text' => $request->input("{$lang_code}.button_text"),

                        // Service Section Fields (for each language)
                        'service_title_1' => $request->input("{$lang_code}.service_title_1") ?? null,
                        'service_description_1' => $request->input("{$lang_code}.service_description_1") ?? null,
                        'service_title_2' => $request->input("{$lang_code}.service_title_2") ?? null,
                        'service_description_2' => $request->input("{$lang_code}.service_description_2") ?? null,
                        'service_title_3' => $request->input("{$lang_code}.service_title_3") ?? null,
                        'service_description_3' => $request->input("{$lang_code}.service_description_3") ?? null,
                        'service_title_4' => $request->input("{$lang_code}.service_title_4") ?? null,
                        'service_description_4' => $request->input("{$lang_code}.service_description_4") ?? null,

                        // Cab Section Fields (for each language)
                        'cab_title' => $request->input("{$lang_code}.cab_title"),
                        'cab_heading' => $request->input("{$lang_code}.cab_heading"),
                        'cab_description' => $request->input("{$lang_code}.cab_description"),
                        'cab_point_text_1' => $request->input("{$lang_code}.cab_point_text_1"),
                        'cab_point_text_2' => $request->input("{$lang_code}.cab_point_text_2"),
                        'cab_point_text_3' => $request->input("{$lang_code}.cab_point_text_3"),
                        'cab_point_text_4' => $request->input("{$lang_code}.cab_point_text_4"),
                        'button_text_2' => $request->input("{$lang_code}.button_text_2"),

                        // 'provide_title' => $request->input("{$lang_code}.provide_title"),


                        'provide_title' => $request->input("provide_title")[$lang_code] ?? null,
                        'provide_heading_1' => $request->input("provide_heading_1")[$lang_code] ?? null,
                        'provide_heading_2' => $request->input("provide_heading_2")[$lang_code] ?? null,
                        'provide_heading_3' => $request->input("provide_heading_3")[$lang_code] ?? null,
                        'provide_heading_4' => $request->input("provide_heading_4")[$lang_code] ?? null,
                        'provide_heading_5' => $request->input("provide_heading_5")[$lang_code] ?? null,
                        'provide_heading_6' => $request->input("provide_heading_6")[$lang_code] ?? null,
                        'provide_heading_7' => $request->input("provide_heading_7")[$lang_code] ?? null,
                        'provide_heading_8' => $request->input("provide_heading_8")[$lang_code] ?? null,
                        'provide_heading_9' => $request->input("provide_heading_9")[$lang_code] ?? null,
                        'provide_description_1' => $request->input("provide_description_1")[$lang_code] ?? null,
                        'provide_description_2' => $request->input("provide_description_2")[$lang_code] ?? null,
                        'provide_description_3' => $request->input("provide_description_3")[$lang_code] ?? null,
                        'provide_description_4' => $request->input("provide_description_4")[$lang_code] ?? null,
                        'provide_description_5' => $request->input("provide_description_5")[$lang_code] ?? null,
                        'provide_description_6' => $request->input("provide_description_6")[$lang_code] ?? null,
                        'provide_description_7' => $request->input("provide_description_7")[$lang_code] ?? null,
                        'provide_description_8' => $request->input("provide_description_8")[$lang_code] ?? null,
                        'provide_description_9' => $request->input("provide_description_9")[$lang_code] ?? null,

                        'driver_title_1' => $request->input("driver_title_1")[$lang_code] ?? null,
                        'driver_title_2' => $request->input("driver_title_2")[$lang_code] ?? null,
                        'driver_title_3' => $request->input("driver_title_3")[$lang_code] ?? null,

                        'driver_description_1' => $request->input("driver_description_1")[$lang_code] ?? null,
                        'driver_description_2' => $request->input("driver_description_2")[$lang_code] ?? null,
                        'driver_description_3' => $request->input("driver_description_3")[$lang_code] ?? null,

                        // About Section Fields (for each language)
                        'about_heading' => $request->input("about_heading")[$lang_code] ?? null,
                        'about_description' => $request->input("about_description")[$lang_code] ?? null,
                        'description' => $request->input("description")[$lang_code] ?? null,
                        'about_button_text' => $request->input("about_button_text")[$lang_code] ?? null,

                        // Offer Service Section
                        'offer_service_heading' => $request->input("{$lang_code}.offer_service_heading"),
                        'offer_service_heading_2' => $request->input("{$lang_code}.offer_service_heading_2"),

                        // Fairer Section Fields
                        'fairer_title' => $request->input("{$lang_code}.fairer_title"),
                        'fairer_title_2' => $request->input("{$lang_code}.fairer_title_2"),
                        'fairer_text_1' => $request->input("{$lang_code}.fairer_text_1"),
                        'fairer_text_2' => $request->input("{$lang_code}.fairer_text_2"),
                        'fairer_text_3' => $request->input("{$lang_code}.fairer_text_3"),
                        'fairer_text_4' => $request->input("{$lang_code}.fairer_text_4"),

                        // Priority Section Fields
                        'priority_heading' => $request->input("{$lang_code}.priority_heading"),
                        'priority_title' => $request->input("{$lang_code}.priority_title"),
                        'priority_description' => $request->input("{$lang_code}.priority_description"),
                        'button_text_3' => $request->input("{$lang_code}.button_text_3"),

                        // Blog Section Fields
                        'blog_heading' => $request->input("{$lang_code}.blog_heading"),

                        // Our App Section Fields
                        'our_app_heading' => $request->input("{$lang_code}.our_app_heading"),
                        'our_app_title' => $request->input("{$lang_code}.our_app_title"),
                        'our_app_description' => $request->input("{$lang_code}.our_app_description"),


                        'career_count_text_1' => $request->input("{$lang_code}.career_count_text_1"),
                        'career_count_text_2' => $request->input("{$lang_code}.career_count_text_2"),
                        'career_count_text_3' => $request->input("{$lang_code}.career_count_text_3"),
                        'career_count_text_4' => $request->input("{$lang_code}.career_count_text_4"),
                        'career_title_1' => $request->input("{$lang_code}.career_title_1"),
                        'career_title_2' => $request->input("{$lang_code}.career_title_2"),
                        'career_title_3' => $request->input("{$lang_code}.career_title_3"),
                        'career_title_4' => $request->input("{$lang_code}.career_title_4"),


                        // Other fields like contact info, driver sections, etc. 
                        // Add any other fields as per your need
                    ]
                );
            }

            // Finally, update the CMS record with the other data
            $cms->update($data);

            // Send a single success message
            return redirect()->route('cms.index')->with('success', 'CMS updated successfully');

        } catch (\Exception | \Throwable $e) {
            // Log the error and return with an error message
            // Log::error('Failed to update CMS: ' . $e->getMessage());

            dd($e->getMessage());
            return redirect()->back()->with('error', 'Failed to update CMS. Please try again.');
        }
    }


}
