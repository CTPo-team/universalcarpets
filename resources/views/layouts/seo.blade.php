<div class="form-group col-sm-12">
    <div class="card">
        <div class="card-header">
            <div class="section-title">SEO
                <p class="section-lead small">
                If SEO keywords and descriptions are not filled in by default they will be filled in based on the title and description
                </p>
            </div>
            
        </div>
        <div class="card-body">
            <!-- Seo Desc Field -->
            <div class="form-group col-sm-12 col-lg-12">
                {!! Form::label('seo_desc', 'SEO Description:') !!}
                {!! Form::textarea('seo_desc', null, ['class' => 'form-control']) !!}
            </div>

            <!-- Seo Keyword Field -->
            <div class="form-group col-sm-12 col-lg-12">
                {!! Form::label('seo_keyword', 'SEO Keyword:') !!}
                {!! Form::text('seo_keyword', null, ['class' => 'form-control', 'placeholder' => "title,TITLE,the title,etc.."]) !!}
            </div>
        </div>
    </div>
</div>
