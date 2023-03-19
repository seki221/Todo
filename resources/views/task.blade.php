      @section('layouts.index')
      @foreach ($todos as $todo)
      <tr>
        <form action="/edit/{{$todo->id}}" class="edit" method="POST">
          <td>{{$todo->created_at}}</id>
          <td>
            <input type="text" name="content" class="input-update" value={{$todo->content}}>
          </td>
          <td class="eb">
            <div>
              @csrf
              @method('POST')
              <button class="button_edit">更新</button>
            </div>
          </td>
        </form>
        <td>
          <div class="db">
            <form action="{{ route('destroy',['id'=>$todo->id]) }}" method="POST">
              @csrf
              @method('POST')
              <button type="submit" class="button_delete">削除</button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
      </tbody>
      </table>
      </div>