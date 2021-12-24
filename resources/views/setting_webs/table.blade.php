<div class="table-responsive">
    <table class="table" id="settingWebs-table">
        <thead>
            <tr>
                <th>Phone</th>
        <th>Fax</th>
        <th>Email1</th>
        <th>Email2</th>
        <th>Email Contact Us</th>
        <th>Instagram</th>
        <th>Twitter</th>
        <th>Facebook</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($settingWebs as $settingWeb)
            <tr>
                       <td>{{ $settingWeb->phone }}</td>
            <td>{{ $settingWeb->fax }}</td>
            <td>{{ $settingWeb->email1 }}</td>
            <td>{{ $settingWeb->email2 }}</td>
            <td>{{ $settingWeb->email_contact_us }}</td>
            <td>{{ $settingWeb->instagram }}</td>
            <td>{{ $settingWeb->twitter }}</td>
            <td>{{ $settingWeb->facebook }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['settingWebs.destroy', $settingWeb->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('settingWebs.show', [$settingWeb->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('settingWebs.edit', [$settingWeb->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
