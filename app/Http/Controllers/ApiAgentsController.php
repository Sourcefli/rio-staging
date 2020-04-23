<?php

namespace App\Http\Controllers;

use App\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApiAgentsController extends Controller
{
    /**
     * ======================================================================
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Agent::get();
    }

    /**
     * ======================================================================
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newUser = $request->user()->create([
            'name' => $request->name ?: "none set",
            'email' => $request->email ?: "none set",
            'password' => bcrypt($request->password) ?: bcrypt("password"),
            'api_token' => Str::random(40)
        ]);

        // !! FINISH AGENT->Create API Method, then move onto to the other methods below !!!

        $newAgent = new Agent();

        $newAgent["first_name"] = $request->first_name ?: "not set";
        $newAgent["last_name"] = $request->last_name ?: "not set";
        $newAgent["asb_id"] = $request->asb_id ?: null;
        $newAgent["email"] = $request->email ?: "not set";
        $newAgent["phone"] = $request->phone ?: "not set";
        $newAgent["bio"] = $request->bio ?: "not set";
        $newAgent["started_on"] = $request->started_on ?: "not set";
        $newAgent["company_role"] = $request->company_role ?: "not set";
        $newAgent["company_title"] = $request->company_title ?: "not set";
        $newAgent["facebook_url"] = $request->facebook_url ?: "not set";
        $newAgent["linkedin_url"] = $request->linkedin_url ?: "not set";
        $newAgent["qualifications"] = $request->qualifications ?: "not set";
        $newAgent["sm_image_url"] = $request->sm_image_url ?: "not set";
        $newAgent["md_image_url"] = $request->md_image_url ?: "not set";
        $newAgent["lg_image_url"] = $request->lg_image_url ?: "not set";
        $newAgent["team_id"] = $request->team_id ?: 4;
        $newAgent["office_id"] = $request->office_id ?: 1;
        $newAgent["user_id"] = $request->user_id ?: "not set";
        $newAgent->save();

        return response([
            'status' => 201,
            'message' => 'New agent created',
            'data' => $newAgent
        ]);

    }



    /**
     * ======================================================================
     * Display the specified resource.
     *
     * @param  string  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agentName)
    {
        return $service_slug;
    }

    /**
     * ======================================================================
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
     * ======================================================================
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
