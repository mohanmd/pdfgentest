@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-wrapper ">
        <h2>Enquiry</h2>
        <form action="{{ route('moh') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text"  class="form-control"  name="name">
            </div>
            <div class="form-group">
                <label for="">Email</label
                ><input type="email"  class="form-control"  name="email">
            </div>
                
            <div class="form-group">
                <label for="">Contact</label>
                <input type="text" class="form-control"  name="contact">
            </div>
            <div class="form-group">
                <label for="">Message</label>
                <textarea class="form-control" name="message"></textarea>
            </div>

            <div class="action">
                <button class="btn btn-info" >Send a Enquiry</button>
            </div>
        </form>

        <a href="{{ route('viewreport') }}" class="btn btn-success">View Reports</a>
    </div>
</div>
@endsection
