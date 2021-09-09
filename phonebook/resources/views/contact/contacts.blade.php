@extends('layout')

{{-- <a class="btn btn-sm btn-default" href="/contacts/{{$contact->id}}/edit" class="mx-auto" style="width:400px">ویرایش مخاطب</a> --}}

@section('contacts')
<p> <a class="btn btn-primary" href="/contacts/insert" class="mx-auto"  >اضافه کردن مخاطب</a></p>


<h1 class="mx-auto" style="width:1000px"> مخاطبین</h1>

    @foreach ($contacts as $contact)
  <div id="side-bar">  <a class="btn btn-primary" href="/contacts/{{$contact->id}}/edit" class="mx-auto" >ویرایش مخاطب</a></div>

    <div class="clear">
        {{$contact->name}}  {{$contact->lastname}}  </div>
    @endforeach
@endsection

