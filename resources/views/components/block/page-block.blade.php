@props([
    'heading' => '',
    'belowHeading' => '',
    'right' => '',
])
<div class="block-header">
    <div class="row clearfix">
        <div class="col-md-6 col-sm-12">
            <h1>{{ $heading }}</h1>
            {{ $belowHeading }}
            
            {{-- <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"><i class="fa fa-cube"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Datatable Table</li>
                </ol>
            </nav> --}}
        </div>

        <div class="col-md-6 col-sm-12 text-right hidden-xs">
            {{ $right }}

        </div>
    </div>
</div>