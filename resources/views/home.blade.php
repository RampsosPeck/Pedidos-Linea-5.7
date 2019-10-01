@extends('layouts.app')

@section('title','Inicio')
@section('class-body','profile-page')

@section('content')
<div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('') }}/assets/img/bg8.jpg');">
</div>

<div class="main main-raised">
    <div class="container">
        <h2 class="title text-center">Dashboard</h2>
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills nav-pills-icons" role="tablist">
                    <!--
                        color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                    -->
                    <li class="active">
                        <a href="#dashboard-1" role="tab" data-toggle="tab">
                            <i class="material-icons">dashboard</i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#tasks-1" role="tab" data-toggle="tab">
                            <i class="material-icons">list</i>
                            Tasks
                        </a>
                    </li>
                </ul>
                <div class="tab-content tab-space">
                    <div class="tab-pane active" id="dashboard-1">
                      Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                      <br /><br />
                      Dramatically visualize customer directed convergence without revolutionary ROI.
                    </div>
                    <div class="tab-pane" id="tasks-1">
                        Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                        <br /><br />Dynamically innovate resource-leveling customer service for state of the art customer service.
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
