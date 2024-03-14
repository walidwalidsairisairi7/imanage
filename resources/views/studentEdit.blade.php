@extends('layouts.default')
<link rel="stylesheet" href="css/add.css">


@section('content')
    
  <div class="w-full max-w-[300px] bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-bold text-gray-800 mb-4">Update a Student </h2>
    <form action="{{ route('students.update', $student->id) }}" method="POST" class="flex flex-col">
      @csrf
      @method('PUT')
      <input type="text" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" name="nom" placeholder="First Name" value="{{$student->nom}}">
      <input type="text" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" name="prenom" placeholder="Last Name"value="{{$student->prenom}}">
      <input type="email" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" name="email" placeholder="Email" value="{{$student->email}}">
      <input type="number" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" name="phone" placeholder="Phone Number" value="{{$student->phone}}">
      <input type="text" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" name="cin" placeholder="CIN" value="{{$student->cin}}">
      <input type="date" class="bg-gray-100 text-gray-800 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150" name="dateN" placeholder="Date of Birth" value="{{$student->dateN}}">
      <button type="submit" class="button">EDIT</button>
    </form>
  </div>
@endsection