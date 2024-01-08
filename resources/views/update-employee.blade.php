@extends('layout.app')

@section('content')
<div class="text-center mt-10">
  <h1 class="text-3xl">CRUD</h1>
  <p>by @Monkey D. Sulo</p>
  <form action="{{ route('saveUpdatedEmployee') }}" method="POST" class="pt-10">
    @csrf
    <div class="flex flex-col w-80 m-auto">
    <label for="firstname" class="text-left">Firstname</label>
      <input type="text" id="firstname" name="updatefirstname" value="{{ $employee->firstname }}" placeholder="Firstname" class="p-3 border-solid border-2 border-gray-200 rounded" autocomplete="off">
    <label for="lastname" class="text-left">Lastname</label>
      <input type="text" id="lastname" name="updatelastname" value="{{ $employee->lastname }}" placeholder="Lastname" class="p-3 border-solid border-2 border-gray-200 rounded" autocomplete="off">
     <label for="email" class="text-left">Email</label>
      <input type="email" id="email" name="updateemail" value="{{ $employee->email }}" placeholder="Email" class="p-3 border-solid border-2 border-gray-200 rounded" autocomplete="off">
      <input type="hidden" name="id" value="{{ $employee->id }}">
      <button type="submit" class="p-2  mt-3 bg-cyan-600 text-white rounded hover:bg-cyan-800 font-bold">Update</button>
    </div>
  </form>
</div>
@endsection