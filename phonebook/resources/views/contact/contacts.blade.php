@extends('layout')


@section('contacts')
<p> <a class="btn btn-primary" href="/contacts/insert" class="mx-auto"  >اضافه کردن مخاطب</a></p>


<h1 class="mx-auto" style="width:1000px"> مخاطبین</h1>

    @foreach ($contacts as $contact)
    <div class="btn-group">
        <a class="btn btn-primary" href="/contacts/{{$contact->id}}/edit"  >ویرایش مخاطب</a>
        <a class="btn btn-primary" href="/contacts/{{$contact->id}}/delete"  >حذف مخاطب</a>
      </div>
        <div class="clear"> {{$contact->name}}  {{$contact->lastname}}  </div>
    @endforeach
@endsection

