@extends('../layout')

@section('content')
    <h3 class="mx-auto" style="width:400px"> ویرایش مخاطبین</h3>
    <br>
    <a class="btn btn-sm btn-default" href="/contacts/{{$contacts->contacts_id}}" class="mx-auto" style="width:400px">برگشت</a>

    <form method="POST" action="/contacts/{{$contacts->id}}" class="mx-auto" style="width:250px">
        @csrf 
        {{method_field('PATCH')}}

            <h4> نام :</h4> <br>
        <div class="form-group">
            <textarea  required name="name" title="name" class="form-control">{{$contacts->name}}</textarea>
        </div>
        <h4>  نام خانوادگی:</h4> <br>

        <div class="form-group">
            <textarea  required name="lastname" title="lastname" class="form-control">{{$contacts->lastname}}</textarea>
        </div>
        <h4> تلفن همراه:</h4> <br>

        <div class="form-group">
            <textarea  required name="mobile" title="mobile" class="form-control">{{$contacts->mobile}}</textarea>
        </div>

        <h4> آدرس:</h4> <br>

        <div class="form-group">
            <textarea  required name="address" title="address" class="form-control">{{$contacts->address}}</textarea>
        </div>

        <h4> ایمیل:</h4> <br>

        <div class="form-group">
            <textarea  required name="email" title="email" class="form-control">{{$contacts->email}}</textarea>
        </div>
        <br><br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" >ویرایش مخاطب</button>
        </div>
</form>
 @endsection
