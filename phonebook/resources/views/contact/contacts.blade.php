@extends('layout')


@section('contacts')
<h1 class="mx-auto" style="width:1000px"> مخاطبین</h1>

    @foreach ($contacts as $contact)
    <div  class="mx-auto" style="width:1000px">
        <a href="{{$contact->id}}">{{$contact->name}}  {{$contact->lastname}}   </a></div>
    @endforeach
@endsection

@section('content')
 <div class="row">
     <div class="col-md-6 col-md-offset-3">
       
        <h3 class="mx-auto" style="width:400px"> ایجاد مخاطب جدید</h3>
        <hr>

        <form method="POST" action="/contacts/{{$contact->id}}/contact" class="mx-auto" style="width:250px">
                @csrf 
                <h4> نام :</h4> <br>
            <div class="form-group">
                <textarea  required name="name" title="name" class="form-control"></textarea>
            </div>
            <h4>  نام خانوادگی:</h4> <br>

            <div class="form-group">
                <textarea  required name="lastname" title="lastname" class="form-control"></textarea>
            </div>
            <h4> تلفن همراه:</h4> <br>

            <div class="form-group">
                <textarea  required name="mobile" title="mobile" class="form-control"></textarea>
            </div>

            <h4> آدرس:</h4> <br>

            <div class="form-group">
                <textarea  required name="address" title="address" class="form-control"></textarea>
            </div>

            <h4> ایمیل:</h4> <br>

            <div class="form-group">
                <textarea  required name="email" title="email" class="form-control"></textarea>
            </div>
            <br><br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" >ذخیره کردن</button>
            </div>
        </form>

     </div>
 </div>

@endsection