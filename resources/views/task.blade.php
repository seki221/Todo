      @foreach ($todos as $todo)
      <tr>
        <td>{{$todo->created_at}}</id>
        <td>
          <input type="text" name="task" class="input-update" value={{$todo->content}}>
        </td>
        <td class="eb">
          <div>
            <a href="/edit{{ $todo->content }}" class="edit">
              <button class="button_edit">更新</button>
            </a>
          </div>
        </td>
        <td>
          <div class="db">
            <form action="/dalete/{{ $todo->id }}" method="post" class="delete" role="menuitem" tabindex="-1">
              @csrf
              @method('DELETE')
              <button type="submit" class="button_delete">削除</button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
      </tbody>
      </table>
      </div>