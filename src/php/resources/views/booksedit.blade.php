<x-app-layout>
  <x-slot name="header">

    <div class="flex flex-col">
      <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
          <div class="overflow-hidden">

            <div class="row">
              <div class="col-md-12">
                @include('common.errors')
                <form action="{{ url('books/update') }}" method="POST">

                  <table class="min-w-full bg-white">
                    <thead class="bg-gray-800 text-white">
                    </thead>
                    <tbody class="text-gray-700">
                      <tr>
                        <td class="w-1/3 text-left py-3 px-4">書籍名</td>
                        <td class="w-1/3 text-left py-3 px-4"><input type="text" name="item_name" class="form-control" value="{{$book->item_name}}"></td>
                      </tr>
                      <tr>
                        <td class="w-1/3 text-left py-3 px-4">冊数</td>
                        <td class="w-1/3 text-left py-3 px-4"><input type="text" name="item_number" class="form-control" value="{{$book->item_number}}"></td>
                      </tr>
                      <tr>
                        <td class="w-1/3 text-left py-3 px-4">金額</td>
                        <td class="w-1/3 text-left py-3 px-4"><input type="text" name="item_amount" class="form-control" value="{{$book->item_amount}}"></td>
                      </tr>
                      <tr>
                        <td class="w-1/3 text-left py-3 px-4">公開日</td>
                        <td class="w-1/3 text-left py-3 px-4"><input type="text" name="published" class="form-control" value="{{$book->published}}"></td>
                      </tr>
                      <tr>
                        <td class="w-1/3 text-left py-3 px-4">
                          <div class="m-3">
                            <button class="shadow-lg px-2 py-1  bg-blue-400 text-lg text-white font-semibold rounded  hover:bg-blue-500 hover:shadow-sm hover:translate-y-0.5 transform transition">
                              Save
                            </button>
                            <a class="btn btn-link pull-right" href="{{ url('/') }}">
                              Cancel
                            </a>
                            <input type="hidden" name="id" value="{{$book->id}}">
                            @csrf
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</x-app-layout>z