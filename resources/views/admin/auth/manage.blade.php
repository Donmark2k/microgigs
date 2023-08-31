<x-admin-layout>
  <x-card class="p-10">
    <header>
      <h1 class="text-3xl text-center font-bold my-6 uppercase">
        Manage Users
      </h1>
    </header>

    <table class="w-full table-auto rounded-sm">
      @php
    $counter = 1; // Initialize a counter
    @endphp
      <tbody>
        @unless($users->isEmpty())
        @foreach($users as $user)
        <tr class="border-gray-300">
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            {{ $counter++ }} 
          </td>
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <a href="/admin/auth/{{$user->id}}"> {{$user->name}} </a>
          </td>
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <a href="/admin/auth/{{$user->id}}/edit" class="text-blue-400 px-6 py-2 rounded-xl"><i
                class="fa-solid fa-pen-to-square"></i>
              Edit</a>
          </td>
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <form method="POST" action="/admin/auth/{{$user->id}}">
              @csrf
              @method('DELETE')
              <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
        @else
        <tr class="border-gray-300">
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <p class="text-center">No User Found</p>
          </td>
        </tr>
        @endunless

      </tbody>
    </table>
  </x-card>
</x-admin-layout>
