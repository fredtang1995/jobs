<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use \App\Company;
use \App\Jobs;
use \App\Http\Requests\CompanyRequest;
use Carbon\Carbon;
class CompanyController extends Controller
{
    public function company()
    {
        return view('company.company')->with('companies',
            Company::get());
    }


    public function show($id)
    {
        $t = Company::findOrFail($id);
       return view('job.job')
            ->with('jobs', $t->jobs);
    }

    public function create()
    {
        return view('company.create');
    }

    public function store(CompanyRequest $request)
    {


        //Teacher::create($request->all());
        $company_new = new Company;
        $company_new->company = $request->input('company');
        $company_new->location = $request->input('location');
        $company_new->address = $request->input('address');
        $company_new->Tel = $request->input('Tel');
        $company_new->email = $request->input('email');
        $company_new->save();


        return redirect('company');
    }

    public function edit($id)
    {
        return view('company.update_company')->with('company', Company::findOrFail($id));
    }

    public function update($id, CompanyRequest $request)
    {
        $t = Company::findOrFail($id);
        $t->update($request->all());

        return redirect('company');
    }

    public function destroy($id)
    {
        $t = Company::findOrFail($id);
        $t->delete();
        $j=Jobs::findOrFail($id)->where('company_id','=',$id);
        $j->delete();
        return redirect('company');
    }

    public function quit()
    {
        return view('company.quit_company')->with('companies',
            Company::onlyTrashed()->get());
    }

    public function restore($id)
    {
        $t = Company::onlyTrashed()->where('id', '=', $id);
        $t->restore();
        $j=Jobs::onlyTrashed()->where('company_id','=',$id);
        $j->restore();

        return redirect('company/quit');
    }


}
