<div class="table-responsive">
    <table class="table" id="products-table">
        <thead>
            <tr>
                <th>Product Category</th>
                <th>Product Brand</th>
                <th>Title</th>
                <th>Featured</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                       <td>{{ $product->productCategory->title ?? ""}}</td>
                       <td>{{ $product->productBrand->title ?? ""}}</td>
                        <td>{{ $product->title }}</td>
                        <td>{!! $product->featured == 1 ? "<div class='badge badge-success'>Yes</div>" : "<div class='badge badge-danger'>No</div>" !!}</td>
                        <td>{!! $product->status == 1 ? "<div class='badge badge-success'>Active</div>" : "<div class='badge badge-danger'>Inactive</div>" !!}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('products.show', [$product->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('products.edit', [$product->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
