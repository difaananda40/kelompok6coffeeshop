<x-admin-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Users Approval') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <table class="table-auto w-full">
                    <thead class="bg-gray-100">
                      <tr>
                        <th class="py-3 px-5 text-left">Name</th>
                        <th class="py-3 px-5 text-left">Email</th>
                        <th class="py-3 px-5">Option</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($users as $user)
                        <tr>
                          <td class="py-3 px-5 text-left">{{ $user->name }}</td>
                          <td class="py-3 px-5 text-left">{{ $user->email }}</td>
                          <td class="py-3 px-5 text-center">
                              <form method="POST" action="{{ route('admin.approve', $user->id) }}">
                                  @csrf
                                  @method('put')

                                  <button type="submit" class="underline">Approve</a>
                              </form>
                          </td>
                        </tr>
                      @empty
                        <tr>
                          <td colspan="3" class="py-3 px-5 text-center text-gray-500">No data for now.</td>
                        </tr>
                      @endforelse
                    </tbody>
                </table>
          </div>
      </div>
  </div>
</x-admin-layout>
