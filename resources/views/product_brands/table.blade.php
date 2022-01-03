<div class="table-responsive">
    <table class="table" id="productBrands-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productBrands as $productBrand)
            <tr>
                       <td>{{ $productBrand->title }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['productBrands.destroy', $productBrand->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('productBrands.show', [$productBrand->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('productBrands.edit', [$productBrand->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
