@extends('admin.layouts.layout')
@section('title')Home @parent @endsection

@section('content')
<section class="wrapper-main-admin-page">
    <div class="container">
        <div class="row">
            <div class="col-12 col-title-page">
                <h1 class="title-page">Import the posts from another site</h1>
            </div>
            <div class="col-12 col-btn-import">
                @csrf
                <button type="button" class="btn-import-posts">Import</button>
            </div>
            <div class="col-12 col-import-table">
                <table id="import-posts-table">
                    <thead>
                        <tr>
                            <th class="th-title">Title</th>
                            <th class="th-description">Description</th>
                            <th class="th-date-publication">Date publication</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td colspan="3">No data</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
