@extends('master')

@section('content')
<div class="main-content">
    <div class="container-fluid">
        <!-- OVERVIEW -->
        <div class="panel panel-headline">
            <div class="panel-heading">
                <h3 class="panel-title">Data Saat Ini</h3>
                <p class="panel-subtitle">Period: {{$thisTime}}</p>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-list"></i></span>
                            <p>
                                <span class="number">{{$kolam}}</span>
                                <span class="title">Data Kolam</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-list"></i></span>
                            <p>
                                <span class="number">{{$tambak}}</span>
                                <span class="title">Data Tambak</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-list"></i></span>
                            <p>
                                <span class="number">{{$upr}}</span>
                                <span class="title">Produksi UPR</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-list"></i></span>
                            <p>
                                <span class="number">{{$pengolahan}}</span>
                                <span class="title">Data Produksi Pengolahan</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-list"></i></span>
                            <p>
                                <span class="number">{{$lahan}}</span>
                                <span class="title">Data Luas Lahan & RTP</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-users"></i></span>
                            <p>
                                <span class="number">{{$kolam}}</span>
                                <span class="title">Pelaku Usaha</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OVERVIEW -->
    </div>
</div>
@endsection
