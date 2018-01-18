@extends('app')

@section('title', '應徵')

@section('contents')
        <table class="flex-center position-ref table-hover table-striped">
            <tr>
                <th>公司名稱</th>
                <th>職缺</th>
                <th>薪資</th>
                <th>職缺說明</th>
                <th>職缺狀態</th>
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
                        <a href="{{ route('job.restore', ['id' => $job->id])  }}">回復</a></a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">目前沒有刪除職缺</td>
                </tr>
            @endforelse
    </table>
@stop
