<div class="table-responsive-sm">
    <table class="table table-striped" id="settings-table">
        <thead>
            <tr>
                <th>App Name</th>
                <th>App Title</th>
                <th>Address</th>
                <th>Phone</th>
                <th>App Email</th>
                <th>App Logo</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($settings as $setting)
            <tr>
                <td>{{ $setting->app_name }}</td>
                <td>{{ $setting->app_title }}</td>
                <td>{{ $setting->address }}</td>
                <td>{{ $setting->phone }}</td>
                <td>{{ $setting->app_email }}</td>
                <td>
                    <img src="{{ asset('public//storage/'. $setting->app_logo ) }}" width="30" height="40">
                </td>
                <td>
                    {!! Form::open(['route' => ['settings.destroy', $setting->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('settings.show', [$setting->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('settings.edit', [$setting->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        <!-- {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!} -->
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>