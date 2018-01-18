<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use \App\Jobs;
use \App\Company;
use \App\Http\Requests\JobRequest;
use Carbon\Carbon;


class jobController extends Controller
{
    public function job()
    {
        return view('job.job')->with('jobs',
            Jobs::get());
    }

    public function create()
    {
        //
        return view('job.create')
            ->with('companies', Company::get());
    }

    public function store(JobRequest $request)
    {
        $job_new = new Jobs;
        $job_new->company_id = $request->input('company_id');
        $job_new->job = $request->input('job');
        $job_new->salary = $request->input('salary');
        $job_new->job_information = $request->input('job_information');
        $job_new->save();

        return redirect('job');
    }

    public function update(JobRequest $request, $id)
    {
        $s = Jobs::findOrFail($id);
        $s->update($request->all());

        return redirect('job');
    }

    public function edit($id)
    {
        return view('job.update_job')
            ->with(['jobs'=>Jobs::findOrFail($id),
                'companies'=>Company::get()]);
    }

    public function destroy($id)
    {
        $s = Jobs::findOrFail($id);
        $s->delete();

        return redirect('job');
    }

    public function restore($id)
    {
        $t = Jobs::onlyTrashed()->where('id', '=', $id);
        $t->restore();

        return redirect('job/quit');
    }

    public function quit()
    {

        return view('job.quit_job')->with('jobs',
            Jobs::onlyTrashed()->get());
    }
}
