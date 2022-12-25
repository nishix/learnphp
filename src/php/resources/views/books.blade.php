<x-app-layout>
  <x-slot name="header">

    <div class="flex flex-col">
      <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
          <div class="overflow-hidden">

            <!-- Bootstrapの定形コード… -->
            <div class="card-body">
              <div class="card-title">
                本のタイトル
              </div>

              <!-- バリデーションエラーの表示に使用-->
              @include('common.errors')
              <!-- バリデーションエラーの表示に使用-->

              <!-- 本登録フォーム -->
              <form action="{{ url('books') }}" method="POST" class="form-horizontal">
                @csrf
                <!-- 本のタイトル -->
                <table class="min-w-full bg-white">
                  <thead class="bg-gray-800 text-white">
                  </thead>
                  <tbody class="text-gray-700">
                    <tr>
                      <td class="w-1/3 text-left py-3 px-4">書籍名</td>
                      <td class="w-1/3 text-left py-3 px-4"><input type="text" name="item_name" class="form-control"></td>
                    </tr>
                    <tr>
                      <td class="w-1/3 text-left py-3 px-4">冊数</td>
                      <td class="w-1/3 text-left py-3 px-4"><input type="text" name="item_number" class="form-control"></td>
                    </tr>
                    <tr>
                      <td class="w-1/3 text-left py-3 px-4">金額</td>
                      <td class="w-1/3 text-left py-3 px-4"><input type="text" name="item_amount" class="form-control"></td>
                    </tr>
                    <tr>
                      <td class="w-1/3 text-left py-3 px-4">公開日</td>
                      <td class="w-1/3 text-left py-3 px-4"><input type="text" name="published" class="form-control"></td>
                    </tr>
                    <tr>
                      <td class="w-1/3 text-left py-3 px-4">画像</td>
                      <td class="w-1/3 text-left py-3 px-4"><input type="file" name="item_img"></td>
                    </tr>
                    <tr>
                      <td class="w-1/3 text-left py-3 px-4">
                        <div class="m-3">
                          <button class="shadow-lg px-2 py-1  bg-blue-400 text-lg text-white font-semibold rounded  hover:bg-blue-500 hover:shadow-sm hover:translate-y-0.5 transform transition ">
                            Save
                          </button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>

                <!-- 本 登録ボタン -->

              </form>

              <!-- 現在の本 -->
              @if (count($books) > 0)
              <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                  <tr>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">書籍名</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">冊数</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">金額</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">公開日</td>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">更新</td>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">書籍の削除</td>
                  </tr>
                  @foreach ($books as $book)
                </thead>
                <tbody class="text-gray-700">
                  <tr>
                    <td class="w-1/3 text-left py-3 px-4">{{ $book->item_name }}</td>
                    <td class="w-1/3 text-left py-3 px-4">{{ $book->item_number }}</td>
                    <td class="text-left py-3 px-4">{{ $book->item_amount }}</td>
                    <td class="text-left py-3 px-4">{{ $book->published }}</td>

                    <td>
                      <form action="{{ url('booksedit/'.$book->id) }}" method="POST">
                        @csrf
                        <button type="submit" <button class="px-2 py-1 bg-slate-300 text-white font-semibold rounded hover:bg-red-500">
                          更新
                        </button>
                      </form>
                    </td>
                    <!-- 本: 削除ボタン -->
                    <td class="text-left py-3 px-4">
                      <form action="{{ url('book/'.$book->id) }}" method="POST">
                        @csrf
                        <!-- CSRFからの保護 -->
                        @method('DELETE')
                        <!-- 擬似フォームメソッド -->
                        <div class="m-3">
                          <button type="submit" <button class="px-2 py-1 bg-slate-300 text-white font-semibold rounded hover:bg-red-500">
                            Delete
                          </button>
                        </div>
                      </form>
                    </td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      @endif
</x-app-layout>