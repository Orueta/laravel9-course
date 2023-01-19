@extends('layouts.plantilla')

@section('title', 'Usuarios')

@section('content')
    <!-- component -->
<div class="flex flex-col">
    <!-- component -->
<a href="{{route('users.pdf')}}" class="block uppercase mx-auto shadow bg-indigo-800 hover:bg-indigo-700 focus:shadow-outline focus:outline-none text-white text-xs py-3 px-10 rounded">Generar PDF</a>

    <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full">
            <thead class="bg-white border-b">
              <tr>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  ID
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Nombre
                </th>
                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                  Email
                </th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
              <tr class="bg-gray-100 border-b">
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$user->id}}</td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$user->name}}</td>
                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$user->email}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
