@extends('master')

@section('content')
<div class="main-content">
    <div class="container-fluid">

        <div class="panel panel-headline">
            <div class="panel-heading">
                <h3 class="panel-title">Pelaku Usaha Kelompok</h3>
                <div class="right">
                    <a href="{{route('pendataan.kelompok')}}" class="btn btn-success"> Lihat</a>
                </div>
                <p class="panel-subtitle"></p>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-list"></i></span>
                            <p>
                                <span class="number">0</span>
                                <span class="title">KUB</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-list"></i></span>
                            <p>
                                <span class="number">0</span>
                                <span class="title">POKLAHSAR</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-list"></i></span>
                            <p>
                                <span class="number">0</span>
                                <span class="title">POKDAKAN</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-list"></i></span>
                            <p>
                                <span class="number">0</span>
                                <span class="title">KUGAR</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-headline">
            <div class="panel-heading">
                <h3 class="panel-title">Pelaku Usaha Perorangan</h3>
                <div class="right">
                    <a href="{{route('pendataan.perorangan')}}" class="btn btn-success"> Lihat</a>
                </div>
                <p class="panel-subtitle"></p>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-list"></i></span>
                            <p>
                                <span class="number">0</span>
                                <span class="title">KUB</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-list"></i></span>
                            <p>
                                <span class="number">0</span>
                                <span class="title">POKLAHSAR</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-list"></i></span>
                            <p>
                                <span class="number">0</span>
                                <span class="title">POKDAKAN</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="metric">
                            <span class="icon"><i class="fa fa-list"></i></span>
                            <p>
                                <span class="number">0</span>
                                <span class="title">KUGAR</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
