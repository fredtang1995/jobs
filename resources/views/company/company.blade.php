@extends('app')

@section('title', '公司')

@section('contents')
    <table class="flex-center position-ref table-hover table-striped">
        <tr>
            <th>簽約日期</th>
            <th>公司名稱</th>
            <th>公司地點</th>
            <th>公司地址</th>
            <th>公司電話</th>
            <th>公司信箱</th>
            <th>職缺</th>
            <th>編輯公司資訊</th>
            <th>合約狀態</th>
        </tr>
        @forelse($companies as $company)
            <tr>
                <td>{{ Carbon\Carbon::parse($company->create_at)->format('Y-m-d') }}</td>
                <td><a href="{{ route('company.show', ['id' => $company->id])  }}">{{ $company->company  }}</a></td>
                <td>{{ $company->location  }}</td>
                <td>{{ $company->address  }}</td>
                <td>{{ $company->Tel  }}</td>
                <td><a href="{{ $company->email }}">{{ $company->email }}</a></td>
                <td>
                    <a href="{{ route('company.show', ['id' => $company->id])  }}">檢視</a>
                </td>
                <td>
                    <a href="{{ route('company.edit', ['id' => $company->id])  }}">更新公司資訊</a></a>
                </td>
                <td>
                    <a href="{{ route('company.destroy', ['id' => $company->id])  }}">解約</a></a>
                </td>
            </tr>
        @empty
            <tr>
                <td align="center" colspan = "9">目前沒有資料</td>
            </tr>
        @endforelse
    </table>
@stop
