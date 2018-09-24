  
<div class="row">
        <div class="col-md-8" style="margin-left:35%;">
    {!! Form::open(['action' => 'SearchController@store', 'method' => 'POST']) !!}
    <table><tr><td>
    {!! Form::text('keyword', '', ['class' => 'form-control', 'placeholder' => 'Type Keyword....']) !!}
    </td>
    <td>
        {!! Form::submit('Search', ['class' => 'btn btn-primary']) !!}
        
    </td>
    {!! Form::close() !!}
    </tr>
    </table>
        </div>
</div>