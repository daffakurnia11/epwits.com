<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Applicant;
use App\Models\Choice;
use App\Models\Schedule;
use Carbon\Carbon;
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
        return view('admin.applicant.index', [
            'applicants' => Applicant::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $deadline = Carbon::create(2021, 9, 16, 20, 1, 0);
        $timenow = Carbon::now();

        if ($deadline->lessThan($timenow)) {
            return view('oprec.closed');
        }
        return view('oprec.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $deadline = Carbon::create(2021, 9, 16, 20, 1, 0);
        $timenow = Carbon::now();

        if ($deadline->lessThan($timenow)) {
            return view('oprec.closed');
        }
        $applicantData = $request->validate([
            'name'          => 'required|max:255',
            'nrp'           => 'required|numeric|unique:applicants',
            'email'         => 'required|max:255|email:dns|unique:applicants',
            'line_id'       => 'required|max:255|unique:applicants',
            'motivation'    => 'required',
            'screenshot'    => 'required|mimes:JPG,jpg,png,jpeg|max:5048',
            'cv'            => 'required|mimes:pdf|max:5048',
            'portfolio'     => 'nullable|url',
        ]);

        $choiceData = $request->validate([
            'fundraising'       => 'required|numeric',
            'sponsorship'       => 'required|numeric',
            'epc'               => 'required|numeric',
            'snow'              => 'required|numeric',
            'big_event'         => 'required|numeric',
            'technical'         => 'required|numeric',
            'itdev'             => 'required|numeric',
            'media'             => 'required|numeric',
            'creative'          => 'required|numeric',
            'public_relation'   => 'required|numeric',
            'secretarial'       => 'required|numeric',
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
        return view('admin.applicant.show', compact('applicant'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        $choice = Choice::firstWhere('applicant_id', $applicant->id);

        unlink(public_path("files/cv/$applicant->cv"));
        unlink(public_path("files/screenshot/$applicant->screenshot"));

        $choice->delete();
        $applicant->delete();

        return redirect('/admin/applicant')->with('message', 'Data has been deleted!');
    }

    public function priority()
    {
        return view('admin.applicant.priority', [
            'applicants' => Applicant::all()
        ]);
    }

    public function interviewAnnouncement()
    {
        $deadline = Carbon::create(2021, 9, 17, 17, 0, 0);
        $timenow = Carbon::now();

        if ($deadline->lessThan($timenow)) {
            return view('oprec.interview');
        }
        return view('errors.404');
    }

    public function interviewSchedule(Request $request)
    {
        $data = Schedule::firstWhere('nrp', $request->nrp);
        if ($data) {
            $name = $data->name;
            $breakout = $data->breakout;
            $date = $data->date;
            $time = $data->time;
            return redirect('InterviewAnnouncement')->with('message', $name)->with('breakout', $breakout)->with('date', $date)->with('time', $time);
        } else {
            return redirect('InterviewAnnouncement')->with('message', 'No Data');
        }
    }

    public function staffAnnouncement()
    {
        $deadline = Carbon::create(2021, 9, 25, 9, 0, 0);
        $timenow = Carbon::now();

        if ($deadline->lessThan($timenow)) {
            return view('oprec.staff');
        }
        return view('errors.404');
    }

    public function welcomeparty(Request $request)
    {
        $data = Schedule::whereNotNull('acceptance')->firstWhere('nrp', $request->nrp);
        if ($data) {
            $name = $data->name;
            return redirect('StaffAnnouncement')->with('message', $name);
        } else {
            return redirect('StaffAnnouncement')->with('message', 'No Data');
        }
    }
}
