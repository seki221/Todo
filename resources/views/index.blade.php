<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>



  <link rel="stylesheet" href="{{asset('/css/index.css')}}">
  <link rel="stylesheet" href="{{asset('/public/css/reset.css')}}">


</head>


<body>
  <div class="container">
    <div class="card">
      <p class=title>Todo List</p>
      <div class="todo">
        <form action="/" method="POST" class="mb-30">
          @csrf
          <input type="text" name="content" class="input-add">
          <input class="button-add" type="submit" value="追加">
        </form>
        <table>
          <tbody>
            <tr>
              <th>作成日</th>
              <th>タスク名</th>
              <th>更新</th>
              <th>削除</th>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <form action="/{{$todos -> id }}" method="post" class="inline-block text-gray-500 font-medium" role="menuitem" tabindex="-1">
    @csrf
    @method('PUT')

    <input type="hidden" name="status" value="{{$todos->status}}">


    <button type="submit" class="bg-emerald-700 py-4 w-20 text-white md:hover:bg-emerald-800 transition-colors">完了</button>
  </form>





<!-- 

  {{-- 追記 --}}
  @if ($todos->isNotEmpty())
  <div class="max-w-7xl mx-auto mt-20">
    <div class="inline-block min-w-full py-2 align-middle">
      <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
        <table class="min-w-full divide-y divide-gray-300">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900">
                タスク</th>
              <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                <span class="sr-only">Actions</span>
              </th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200 bg-white">
            @foreach ($todo as $todo)
            <tr>
              <td class="px-3 py-4 text-sm text-gray-500">
                <div>
                  {{ $todo->name }}
                </div>
              </td>
              <td class="p-0 text-right text-sm font-medium">
                <div class="flex justify-end">

                  <div>
                    <a href="/tasks/{{ $todos->id }}/edit/" class="inline-block text-center py-4 w-20 underline underline-offset-2 text-sky-600 md:hover:bg-sky-100 transition-colors">更新</a>
                  </div>

                  <div>
                    <form action="/tasks/{{ $todos->id }}" method="post" class="inline-block text-gray-500 font-medium" role="menuitem" tabindex="-1">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="py-4 w-20 md:hover:bg-slate-200 transition-colors">削除</button>
                    </form>
                  </div>


                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  @endif
  {{-- 追記ここまで --}}


 -->

</body>

</html>