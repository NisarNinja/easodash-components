@props([
    'title' => '',
    'subtitle' => '',
    'chartData' => '5,2,3,6,9,8,4,1,2,8',
])
<div class="card">
    <div class="body">
        <div class="w_summary">
            <div class="s_chart">
                <span class="chart">{{ $chartData }}</span>
            </div>
            <div class="s_detail">
                <h2 class="font700 mb-0">{{ $title }}</h2>
                <span> {{ $subtitle }}</span>
            </div>
        </div>
    </div>
</div>