@extends('app')

@section('title', '解約公司')

@section('contents')
    <table class="flex-center position-ref table-hover table-striped">
        <tr>
            <th>解約日期</th>
            <th>公司名稱</th>
            <th>公司地點</th>
            <th>公司地址</th>
            <th>公司電話</th>
            <th>公司信箱</th>
            <th>合約狀態</th>

        </tr>
        @forelse($companies as $company)
            <tr>
                <td>{{ Carbon\Carbon::parse($company->deleted_at)->format('Y-m-d') }}</td>
                    <td>{{ $company->company  }}</td>
                    <td>{{ $company->location  }}</td>
                    <td>{{ $company->address  }}</td>
                    <td>{{ $company->Tel  }}</td>
                    <td><a href="{{ $company->email }}">{{ $company->email }}</a></td>
                <td>
                    <a href="{{ route('company.restore', ['id' => $company->id])  }}">續約</a></a>
                </td>
            </tr>
        @empty
            <tr>
                <td align="center" colspan = "7">目前沒有解約公司</td>
            </tr>
        @endforelse
    </table>
@stop
