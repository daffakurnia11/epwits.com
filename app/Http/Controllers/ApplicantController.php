<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\Choice;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('oprec.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $applicantData = $request->validate([
            'name'          => 'required|max:255',
            'nrp'           => 'required|numeric',
            'email'         => 'required|max:255|email:dns',
            'line_id'       => 'required|max:255|unique:applicants',
            'motivation'    => 'required',
            'screenshot'    => 'required|mimes:JPG,jpg,png,jpeg|max:5048',
            'cv'            => 'required|mimes:pdf|max:5048',
            'portfolio'     => 'nullable|url',
        ]);

        $choiceData = $request->validate([
            'fundraising'       => 'nullable|numeric',
            'sponsorship'       => 'nullable|numeric',
            'epc'               => 'nullable|numeric',
            'snow'              => 'nullable|numeric',
            'big_event'         => 'nullable|numeric',
            'technical'         => 'nullable|numeric',
            'itdev'             => 'nullable|numeric',
            'media'             => 'nullable|numeric',
            'creative'          => 'nullable|numeric',
            'public_relation'   => 'nullable|numeric',
            'secretarial'       => 'nullable|numeric',
        ]);

        $screenshotImage = $request->nrp . '-screenshot.' . $request->screenshot->extension();
        $cvImage = $request->nrp . '-cv.' . $request->cv->extension();

        $applicantData['screenshot'] = $screenshotImage;
        $applicantData['cv'] = $cvImage;

        $request->screenshot->move(public_path('files/screenshot'), $screenshotImage);
        $request->cv->move(public_path('files/cv'), $cvImage);

        $choiceData['applicant_id'] = Applicant::create($applicantData)->id;
        Choice::create($choiceData);

        return redirect('/')->with('message', 'Thank you for applying to be Staff of EPW 2022. Please attention for our announcement!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        //
    }
}
