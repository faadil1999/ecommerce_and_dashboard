@extends('layouts.admin')
@section('main')

<div class="pcoded-inner-content">

    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header card">
                <div class="card-block">
                    <h5 class="m-b-10">Basic Form Inputs</h5>
                    <p class="text-muted m-b-10">lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                    <ul class="breadcrumb-title b-t-default p-t-10">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>
                       <li class="breadcrumb-item"><a href="#!">Basic Componenets</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Basic Form Inputs</a>
                                </li>
                    </ul>
                </div>
            </div>
            <!-- Page-header end -->
            
            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Basic Form Inputs card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Basic Form Inputs</h5>
                                <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                <div class="card-header-right"><i
                                    class="icofont icofont-spinner-alt-5"></i></div>

                                    <div class="card-header-right">
                                        <i class="icofont icofont-spinner-alt-5"></i>
                                    </div>

                                </div>
                                <div class="card-block">
                                    <h4 class="sub-title">Basic Inputs</h4>
                                    <form action="{{route("store")}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Predefine
                                                Input</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control"
                                                    value="Enter yout content after me">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Select Box</label>
                                                <div class="col-sm-10">
                                                    <select name="select" class="form-control">
                                                        <option value="opt1">Select One Value Only</option>
                                                        <option value="opt2">Type 2</option>
                                                        <option value="opt3">Type 3</option>
                                                        <option value="opt4">Type 4</option>
                                                        <option value="opt5">Type 5</option>
                                                        <option value="opt6">Type 6</option>
                                                        <option value="opt7">Type 7</option>
                                                        <option value="opt8">Type 8</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Round Input</label>
                                                <div class="col-sm-10">
                                                    <input type="text"
                                                    class="form-control form-control-round"
                                                    placeholder=".form-control-round">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label">Maximum
                                                    Length</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control"
                                                        placeholder="Content must be in 6 characters"
                                                        maxlength="6">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Disable
                                                        Autocomplete</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control"
                                                            placeholder="Autocomplete Off"
                                                            autocomplete="off">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Static Text</label>
                                                        <div class="col-sm-10">
                                                            <div class="form-control-static">Hello !... This is
                                                                static text
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Color</label>
                                                        <div class="col-sm-10">
                                                            <input type="color" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Upload File</label>
                                                        <div class="col-sm-10">
                                                            <input type="file" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Textarea</label>
                                                        <div class="col-sm-10">
                                                            <textarea rows="5" cols="5" class="form-control"
                                                            placeholder="Default textarea"></textarea>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-success btn-round">Ajouter</button>
                                                </form>
                                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection