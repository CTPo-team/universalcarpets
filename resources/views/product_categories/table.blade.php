<div class="table-responsive">
    <table class="table" id="productCategories-table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productCategories as $productCategory)
            <tr>
                <td>{{ $productCategory->title }}</td>
                <td class=" text-center">
                    {!! Form::open(['route' => ['productCategories.destroy', $productCategory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('productCategories.show', [$productCategory->id]) !!}"
                            class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                        <a href="{!! route('productCategories.edit', [$productCategory->id]) !!}"
                            class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
