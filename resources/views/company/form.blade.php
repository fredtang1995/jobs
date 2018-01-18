        <div class="form-group">
            {!! Form::label('company', "公司名稱：") !!}
            {!! Form::text('company', null, ['class' => 'form-control']) !!} <br/>
        </div>

        <div class="form-group">
            {!! Form::label('location', "公司地點：") !!}
            {!! Form::text('location', null, ['class' => 'form-control']) !!} <br/>
        </div>

        <div class="form-group">
            {!! Form::label('address', "公司地址：") !!}
            {!! Form::text('address', null, ['class' => 'form-control']) !!} <br/>
        </div>
        <div class="form-group">
            {!! Form::label('Tel', "公司電話：") !!}
            {!! Form::text('Tel', null, ['class' => 'form-control']) !!} <br/>
        </div>
        <div class="form-group">
                {!! Form::label('email', "公司信箱：") !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!} <br/>
        </div>

        <div class="form-group">
        {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
        </div>
