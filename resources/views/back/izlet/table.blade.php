@foreach ($posts as $post)
    <tr {!! !$post->seen && session('statut') == 'admin'? 'class=""' : '' !!}>
        <td class="text-primary"><strong>{{ $post->title }}</strong></td>
        <td>{{ $post->created_at }}</td> 
        <td>{!! Form::checkbox('active', $post->id, $post->active) !!}</td>
        @if(session('statut') == 'admin')
            <td>{{ $post->username }}</td>
            <td>{!! Form::checkbox('seen', $post->id, $post->seen) !!}</td>
        @endif
        <td>{!! link_to_route('izlet.edit', trans('back/blog.edit'), [$post->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
        <td>
            {!! Form::open(['method' => 'DELETE', 'route' => ['izlet.destroy', $post->id]]) !!}
                {!! Form::destroyBootstrap(trans('back/blog.destroy'), trans('back/blog.destroy-warning')) !!}
            {!! Form::close() !!}
        </td>
    </tr>
@endforeach