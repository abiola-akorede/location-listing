<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Listing;

class DashboardController extends Controller
{

    /**
     * for listing all my project
     */
    public function myProject()
    {
        $user = Auth::user();
        $myProject = Listing::where('user_id', $user->id)->get();
        // dd($myProject);
        return view('dashboard.index', compact('myProject'));
    }

    public function dashboard()
    {
        $user = Auth::user();
        $my_project = Listing::where('user_id', $user->id)->get();
        $number_of_project = $my_project->count();
        // dd($my_project, $number_of_project);
        return view('dashboard.dashboard', compact('my_project', 'number_of_project'));
    }

    public function adminDashboard()
    {
        return view('admin.dashboard');
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        try {
            $request->validate([
                'project_title' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5000',
                'photo_gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5000',

            ]);

            // dd($request->all()); 
            $listing = Listing::create([
                'user_id' => Auth::user()->id, 
                'project_title' => $request->project_title,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'city' => $request->city,
                'category' => $request->category,
                'description' => $request->description,
                'google_map' => $request->google_map,
                'youtube_link' => $request->youtube_link,
                'feature1' => $request->feature1,
                'feature2' => $request->feature2,
                'feature3' => $request->feature3,
                'feature4' => $request->feature4,
                'feature5' => $request->feature5,
                'feature6' => $request->feature6,
                'price' => $request->price,
                'cover_image' => $request->hasFile('cover_image') ? $this->uploadImage($request->file('cover_image')) : null, 
            ]);

            // Upload cover image
            if ($request->hasFile('cover_image')) {
                $listing->cover_image = $this->uploadImage($request->file('cover_image'));
            }

            $galleryPaths = [];

            if ($request->hasFile('photo_gallery')) {
                foreach ($request->file('photo_gallery') as $file) {
                    if ($file->isValid()) {
                        $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                        $file->move(public_path('images'), $filename);
                        $galleryPaths[] = 'images' . $filename;
                    }
                }
            }


            // $listing->save();

            // Handle photo_gallery
            // if ($request->hasFile('photo_gallery')) {
            //     foreach ($request->file('photo_gallery') as $file) {
            //         if ($file->isValid()) {
            //             $filename = time() . '_' . $file->getClientOriginalName();
            //             $file->move(public_path('images/gallery'), $filename);
            //             // Optional: save filenames in DB or related table
            //         }
            //     }
            // }

            return redirect()->back()->with('success', 'Your new project/properties has been registered successfully');

        } catch (\Exception $e) {
            \Log::error('Error creating listing: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred while creating the listing.');
        }
    }

    // Helper function to upload images
    private function uploadImage($image)
    {
        $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        // $image->storeAs('public/images', $imageName);
        $image->move(public_path('images'), $imageName);
        return $imageName;
    }




    // public function getMyProjects()
    // {
    //     $user = Auth::user();
    //     $myProjects = Listing::where('user_id', $user->id);
        
    //     return redirect()->
    // }





    public function createReview(Reqeuest $request)
    {
        $review = Review::create($request->all());
        return redirect()->route('listing.details');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $listings = Listing::find($id);        
        $videoLink = $listings->youtube_link; // spelling matches your controller
        parse_str(parse_url($videoLink, PHP_URL_QUERY), $queryParams);
        $videoId = $queryParams['v'] ?? null;

        return view('dashboard.details', compact('listings', 'videoId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        return view('dashboard.update', compact('listing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
