<div class="form-group">
        {!! Form::label('job', "職缺：") !!}
        {!! Form::text('job', null, ['class' => 'form-control']) !!} <br/>
</div>

<div class="form-group">
    {!! Form::label('salary', "薪資：") !!}
    {!! Form::text('salary', null, ['class' => 'form-control']) !!} <br/>
</div>


<div class="form-group ">
        {!! Form::label('job_information', "職缺說明：") !!}
        {!! Form::textarea('job_information', null, ['class' => 'form-control','cols=80','rows=5','wrap=on']) !!} <br/>
</div>


<div class="form-group">
        {!! Form::label('company_id', "公司：") !!}
        <select name="company_id">
            @foreach($companies as $company)
                @if (isset($jobs->company))
                    @if ($jobs->company->id == $company->id)
                        <option value="{{ $company->id }}" selected>{{ $company->company }}</option>
                    @else
                        <option value="{{ $company->id }}">{{ $company->company }}</option>
                    @endif
                @else
                    <option value="{{ $company->id }}">{{ $company->company }}</option>
                @endif
            @endforeach
        </select>
</div>

<div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
