@extends('layout')


@section('content')
<br><br>
<a class="btn btn-primary" href="/contacts" class="mx-auto" >برگشت</a>

 <div class="container">
     <div class="row">
       
        <h3 class="mx-auto" style="width:400px"> ایجاد مخاطب جدید</h3>
        <hr>

        <form method="POST" action="/contacts" class="mx-auto" style="width:250px">
                @csrf 

                <label>نام: </label>
                <div class="col-sm">
                <textarea  required name="name" title="name" class="form-control">{{old('name')}}</textarea>
            </div>
            <label>نام خانوادگی: </label>

            <div class="col-sm">
                <textarea  required name="lastname" title="lastname" class="form-control">{{old('lastname')}}</textarea>
            </div>
            <label>تلفن همراه:</label>

            <div class="col-sm">
                <textarea  required name="mobile" title="mobile" class="form-control">{{old('mobile')}}</textarea>
            </div>

            <label>آدرس:</label>

            <div class="col-sm">
                <textarea  required name="address" title="address" class="form-control">{{old('address')}}</textarea>
            </div>

            <label>ایمیل: </label>

            <div class="col-sm">
                <textarea  required name="email" title="email" class="form-control">{{old('email')}}</textarea>
            </div>
            <br><br>
            <div class="col-sm">
                <button type="submit" class="btn btn-primary" >ذخیره کردن</button>
            </div>
        </form>
        @if(count($errors))
            <ul>
                @foreach ($errors->all() as $error )
                  <li>{{$error}}</li>
                    
                @endforeach
         </ul>
        @endif
     </div>
 </div>

@endsection