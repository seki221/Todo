      @foreach ($todos as $todo)
      <tr>
        <td>{{$todo->created_at}}</id>
        <td>
          <input type="text" name="task" class="input-update" value={{$todo->content}}>
        </td>
        <td class="eb">
          <div>
            <a href="/edit{{ content->$content }}" class="edit">
              <button class="button_edit">更新</button>
            </a>
          </div>
        </td>
        <td>
          <div class="db">
            view"{{url('delete/'.$todo->id) }}" method="POST">
            {{method_field() }}{{method_field(delete)}}"" role="menuitem" tabindex="-1">
            <button type="submit" class="button_delete">削除</button>
            <input type="text" name="task" class="input-update" value={{$todo->content}}>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
      </tbody>
      </table>
      </div>