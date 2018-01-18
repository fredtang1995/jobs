@extends('app')

@section('title', '職缺一覽')

@section('contents')
    <table class="flex-center position-ref table-hover table-striped ">
        <tr>
            <th>公司名稱</th>
            <th>職缺</th>
            <th>薪資</th>
            <th>職缺說明</th>
            <th>編輯職缺資訊</th>
            <th>狀態</th>
        </tr>
        @forelse($jobs as $job)
            <tr>
                <td>
                    @if (isset($job->company))
                        {{ $job->company->company }}
                    @else
                        無此公司
                    @endif
                </td>
                <td>{{ $job->job  }}</td>
                <td>{{ $job->salary  }}</td>
                <td align="left"><pre>{{ $job->job_information  }}</pre></td>
                <td>
                    <a href="{{ route('job.edit', ['id' => $job->id])  }}">編輯</a>
                </td>
                <td>
                    <a href="{{ route('job.destroy', ['id' => $job->id])  }}">刪除</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">目前沒有職缺</td>
            </tr>
        @endforelse
    </table>
@stop