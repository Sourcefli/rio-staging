<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApiServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::get();

        return $services;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newService = new Service();

        $newService['title'] = $request->input('title', 'A Title Wasnt Entered...');
        $newService['summary'] = $request->input('summary', 'A Summary Wasnt Entered...');
        $newService['card_img_url'] = $request->input('card_img_url', 'A card_img_url Wasnt Entered...');
        $newService['slug'] = createSlug($request->input('title', 'no title set'));
        $newService['read_more_link'] = createReadMoreLink($request->input('title', 'no title set ' .Str::random(10)));
        $newService['row_num'] = calculateRowNumber();
        $newService->save();

        return response([
            'status' => 201,
            'message' => 'New service created',
            'data' => $newService
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  string  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service_slug)
    {
        return $service_slug;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $service_slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service_slug)
    {
        $newTitle = $request->input('title') ?: $service_slug->title;
        $rowNumber = $request->input('row_num') ?: $service_slug->row_num;

        // Services Attrs => title, summary, card_img_url, read_more_link, row_num, slug
        //all $request->input items use a 2nd param as defualt, which is used if no data is passed in for that item
        $service_slug->update([
            'title' => $newTitle,
            'summary' => $request->input('summary') ?: $service_slug->summary,
            'card_img_url' => $request->input('card_img_url') ?: $service_slug->card_img_url,
            'read_more_link' => $request->input('read_more_link') ?: createReadMoreLink($newTitle),
            'row_num' => $rowNumber,
            'slug' => createSlug($newTitle)
        ]);

        return $service_slug;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($service_slug)
    {
        // $service = Service::find($service_slug);

        // $service->delete();

        return response('something was deleted!');
    }
}
